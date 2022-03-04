<?php
  require_once './handles/handle.php';
  spl_autoload_register(function($class){
    require_once $_SERVER['DOCUMENT_ROOT']."/classes/$class.php";
  })
?>