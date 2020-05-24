<?php
require_once('Conectar.php');

class UsuarioModel {

  private $con, $util;
  private $id, $tipoDoc, $documento, $nombres, $apellidos, $genero, $fecNac, $tipoSangre, $paisResi, $ciuResi, $dirResi, $celular, $email;

  public function __construct(){
    $this->con = new Conectar();
  }

  public function set($atributo, $contenido){
    $this->$atributo = $contenido;
  }

  /*Funcion que valida si un usuario ya esta creado en BD*/
  public function validarUsuario(){
    $sql = "SELECT COUNT(usu_id) ID_USU
    FROM ei_usuarios
    WHERE usu_documento = '{$this->documento}'";
    $dataUsu = $this->con->consultaRetorno($sql);
    return $dataUsu;
  }

  /*Funcion que inserta los datos del usuario en BD*/
  public function insertarUsuario(){
    $sql = "INSERT INTO ei_usuarios(usu_tipoDocumento, usu_documento, usu_nombres, usu_apellidos, usu_genero,
      usu_fechaNacimiento, usu_tipoSangre, usu_paisResidencia, usu_ciudadResidencia, usu_direccionResidencia, usu_celular,
      usu_correoElectronico) VALUES ({$this->tipoDoc},'{$this->documento}','{$this->nombres}','{$this->apellidos}',
        {$this->genero},'{$this->fecNac}',{$this->tipoSangre}, '{$this->paisResi}', '{$this->ciuResi}',
        '{$this->dirResi}',' {$this->celular}', '{$this->email}')";
        $this->con->consultaSimple($sql, 0);
      }

      public function consultarUsuario(){
        $sql = "SELECT usu_tipoDocumento, usu_documento, usu_nombres, usu_apellidos, usu_genero,
        usu_fechaNacimiento, usu_tipoSangre, usu_paisResidencia, usu_ciudadResidencia,
        usu_direccionResidencia, usu_celular, usu_correoElectronico
        FROM ei_usuarios";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
      }

      public function listarUsuarios(){
        $sql = "SELECT usu_documento, concat(usu_documento, ' - ', usu_nombres, ' ', usu_apellidos) usuario
        FROM ei_usuarios";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
      }
    }
    ?>
