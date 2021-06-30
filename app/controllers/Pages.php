<?php
    class Pages extends Controller{
        public function __construct(){

        }

        public function index(){
            if(!isLoggedIn()){
                $this->view('users/login', []);
            }else{
                $this->view('pages/index', []);
            }
        }
    }
?>