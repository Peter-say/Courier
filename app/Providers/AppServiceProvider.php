<?php

namespace App\Providers;

use App\Helpers\PageMetaData;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        view()->composer('*', function ($view) {
            $metaData = null;
            if (Route::currentRouteName() === 'web.contact-us') {
                $metaData = (new PageMetaData())->contactUs();
            } elseif (Route::currentRouteName() === 'web.about-us') {
                $metaData = (new PageMetaData())->aboutUs();
            } elseif (Route::currentRouteName() === 'web.tracking.') {
                $metaData = (new PageMetaData())->trackOrderPage();
            } elseif (Route::currentRouteName() === 'web.tracking.track-shipment') {
                $metaData = (new PageMetaData())->trackOrderPage();
            } elseif (Route::currentRouteName() === 'web.service.') {
                $metaData = (new PageMetaData())->services();
            } elseif (request()->url() === url('/')) {
                $metaData = (new PageMetaData())->welcome();
            }
            $view->with([
                'metaData' => $metaData,
                'web_assets' => url('/') . env('RESOURCE_URL') . '/web',
                'dashboard_assets' => url('/') . env('RESOURCE_URL') . '/dashboard',
            ]);
        });
         Schema::defaultStringLength(191);
    }
}
