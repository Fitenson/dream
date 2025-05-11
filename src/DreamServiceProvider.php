<?php

namespace Fitenson\Dream;

use Illuminate\Support\ServiceProvider;
use Fitenson\Dream\Console\InstallsCommand;
use Illuminate\Support\Facades\Blade;

use Fitenson\Dream\View\Components\Button;


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

        Blade::component('dream-button', Button::class);
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
