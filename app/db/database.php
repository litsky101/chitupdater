<?php
    class Database{
        private $conn = null;
        private $statement = null;
        private $query = null;
        private $param = [];

        private $server = HOST;
        private $db = DB;
        private $user = DB_USER;
        private $pass = DB_PASS;

        public function __construct(){
            try{
                $this->conn = new PDO("mysql:host={$this->server};dbname={$this->db};", $this->user, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $er){
                throw $er;
            }
        }

        private function execute(){
            $result = null;
            $this->statement = $this->conn->prepare($this->query);

            if(!empty($this->param)){
                $result = $this->statement->execute($this->param);
            }else{
                $result = $this->statement->execute();
            }

            return $result;
        }

        public function setQuery($query){
            $this->query = $query;
        }

        public function setParameters($param){
            $this->param = $param;
        }

        public function beginTransaction(){
            $this->conn->beginTransaction();
        }

        public function commitTransaction(){
            $this->conn->commit();
        }

        public function rollbackTransaction(){
            $this->conn->rollback();
        }

        public function executeQuery(){
            try{
               $this->execute();

               return $this->statement->rowCount();
            }catch(PDOException $er){
                throw $er;
            }
        }

        public function getData(){
            try{
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this->execute();

                return $this->statement->fetchAll();
            }catch(PDOException $er){
                throw $er;
            }
        }

        public function __destruct(){
            $this->conn = null;
        }
    }
 ?>
