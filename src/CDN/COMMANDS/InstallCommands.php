<?php

namespace CDN\COMMANDS;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class InstallCommands extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cdn:install';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install a new directory for this project.';
    /**
     * The views that need to be exported.
     *
     * @var array
     */
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        //$this->exportViews();
        copy(__dir__."/../TEMPLATES/Envoy.blade.php", base_path()."/Envoy.blade.php");
        chmod(base_path()."/Envoy.blade.php", 0777);
        $this->info('Creating the remote directory...');
        exec('envoy run cdn');
        $this->info('Done.');
        


    }
    /**
     * Export the authentication views.
     *
     * @return void
     */
}