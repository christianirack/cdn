<?php

    namespace CDN;

    //use Illuminate\Support\Facades\Config;

    use Illuminate\Support\ServiceProvider;
    use League\Flysystem\Filesystem;
    //use League\Flysystem\Sftp\SftpAdapter;
    use CDN\SftpCustomAdapter;
    use CDN\InstallCommands;
    
    class CDNServiceProvider extends ServiceProvider{
        /**
         * Perform post-registration booting of services.
         *
         * @return void
         */
        public function boot()
        {
            
           // die(base_path());
          
            $filesystem = $this->app->make('filesystem');
    
            $filesystem->extend('sftp', function($app, $config) {
                return new Filesystem(new SftpCustomAdapter($config));
            });

            
    
        }
        /**
         * Register bindings in the container.
         *
         * @return void
         */
        public function register()
        {
            //
            if ($this->app->runningInConsole()) {
                $this->registerConsoleCommands();
            }
            // env('APP_STORAGE')
            /*
            $this->app->bind('path.storage', function () {
                
                        return 'your/path/here';
                
            });
            */
            /*
            $this->app->bind('path', function() {
                return '2';
            });
            $this->app->bind('path.base', function() {
                return '3';
            });
            $this->app->bind('path.public', function() {
                return '4';
            });
            $this->app->bind('path.storage', function() {
                return '5';
            });
            $this->app->bind('path.resources', function() {
                return '6';
            });


            $this->app->bind('voyager.assets_path', function() {
                return '6';
            });
            $this->app->bind('voyager_assets', function() {
                return '7';
            });
            */
            //$this->app->useStoragePath(config('what_ever_you_want'));



            
  
            //$this->app->useStoragePath( 'your/path/here2' );
        }

        private function registerConsoleCommands()
        {
            $this->commands(InstallCommands::class);
        }
    }
    