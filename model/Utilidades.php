<?php

class Utilidades{

  public function __construct(){

  }

  /*Funcion que retorna la fecha actual para insertar en BD de datos o se necesite*/
  public function getFechaActual(){
    $fechaActual = date("Y-m-d");
    return $fechaActual;
  }

  /*Funcion que devuelve el usuario que se encuentre en sesion*/
  public function getUsuarioActual(){
    if(isset($_SESSION)){
      $usuario = $_SESSION['ses'];
    } else {
      $usuario = "";
    }
    return $usuario;
  }

}

?>
