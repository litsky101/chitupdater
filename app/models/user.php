<?php

  class User{

    public $username = null;
    public $password = null;
    private $db = null;

    public function __construct(){
      $this->db = new Database();
    }

    public function login(){
      try {
        $param = [
          ':username' => $this->username,
          ':password' => $this->password
        ];

        print_r($param);exit;

        $this->db->setQuery("SELECT USERNAME, FIRSTNAME FROM users WHERE USERNAME = :username AND PASSWORD = :password");
        $this->db->setParameters($param);

        $test = $this->db->getData();
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }
  }
 ?>
