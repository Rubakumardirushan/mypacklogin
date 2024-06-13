<?php

namespace Dirushan\Loginform;

use Illuminate\Support\ServiceProvider;

class MyloginServiceProvidver extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'loginform');
       
    }
}
