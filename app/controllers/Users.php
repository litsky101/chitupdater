<?php 
    class Users extends Controller{

        public function __construct(){
            $this->userModel = $this->model('User');
        }

        public function login(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //process form
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $this->userModel->username = $_POST['username'];
                $this->userModel->password = $_POST['password'];

                $data = [
                    'name' => '',
                    'username' => $this->userModel->username,
                    'password' => $this->userModel->password,
                    'incorrect' => ''
                ];

                $loggedInUser = $this->userModel->login();

                if(!empty($loggedInUser)){
                    $_SESSION['user_id'] = $loggedInUser->ID;
                    $_SESSION['username'] = $loggedInUser->USERNAME;
                    $_SESSION['name'] = $loggedInUser->FIRSTNAME;
                    echo 1;
                }else{
                    $data['incorrect'] = 'Incorrect username or password';
                    $this->view('users/login', $data);
                }

            }else{
                $data = [
                    'name' => '',
                    'username' => '',
                    'password' => '',
                    'incorrect' => ''
                ];

                $this->view('users/login', $data);
            }
        }

        public function createUserSession($user){
            $_SESSION['user_id'] = $user->ID;
            $_SESSION['username'] = $user->USERNAME;
            $_SESSION['name'] = $user->FIRSTNAME;
            redirect('pages/index');
        }

        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['name']);
            session_destroy();
            redirect('users/login');
        }

    }
?>