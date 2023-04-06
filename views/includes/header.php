<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="<?=RAIZ?>/assets/css/estilos.css">
  <link rel="stylesheet" href="<?=RAIZ?>/assets/css/app_modal_user.css">
  <link rel="stylesheet" href="<?=RAIZ?>/assets/css/pages.css">
  <link rel="stylesheet" href="<?=RAIZ?>/assets/css/lista_usr.css">

  <script defer src="<?=RAIZ?>/assets/js/delete.js"></script>
</head>
<body>

    <header class="header">
        <img class="imglogo" src="<?=RAIZ?>/assets/img/logito.png" alt="">
        <!-- Mi Tiendida -->
    </header>


    <div class="container">

      <nav class="nav">
        <ul class="list">
          <li class="list__item">
            <div class="list__button <?=active('index.php')?>">
              <a href="index.php" class="nav__link">Inicio</a>
            </div>
          </li>

          <li class="list__item list__item--click">
            <div class="list__button list__button--click">
              <a href="#" class="nav__link">Usuario</a> 
              <img src="<?=RAIZ?>/assets/img/arrow.svg" class="list__arrow">
            </div>

            <ul class="list__show">
              <li class="list__inside">
                <a href="<?=RAIZ?>/user-register.php" class="nav__link nav__link--inside <?=active('user-register.php')?>">Registrar usuario</a>
              </li>
              <li class="list__inside">
                <a href="<?=RAIZ?>/users.php" class="nav__link nav__link--inside <?=active('users.php')?>">Lista de usuarios</a>
              </li>
            </ul>
          </li>
        </ul>  
      </nav>


      <main class="main custom-scroll">