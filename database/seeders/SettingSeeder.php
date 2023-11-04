<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\SettingsController;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'title'             =>  'Ecommerce-app',
            'sitename'          =>  'ecommerce',
            'email'             =>  'support@domain.com',
            'phone'             =>  '+880 1741010994',
            'logo'              =>  'default.png',
            'icon'              =>  'default.png',
            'facebook'          =>  'www.facebook.com/',
            'twitter'           =>  'twitter.com',
            'linkedin'          =>  'www.linkedin.com/',
            'instagram'         =>  'instagram.com/',
            'youtube'           =>  'www.youtube.com/',
            'pinterest'         =>  'www.pinterest.com/',
            'currency'          =>  'USD',
            'currency_symbol'   =>  '$',
            'country_code'      =>  'bd',
            'address'           =>  'khulna',
            'status'           =>   '1',
        ]);

    }
}
