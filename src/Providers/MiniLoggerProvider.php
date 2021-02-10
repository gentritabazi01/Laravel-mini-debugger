<?php

namespace Gentritabazi01\MiniDebugger\Providers;

use Illuminate\Support\ServiceProvider;

class MiniDebuggerProvider extends ServiceProvider
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
