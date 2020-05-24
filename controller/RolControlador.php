<?php
require_once('../model/RolModel.php');

class RolControlador{
  private $rolModel;

  public function __construct(){
    $this->rolModel = new RolModel();
  }

  public function consultarIdRol(){
    $this->rolModel->set("nombre", "Corredor");
    $rol = $this->rolModel->consultarIdRol();
    $r = mysqli_fetch_array($rol);
    $idRol = $r['rol_id'];
    return $idRol;
  }
}

?>
