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
            //echo json_encode($_POST['details'], JSON_PRETTY_PRINT);
            
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $details = $_POST['details'];
                $server = $_POST['server'];
                $queries = [];

                foreach ($details as $detail) {
                    array_push($queries, "UPDATE employees SET basic = ". $detail['chitVal'] . " WHERE idEmployee = '" . $detail['empId'] . "';");
                }

                $this->userModel->updateChitMany($server, '_pallocan', $queries);

            }
        }
    }
?>
