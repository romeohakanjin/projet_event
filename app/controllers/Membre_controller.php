<?php
    namespace App\controllers;

    class Membre_controller extends \core\controller\Controller {
        protected $membre;
        public function __construct(){
            $this->membre = \App\App::getInstance()->getTable("Membre");
        }

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

        public function getPage(){
            if (!isset($_GET['page'])){
                $_GET['page'] = 1;
            }
            $pagecourante = intval($_GET['page']);


            return $pagecourante;
        }

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

        public function edit_table($id){
            if(isset($_GET['p']) == 'edit_table'){
                if (isset($_GET['id'])){
                    return $this->membre->getMembreByID($id);
                }
            }
            return null;
        }

        public function inscription($values){
            $cpControle = "/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/";
            $stringControle = '/^\p{L}+$/ui';
            $good = true;
            $civilite = ["Mr", "Mme"];
            $niveau_etude = [1,2,3,4,5];

            $resultat = [
                'nom' => $values['inputNom'],
                'prenom' => $values['inputPrenom'],
                'email' => $values['inputEmail'],
                'date_naissance' => $values['inputDateNaissance'],
                'adresse' => $values['inputAdresse'],
                'code_postal' => $values['inputCodePostal'],
                'ville' => $values['inputVille'],
                'type_contrat' => $values['selectTypeContrat'],
                'civilite' => $values['selectCivilite'],
                'niveau_etude' => $values['selectNiveauEtude']
            ];

            var_dump($resultat);
            echo "------";

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

            /*if ($good){
                header('Status: 204 No Content', false, 204);
                return header('Location: http://localhost/projet_event/public/index.php');
            }

            header('Status: 412 Precondition Failed', false, 412);
            header('Location: http://localhost/projet_event/public/index.php?p=sign-in');*/
        }

        public function verifUpdate($id, $fields, $table){
            $empty = false;
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
            foreach ($resultat as $value){
                if (empty($value)){
                    $empty = true;
                }

            }

            if ($value == false){
                var_dump("dans if");
                var_dump($empty);
                $this->membre->update($id, $resultat, $table);
            }
            else{
                //redirection avec message Modifications non prises en comptes
                var_dump("erreur !");
            }

        }
    }