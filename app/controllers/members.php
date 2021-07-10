<?php
    class Members extends Controller{

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

        public function loadEmployees(){
            $result = $this->userModel->getEmployees('127.0.0.1','_ossalaminos');

            echo json_encode($result);

        }
    }
?>
