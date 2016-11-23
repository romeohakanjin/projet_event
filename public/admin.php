<?php
    //on défini notre variable webroot
    define('ROOT', dirname(__DIR__));

    //Inclure la class Autoloader
    require ROOT.'/app/Autoloader.php';

    //Relancer et gérer l'autoloading
    Autoloader::register();

    $app = app::getInstance();


    if (isset($_GET['p'])) {
        $p = $_GET['p'];
    }
    else{
        $p = 'home';
    }

    if ($app->logged()){
        $app->Unauthorized();
    }

    $membre = $app->getTable("Membre");
    $models = $app->getTable("Model");

    //Stocker l'affichage
    ob_start();

    //Redirection en fonction du paramètre
    switch ($p) {
        case 'home':
            require ROOT.'/views/admin/index.php';
            break;

        case 'deconnexion':
            $app->logout();
            break;

        case 'edit_table':
            require ROOT.'/views/admin/table_form.php';
            break;

        case 'add_table':
            require ROOT.'/views/admin/table_form.php';
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
    require ROOT.'/views/template/default_admin.php';
?>