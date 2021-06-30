<?php
    class Members extends Controller{

        public function __construct(){

        }

        public function index(){
            $this->view('pages/members', ['title' => 'Members']);
        }
    }
?>