<!--
#clases.php - 1.0.0

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

  class usuario{
    // Permite registrar el usuario a la base de datos.
    function registrar($datos){
      $con = conexion_db("root", "");
      $consulta = $con->prepare("insert into usuario(id, nombre, correo_e, contrase, universidad, perfil_profesional, foto_perfil) values(null, :nombre, :correo_e, :contrase, :universidad, :perfil_profesional, :foto_perfil)");
      $consulta->execute(array(':nombre' => $datos[0],
                    ':correo_e' => $datos[1],
                    ':contrase' => $datos[2],
                    ':universidad' => $datos[3],
                    ':perfil_profesional' => $datos[4],
                    ':foto_perfil' => 'img/sin foto de perfil.jpg'
                ));
    }

    // Verifica si el correo del usuario a registrar existe en la base de datos.
    function verificar($email){
      $con = conexion_db("root", "");
      $consulta = $con->prepare("select * from usuario where correo_e = :correo_e");
      $consulta->execute(array(':correo_e' => $email));
      $resultado = $consulta->fetchAll();
      return $resultado;
    }
  }
 ?>
