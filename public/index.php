<?php
    //on défini notre variable webroot
    define('ROOT', dirname(__DIR__));

    //Inclure la class Autoloader
    require ROOT.'/app/Autoloader.php';

    //Relancer et gérer l'autoloading
    Autoloader::register();

    $app = app::getInstance();
    $membre = $app->getTable("Membre");

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
        case 'sign-in':
            require ROOT.'/views/users/inscription.php';
            break;
        case 'partner':
            require ROOT.'/views/users/partenaire.php';
            break;
        default:
            $app->notFound();
            break;
    }

    $content = ob_get_clean();
    require ROOT.'/views/template/default.php';
?>