<?php
    use Symfony\Component\HttpFoundation\Request;
    use api\Domain\Membre;
    use api\Form\Type\MembreType;

    // Home page
    $app->get('/', function () use ($app) {
        $membres = $app['dao.membre']->findAll();

        return $app['twig']->render('admin.html.twig', array('membres' => $membres));
    })->bind('home');

    /* Afficher un utilisateur en fonction de son id */
    $app->get('users/{id}', function ($id) use ($app) {
        $membres = $app['dao.membre']->find($id);

        if (empty($membres)) {
            return $app->abort(404, "id {$id} does not exist in database.");
        }
        /*return $app['twig']->render('membre.html.twig', array('membres' => $membres));*/
         return json_encode($membres);
    })->bind('membre');

    // Membre create
    $app->match('/users/create/', function (Request $request) use ($app) {
        $membreC = new Membre();
        $MembreFormView = null;

        $membreForm = $app['form.factory']->create(MembreType::class, $membreC);
        $membreForm->handleRequest($request);

        if ($membreForm->isSubmitted() && $membreForm->isValid()) {
            $data = $membreForm->getData();

            $ok = $app['dao.membre']->save($data, 'insert');
            return $app->json($ok, 201);
        }

        $MembreFormView = $membreForm->createView();

        return $app['twig']->render('ajout.html.twig', array(
            'MembreForm' => $MembreFormView));

    })->bind('admin_membre_add');

    /* Afficher les utilisateurs en fonction de leur etat*/
    $app->get('users/etat/attente/', function () use ($app) {
        $membres = $app['dao.membre']->findAttente();

        if (empty($membres)) {
            return $app->abort(404, "Aucun membre en attente");
        }
        return $app['twig']->render('membre.html.twig', array('membres' => $membres));
        /*return json_encode($membres);*/

    });

    // Remove an article
    $app->get('/users/{id}/delete', function($id, Request $request) use ($app) {
        // Delete the membre
        $ok = $app['dao.membre']->delete($id);

        // Redirect to admin home page
        return $app->json($ok, 204);
    })->bind('admin_membre_delete');


    // Edit an existing membre
    $app->match('/users/{id}/edit', function($id, Request $request) use ($app) {
        $membre = $app['dao.membre']->find($id);
        $membreForm = $app['form.factory']->create(MembreType::class, $membre);
        $membreForm->handleRequest($request);

        if ($membreForm->isSubmitted() && $membreForm->isValid()) {
            $data = $membreForm->getData();
            $app['dao.membre']->update($data, $id);
        }

        return $app['twig']->render('membre_form.html.twig', array(
            'title' => 'Edit membre',
            'MembreForm' => $membreForm->createView()));
    })->bind('admin_membre_edit');

    // Remove an article
    $app->get('/users/{id}/accepter', function($id) use ($app) {
        // Delete the membre
        $ok = $app['dao.membre']->changeEtat($id, 2);

        // Redirect to admin home page
        return $app->json($ok, 204);
    })->bind('admin_membre_accepter');// Remove an article

    $app->get('/users/{id}/refuser', function($id) use ($app) {
        // Delete the membre
        $ok = $app['dao.membre']->changeEtat($id, 3);

        // Redirect to admin home page
        return $app->json($ok, 204);
    })->bind('admin_membre_refuser');
