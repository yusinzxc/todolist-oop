<?php

function addTask(){
  if(isset($_POST['add-task'])){
    if(!empty($_POST['task']) && !empty($_POST['add-task'])){ 
      $task = $_POST['task'];
      $create = new Create($task);
      if($create->addTask()){
        header('location: /');
      }
    }else{
        header('location: /');
    }
  }
}


?>