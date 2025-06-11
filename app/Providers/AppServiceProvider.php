<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        // Forcer HTTPS en production (Heroku, etc.)
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Optionnel : réglage Vite
        Vite::prefetch(concurrency: 3);
    }
}
