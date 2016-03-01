<?php

require "vendor/autoload.php";

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return '<h1>Hello OpenShift!</h1><pre>' .
           'Running image ' . getenv('OPENSHIFT_BUILD_NAME') . '<br>' .
           'on Container ' . getenv('HOSTNAME') . '<br>' .
           'git repo ' . getenv('OPENSHIFT_BUILD_SOURCE') .
           '</pre>';
});

$app->get('/env', function() use($app) {
    phpinfo(INFO_ENVIRONMENT);
    die;
});



$app->run();