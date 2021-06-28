<?php

  class Pages extends Controller{

    public function __construct(){

    }

    public function index(){
      if (!isLoggedIn()) {
        redirect('users/login');
      }else{
        $this->view('pages/index', []);
      }
    }
  }
 ?>
