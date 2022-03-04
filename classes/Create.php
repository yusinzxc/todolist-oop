<?php

  require_once 'Config.php';
  class Create extends Config{
    public $task;
    function __construct($task){
      $this->task = $task; 
    }
    function addTask(){
      $con = $this->connect();
      $sql = "INSERT INTO `todo`(`task`) VALUES (?)";
      $query = $con->prepare($sql);
      if($query->execute([$this->task])){
        return true;
      }else {
        return false;
      }
    }
  }
?>