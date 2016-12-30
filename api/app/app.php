<?php
    use Symfony\Component\Debug\ErrorHandler;
    use Symfony\Component\Debug\ExceptionHandler;
    use Symfony\Component\HttpFoundation\Request;

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

    //Register JSON data decoder for JSON requests
    $app->before(function (Request $request) {
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        }
    });