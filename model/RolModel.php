<?php
require_once('Conectar.php');

class RolModel {

  private $con;
  private $id, $nombre;

  public function __construct(){
    $this->con = new Conectar();
  }

  public function set($atributo, $contenido){
    $this->$atributo = $contenido;
  }

  public function consultarIdRol(){
    $sql = "SELECT rol_id
    FROM ei_rol
    WHERE rol_nombre = '$this->nombre'";
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }

}
?>
