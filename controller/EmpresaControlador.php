<?php
require_once('../modelo/EmpresaModelo.php');

class EmpresaControlador{

  private $empModel;

  public function __construct(){
    $this->empModel = new EmpresaModelo();
  }

  //Validar si una empresa se encuentra creada
  public function validarEmpresa($data){
    $this->empModel->set("nombre", $data['name_company']);
    $this->empModel->set("nit", $data['nit']);
    $datos = $this->empModel->validarEmpresa();
    $empresa = mysqli_fetch_array($datos);
    if($empresa['CANT_ID'] == 0){
      self::insertarEmpresa($data);
    } else {
      echo "<script>alert('La empresa ya se encuentra creada');</script>";
    }
  }

  public function almacenarImgLogo($data){
    $nit=str_replace("-", "", $data['nit']);
    $initialsCompany= substr($data['name_company'],0,2);
    // echo "iniciales ".$initialsCompany."<br>";
    $nameSaveLogo=$initialsCompany.$nit.".jpg";

    copy($_FILES['logo_url']['tmp_name'], '../utils/img_logo_coompanies/'.$nameSaveLogo);
    //echo "La foto se registro en el servidor.<br>";
    // echo "<img src='../utils/img_logo_coompanies/".$nameSaveLogo."' width='300px'/>";

    return $nameSaveLogo;
  }

  //Insertar la informacion de una empresa
  public function insertarEmpresa($data){
    $nombreLogo = self::almacenarImgLogo($data);
    $this->empModel->set("nit", $data['nit']);
    $this->empModel->set("nombre", $data['name_company']);
    $this->empModel->set("direccion", $data['address_company']);
    $this->empModel->set("telefono", $data['phone_company']);
    $this->empModel->set("celular", $data['cel_company']);
    $this->empModel->set("email", $data['mail_company']);
    $this->empModel->set("contacto", $data['contact_company']);
    $this->empModel->set("logoUrl", $nombreLogo);
    $this->empModel->set("webUrl", $data['web_url']);
    $this->empModel->set("fbUrl", $data['fb_url']);
    $this->empModel->set("tw_url", $data['tw_url']);
    $this->empModel->set("intUrl", $data['ins_url']);
    $this->empModel->set("ytUrl", $data['yt_url']);
    $this->empModel->set("descripcion", $data['description_company']);
    $this->empModel->set("categoria", $data['category_company']);
    $this->empModel->set("descripcionProd", $data['product_description']);
    $estatus = isset($data['status_company']) == ''?0:1;
    $this->empModel->set("status", $estatus);
    $this->empModel->insertarEmpresa();
    echo "<script>alert('Empresa creada correctamente');
    location.href='formCompany.php';</script>";
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
    $this->empModel->set("nit", $data);
    $datos = $this->empModel->consultarEmpresaPorNit();
    $empresa = array();
    while($row = $datos->fetch_array()){
      $rows[] = $row;
    }
    return $rows;
  }

  public function consultarEmpresaPorId($id){
    $this->empModel->set("id", $id);
    $datos = $this->empModel->consultarEmpresaPorId();
    $empresa = array();
    while($row = $datos->fetch_array()){
      $rows[] = $row;
    }
    return $rows;
  }

  public function consultarEmpresaPorIdOnly($id){
    $this->empModel->set("id", $id);
    $datos = $this->empModel->consultarEmpresaPorId();
    $row = $datos->fetch_array();
    return $row;
  }

  public function actualizarEmpresa($data){

    if($_FILES['logo_url']['size'] > 0){
      $nombreLogo = self::almacenarImgLogo($data);
      $this->empModel->set('logoUrl', $nombreLogo);
    }

    $this->empModel->set("nit", $data['nit']);
    $this->empModel->set("nombre", $data['name_company']);
    $this->empModel->set("direccion", $data['address_company']);
    $this->empModel->set("telefono", $data['phone_company']);
    $this->empModel->set("celular", $data['cel_company']);
    $this->empModel->set("email", $data['mail_company']);
    $this->empModel->set("contacto", $data['contact_company']);
    $this->empModel->set("webUrl", $data['web_url']);
    $this->empModel->set("fbUrl", $data['fb_url']);
    $this->empModel->set("tw_url", $data['tw_url']);
    $this->empModel->set("intUrl", $data['ins_url']);
    $this->empModel->set("ytUrl", $data['yt_url']);
    $this->empModel->set("descripcion", $data['description_company']);
    $this->empModel->set("categoria", $data['category_company']);
    $this->empModel->set("descripcionProd", $data['product_description']);
    $datos = $this->empModel->actualizarEmpresa();
    echo "<script>alert('Empresa modificada correctamente');
    location.href='adminCompany.php';</script></script>";
  }

  public function inactivaEmpresa($data){
    $this->empModel->set("id", $data['deleteId']);
    $datos = $this->empModel->inactivaEmpresa();
    echo "<script>alert('Empresa inactivada correctamente');
    location.href='adminCompany.php';</script>";
  }

  public function consultarEmpresaLike($data){
    $this->empModel->set("nombre", $data['nameCom']);
    $this->empModel->set("descripcion", $data['descCom']);
    $this->empModel->set("categoria", $data['category_company']);
    $datos = $this->empModel->consultarEmpresaLike();
    return $datos;
  }
}


?>