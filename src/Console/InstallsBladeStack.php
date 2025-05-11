<?php

namespace Fitenson\Dream\Console;

use Illuminate\Filesystem\Filesystem;


trait InstallsBladeStack
{
    protected function installBladeStack()
    {
        //  Setup components directory in app/Path
        $appComponentsDir = app_path('View/Components');
        if (!(new Filesystem)->isDirectory($appComponentsDir)) {
            (new Filesystem)->makeDirectory($appComponentsDir, 0755, true);
        }
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/default/app/Components', $appComponentsDir);


        //  Setup component views directory in resources/views
        $resourceViewsDir = resource_path('views/components');
        if (!(new Filesystem)->isDirectory($resourceViewsDir)) {
            (new Filesystem)->makeDirectory($resourceViewsDir, 0755, true);
        }

        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/default/resources/views/components', $resourceViewsDir);
    }
}
