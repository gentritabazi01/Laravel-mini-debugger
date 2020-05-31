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
            dirname(__DIR__).'/Config/mini-debugger.php',
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
                __DIR__.'/../Config/mini-debugger.php' => config_path('mini-debugger.php'),
            ], 'config');
        }
    }
}
