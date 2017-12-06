<?php

namespace CDN;

    use Illuminate\Support\ServiceProvider;
    use League\Flysystem\Filesystem;
    use League\Flysystem\Sftp\SftpAdapter;
    
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
                return new Filesystem(new SftpAdapter($config));
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
        }
    }
    