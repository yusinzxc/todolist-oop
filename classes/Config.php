<?php
  class Config {
    private $host = "localhost";
    private $username = "root";
    private $password = "@Lookup321";
    private $db_name = "todolist";
    private $fetch_mode = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function connect(){
      try{
        $con = $this->con;
        $con = new PDO("mysql:host=$this->host;dbname=$this->db_name",$this->username,$this->password,$this->fetch_mode);
      }catch(PDOException $e){
        echo $e->getMessage();
      }
      return $con;
    }
  }
?>