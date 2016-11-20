<?php
    class Authentification extends Models{

        public function getUserID(){
            if ($this->logged()){
                return $_SESSION['auth'];
            }
            return false;
        }

        public function login($username, $password){
            $user = $this->db->prepare('SELECT * FROM utilisateur WHERE id_type_membre = 1 AND identifiant = ?', [$username]);
            if ($user){
                if($user[0]->mot_de_passe === sha1($password)){
                    $_SESSION['auth'] = $user[0]->id;
                    return true;
                }
            }
            return false;
        }

        public function logged(){
            var_dump($_SESSION['auth']);
            return isset($_SESSION['auth']);
        }
    }
?>