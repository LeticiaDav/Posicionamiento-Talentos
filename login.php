<!--
#login.php - 1.0.0

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
  require('clases/clases.php');
  if(isset($_POST['iniciar'])){
    $password = hash('sha512', $_POST['password']);
    $datos = array(limpiar($_POST['email']), $password);
    if(datos_vacios($datos) == false){
      if(strpos($datos[0], " ") == false){
        $resultados = usuario::verificar($datos[0]);
        if(empty($resultados) == false){
          if($datos[1] == $resultados[0]["contrase"]){
            $_SESSION['id'] = $resultados[0]["id"];
            $_SESSION['email'] = $resultados[0]["correo_e"];
            header('location: index.php');
          }
        }
      }
    }
  }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Posicionamiento de Talentos | Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- DESCOMENTAR LA LINEA DE ABAJO CUANDO EL PROYECTO ESTE EN VERSION FINAL -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css"/> -->
</head>

<body style="background-color: #F6F6F6; padding-top:60px;">
    <div class="ui centered grid container">
        <div class="row"></div>
        <div class="ui raised very padded center aligned text container segment">
            <div class="ui segment inverted">
                <h2 class="ui header">Iniciar Sesión</h2> </div>
            <!-- formulario -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="ui form" method="post" id="frm-iniciar-sesion">
              <br>
                <!-- correo electronico -->
                <div class='field' style="padding:5px;">
                    <div class="ui left icon input"> <i class="mail outline icon"></i>
                        <input type="email" name="email" placeholder="Correo Electronico" autofocus="true"> </div>
                </div>
                <!-- password -->
                <div class='field' style="padding:5px;">
                    <div class="ui left icon input"> <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Contraseña"> </div>
                </div>
                <!-- boton de iniciar sesion -->
                <br>
                <div class="actions">
                    <button class="fluid ui green button" type="submit" value="Iniciar" name="iniciar">Entrar</button>
                </div>
            </form>
            <div class="iniciar">
                <div class="ui hidden divider"></div> ¿No tienes una cuenta?<a href="registro.php" class="ui"> Registrar</a> </div>
        </div>
    </div>
    <script src="js/semantic.min.js"></script>
</body>

</html>
