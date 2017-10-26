
<!--
#registro.php - 1.0.1

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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Posicionamiento de Talentos | Registro de usuario</title>
    <link rel="stylesheet" type="text/css" href="css/semantic.css">

    <!-- DESCOMENTAR LA LINEA DE ABAJO CUANDO EL PROYECTO ESTE EN VERSION FINAL -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css"/> -->
  </head>
  <body style="background-color: #F6F6F6;">
 <div class="ui centered grid container">
    <div class="row"></div>
    <div class="ui raised very padded center aligned text container segment">
      <div class="ui segment inverted nightli">
        <h2 class="ui header">Registro de Usuario</h2>
      </div>
      <br>
      <br>
     <form class="ui middle aligned grid"  method="post">
       <!-- nombre completo -->
      <div class='ui centered aligned container' style="padding:5px;">
        <div class="ui left icon input">
          <i class="user icon"></i>
          <input type="nombre" name="nombre" placeholder="Nombre Completo" autofocus="true">
        </div>
      </div>
      <!-- correo electronico -->
      <div class='ui centered aligned container' style="padding:5px;">
        <div class="ui left icon input">
          <i class="mail outline icon"></i>
          <input type="email" name="email" placeholder="Correo Electronico" autofocus="true">
        </div>
      </div>
      <!-- password -->
      <div class='ui centered aligned container' style="padding:5px;">
        <div class="ui left icon input">
          <i class="lock icon"></i>
          <input type="password" name="password" placeholder="Contraseña">
        </div>
      </div>
      <!-- universidad -->
      <div class='ui centered aligned container' style="padding:5px;">
        <div class="ui left icon input">
          <i class="university icon"></i>
          <input type="university" name="university" placeholder="Universidad" autofocus="true">
        </div>
      </div>
      <!-- perfil profesional -->
      <div class='ui centered aligned container' style="padding:5px;">
        <select name="perfil" class="ui selection dropdown">
          <option value="diseñadorweb">Diseñador Web</option>
          <option value="programador">Programador</option>
          <option value="especialistaredes">Especialista en Redes</option>
          <option value="especialistamovil">Especialista en Moviles</option>
          <option value="diseñadorgrafico">Diseñador Grafico</option>
          <option value="especialistalinux">Especialista en Linux</option>
        </select>
      </div>
      </form>
      <br>
      <div class='ui centered aligned container' style="padding:5px;">
        <div class="actions">
          <button class="ui green button" type="submit" style="width:40%;">Registrar</button>
        </div>
        <div class="ui hidden divider"></div>
                                    ¿Ya tienes una cuenta?<a href="signup.html" class="ui"> Iniciar Sesión</a>
      </div>
      <br>

    </div>
  </div>
  <script src="js/semantic.min.js"></script>
  <script>
  $('.ui.dropdown').dropdown();
  </script>
  </body>
</html>
