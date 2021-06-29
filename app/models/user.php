<?php
    class User{

        public $id;
        public $username;
        public $password;
        private $db = null;

        public function __construct(){
            $this->db = new Database();
        }

        public function login(){
            $this->db->setQuery('SELECT * FROM users WHERE ACTIVE = 1 AND BINARY USERNAME = :username AND BINARY PASSWORD = :password');
            $this->db->setParameters([
                ':username' => $this->username,
                ':password' => $this->password
            ]);

            $row = $this->db->getSingle();

            if(!empty($row)){
                return $row;
            }else{
                return false;
            }

        }
    }
?>