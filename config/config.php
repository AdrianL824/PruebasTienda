<?php

  require './config/db.php';

  define('RAIZ', 'http://localhost/Mi_tiendita');


  $DB_CONFIG = [
    'host' => 'sql9.freesqldatabase.com',
    'port' => '3306',
    'name' => 'sql9611059',
    'user' => 'sql9611059',
    'pass' => 'LkcxBGFRwD'
  ];

  define('CONNECT', conexion($DB_CONFIG));

?>