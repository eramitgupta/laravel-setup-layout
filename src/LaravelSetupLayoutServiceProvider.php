<?php

namespace LaravelSetupLayout;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use LaravelSetupLayout\Components\AppLayout;
use LaravelSetupLayout\Components\WebAppLayout;

class LaravelSetupLayoutServiceProvider extends ServiceProvider
{

    /*
    * Author: eramitgupta
    * Email: info.eramitgupta@gmail.com
    * 
    * Copyright (c) 2024 by eramitgupta.
    * All rights reserved.
    *
    * You cannot steal and copy my code, I have the copyright, I do not give authority.
    */
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadViewsFrom(__DIR__ . '/Views', 'setup-layout');
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        require __DIR__ . '/MainFunction.php';
        Blade::component('app-layout', AppLayout::class);
        Blade::component('web-app-layout', WebAppLayout::class);
        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/setup-layout'),
        ], 'LaravelSetupLayout');
        $this->publishes([
            __DIR__ . '/Config/layout-assets.php' => base_path('config/layout-assets.php'),
        ], 'LaravelSetupLayout');
    }
}
