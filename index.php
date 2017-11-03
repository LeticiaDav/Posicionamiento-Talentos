<!--
#index.php - 1.0.0

https://github.com/Genesisj96Dev/Posicionamiento-Talentos

Copyright 2017 WORkTECS

Desarrollado por Genesis Jesus Reyes Osnaya

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<?php
session_start();
require('funciones.php');
verificar_sesion(); //Verificar si hay una sesion iniciada o no
//echo $_SESSION['email'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Posicionamiento de talentos</title>
  <script src="js/jquery-3.2.1.min.js"></script>

  <!-- Nucleo CSS de Boostrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Fuentes personalizadas -->
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Estilos personalizados por Start Bootstrap - SB Admin v4.0.0-beta -->
  <link href="css/styles.css" rel="stylesheet">
</head>

<body style="background-color: #F6F6F6;">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <a class="navbar-brand mb-0 h1" href="#"><span class="white">Posicionamiento de Talentos</span></a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form action="buscaramigos.php" method="get" class="form-inline mr-5" id="buscar">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Buscar Amigos">
            </div>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link mr-lg-2" id="SolicitudesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-inverse fa-user-plus"></i>
            Solicitudes
            <span class="badge badge-danger">3</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="SolicitudesDropdown">
            <h6 class="dropdown-header">Solicitudes De Amistad:</h6>
            <a class="dropdown-item" href="perfil.php">
              <strong>Usuario 1</strong>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="perfil.php">
              <strong>Usuario 2</strong>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="perfil.php">
              <strong>Usuario 3</strong>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link mr-lg-2" id="NotificacionesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-inverse fa-bell"></i>
            Notificaciones
            <span class="badge badge-danger">3</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Notificaciones Nuevas:</h6>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-5" id="ConfDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Configuracion
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Configurar Cuenta</a>
            <a class="dropdown-item" href="#">Configurar Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="signout.php">Cerrar Sesion</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

<section class="publicacion">
    <div class="card">
      <div class="card-header" id="cabecera-card">
        <table>
          <tr>
            <td><a href="#"><img src="img/no-profile.png" class="imagen-inicial-perfil" alt=""></a></td>
            <td><a href="#" class="nombre-usuario">Usuario 1</a></td>
          </tr>
        </table>
      </div>
      <div class="card-body">
        <form action="<?php echo $_SERVER[PHP_SELF]; ?>" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <textarea class="text-comentario" rows="2" id="comment"></textarea>
          </div>
        </form>
      </div>
        <div class="card-footer" id="pie-card">
            <button class="btn btn-danger pull-right">Post</button>
            <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                <li><a href="#"><i class="fa fa-camera"></i></a></li>
                <li><a href="#"><i class=" fa fa-film"></i></a></li>
                <li><a href="#"><i class="fa fa-microphone"></i></a>
                </li>
            </ul>
        </div>
    </div>
</section>

  <!-- Nucleo javascript de Boostrap -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
