<?php
    namespace Core\model;
    use Core\Database;
    class Model{
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
            $this->db->prepare("UPDATE $table SET $sql_part WHERE id = ?", $attributes);
            header('Status: 203 Accepted', false, 203);
            header('Location: admin.php?p=home');
        }

        public function addMembre($fields, $table){
            $sql_parts = [];
            $attributes = [];
            $values = "";

            foreach ($fields as $k => $v){
                $sql_parts[] = "$k";
                $attributes[] = $v;
                $values = $values.",'".$v."'";
            }

            $values = substr($values, 1);
            $sql_part = implode(', ', $sql_parts);

            $this->db->add("INSERT INTO $table ($sql_part) VALUES($values) ");

            header('Status: 200 OK', false, 200);
            header('Location: index.php?p=home');
        }


    }