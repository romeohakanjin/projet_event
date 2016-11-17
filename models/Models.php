<?php
/*
/**
 *
 */
    class Models{
        protected $db;

        //injection de dépendance
        public function __construct(Database $db){
            $this->db = $db;
        }


    }