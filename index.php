<?php
require_once __DIR__.'/api/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

/* Afficher la homepage */
$app->get('/', function() use ($app) {
    return $app->redirect('public/');
});

$app->run();