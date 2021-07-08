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
                $this->userModel = $this->model('Employee');
                $branches = $this->userModel->loadBranches();

                $this->view('pages/chitupload', ['title' => 'Chit Upload', 'branches' => $branches]);
            }
        }

        public function members(){
            if(!isLoggedIn()){
                $this->view('users/login', []);
            }else{
                $this->userModel = $this->model('Employee');
                $branches = $this->userModel->loadBranches();
                $this->view('pages/members', ['title' => 'Member List', 'branches' => $branches]);
            }
        }

        public function test(){
            require_once '../app/views/pages/data-local.php';
        }
    }
?>
