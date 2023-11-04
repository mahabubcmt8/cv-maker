<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileManager;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function viewProfile($id){
        $adminId = Auth::guard('admin')->user()->id;
        $admin = Admin::find($adminId);
        return view('admin.profile.index',compact('admin'));
    }

    public function editProfile($id){
        $adminId = Auth::guard('admin')->user()->id;
        $admin = Admin::find($adminId);
        return view('admin.profile.edit',compact('admin'));
    }

    public function updateProfile(Request $request, $id)
    {
        $this->validate($request,[
            'name'     =>  'required|string|min:1',
            'username' =>  'required|string|min:1',
            'email'    =>  'required|email|min:1',
            'phone'    =>  'required|min:1',
            'address'  =>  'nullable',
            'picture'  =>  'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         $admin = Admin::findOrFail($id);
         $admin->update($request->except('_token', '_method', 'picture'));

         $file = new FileManager();
         if ($request->picture) {
             Storage::disk('admin')->delete($admin->picture);
             $photo = $request->picture;
             $file->folder('admin')->prefix('admin')
                 ->upload($photo) ?
                 $admin->picture = $file->getName() : null;
         }

        Alert::toast('Site settings has been updated successfully!', 'success');
        $admin->save();
        return redirect()->route('admin.viewProfile',auth()->guard('admin')->user()->id);
    }

    public function changePass($id){
        $adminId = Auth::guard('admin')->user()->id;
        $admin = Admin::find($adminId);
        return view('admin.profile.password',compact('admin'));
    }

    public function updatePass(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|same:confirm_password',
        ]);

        $user = Admin::findOrFail(Auth::guard('admin')->user()->id);

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Incorrect current password']);
        }

        $user->password = Hash::make($request->new_password);
        Alert::toast('Password change successfully', 'success');
        $user->save();

        return redirect()->route('admin.viewProfile',auth()->guard('admin')->user()->id);
    }
}
