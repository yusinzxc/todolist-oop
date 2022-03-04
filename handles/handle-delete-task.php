<?php
  function deleteTask(){
    if(!empty($_GET['task_deleted'])){
      $secure_data = new SecureData($_GET['task_deleted']);
      $task_id = $secure_data->encrypt(false);
      $delete = new Actions($task_id);
      if($delete->deleteTask()){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success:</strong> Successfully deleted your task.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
      } 
    }
  }
?>