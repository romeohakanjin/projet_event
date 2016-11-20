<?php
    //on défini notre variable webroot
    define('ROOT', dirname(__DIR__));
    session_start();
    $_SESSION['auth'] = 'uhs';

    //Inclure la class Autoloader
    require ROOT.'/app/Autoloader.php';

    //Relancer et gérer l'autoloading
    Autoloader::register();

    $app = app::getInstance();
    $utilisateur =$app->getTable("Utilisateur");
    $membre = $app->getTable("Membre");
    $models = $app->getTable("Models");

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
    }
    else{
        $p = 'home';
    }

    //Authentification
    $auth = new Authentification($app->getDB());

    if (!$auth->logged()){
        $app->forbidden();
    }

    //Stocker l'affichage
    ob_start();

    //Redirection en fonction du paramètre
    switch ($p) {
        case 'home':
            require ROOT.'/views/admin/index.php';
            break;

        case 'edit_table':
            require ROOT.'/views/admin/table_form.php';
            break;

        case 'add_table':
            require ROOT.'/views/admin/table_form.php';
            break;

        case 'delete_table':

            break;

        default:
            $app->notFound();
            break;
    }

    $content = ob_get_clean();
    require ROOT.'/views/template/default_admin.php';
?>