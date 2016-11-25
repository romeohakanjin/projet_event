<?php
    namespace App\controllers;

    class Controller{
        protected $db;

        //injection de dépendance
        public function __construct(\App\Database $db){
            $this->db = $db;
        }
    }