<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'dbname' => 'project_event',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql'
    ),
));

$app->get('users/', function() use ($app) {
    $sql = "SELECT * FROM membre";
    $post = $app['db']->fetchAll($sql);
    return json_encode($post);
});

$app->get('users/{id}', function ($id) use ($app) {
    $sql = "SELECT * FROM membre WHERE id = ?";
    $post = $app['db']->fetchAssoc($sql, array((int) $id));
    if ($post == false) {
        $app->abort(404, "id {$id} does not exist in database.");
    }
    return json_encode($post);
});

$app->get('users/etat/{etat}', function ($etat) use ($app) {
    $sql = "SELECT * FROM membre WHERE id_etat_inscription = ?";
    $post = $app['db']->fetchAll($sql, array((int) $etat));

    if (empty($post)) {
        $app->abort(404, "State : {$etat} does not exist in database. Try with 1,2 or 3");
    }
    return json_encode($post);
});

$app->post('/feedback', function (Request $request) {
   /* $message = $request->get('message');
    mail('feedback@yoursite.com', '[YourSite] Feedback', $message);

    return new Response('Modification effectuée!', 201);*/
});

$app->put('users/{id}', function ($id) {
    // ...
});

$app->delete('users/{id}', function ($id) {
    // ...
});


$app->run();