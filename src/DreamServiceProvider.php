<?php

namespace Fitenson\Dream;

use Illuminate\Support\ServiceProvider;
use Fitenson\Dream\Console\InstallsCommand;


class DreamServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->commands([
                InstallsCommand::class
            ]);
        }
    }



    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // You can bind your services or other resources here, if necessary.
    }
}
