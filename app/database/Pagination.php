<?php
    namespace App\models;
    class Pagination extends \core\model\model{

        public function getNombreMembre(){
            return $this->db->query('SELECT COUNT AS nombre_membre (id) FROM membre ');
        }
    }