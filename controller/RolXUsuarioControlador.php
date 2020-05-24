<?php
require_once('../model/RolXUsuarioModel.php');

class RolXUsuarioControlador{
  private $rolUsuModel;

  public function __construct(){
    $this->rolUsuModel = new RolXUsuarioModel();
  }

  public function insertarRolUsuario($idRol, $idUsu){
    $this->rolUsuModel->set('idRol', $idRol);
    $this->rolUsuModel->set('idUsuario', $idUsu);
    $this->rolUsuModel->insertarRolUsuario();
  }
}

?>
