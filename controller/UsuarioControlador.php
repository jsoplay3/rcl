<?php
require_once('../model/UsuarioModel.php');
require_once('../controller/RolControlador.php');
require_once('../controller/RolXUsuarioControlador.php');

class UsuarioControlador{

  private $usuModel;
  private $rolControl;
  private $rolXUsuControl;

  public function __construct(){
    $this->usuModel = new UsuarioModel();
    $this->rolControl = new RolControlador();
    $this->rolXUsuControl = new RolXUsuarioControlador();
  }

  public function retornaOptionTipoDocumento(){
    $option = "
    <option value=''></option>
    <option value='1'>CC - Cedula Ciudadania</option>
    <option value='2'>TI - Tarjeta identidad</option>
    <option value='3'>CE - Cedula Extranjeria</option>
    ";
    return $option;
  }

  public function retornaOptionGenero(){
    $option = "
    <option value=''></option>
    <option value='1'>Masculino</option>
    <option value='2'>Femenino</option>
    <option value='3'>Otro</option>
    ";
    return $option;
  }

  public function retornaOptionTipoSangre(){
    $option = "
    <option value=''></option>
    <option value='1'>A+</option>
    <option value='2'>O+</option>
    <option value='3'>Otro</option>
    ";
    return $option;
  }

  public function retornaOptionPais(){
    $option = "
    <option value=''></option>
    <option value='1'>Colombia</option>
    <option value='2'>Venezuela</option>
    <option value='3'>Brasil</option>
    ";
    return $option;
  }


  public function retornaOptionEstado(){
    $option = "
    <option value=''></option>
    <option value='1'>Antioquia</option>
    <option value='2'>Choco</option>
    <option value='3'>Guajira</option>
    ";
    return $option;
  }

  public function retornaOptionCiudad(){
    $option = "
    <option value=''></option>
    <option value='1'>Rionegro</option>
    <option value='2'>La Ceja</option>
    <option value='3'>La Unión</option>
    ";
    return $option;
  }

  //Funcion que lista todos los usuarios, ideal para una <table>
  public function consultarUsuario(){
    $datos = $this->usuModel->consultarUsuario();
    $usuarios = array();
    while ($data = mysqli_fetch_array($datos)) {
      array_push($usuarios,$data);
    }
    return $usuarios;
  }

  /*Funcion para validar que un usuario no exista*/
  public function validarUsuario($datos){
    $this->usuModel->set("documento", $datos['documento']);
    $data = $this->usuModel->validarUsuario();
    $dataUsu = mysqli_fetch_array($data);
    if($dataUsu['ID_USU'] == 0){
      self::insertarUsuario($datos);
    } else {
      echo "<script>alert('El usuario ya se encuentra creado');</script>";
    }
  }

  /*Funcion para insertar un usuario*/
  public function insertarUsuario($datos){
    $this->usuModel->set("tipoDoc", $datos['tipDocu']);
    $this->usuModel->set("documento", $datos['documento']);
    $this->usuModel->set("nombres", $datos['nombre']);
    $this->usuModel->set("apellidos", $datos['apellidos']);
    $this->usuModel->set("genero", $datos['genero']);
    $this->usuModel->set("fecNac", $datos['fechaNacimiento']);
    $this->usuModel->set("tipoSangre", $datos['tipoSangre']);
    $this->usuModel->set("paisResi", $datos['paisResi']);
    $this->usuModel->set("ciuResi", $datos['ciuResi']);
    $this->usuModel->set("dirResi", $datos['dirResi']);
    $this->usuModel->set("celular", $datos['celular']);
    $this->usuModel->set("email", $datos['correoElec']);
    $this->usuModel->insertarUsuario();
    $idRol = $this->rolControl->consultarIdRol();
    $this->rolXUsuControl->insertarRolUsuario($idRol,$datos['documento']);
    echo "<script>alert('El usuario se creo correctamente');</script>";
  }

  /*Funcion para listar usuarios - ideal para un select*/
  public function listarUsuario(){
    $datos = $this->usuModel->listarUsuarios();
    $usu = array();
    while ($us = mysqli_fetch_array($datos)) {
      array_push($usu, $us);
    }
    return $usu;
  }
}

?>
