<?php

namespace GentritAbazi\MiniLogger\Providers;

use Illuminate\Support\ServiceProvider;

class MiniDebuggerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/mini-logger.php',
            'mini-debugger'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (function_exists('config_path')) {
            $this->publishes([
                __DIR__.'/../Config/mini-logger.php' => config_path('mini-logger.php'),
            ], 'config');
        }
    }
}
