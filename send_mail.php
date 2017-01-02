<?php
    header('Content-type: application/json');
    $status = array(
        'type'=>'success',
        'message'=>'Thank you for contact us. As early as possible  we will contact you '
    );
    $destinataire = 'sindy.lim91@gmail.com';

    function Rec($text)
    {
        $text = htmlspecialchars(trim($text), ENT_QUOTES);
        if (1 === get_magic_quotes_gpc())
        {
            $text = stripslashes($text);
        }

        $text = nl2br($text);
        return $text;
    };

    /*
     * Cette fonction sert à vérifier la syntaxe d'un email
     */
    function IsEmail($email)
    {
        $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
        return (($value === 0) || ($value === false)) ? false : true;
    }

    // formulaire envoyé, on récupère tous les champs.
    $nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
    $email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
    $objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
    $message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

    // On va vérifier les variables et l'email ...
    $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré

    if (($nom != '') && ($email != '') && ($objet != '') && ($message != '')) {
        // les 4 variables sont remplies, on génère puis envoie le mail
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From:' . $nom . ' <' . $email . '>' . "\r\n" .
            'Reply-To:' . $email . "\r\n" .
            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed ' . "\r\n" .
            'Content-Disposition: inline' . "\r\n" .
            'Content-Transfer-Encoding: 7bit' . " \r\n" .
            'X-Mailer:PHP/' . phpversion();

        // Remplacement de certains caractères spéciaux
        $message = str_replace("&#039;", "'", $message);
        $message = str_replace("&#8217;", "'", $message);
        $message = str_replace("&quot;", '"', $message);
        $message = str_replace('<br>', '', $message);
        $message = str_replace('<br />', '', $message);
        $message = str_replace("&lt;", "<", $message);
        $message = str_replace("&gt;", ">", $message);
        $message = str_replace("&amp;", "&", $message);

        $success = @mail($destinataire, $objet, $message, $headers);
        json_encode($status);
        die;
    }
    else{
        echo 'no';
    }

?>