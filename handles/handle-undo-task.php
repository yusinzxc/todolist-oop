<?php
  function undoTask(){
    if(!empty($_GET['task_undo'])){
      $secure_data = new SecureData($_GET['task_undo']);
      $task_id = $secure_data->encrypt(false);
      $delete = new Actions($task_id);
      if($delete->completeTask(0)){
        header('location: /');
      } 
    }
  }
?>