<?php
    //on défini notre variable webroot
    define('ROOT', dirname(__DIR__));

    //Inclure la class Autoloader
    require ROOT.'/app/Autoloader.php';

    //Relancer et gérer l'autoloading
    Autoloader::register();

    $app = app::getInstance();
    $utilisateur =$app->getTable("Utilisateur");
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

        case 'admin':
            require ROOT.'/views/admin/index.php';
            break;

        case 'liste_utilisateur':
            require ROOT.'/views/admin/liste_utilisateur.php';
            break;

        case 'connexion':
            require ROOT.'/views/connexion.php';
            break;

        case 'inscription':
            require ROOT.'/views/inscription.php';
            break;

        default:
            echo "404 error !";
            break;
    }

    $content = ob_get_clean();
    require ROOT.'/views/template/default.php';
?>