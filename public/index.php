<?php
    //on défini notre variable webroot
    define('ROOT', dirname(__DIR__));

    //Inclure la class Autoloader
    require ROOT.'/app/Autoloader.php';

    //Relancer et gérer l'autoloading
    App\Autoloader::register();

    $app = App\App::getInstance();

    $membre = $app->getTable("Membre");
    $controller = $app->getController('Membre_controller');

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
            require ROOT.'/views/index.php';
            break;
        case 'partner':
            require ROOT.'/views/users/partenaire.php';
            break;
        case 'sign-in':
            require ROOT.'/views/users/inscription.php';
            break;
        default:
            $app->notFound();
            break;
    }

    $content = ob_get_clean();
    require ROOT.'/views/template/default.php';
?>