<?php
require_once('../model/CategoriaModel.php');

class CategoriaControlador{

  private $catModel;

  public function __construct(){
    $this->catModel = new CategoriaModel();
  }

  public function validarCategoria(){
    $this->catModel->set("nombre", 'infantil');
    $datos = $this->catModel->validarCategoria();
    $carrera = mysqli_fetch_array($datos);
    if($carrera['cant_id'] == 0){
      self::insertarCategoria();
    } else {
      echo "<script>alert('La cateogira ya se encuentra creada');</script>";
    }
  }

  public function insertarCategoria(){
    $this->catModel->set("nombre", 'infantil');
    $this->catModel->insertarCategoria();
    echo "<script>alert('La categoria se creo correctamente');</script>";
  }

  /*Consulta general de las carreras existentes -> Ideal <table>*/
  public function consultarCategoria(){
    $datos = $this->catModel->consultarCategoria();
    $categoria = array();
    while ($data = mysqli_fetch_array($datos)) {
      array_push($categoria,$data);
    }
    return $categoria;
  }

  /*Funcion para listar carreras - ideal para un select*/
  public function listarCategoria(){
    $datos = $this->catModel->listarCategoria();
    $cat = array();
    while ($c = mysqli_fetch_array($datos)) {
      array_push($cat, $c);
    }
    return $cat;
  }

}

?>
