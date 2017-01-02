<?php
    namespace App\controllers;

    class Membre_controller extends \core\controller\Controller {
        protected $membre;

        //On build notre objet membre dès le début
        public function __construct(){
            $this->membre = \App\App::getInstance()->getTable("Membre");
        }

        //permet de défénir les différents paramètres par défaut de la page
        public function index(){
            if (!isset($_GET['etat'])){
                if(!isset($_GET['ordre']) || $_GET['ordre'] == 'ASC'){
                    $_GET['ordre'] = 'ASC';
                    return 'ASC';
                }
                if ($_GET['ordre'] == 'DESC'){
                    return 'DESC';
                }
            }
            else if(isset($_GET['etat'])){
                if(!isset($_GET['ordre']) || $_GET['ordre'] == 'ASC'){
                    return $_GET['ordre'] = 'ASC';

                }
                else{
                     return $_GET['ordre'] == 'DESC';
                }
            }
            return null;
        }

        //Récupérer la page si pas de page renvoi 1
        public function getPage(){
            if (!isset($_GET['page'])){
                $_GET['page'] = 1;
            }
            $pagecourante = intval($_GET['page']);


            return $pagecourante;
        }

        //Pagination des membres en fonction de l'ordre
        public function pagination($ordre)
        {
            $perPage = 4;
            $pagecourante = intval($_GET['page']);

            if ($pagecourante <= 0) {
                $pagecourante = 1;
                $_GET['page'] = 1;
            }

            $depart = ($pagecourante-1)*4;

            if (!isset($_GET['etat'])){
                $membrePage = $this->membre->getMembrePage($ordre, $depart, $perPage);
            }
            else{
                $membrePage = $this->membre->getMembreEtatPage($_GET['etat'], $ordre, $depart, $perPage);
            }

            return $membrePage;
        }

        //Définit le nombre de page max en focnion du nombre de membres
        public function pageMax($ordre){
            $perPage = 4;

            if (!isset($_GET['etat'])){
                $size = sizeof($this->membre->getMembre($ordre));
            }
            else{
                $size = sizeof($this->membre->getMembreEtatInscription($_GET['etat'], $ordre));
            }

            $pageMax = ceil($size / $perPage);
            return $pageMax;
        }

        //Ecrit l'url en fonction des données
        public function url(){
            $url = 'p=home';
            if(isset($_GET['etat'])){
                $url = 'admin.php?'.$url.'&etat='.$_GET['etat'];
            }
            else if(!isset($_GET['etat'])){
                $url = 'admin.php?'.$url;
            }
            return $url;
        }

        //Permet de retourner l'id du membre à modifier
        public function edit_table($id){
            if(isset($_GET['p']) == 'edit_table'){
                if (isset($_GET['id'])){
                    return $this->membre->getMembreByID($id);
                }
            }
            return null;
        }

        //permet de s'inscrire et effectue les controles sur la saisie utilisateur
        public function inscription($values){
            $cpControle = "/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/";
            $stringControle = '/^\p{L}+$/ui';
            $good = true;
            $civilite = ["Mr", "Mme"];
            $niveau_etude = [1,2,3,4,5];
            $dateExplode = explode("-", $values['signin-DateNaissance']);

            $resultat = [
                'nom' => $values['signin-Nom'],
                'prenom' => $values['signin-Prenom'],
                'email' => $values['signin-Email'],
                'date_naissance' => $values['signin-DateNaissance'],
                'adresse' => $values['signin-Adresse'],
                'code_postal' => $values['signin-CodePostal'],
                'ville' => $values['signin-Ville'],
                'type_contrat' => $values['signin-TypeContrat'],
                'civilite' => $values['signin-Civilite'],
                'niveau_etude' => $values['signin-NiveauEtude']
            ];

            foreach ($resultat as $key){
                if (empty($key)){
                    $good = false;
                }
            }

            if(!preg_match($stringControle,$resultat['nom']) || !preg_match($stringControle,$resultat['prenom'])
                || !preg_match($stringControle,$resultat['ville'])){
                $good = false;
            }

            if(!in_array($resultat['niveau_etude'], $niveau_etude) || !in_array($resultat['civilite'], $civilite)){
                $good = false;
            }

            if(!preg_match($cpControle, $resultat['code_postal'] )){
                $good = false;
            }

            if (!filter_var( $resultat['email'], FILTER_VALIDATE_EMAIL))
            {
                $good = false;
            }

            if (sizeof($dateExplode) != 3){
                $good = false;
            }
            else{
                if (strlen($dateExplode[0]) == 4 && strlen($dateExplode[1]) == 2 && strlen($dateExplode[2]) == 2) {}
                else {$good = false;}
            }

            if(is_numeric($dateExplode[0]) && is_numeric($dateExplode[1]) && is_numeric($dateExplode[2])){}
            else{$good = false;}

            if ($good){
                $this->membre->addMembre($resultat, "membre");
            }

            return $good;
        }

        //Permet de modifier un utilisateur et de controler les champs saisies
        public function verifUpdate($id, $fields, $table){
            $cpControle = "/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/";
            $stringControle = '/^\p{L}+$/ui';
            $good = true;
            $niveau_etude = [1,2,3,4,5];
            $dateExplode = explode("-", $fields[0]['inputDate_naissance']);

            $resultat = [
                'nom' => $fields[0]['inputNom'],
                'prenom' => $fields[0]['inputPrenom'],
                'date_naissance' => $fields[0]['inputDate_naissance'],
                'adresse' => $fields[0]['inputAdresse'],
                'code_postal' => $fields[0]['inputCP'],
                'ville' => $fields[0]['inputVille'],
                'type_contrat' => $fields[0]['inputContrat'],
                'niveau_etude' => $fields[0]['inputEtude']
            ];

            foreach ($resultat as $key){
                if (empty($key)){
                    $good = false;
                }
            }
            if(!preg_match($stringControle,$resultat['nom']) || !preg_match($stringControle,$resultat['prenom'])
                || !preg_match($stringControle,$resultat['ville'])){
                $good = false;
            }
            var_dump($good);
            if(!in_array($resultat['niveau_etude'], $niveau_etude)){
                $good = false;
            }

            if(!preg_match($cpControle, $resultat['code_postal'] )){
                $good = false;
            }

            if (sizeof($dateExplode) != 3){
                $good = false;
            }
            else{
                if (strlen($dateExplode[0]) == 4 && strlen($dateExplode[1]) == 2 && strlen($dateExplode[2]) == 2) {}
                else {$good = false;}
            }

            if(is_numeric($dateExplode[0]) && is_numeric($dateExplode[1]) && is_numeric($dateExplode[2])){}
            else{$good = false;}

            if ($good){
                $this->membre->update($id, $resultat, $table);
            }
            return $good;
        }

        //permet d'effectuer l'envoi de mail
        public function email($values){
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
            $nom     = (isset($values['nom']))     ? Rec($values['nom'])     : '';
            $email   = (isset($values['email']))   ? Rec($values['email'])   : '';
            $objet   = (isset($values['objet']))   ? Rec($values['objet'])   : '';
            $message = (isset($values['message'])) ? Rec($values['message']) : '';

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
            }
        }
    }