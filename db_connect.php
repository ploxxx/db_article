<?php

    $db_host = "localhost" ;
    $db_user = "root" ;
    $db_pass = "" ;
    $db_name = "article_db" ;
    class Database{

        private $db_host = 'localhost';
        private $db_user = 'root';
        private $db_pass = '';
        private $db_name = 'article_db';
        public $con;

        public function connect(){
            $this->con = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
            if(!$this->con){
                throw new Exception('error connect');
            }
        }
        public function getInformation(){
            $link = $this->con->query("SELECT Name,Text FROM article");
            $row = $link->fetch_assoc();
            $this->con->close();
            return $row;
        }
    
    }    
 
   


?>