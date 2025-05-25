<?php

namespace App\Providers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
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
public function boot()
{
    if (app()->environment('production')) {
        URL::forceScheme('https');
    }

     $storageLink = public_path('storage');
    if (!File::exists($storageLink)) {
        File::link(storage_path('app/public'), $storageLink);
    }
}
}
