<?php
    class ChitUpload extends Controller{

        public function __construct(){
            $this->userModel = $this->model('Employee');
        }

        public function getBranches(){
            if(!isLoggedIn()){
                $this->view('users/login', []);
            }else{
                $this->userModel->loadBranches();
            }
        }

        public function updateChitMany(){
            $this->userModel->updateChitMany();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            }
        }
    }
?>
