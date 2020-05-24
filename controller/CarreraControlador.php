<?php
require_once('../model/CarreraModel.php');

class CarreraControlador{

  private $carModel;

  public function __construct(){
    $this->carModel = new CarreraModel();
  }

  public function retornaOptionCarrera(){
    $option = "
    <option value=''></option>
    <option value='1'>Carrera de la mujer</option>
    <option value='2'>Carrera por la discapacidad</option>
    <option value='3'>Media Maratón</option>
    ";
    return $option;
  }

  public function validarCreaCarrera(){
    $this->carModel->set("nombre", 'prueba');
    $this->carModel->set("fechaRea", '2019-04-28');
    $datos = $this->carModel->validarCarrera();
    $carrera = mysqli_fetch_array($datos);
    if($carrera['idCar'] == 0){
      self::insertarCarrera();
    } else {
      echo "<script>alert('La carrera ya se encuentra creada');</script>";
    }
  }

  public function insertarCarrera(){
    $this->carModel->set("nombre", 'prueba');
    $this->carModel->set("fechaRea", '2019-04-28');
    $this->carModel->set("fechaLimite", '2019-04-27');
    $this->carModel->set("categoria", 1);
    $this->carModel->insertarCarrera();
    echo "<script>alert('La carrera se creo correctamente');</script>";
  }

  /*Consulta general de las carreras existentes -> Ideal <table>*/
  public function consultarCarrera(){
    $datos = $this->carModel->consultarCarrera();
    $carrera = array();
    while ($data = mysqli_fetch_array($datos)) {
      array_push($carrera,$data);
    }
    return $carrera;
  }

  /*Funcion para listar carreras - ideal para un select*/
  public function listarCarrera(){
    $datos = $this->carModel->listarCarrera();
    $car = array();
    while ($c = mysqli_fetch_array($datos)) {
      array_push($car, $c);
    }
    return $car;
  }

}

?>
