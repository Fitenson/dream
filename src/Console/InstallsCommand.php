<?php

namespace Fitenson\Dream\Console;

use Illuminate\Console\Command;

class InstallsCommand extends Command
{
    use InstallsBladeStack;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dream:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install prebuilt Dream UI components';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Installing Dream UI components...');
        $this->installBladeStack();
        $this->info('Dream UI components installed successfully.');
    }
}
