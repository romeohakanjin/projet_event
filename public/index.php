<?php
    //on défini notre variable webroot
    define('ROOT', dirname(__DIR__));

    //Inclure la class Autoloader
    require ROOT.'/app/App.php';
    //Relancer et gérer l'autoloading
    \App\App::load();

    $app = App\App::getInstance();

    $membre = $app->getTable("Membre");
    $controller = $app->getController('Membre');

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
    }
    else{
        $p = 'home';
    }
    
    //Stocker l'affichage
    ob_start();

    //Redirection en fonction du paramètre
    switch ($p) {
        case 'home':
            require ROOT.'/app/views/index.php';
            break;
        case 'partner':
            require ROOT.'/app/views/users/partenaire.php';
            break;
        case 'sign-in':
            require ROOT.'/app/views/users/inscription.php';
            break;
        case 'confirm_insert':
            $good = $controller->inscription($_POST);
            if (!$good){
                header('Status: 412 Precondition Failed', false, 412);
                header('Location: http://localhost/projet/projet_event/public/index.php?p=sign-in');
            }
            break;
        default:
            /*
             * METTRE CODE ERREUR 404 ET RETURNER EN HEADER UNE PAGE 404 DEJA CREER NORMALEMENT
             * */
            $app->notFound();
            break;
    }

    $content = ob_get_clean();
    require ROOT.'/app/views/template/default.php';
?>