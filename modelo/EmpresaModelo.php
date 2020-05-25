<?php
require_once('Conectar.php');

class EmpresaModelo {

    private $con;
    private $id, $nit, $nombre, $direccion, $telefono, $celular, $email, $contacto,
    $logoUrl, $webUrl, $fbUrl, $tw_url, $intUrl, $ytUrl, $descripcion, $categoria,
    $descripcionProd, $fechaCrea, $fechaModqifica, $userModifica; 

    private $estado, $user;
     
    public function __construct(){
      $this->con = new Conectar();
    }
  
    public function set($atributo, $contenido){
      $this->$atributo = $contenido;
    }
  
    public function validarEmpresa(){
      $sql = "SELECT COUNT(*)  CANT_ID
      FROM company 
      WHERE NAME_COMPANY = '$this->nombre' AND NIT = '$this->nit'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }
  
    public function insertarEmpresa(){
      $sql = "INSERT INTO company(NIT, NAME_COMPANY, ADDRESS_COMPAMY, PHONE_COMPANY, CEL_COMPANY, MAIL_COMPANY, 
      CONTACT_COMPANY, LOGO_URL, WEB_URL, FB_URL, TW_URL, INS_URL, YT_URL, DESCRIPTION_COMPANY, CATEGORY_COMPANY, 
      PRODUCT_DESCRIPTION, DATE_CREATED)
      VALUES ('$this->nit', '$this->nombre', '$this->direccion', '$this->telefono', '$this->celular', '$this->email', '$this->contacto',
      '$this->logoUrl', '$this->webUrl', '$this->fbUrl', '$this->tw_url', '$this->intUrl', '$this->ytUrl', '$this->descripcion', 
      '$this->categoria', '$this->descripcionProd', NOW())";
      $this->con->consultaSimple($sql, 0);
    }
  
    public function consultarEmpresa(){
      $sql = "SELECT ID, NIT, NAME_COMPANY, ADDRESS_COMPAMY, PHONE_COMPANY, CEL_COMPANY, MAIL_COMPANY, 
      CONTACT_COMPANY, LOGO_URL, WEB_URL, FB_URL, TW_URL, INS_URL, YT_URL, DESCRIPTION_COMPANY, CATEGORY_COMPANY, 
      PRODUCT_DESCRIPTION, DATE_CREATED, DATE_UPDATE, USER_UPDATE
      FROM company
      WHERE ESTADO_EMPRESA = 1";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function consultarEmpresaPorNit(){
      $sql = "SELECT ID, NIT, NAME_COMPANY, ADDRESS_COMPAMY, PHONE_COMPANY, CEL_COMPANY, MAIL_COMPANY, 
      CONTACT_COMPANY, LOGO_URL, WEB_URL, FB_URL, TW_URL, INS_URL, YT_URL, DESCRIPTION_COMPANY, CATEGORY_COMPANY, 
      PRODUCT_DESCRIPTION, DATE_CREATED, DATE_UPDATE, USER_UPDATE
      FROM company
      WHERE NIT = '$this->nit'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }
  
    public function actualizarEmpresa(){
      $sql = "UPDATE company 
      SET ADDRESS_COMPAMY='$this->direccion', PHONE_COMPANY='$this->telefono', CEL_COMPANY='$this->celular', 
      MAIL_COMPANY='$this->email', CONTACT_COMPANY='$this->contacto', WEB_URL='$this->webUrl', FB_URL='$this->fbUrl', 
      TW_URL='$this->tw_url', INS_URL='$this->intUrl', YT_URL='$this->ytUrl', DESCRIPTION_COMPANY='$this->descripcion',
      PRODUCT_DESCRIPTION='$this->descripcionProd', DATE_UPDATE=NOW(), USER_UPDATE='$this->user'
      WHERE NIT = '$this->nit'";
      $this->con->consultaSimple($sql, 0);

    }

    public function inactivaEmpresa(){
      $sql = "UPDATE company 
      SET ESTADO_EMPRESA = 0
      WHERE ID = $this->id";
      $this->con->consultaSimple($sql, 0);
    }
  }


?>