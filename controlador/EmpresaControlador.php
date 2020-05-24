<?php
require_once('./modelo/EmpresaModelo.php');

class EmpresaControlador{

  private $empModel;

  public function __construct(){
    $this->empModel = new EmpresaModelo();
  }

  //Validar si una empresa se encuentra creada
  public function validarEmpresa($data){
    $this->empModel->set("nombre", $data['']);
    $this->empModel->set("nit", $data['']);
    $datos = $this->empModel->validarEmpresa();
    $empresa = mysqli_fetch_array($datos);
    if($empresa['CANT_ID'] == 0){
      self::insertarEmpresa($data);
    } else {
      echo "{mensaje:La empresa ya se encuentra creada'}";
    }
  }

  //Insertar la informacion de una empresa
  public function insertarEmpresa($data){
    $this->empModel->set("nit", $data['nit']);
    $this->empModel->set("nombre", $data['name_company']);
    $this->empModel->set("direccion", $data['address_company']);
    $this->empModel->set("telefono", $data['phone_company']);
    $this->empModel->set("celular", $data['cel_company']);
    $this->empModel->set("email", $data['mail_company']);
    $this->empModel->set("contacto", $data['contact_company']);
    $this->empModel->set("logoUrl", $data['logo_url']);
    $this->empModel->set("webUrl", $data['web_url']);
    $this->empModel->set("fbUrl", $data['fb_url']);
    $this->empModel->set("tw_url", $data['tw_url']);
    $this->empModel->set("intUrl", $data['ins_url']);
    $this->empModel->set("ytUrl", $data['yt_url']);
    $this->empModel->set("descripcion", $data['description_company']);
    $this->empModel->set("categoria", $data['category_company']);
    $this->empModel->set("descripcionProd", $data['product_description']);
    //$this->empModel->set("fechaCrea", $data['date_created']);
    $this->empModel->insertarEmpresa();
    echo "{mensaje:Empresa creada correctamente'}";
  }


  public function consultarEmpresa(){
    $datos = $this->empModel->consultarEmpresa();
    $empresa = array();
    /*while ($data = mysqli_fetch_array($datos)) {
      print_r($data['ID']);
    }*/
    while($row = $datos->fetch_array()){
      $rows[] = $row;
    }
    return $rows;

  }

  public function consultarEmpresaPorNit($data){
    $this->empModel->set("nit", $data['nit']);
    $datos = $this->empModel->consultarEmpresaPorNit();
    $empresa = array();
    while($row = $datos->fetch_array()){
      $rows[] = $row;
    }
    return $rows;
  }

  /*Funcion para listar carreras - ideal para un select*/
  /*public function listarCategoria(){
    $datos = $this->catModel->listarCategoria();
    $cat = array();
    while ($c = mysqli_fetch_array($datos)) {
      array_push($cat, $c);
    }
    return $cat;
  }*/

}


?>