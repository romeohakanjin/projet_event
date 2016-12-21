<?php
    // Home page
$app->get('/', function () use ($app) {

    $membres = $app['dao.membre']->findAll();

    return $app['twig']->render('index.html.twig', array('membres' => $membres));

});

    /* Afficher la liste des utilisateurs */
    $app->get('users/', function() use ($app) {
        $sql = "SELECT * FROM membre";
        $post = $app['db']->fetchAll($sql);
        return json_encode($post);
    });

    /* Afficher un utilisateur en fonction de son id */
    $app->get('users/{id}', function ($id) use ($app) {
        $sql = "SELECT * FROM membre WHERE id = ?";
        $post = $app['db']->fetchAssoc($sql, array((int) $id));
        if ($post == false) {
            $app->abort(404, "id {$id} does not exist in database.");
        }
        return json_encode($post);
    });

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