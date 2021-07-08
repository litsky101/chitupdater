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

<<<<<<< HEAD
        public function updateChit(){
            $this->db = new Database();
        }

        public function updateChitMany(){
            $data = ['name' => 'tolits', 'age' => 28];

            echo json_encode($data);
=======
        public function updateChitMany($server, $dbName, $queries){
            try {
                

                for ($i=0; $i < count($queries); $i++) { 
                    $this->db = new Database($server, $dbName);
                    $this->db->setQuery($queries[$i]);
                    $this->db->beginTransaction();
                    $this->db->executeQuery();
                }

                $this->db->commitTransaction();
                echo "success";

            } catch (Exception $er) {
                $this->db->rollbackTransaction();
                echo $er->getMessage();
            }
            
>>>>>>> e309becc0cb726f8cf6eda99745be3eac3df6c58
        }

        
    }
 ?>
