<?php
    class ChitUpload extends Controller{

        public function __construct(){

        }

        public function index(){
            $this->view('pages/chitupload', ['title' => 'CHIT Upload']);
        }
    }
?>