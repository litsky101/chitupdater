<?php
    class Pages extends Controller{
        public function __construct(){

        }

        public function index(){
            if(!isLoggedIn()){
                $this->view('users/login', []);
            }else{
                $this->view('index', []);
            }
        }

        public function chitupload(){
            if(!isLoggedIn()){
                $this->view('users/login', []);
            }else{
                $this->view('pages/chitupload', ['title' => 'Chit Upload']);
            }
        }

        public function members(){
            if(!isLoggedIn()){
                $this->view('users/login', []);
            }else{
                $this->view('pages/members', ['title' => 'Member List']);
            }
        }
    }
?>