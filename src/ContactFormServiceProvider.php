<?php

// MyVendor\contactform\src\ContactFormServiceProvider.php
namespace Murprakoso\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * boot
     */
    public function boot()
    {
        // routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        // views
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'contactform');
        // migrations
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }

    /**
     * register
     */
    public function register()
    {
        //
    }
}
