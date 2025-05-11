<?php

namespace Fitenson\Dream\Console;

use Illuminate\Filesystem\Filesystem;


trait InstallsBladeStack
{
    protected function installBladeStack()
    {
        //  Setup components directory in app/Path
        if (!(new Filesystem)->isDirectory(app_path('View/Components'))) {
            (new Filesystem)->makeDirectory(app_path('View/Components'), 0755, true);
        }
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/default/app/Components', app_path('View/Components'));


        //  Setup component views directory in resources/views
        if (!(new Filesystem)->isDirectory(resource_path('views/components'))) {
            (new Filesystem)->makeDirectory(resource_path('views/components'), 0755, true);
        }

        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/default/resources/views/components', resource_path('views/components'));

        //  Setup themes directory in resources/views
        if (!(new Filesystem)->isDirectory(resource_path('views/themes'))) {
            (new Filesystem)->makeDirectory(resource_path('views/themes'), 0755, true);
        }

        (new Filesystem)->copy(__DIR__ . '/../../stubs/config/dream.php', config_path('dream.php'));
    }
}
