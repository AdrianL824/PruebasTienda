<?php 
  require './config/config.php';
  require './helpers/users.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    updateUser($_POST);
  }

  $id = (int) $_GET['id'];
  $user = getUserByID($id);

  require './views/user-edit.view.php';

?>