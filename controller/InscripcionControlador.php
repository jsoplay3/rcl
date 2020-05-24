<?php
require_once('../model/InscripcionModel.php');

class InscripcionControlador{

  private $insModel;

  public function __construct(){
    $this->insModel = new InscripcionModel();
  }

  public function retornaOptionEps(){
    $option = "
    <option value=''></option>
    <option value='1'>Nueva EPS</option>
    <option value='2'>Sura</option>
    <option value='3'>Sanitas</option>
    <option value='4'>Coomeva</option>
    ";
    return $option;
  }

  public function retornaTallaCamisa(){
    $option = "
    <option value=''></option>
    <option value='1'>S</option>
    <option value='2'>L</option>
    <option value='3'>M</option>
    <option value='4'>XL</option>
    ";
    return $option;
  }

  /*Validar que una inscripcion no exista, sino para crearla*/
  public function validarInscripcion($datos){
    $this->insModel->set("carrera", $datos['carrera']);
    $this->insModel->set("usuario", $datos['usuario']);
    $data = $this->insModel->validarInscripcion();
    $dataIns = mysqli_fetch_array($data);
    if($dataIns['id_insc'] == 0){
      self::insertarInscripcion($datos);
    } else {
      echo "<script>alert('La inscripcion ya se encuentra creada');</script>";
    }
  }

  /*Insertar inscripcion*/
  public function insertarInscripcion($datos){
    $this->insModel->set("carrera", $datos['carrera']);
    $this->insModel->set("usuario", $datos['usuario']);
    $this->insModel->set("eps", $datos['eps']);
    $this->insModel->set("nomContacto", $datos['nomContacto']);
    $this->insModel->set("telContacto", $datos['telContacto']);
    $this->insModel->set("tallaCamisa", $datos['talla']);
    $this->insModel->set("equipo", $datos['equipo']);
    $this->insModel->set("rama", $datos['rama']);
    $this->insModel->set("terminos", $datos['terminos']);
    // $this->insModel->set("terminos", 1);
    $this->insModel->insertarInscripcion();
    echo "<script>alert('La inscripcion se creo correctamente');</script>";
  }

  /*Consulta general de las inscripciones existentes -> Ideal <table>*/
  public function consultarInscripcion(){
    $datos = $this->insModel->consultarInscripcion();
    $inscrip = array();
    while ($data = mysqli_fetch_array($datos)) {
      array_push($inscrip,$data);
    }
    return $inscrip;
  }
}
?>
