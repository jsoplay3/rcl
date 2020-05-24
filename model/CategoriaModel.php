<?php
require_once('Conectar.php');

class CategoriaModel {

  private $con;
  private $id, $nombre;

  public function __construct(){
    $this->con = new Conectar();
  }

  public function set($atributo, $contenido){
    $this->$atributo = $contenido;
  }

  public function validarCategoria(){
    $sql = "SELECT count(ca_id) cant_id
    FROM ei_categoria
    WHERE ca_nombre = '$this->nombre'";
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }

  public function insertarCategoria(){
    $sql = "INSERT INTO ei_categoria(ca_nombre) VALUES ('$this->nombre')";
    $this->con->consultaSimple($sql, 0);
  }

  public function consultarCategoria(){
    $sql = "SELECT ca_id, ca_nombre FROM ei_categoria";
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }

  public function listarCategoria(){
    $sql = "SELECT ca_id, ca_nombre
    FROM ei_categoria";
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }
}
?>
