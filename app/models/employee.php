<?php

    class Employee{

        public $empID;
        public $empName;
        public $department;
        public $empStatus;
        public $chit;
        private $db = null;

        public function __construct(){
            $this->db = new Database();
        }

        public function loadBranches(){
            //header('Content-Type: application/json');
            $data = [];

            $this->db->setQuery('SELECT BRANCHNAME, IPADDRESS FROM branch ORDER BY BRANCHNAME ASC;');

            $row = $this->db->getData();

            if(!empty($row)){

                return $row;
            }else{
                return [];
            }
        }

        public function updateChitMany(){
            $data = ['name' => 'tolits', 'age' => 28];

            echo json_encode($data);
        }
    }
 ?>
