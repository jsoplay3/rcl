<?php
require_once('Conectar.php');

class RolXUsuarioModel {

  private $con;
  private $id, $idRol, $idUsuario;

  public function __construct(){
    $this->con = new Conectar();
  }

  public function set($atributo, $contenido){
    $this->$atributo = $contenido;
  }

  public function insertarRolUsuario(){
    $sql = "INSERT INTO ei_usuarioXRol(uxr_rol, uxr_usuario)
    VALUES ($this->idRol,'$this->idUsuario')";
    $this->con->consultaSimple($sql,0);
  }

}
?>
