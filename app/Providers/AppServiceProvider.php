<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\SeoSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        View::composer('*', function ($view) {
            $settings = Setting::first();
            $seo      = SeoSetting::getCached();

            $view->with([
                'webName' => $settings->site_name ?? 'AGO Care Foundation',
                'infos'   => $settings,
                'seo'     => $seo,
            ]);
        });
    }
}
