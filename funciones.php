
<!--
#funciones.php - 1.0.0

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
function conexion_db($usuario, $contra){
  try {
    $con = new PDO('mysql:host=localhost; dbname=bd_pos_talent', $usuario, $contra);
    return $con;
  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function datos_vacios($datos){
  $vacio = false;
  $tamanio = count($datos);
  for($i = 0; $i < $tamanio; $i++){
    if(empty($datos[$i])){
      $vacio = true;
      break;
    }
  }
  return $vacio;
}

function limpiar($datos){
  $tamanio = count($datos);
  for($i = 0; $i < $tamanio; $i++){
    if($i != 2){
      $datos[$i] = htmlspecialchars($datos[$i]);
      $datos[$i] = trim($datos[$i]);
      $datos[$i] = stripcslashes($datos[$i]);
    }
  }
  return $datos;
}


/*
Verificar la sesion de un usuario
Si un usuario no ha iniciado sesion
redirigira a la pagina de login.php
*/
function verificar_sesion(){
  if(!isset($_SESSION['id'])){
    header('location: login.php');
  }
}
?>
