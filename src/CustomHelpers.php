<?php

function CDN($file)
{
    return env('CDN_BASE').'/'.env('CDN_BASE_SUBDIRECTORY').'/'.$file;
}

?>