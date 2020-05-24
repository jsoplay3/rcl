<?php
require_once('Conectar.php');

class InscripcionModel {

  private $con;
  private $id, $carrera, $rama, $usuario, $equipo, $eps, $nomContacto, $telContacto, $tallaCamisa, $terminos;

  public function __construct(){
    $this->con = new Conectar();
  }

  public function set($atributo, $contenido){
    $this->$atributo = $contenido;
  }

  public function validarInscripcion(){
    $sql = "SELECT count(ins_id) id_insc
    FROM ei_inscripcion
    WHERE ins_carrera = {$this->carrera} and ins_usuario = {$this->usuario}";
    $datos = $this->con->consultaRetorno($sql);
    return $datos;
  }

  /*Funcion que inserta los datos del usuario en BD*/
  public function insertarInscripcion(){
    $sql = "INSERT INTO ei_inscripcion(ins_carrera, ins_rama, ins_usuario, ins_equipo, ins_eps, ins_nombreContactoEmergencia,
      ins_telefonoContactoEmergencia, ins_tallaCamisa, ins_terminos)
      VALUES ({$this->carrera}, {$this->rama}, {$this->usuario}, '{$this->equipo}', '{$this->eps}', '{$this->nomContacto}', '{$this->telContacto}',
        '{$this->tallaCamisa}', {$this->terminos})";
        $this->con->consultaSimple($sql, 0);
      }

      public function consultarInscripcion(){
        $sql = "SELECT ins_fechaRegistro fecha_insc,
                        b.usu_documento doc_usuario,
                        concat(b.usu_nombres, ' ', b.usu_apellidos) usuario,
                        b.usu_celular telefono,
                        b.usu_fechaNacimiento fecha,
                        b.usu_correoElectronico mail,
                        d.ts_nombre sangre,
                        b.usu_paisResidencia pais,
                        b.usu_ciudadResidencia ciudad,
                        a.ins_nombreContactoEmergencia contacto,
                        a.ins_telefonoContactoEmergencia telcontacto,
                        a.ins_tallaCamisa talla,
                        a.ins_eps eps,
                        a.ins_equipo equipo,
                        c.rm_categoria distancia,
                        c.rm_nombre categoria

        FROM ei_inscripcion a
        INNER JOIN ei_usuarios b on a.ins_usuario = b.usu_documento
        INNER JOIN ei_ramas c on a.ins_rama = c.rm_id
        INNER JOIN ei_tipoSangre d on d.ts_id = b.usu_tipoSangre
        ";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
      }
    }


    ?>
