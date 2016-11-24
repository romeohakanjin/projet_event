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

        public function update($id, $fields, $table){
            $sql_parts = [];
            $attributes = [];

            foreach ($fields as $k => $v){
                $sql_parts[] = "$k = ?";
                $attributes[] = $v;
            }

            $attributes[] = $id;
            $sql_part = implode(', ', $sql_parts);
            return $this->db->prepare("UPDATE $table SET $sql_part WHERE id = ?", $attributes);
        }


    }