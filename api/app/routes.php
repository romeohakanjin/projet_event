<?php
    use Symfony\Component\HttpFoundation\Request;
    use api\Domain\Membre;

    // Home page
    $app->get('/', function () use ($app) {
        $membres = $app['dao.membre']->findAll();

        return json_encode($membres);
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

    /* Afficher les utilisateurs en fonction de leur etat*/
    $app->get('users/etat/attente/', function () use ($app) {
        $membres = $app['dao.membre']->findAttente();

        if (empty($membres)) {
            return $app->abort(404, "Aucun membre en attente");
        }

        return json_encode($membres);

    });


    // Membre create
    $app->post('/users/create', function (Request $request) use ($app) {
        // Check request parameters
        if (!$request->request->has('nom')) {
            return $app->json('Missing required parameter: nom', 400);
        }
        if (!$request->request->has('prenom')) {
            return $app->json('Missing required parameter: prenom', 400);
        }
        if (!$request->request->has('email')) {
            return $app->json('Missing required parameter: email', 400);
        }
        if (!$request->request->has('adresse')) {
            return $app->json('Missing required parameter: adresse', 400);
        }
        if (!$request->request->has('ville')) {
            return $app->json('Missing required parameter: vile', 400);
        }
        if (!$request->request->has('date_naissance')) {
            return $app->json('Missing required parameter: date_naissance', 400);
        }
        if (!$request->request->has('code_postal')) {
            return $app->json('Missing required parameter: code_postal', 400);
        }
        if (!$request->request->has('type_contrat')) {
            return $app->json('Missing required parameter: type_contrat', 400);
        }
        if (!$request->request->has('civilite')) {
            return $app->json('Missing required parameter: civilite', 400);
        }
        if (!$request->request->has('niveau_etude')) {
            return $app->json('Missing required parameter: niveau_etude', 400);
        }

        // Build and save the new article
        $membre = new Membre();
        $membre->setNom($request->request->get('nom'));
        $membre->setPrenom($request->request->get('prenom'));
        $membre->setEmail($request->request->get('email'));
        $membre->setDateNaissance($request->request->get('date_naissance'));
        $membre->setAdresse($request->request->get('adresse'));
        $membre->setCodePostal($request->request->get('code_postal'));
        $membre->setVille($request->request->get('ville'));
        $membre->setTypeContrat($request->request->get('type_contrat'));
        $membre->setCivilite($request->request->get('civilite'));
        $membre->setNiveauEtude($request->request->get('niveau_etude'));

        $app['dao.membre']->save($membre, 'insert');
        // Convert an object ($article) into an associative array ($responseData)
        $responseData = array(
            'id' => $membre->getId(),
            'nom' => $membre->getNom(),
            'prenom' => $membre->getPrenom(),
            'email' => $membre->getEmail(),
            'date_naissance' => $membre->getDateNaissance(),
            'adresse' => $membre->getAdresse(),
            'code_postal' => $membre->getCodePostal(),
            'ville' => $membre->getVille(),
            'niveau_etude' => $membre->getNiveauEtude(),
            'type_contrat' => $membre->getTypeContrat(),
            'civilite' => $membre->getCivilite()
        );

        return $app->json($responseData, 201);  // 201 = Created
    })->bind('admin_membre_add');



    //Accepter une inscription en fonction d'un id
    $app->put('/users/{id}/accepter', function($id) use ($app) {
        if($app['dao.membre']->verifAttente($id)){
            $ok = $app['dao.membre']->changeEtat($id, 2);
        }
        else{
            return $app->json('Le membre est pas en attente', 400);
        }

        return $app->json($ok, 204);
    })->bind('admin_membre_accepter');

    //Refuser une inscription en fonction d'un id
    $app->put('/users/{id}/refuser', function($id) use ($app) {
        if($app['dao.membre']->verifAttente($id)){
            $ok = $app['dao.membre']->changeEtat($id, 3);
        }
        else{
            return $app->json('Le membre est pas en attente', 400);
        }

        return $app->json($ok, 204);
    })->bind('admin_membre_refuser');


    // Remove an article
    $app->delete('/users/{id}', function($id, Request $request) use ($app) {
        // Delete the membre
        $ok = $app['dao.membre']->delete($id);

        return $app->json($ok, 204);
    })->bind('admin_membre_delete');