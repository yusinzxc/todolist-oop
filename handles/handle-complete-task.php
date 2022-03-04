<?php
  function completeTask(){
    if(!empty($_GET['task_complete'])){
      $secure_data = new SecureData($_GET['task_complete']);
      $task_id = $secure_data->encrypt(false);
      $delete = new Actions($task_id);
      if($delete->completeTask(1)){
        header('location: /');
      } 
    }
  }
?>