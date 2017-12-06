<?php

namespace Install;

use Illuminate\Support\Facades\Config;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class ScriptInstall
{
    public static function postUpdate(Event $event)
    {
        //$composer = $event->getComposer();
        // do stuff
    }

    public static function postAutoloadDump(Event $event)
    {
        echo 'OK';
        /*
        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        require $vendorDir . '/autoload.php';

        some_function_from_an_autoloaded_file();
        */
    }

    public static function postPackageInstall(PackageEvent $event)
    {
        echo 'OK';
        copy(__dir__."/TEMPLATES/hi.php", base_path()."/hi".time().".php");
        //$installedPackage = $event->getOperation()->getPackage();
        // do stuff
    }

    public static function warmCache(Event $event)
    {
        // make cache toasty
    }
}