<?php

  class usuario{
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

    function verificar($usuario){
      $con = conexion_db("root", "");
      $consulta = $con->prepare("select * from usuario where correo_e = :correo_e");
      $consulta->execute(array(':correo_e' => $email));
      $resultado = $consulta->fetchAll();
      return $resultado;
    }
  }
 ?>
