<?php


include "./vendor/autoload.php";
use CDN\CDNServiceProvider;
$example = new CDNServiceProvider;
echo $example->index();