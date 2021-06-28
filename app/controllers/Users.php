<?php

  class Users extends Controller{

    public function __construct(){
      $this->model = $this->model('User');
    }

    public function login(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $this->model->username = trim($_POST['username']);
        $this->model->password = trim($_POST['password']);

        echo $this->model->username . ' ' . $this->model->password;
        exit;

        $this->model->login();
      }else{
        $this->view('users/login', []);
      }
    }

  }
 ?>
