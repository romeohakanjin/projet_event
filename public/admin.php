<?php
    //on défini notre variable webroot
    define('ROOT', dirname(__DIR__));

    //Inclure la class Autoloader
    require ROOT.'/app/App.php';
    //Relancer et gérer l'autoloading
    \App\App::load();

    //Instance de la classe app
    $app = App\App::getInstance();

    //Parametre par défaut
    if (isset($_GET['p'])) {
        $p = $_GET['p'];
    }
    else{
        $p = 'home';
    }

    //Si l'utilisateur n'est pas conecté
    /*if ($app->logged()){
        $app->Unauthorized();
    }*/

    //Instanciation des classes
    $membre = $app->getTable("Membre");
    $controller = $app->getController('Membre');

    //Stocker l'affichage
    ob_start();
    //Redirection en fonction du paramètre
    switch ($p) {
        case 'home':
            $ordre = $controller->index();
            $page = $controller->getPage();
            $membrePage = $controller->pagination($ordre);
            $nbPage = $controller->pageMax($ordre);
            $url = $controller->url();

            include ROOT.'/app/views/admin/index.php';

            break;

        case 'logout':
            $app->logout();
            break;

        case 'edit_table':
            if (isset($_GET['id'])){
                $membre_edit = $controller->edit_table($_GET['id']);
            }

            require ROOT.'/app/views/admin/table_form.php';
            break;

        case 'confirm_update':
            $good = $controller->verifUpdate($_GET['id'], [$_POST], 'membre');
            if (!$good){
                header('Status: 412 Precondition Failed', false, 412);
                header('Location: http://localhost/projet/projet_event/public/admin.php');
            }
            break;

        case 'confirm':
            if (isset($_GET['e_id']) && isset($_GET['m_id']) && (isset($_GET['e_id']) == 2 || isset($_GET['e_id']) == 3)){
                $membre->changerEtatInscription($_GET['e_id'], $_GET['m_id']);
            }
            break;

        default:
            $app->notFound();
            break;
    }

    $content = ob_get_clean();
    require ROOT.'/app/views/template/default_admin.php';
?>