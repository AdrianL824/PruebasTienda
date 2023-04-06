<?php 
  require './config/config.php';
  require './helpers/users.php';


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    createUser($_POST);
  }

  require './views/user-register.view.php';

?>