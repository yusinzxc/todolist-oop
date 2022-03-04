<?php
  require_once 'Config.php';
  class Read extends Config{
    private $status;
    public function __construct($status){
      $this->status = $status; 
    } 
    function readTask(){
      $con = $this->connect();
      $sql = "SELECT * FROM todo WHERE status = ? ORDER BY date_time DESC";
      $query = $con->prepare($sql);
      $query->execute([$this->status]);
      $tasks = $query->fetchAll();
      return $tasks;
#      foreach($tasks as $task){
        #echo $task['task'];
      #}
    }
  }
?>