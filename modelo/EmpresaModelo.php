<?php
require_once('Conectar.php');

class EmpresaModelo {

    private $con;
    private $id, $nit, $nombre, $direccion, $telefono, $celular, $email, $contacto,
    $logoUrl, $webUrl, $fbUrl, $tw_url, $intUrl, $ytUrl, $descripcion, $categoria, $status,
    $descripcionProd, $fechaCrea, $fechaModqifica, $userModifica; 
     
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
      PRODUCT_DESCRIPTION, ESTADO_EMPRESA, DATE_CREATED)
      VALUES ('$this->nit', '$this->nombre', '$this->direccion', '$this->telefono', '$this->celular', '$this->email', '$this->contacto',
      '$this->logoUrl', '$this->webUrl', '$this->fbUrl', '$this->tw_url', '$this->intUrl', '$this->ytUrl', '$this->descripcion', 
      '$this->categoria', '$this->descripcionProd', $this->status, NOW())";
      $this->con->consultaSimple($sql, 0);
    }
  
    public function consultarEmpresa(){
      $sql = "SELECT ID, NIT, NAME_COMPANY, ADDRESS_COMPAMY, PHONE_COMPANY, CEL_COMPANY, MAIL_COMPANY, 
      CONTACT_COMPANY, LOGO_URL, WEB_URL, FB_URL, TW_URL, INS_URL, YT_URL, DESCRIPTION_COMPANY, 
      PRODUCT_DESCRIPTION, DATE_CREATED, DATE_UPDATE, USER_UPDATE, 
      CASE CATEGORY_COMPANY 
      WHEN 1 THEN 'Alimentos preparados para consumo inmediato' 
      WHEN 2 THEN 'Productos para el cuidado personal' 
      WHEN 3 THEN 'Productos de limpieza' 
      WHEN 4 THEN 'Productos para el Hogar' 
      WHEN 5 THEN 'Tecnología' 
      WHEN 6 THEN 'Producto artesanales' 
      WHEN 7 THEN 'Productos de entretenimiento y cultura' 
      ELSE ' ' END AS CATEGORY_COMPANY
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

    public function consultarEmpresaPorId(){
      $sql = "SELECT ID, NIT, NAME_COMPANY, ADDRESS_COMPAMY, PHONE_COMPANY, CEL_COMPANY, MAIL_COMPANY, 
      CONTACT_COMPANY, LOGO_URL, WEB_URL, FB_URL, TW_URL, INS_URL, YT_URL, DESCRIPTION_COMPANY, CATEGORY_COMPANY, 
      PRODUCT_DESCRIPTION, DATE_CREATED, DATE_UPDATE, USER_UPDATE, ESTADO_EMPRESA,
      CASE CATEGORY_COMPANY 
      WHEN 1 THEN 'Alimentos preparados para consumo inmediato' 
      WHEN 2 THEN 'Productos para el cuidado personal' 
      WHEN 3 THEN 'Productos de limpieza' 
      WHEN 4 THEN 'Productos para el Hogar' 
      WHEN 5 THEN 'Tecnología' 
      WHEN 6 THEN 'Producto artesanales' 
      WHEN 7 THEN 'Productos de entretenimiento y cultura' 
      ELSE ' ' END AS CATEGORY
      FROM company
      WHERE ID = '$this->id'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

  
    public function actualizarEmpresa(){  
      $sql = "";
      $sql .= "UPDATE company 
      SET NAME_COMPANY='$this->nombre', ADDRESS_COMPAMY='$this->direccion', PHONE_COMPANY='$this->telefono', CEL_COMPANY='$this->celular', 
      MAIL_COMPANY='$this->email', CONTACT_COMPANY='$this->contacto', WEB_URL='$this->webUrl', FB_URL='$this->fbUrl', 
      TW_URL='$this->tw_url', INS_URL='$this->intUrl', YT_URL='$this->ytUrl', DESCRIPTION_COMPANY='$this->descripcion',
      CATEGORY_COMPANY = '$this->categoria', PRODUCT_DESCRIPTION='$this->descripcionProd', 
      DATE_UPDATE=NOW(), USER_UPDATE='$this->user'";

      if($this->logoUrl != ''){
        $sql .=" , LOGO_URL = '$this->logoUrl'";
      }
      
      $sql .=" WHERE NIT = '$this->nit'";
      //print($sql);
      
      $this->con->consultaSimple($sql, 0);

    }

    public function inactivaEmpresa(){
      $sql = "UPDATE company 
      SET ESTADO_EMPRESA = 0
      WHERE ID = $this->id";
      $this->con->consultaSimple($sql, 0);
    }

    public function consultarEmpresaLike(){
      $sql = "";
      $sql .= "SELECT ID, NIT, NAME_COMPANY, ADDRESS_COMPAMY, PHONE_COMPANY, CEL_COMPANY, MAIL_COMPANY, 
      CONTACT_COMPANY, LOGO_URL, WEB_URL, FB_URL, TW_URL, INS_URL, YT_URL, DESCRIPTION_COMPANY, 
      PRODUCT_DESCRIPTION, DATE_CREATED, DATE_UPDATE, USER_UPDATE,
      CASE CATEGORY_COMPANY 
      WHEN 1 THEN 'Alimentos preparados para consumo inmediato' 
      WHEN 2 THEN 'Productos para el cuidado personal' 
      WHEN 3 THEN 'Productos de limpieza' 
      WHEN 4 THEN 'Productos para el Hogar' 
      WHEN 5 THEN 'Tecnología' 
      WHEN 6 THEN 'Producto artesanales' 
      WHEN 7 THEN 'Productos de entretenimiento y cultura' 
      ELSE ' ' END AS CATEGORY_COMPANY
      FROM company
      WHERE  1 = 1 ";
      
      if($this->nombre != ''){
        $sql .= " AND NAME_COMPANY LIKE '%$this->nombre%'";
      }
     if($this->descripcion != ''){
        $sql .= " AND DESCRIPTION_COMPANY LIKE '%$this->descripcion%'";
      } 
      if($this->categoria != 0){
        $sql .= " AND CATEGORY_COMPANY = $this->categoria";
      }
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function consultarEmpresaLikeLanding(){
      $sql = "";
      $sql  = "SELECT ID, NIT, NAME_COMPANY, ADDRESS_COMPAMY, PHONE_COMPANY, CEL_COMPANY, MAIL_COMPANY, 
      CONTACT_COMPANY, LOGO_URL, WEB_URL, FB_URL, TW_URL, INS_URL, YT_URL, DESCRIPTION_COMPANY, 
      PRODUCT_DESCRIPTION, DATE_CREATED, DATE_UPDATE, USER_UPDATE,
      CASE CATEGORY_COMPANY 
      WHEN 1 THEN 'Alimentos preparados para consumo inmediato' 
      WHEN 2 THEN 'Productos para el cuidado personal' 
      WHEN 3 THEN 'Productos de limpieza' 
      WHEN 4 THEN 'Productos para el Hogar' 
      WHEN 5 THEN 'Tecnología' 
      WHEN 6 THEN 'Producto artesanales' 
      WHEN 7 THEN 'Productos de entretenimiento y cultura' 
      ELSE ' ' END AS CATEGORY_COMPANY
      FROM company
      WHERE 1 = 1";
      
      if($this->nombre != ''){
        $sql .= " AND NAME_COMPANY LIKE '%$this->nombre%'";
      }
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
      
      
    }
  }


?>