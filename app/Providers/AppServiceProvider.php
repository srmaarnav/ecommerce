<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Config;
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
        //
        if (Filament::getCurrentPanel()) {
            Config::set('livewire.inject_assets', true);
        }
    }
}
