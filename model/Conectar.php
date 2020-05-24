<?php
//namespace model;
class Conectar{
  private $host;
  private $user;
  private $pass;
  private $db;

  private $datos = array(
    "host"=>'localhost',
    "user"=>'root',
    "pass"=>'',
    "db"=>'eventosImer',
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
}
?>
