<?php
require_once('Conectar.php');

class UsuarioModelo {

    private $con;

    private $id, $document, $name, $mail, $pass, $state, $type, $date_created,
    $date_update, $user_update; 
     
    public function __construct(){
      $this->con = new Conectar();
    }
  
    public function set($atributo, $contenido){
      $this->$atributo = $contenido;
    }
  
    public function validarUsuario(){
      $sql = "SELECT COUNT(*)  CANT_ID
      FROM users 
      WHERE DOCUMENT = '$this->document' AND MAIL = '$this->mail'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }
  
    public function insertarUsuario(){
      $sql = "INSERT INTO users(DOCUMENT, NAME, MAIL, PASS, DATE_CREATED) 
      VALUES ('$this->document','$this->name','$this->mail', '$this->pass', NOW())";
      $this->con->consultaSimple($sql, 0);
    }
  
    public function consultarUsuarios(){
      $sql = "SELECT ID, DOCUMENT, NAME, MAIL, PASS, 
      CASE STATE WHEN 1 THEN 'Activo' WHEN 0 THEN 'Inactivo' ELSE ' ' END AS STATE_USER ,
      TYPE, STATE
      FROM users";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function consultarUsuarioDocumento(){
      $sql = "SELECT ID, DOCUMENT, NAME, MAIL, PASS, CASE STATE WHEN 1 THEN 'Activo' WHEN 0 THEN 'Inactivo' ELSE ' ' END AS STATE_USER ,
      TYPE, DATE_CREATED,DATE_UPDAT, USER_UPDATE 
      FROM users
      WHERE DOCUMENT = '$this->document'";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function inactivarUsuario(){
      $sql = "UPDATE users 
      SET STATE = $this->state
      WHERE ID = $this->id";
      $this->con->consultaSimple($sql, 0);
    }
  }


?>