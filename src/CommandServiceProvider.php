<?php

namespace Lwj\Command;

use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './routes/web.php');
        $this->loadViewsFrom(__DIR__ . './resources/views/', 'command');
        $this->publishes([
            __DIR__ . '/../config/courier.php' => config_path('courier.php'),
        ]);
    }
}
