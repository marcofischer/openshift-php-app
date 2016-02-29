<?php

require "vendor/autoload.php";

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return 'Hello OpenShift! Running imge ' . getenv('OPENSHIFT_BUILD_NAME');
});

$app->get('/env', function() use($app) {
    phpinfo(INFO_ENVIRONMENT);
    die;
});



$app->run();