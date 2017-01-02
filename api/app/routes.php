<?php
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
        return $app['twig']->render('membre.html.twig', array('membres' => $membres));
        /* return json_encode($post);*/
    })->bind('membre');

    // Membre details with comments
    $app->match('/membre/{id}', function ($id,  Symfony\Component\HttpFoundation\Request $request) use ($app) {
        $membre = $app['dao.membre']->find($id);
        $commentFormView = null;

        // A user is fully authenticated : he can add comments
        $comment = new \api\Domain\Membre();
        $comment->setArticle($membre);
        $user = $app['user'];
        $comment->setAuthor($user);
        $commentForm = $app['form.factory']->create(api\Form\Type\MembreType::class, $comment);
        $commentForm->handleRequest($request);

        return $app['twig']->render('membre.html.twig', array(
            'membre' => $membre));
    })->bind('membre');














    /* Afficher les utilisateurs en fonction de leur etat*/
    $app->get('users/etat/{etat}', function ($etat) use ($app) {
        $sql = "SELECT * FROM membre WHERE id_etat_inscription = ?";
        $post = $app['db']->fetchAll($sql, array((int) $etat));

        if (empty($post)) {
            $app->abort(404, "State : {$etat} does not exist in database. Try with 1,2 or 3");
        }
        return json_encode($post);
    });

    /* Ajouter un utilisateur */
    $app->post('/users/add', function () use ($app){
        $userData = array(
            'nom' => 'nomINSERT',
            'prenom' => 'prenomINSERT',
            'email' => 'INSERT@inser.com',
            'date_naissance' => '6666-11-06',
            'adresse' => 'insertADRESSE',
            'code_postal' => '55555',
            'ville' => 'auber',
            'type_contrat' => 'Contrat pro',
            'id_etat_inscription' => '2',
            'civilite' => 'Mr',
            'niveau_etude' => '5'
        );
        $insert = $app['db']->insert('membre', $userData);
        return $app->json($insert, 201);
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