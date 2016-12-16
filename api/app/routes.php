<?php
    require_once dirname(__DIR__).'/vendor/autoload.php';

    $app = new Silex\Application();
    $app['debug'] = true;

    require dirname(__DIR__).'/src/membre.php';

    // Home page
    $app->get('/', function () {
        ob_start();             // start buffering HTML output

        require dirname(__DIR__).'/views/index.php';

        $view = ob_get_clean(); // assign HTML output to $view

        return $view;

    });