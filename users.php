<?php 
  require './config/config.php';
  require './helpers/users.php';

  $users = getUsers();
  

  require './views/users.view.php';

?>