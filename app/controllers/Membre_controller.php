<?php
    namespace App\controllers;

    class Membre_controller extends Controller {
        public function inscription($values){
            var_dump("contrôle de saisie inscription ici");
            var_dump($values);
        }
    }