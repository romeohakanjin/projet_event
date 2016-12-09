<?php

use Symfony\Component\HttpFoundation\Request;
use SilexApi\User;

// Get all users
$app->get('/api/users', function () use ($app) {

    $users = $app['dao.user']->findAll();
    $responseData = array();
    foreach ($users as $user) {
        $responseData[] = array(
            'id' => $user->getId(),
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastName()
        );
    }

    return $app->json($responseData);
})->bind('api_users');

// Get on user
$app->get('/api/user/{id}', function ($id, Request $request) use ($app) {
    $user = $app['dao.user']->find($id);
    if (!isset($user)) {
        $app->abort(404, 'User not exist');
    }

    $responseData = array(
        'id' => $user->getId(),
        'firstname' => $user->getFirstname(),
        'lastname' => $user->getFirstname()
    );

    return $app->json($responseData);
})->bind('api_user');

// Create user
$app->post('/api/user/create', function (Request $request) use ($app) {
    if (!$request->request->has('firstname')) {
        return $app->json('Missing parameter: firstname', 400);
    }
    if (!$request->request->has('lastname')) {
        return $app->json('Missing parameter: lastname', 400);
    }

    $user = new User();
    $user->setFirstname($request->request->get('firstname'));
    $user->setLastname($request->request->get('lastname'));
    $app['dao.user']->save($user);

    $responseData = array(
        'id' => $user->getId(),
        'firstname' => $user->getFirstname(),
        'lastname' => $user->getLastname()
    );

    return $app->json($responseData, 201);
})->bind('api_user_add');

// Delete user
$app->delete('/api/user/delete/{id}', function ($id, Request $request) use ($app) {
    $app['dao.user']->delete($id);

    return $app->json('No content', 204);
})->bind('api_user_delete');

// Update user
$app->put('/api/user/update/{id}', function ($id, Request $request) use ($app) {
    $user = $app['dao.user']->find($id);

    $user->setFirstname($request->request->get('firstname'));
    $user->setlastname($request->request->get('lastname'));
    $app['dao.user']->save($user);

    $responseData = array(
        'id' => $user->getId(),
        'firstname' => $user->getFirstname(),
        'lastname' => $user->getLastname()
    );

    return $app->json($responseData, 202);
})->bind('api_user_update');