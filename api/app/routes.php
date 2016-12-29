<?php
    use Symfony\Component\HttpFoundation\Request;
    use api\Domain\Membre;
    use api\Form\Type\MembreType;

    // Home page
    $app->get('/', function () use ($app) {
        $membres = $app['dao.membre']->findAll();

        return $app['twig']->render('index.html.twig', array('membres' => $membres));
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

    // Membre details with comments
    $app->post('/users/create/', function (Request $request) use ($app) {
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

    })->bind('ajout_membre');

    /* Afficher les utilisateurs en fonction de leur etat*/
    $app->get('users/etat/attente/', function () use ($app) {
        $membres = $app['dao.membre']->findAttente();

        if (empty($membres)) {
            return $app->abort(404, "Aucun membre en attente");
        }
        return $app['twig']->render('index.html.twig', array('membres' => $membres));
        /*return json_encode($membres);*/

    });





    /* Modifier un utilisateur */
    $app->put('users/update/{id}', function ($id) use ($app){
        $sql = "SELECT * FROM membre WHERE id = ?";
        $user = $app['db']->fetchAssoc($sql, array((int) $id));

        if($user == false){
            $app->abort(404, "id {$id} does not exist in database.");
        }
        else{
            $userData = array(
                'nom' => '666666666',
                'prenom' => 'atch66666'
            );
            $update = $app['db']->update('membre', $userData, array('id' => $id));
        }

        return $app->json($update, 201);
    });


    /* Supprimer un utilisateur en fonction de son id */
    $app->delete('users/delete/{id}', function ($id) use ($app){
        $app['db']->delete('membre', array('id' => $id));

        return $app->json('No content', 204);
    });