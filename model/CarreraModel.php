<?php
require_once('Conectar.php');

class CarreraModel {

  private $con;
  private $id, $nombre, $fechaRea, $fechaLimite, $categoria;

  public function __construct(){
    $this->con = new Conectar();
  }

  public function set($atributo, $contenido){
    $this->$atributo = $contenido;
  }

  public function validarCarrera(){
    $sql = "SELECT count(ca_id) idCar
    FROM ei_carrera
    WHERE ca_nombre = '$this->nombre' and ca_fechaRealizacion = '$this->fechaRea'";
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }

  public function insertarCarrera(){
    $sql = "INSERT INTO ei_carrera(ca_nombre, ca_fechaRealizacion, ca_fechaLimiteInscripcion, ca_categoria)
    VALUES ('$this->nombre','$this->fechaRea','$this->fechaLimite',$this->categoria)";
    $this->con->consultaSimple($sql, 0);
  }

  public function consultarCarrera(){
    $sql = "SELECT ca_id, ca_nombre, ca_fechaRealizacion, ca_fechaLimiteInscripcion, ca_categoria
    FROM ei_carrera";
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }

  public function listarCarrera(){
    $sql = "SELECT ca_id, ca_nombre
    FROM ei_carrera";
    print($sql);
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }
}
?>
