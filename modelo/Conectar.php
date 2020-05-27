<?php

class Conectar{
  private $host;
  private $user;
  private $pass;
  private $db;

  private $datos = array(
    "host"=>'localhost',
    "user"=>'root',
    "pass"=>'',
    "db"=>'compralocal',
  );
  private $con;

  public function __construct(){
    $this->con = new \mysqli($this->datos['host'],
    $this->datos['user'],
    $this->datos['pass'],
    $this->datos['db']);
  }

  public function consultaSimple($sql,$ult){
    $stmt = $this->con->query($sql);
    if($ult == 1){
      if($stmt === TRUE){
        $last_id = $this->con->insert_id;
        return $last_id;
      }
    }
  }

  public function consultaRetorno($sql){
    $datos = $this->con->query($sql);
    return $datos;
  }

  public function autenticaUsuario($user,$pass){
		$sql = "select
									  ID,
									  DOCUMENT,
									  NAME,
									  MAIL,
									  PASS,
									  STATE,
									  TYPE
									  
									  from users 

									  where MAIL='$user' && PASS='$pass'";

    $datos = $this->con->query($sql);
    return $datos;
  }
}
?>
