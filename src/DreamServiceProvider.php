<?php

namespace Fitenson\Dream;

use Illuminate\Support\ServiceProvider;
use Fitenson\Dream\Console\InstallsCommand;
use Illuminate\Support\Facades\Blade;

use App\View\Components\Dream\Button;
use App\View\Components\Dream\Label;
use App\View\Components\Dream\Text;
use App\View\Components\Dream\Title;
use App\View\Components\Dream\Card;
use App\View\Components\Dream\Tabs\TabPanel;
use App\View\Components\Dream\Tabs\TabList;
use App\View\Components\Dream\Tabs\TabButton;
use App\View\Components\Dream\Tabs\TabSection;


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
        Blade::component('dream-label', Label::class);
        Blade::component('dream-text', Text::class);
        Blade::component('dream-title', Title::class);
        Blade::component('dream-card', Card::class);
        Blade::component('dream-tab-panel', TabPanel::class);
        Blade::component('dream-tab-list', TabList::class);
        Blade::component('dream-tab-button', TabButton::class);
        Blade::component('dream-tab-section', TabSection::class);
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
