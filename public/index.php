<?php

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
            require '../app/views/index.php';
            break;
        case 'about-us':
            require '../app/views/users/about-us.php';
            break;
        case 'contact-us':
            require '../app/views/users/contact-us.php';
            break;
        case 'send_mail':
            require '../app/views/users/contact-us.php';
            break;
        case 'services':
            require '../app/views/users/services.php';
            break;
        case 'sign-in':
            require '../app/views/users/sign-in.php';
            break;
        default:
            require '../app/views/users/404.php';
            break;
    }

    $content = ob_get_clean();
    require '../app/views/template/template.php';