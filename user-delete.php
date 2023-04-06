<?php 
  require './config/config.php';
  require './helpers/users.php';


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = (int) $_GET['id'];
    deleteUser($id);

    header('location: '. RAIZ . '/users.php');
  }

?>