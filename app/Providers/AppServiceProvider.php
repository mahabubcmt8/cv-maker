<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        // $settings = Setting::first();
        // config(
        //     [
        //         'site.title' => $settings->title ?? '',
        //         'site.sitename' => $settings->sitename ?? '',
        //         'site.email' => $settings->email ?? '',
        //         'site.phone' => $settings->phone ?? '',
        //         'site.facebook' => $settings->facebook ?? '',
        //         'site.twitter' => $settings->twitter ?? '',
        //         'site.linkedin' => $settings->linkedin ?? '',
        //         'site.instagram' => $settings->instagram ?? '',
        //         'site.youtube' => $settings->youtube ?? '',
        //         'site.pinterest' => $settings->pinterest ?? '',
        //         'site.currency' => $settings->currency ?? '',
        //         'site.currency_symbol' => $settings->currency_symbol ?? '',
        //         'site.country_code' => $settings->country_code ?? '',
        //         'site.address' => $settings->address ?? '',
        //         'site.logo' => $settings->logo ? asset('storage/settings/' . $settings->logo) : asset('logo.png'),
        //         'site.icon' => $settings->icon ? asset('storage/settings/' . $settings->icon) : asset('logo.png'),
        //     ]
        // );
    }
}
