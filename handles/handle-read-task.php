<?php
  function readTask($status){
    $create = new Read($status);
    if($status){
      $tasks = $create->readTask();
      foreach($tasks as $task){
        $secure_data = new SecureData($task['task_id']);
        $uid = $secure_data->encrypt(true);
        echo "<tr>
                <td>$task[task]</td>
                <td>
                  <a href='/index.php?task_undo=$uid' class='btn btn-success'>
                    <i class='fa-solid fa-rotate-left'></i>
                  </a>
                  <a href='/index.php?task_deleted=$uid&success=true' class='btn btn-danger'>
                    <i class='fa-solid fa-trash'></i>
                  </a>
                </td>
              </tr>";
      }
    }else {
      require_once './classes/SecureData.php';
      $tasks = $create->readTask();
      foreach($tasks as $task){
        $secure_data = new SecureData($task['task_id']);
        $uid = $secure_data->encrypt(true);
        echo "<tr>
                <td>$task[task]</td>
                <td>
                  <a href='/index.php?task_complete=$uid' class='btn btn-success'>
                    <i class='fa-solid fa-check'></i>
                  </a>
                  <a href='/index.php?task_deleted=$uid&success=true' class='btn btn-danger'>
                    <i class='fa-solid fa-trash'></i>
                  </a>
                </td>
              </tr>";
      }
    }
  }
?>