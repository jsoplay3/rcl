<?php
require_once('../modelo/UsuarioModelo.php');

class UsuarioControlador{

  private $usuModel;

  public function __construct(){
    $this->usuModel = new UsuarioModelo();
  }

  //Validar si un usuario se encuentra creado
  public function validarUsuario($data){
    $this->usuModel->set("document", $data['document']);
    $datos = $this->usuModel->validarUsuario();
    $empresa = mysqli_fetch_array($datos);
    if($empresa['CANT_ID'] == 0){
      self::insertarUsuario($data);
    } else {
      echo "<script>alert('El usuario ya se encuentra creado');</script>";
    }
  }

  //Insertar la informacion de un usuario
  public function insertarUsuario($data){
    $this->usuModel->set("document", $data['document']);
    $this->usuModel->set("name", $data['name']);
    $this->usuModel->set("mail", $data['mail']);
    $this->usuModel->set("pass", $data['pass']);
    $this->usuModel->insertarUsuario();
    echo "<script>alert('Usuario creado correctamente');
    location.href='login.php';</script>";
  }


  public function consultarUsuarios(){
    $datos = $this->usuModel->consultarUsuarios();
    while($row = $datos->fetch_array()){
      $rows[] = $row;
    }
    return $rows;
  }

  public function consultarUsuarioDocumento($data){
    $this->usuModel->set("document", $data);
    $datos = $this->usuModel->consultarUsuarioDocumento();
    $empresa = array();
    while($row = $datos->fetch_array()){
      $rows[] = $row;
    }
    return $rows;
  }

  public function inactivaUsuario($data){
    $this->usuModel->set("id", $data['idUser']);
    if($data['estado'] == 1){
      $estado = 0;
    } else {
      $estado = 1;
    }
    $this->usuModel->set("state", $estado);
    $datos = $this->usuModel->inactivarUsuario();
    echo "<script>alert('Usuario inactivado correctamente');
    location.href='adminUser.php';</script>";
  }
}


?>