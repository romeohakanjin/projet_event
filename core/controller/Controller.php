<?php
    namespace core\controller;

    class Controller{
        protected $db;
        protected $viewPath;
        protected $template;

        //injection de dépendance
        public function __construct(\core\Database $db){
            $this->db = $db;
        }

    }