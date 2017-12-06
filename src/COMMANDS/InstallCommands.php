<?php

namespace COMMANDS;

use Illuminate\Console\Command;
class AuthCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'demo:auth';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold basic login and registration views with confirmation alerts';
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
        $this->info('Authentication scaffolding for confirmation generated successfully.');
    }
    /**
     * Export the authentication views.
     *
     * @return void
     */
}