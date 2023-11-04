<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\FileManager;
use RealRashid\SweetAlert\Facades\Alert;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::latest()->first();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'title'             =>  'nullable|string',
            'sitename'          =>  'nullable|string',
            'email'             =>  'nullable|email',
            'phone'             =>  'nullable|numeric',
            'logo'              =>  'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon'              =>  'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook'          =>  'nullable|string',
            'twitter'           =>  'nullable|string',
            'linkedin'          =>  'nullable|string',
            'instagram'         =>  'nullable|string',
            'youtube'           =>  'nullable|string',
            'pinterest'         =>  'nullable|string',
            'currency'          =>  'nullable|string',
            'currency_symbol'   =>  'nullable|string',
            'country_code'      =>  'nullable|string',
            'address'           =>  'nullable|string',
            'status'           =>   'nullable|numeric',
         ]);

         $setting = Setting::findOrFail($id);
         $setting->update($request->except('_token', '_method', 'logo', 'icon'));

         $file = new FileManager();
        if ($request->logo) {
            Storage::disk('settings')->delete($setting->logo);
            $photo = $request->logo;
            $file->folder('settings')->prefix('settings')
                ->upload($photo) ?
                $setting->logo = $file->getName() : null;
        }
        if ($request->icon) {
            Storage::disk('settings')->delete($setting->icon);
            $photo = $request->icon;
            $file->folder('settings')->prefix('settings')
                ->upload($photo) ?
                $setting->icon = $file->getName() : null;
        }
        Alert::toast('Site settings has been updated successfully!', 'success');
        $setting->save();
        return redirect()->back();
    }
}
