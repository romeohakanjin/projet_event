<?php
    use Symfony\Component\Debug\ErrorHandler;
    use Symfony\Component\Debug\ExceptionHandler;

    // Register global error and exception handlers
    ErrorHandler::register();
    ExceptionHandler::register();

    $app->register(new Silex\Provider\DoctrineServiceProvider());
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views',
    ));
    $app->register(new Silex\Provider\AssetServiceProvider(), array(
        'assets.version' => 'v1'
    ));

    $app->register(new Silex\Provider\FormServiceProvider());
    $app->register(new Silex\Provider\LocaleServiceProvider());
    $app->register(new Silex\Provider\TranslationServiceProvider());

    $app['dao.membre'] = function ($app) {
        return new api\DAO\MembreDAO($app['db']);
    };