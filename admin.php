<?php
require_once __DIR__.'/api/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

/* Afficher la page admin */
$app->get('/admin', function() use ($app) {
    return $app->redirect('public/admin.php');
});

$app->run();