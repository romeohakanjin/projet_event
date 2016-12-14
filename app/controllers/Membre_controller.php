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
            var_dump("contrôle de saisie inscription ici");
            var_dump($values);
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
            }

        }
    }