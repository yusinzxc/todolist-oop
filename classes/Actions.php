<?php
  require_once 'Config.php';
  class Actions extends Config{
    private $task_id;
    public function __construct($task_id){
      $this->task_id = $task_id; 
    } 
    function deleteTask(){
      $con = $this->connect();
      $sql = "DELETE FROM `todo` WHERE task_id = ?";
      $query = $con->prepare($sql);
      if($query->execute([$this->task_id])){
        return true;
      }else {
        return false;
      }
    }
    function completeTask($status){
      $con = $this->connect();
      $sql = "UPDATE `todo` SET `status`= ? WHERE task_id = ?";
      $query = $con->prepare($sql);
      if($query->execute([$status, $this->task_id])){
        return true;
      }else {
        return false;
      }
    }

  }
?>