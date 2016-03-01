<?php

require "vendor/autoload.php";

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return '<h1>Hello Sascha!</h1><pre>' .
           'Running build ' . getenv('OPENSHIFT_BUILD_NAME') . '<br>' .
           'on Container ' . getenv('HOSTNAME') . '<br>' .
           'git rev ' . getenv('OPENSHIFT_BUILD_COMMIT') .
           '</pre>';
});

$app->get('/env', function() use($app) {
    phpinfo(INFO_ENVIRONMENT);
    die;
});


$app->run();