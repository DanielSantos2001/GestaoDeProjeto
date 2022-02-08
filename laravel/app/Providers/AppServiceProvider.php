<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Mail\MailSender;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mylibary', function($app){
            return new MailSender;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
