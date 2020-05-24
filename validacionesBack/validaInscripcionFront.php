<?php
require_once("../controller/UsuarioControlador.php");
require_once("../controller/InscripcionControlador.php");

// print_r($_POST);

$tipoDocumento=$_POST['tipoDocumentoSolicitado'];
$documento=$_POST['documentoSolicitado'];
$nombres=$_POST['nombreSolicitado'];
$apellidos=$_POST['apellidoSolicitado'];
$genero=$_POST['generoSolicitado'];
$fNacimiento=$_POST['fechaNacimientoSolicitado'];
$fechaNacimiento = date('Y-m-d', strtotime($_POST['fechaNacimientoSolicitado']));
$tipoSangre=$_POST['tipoSangreSolicitado'];
$paisResi=$_POST['paisResidenciaSolicitado'];
$ciuResi=$_POST['ciudadResidenciaSocilitado'];
$dirResi=$_POST['direccionResidenciaSolicitado'];
$celular=$_POST['telefonoSolicitado'];
$correoElectronico=$_POST['correoElectronicoSolicitado'];
$carrera=$_POST['carreraSolicitada'];
$categoria=$_POST['categoriaSolicitado'];
$equipo=$_POST['equipoSolicitado'];
$eps=$_POST['epsSolicitada'];
$nombreContactoEmergencia=$_POST['nombreContactoEmergenciaSolicitado'];
$telefonoContactoEmergencia=$_POST['telefonoContactoEmergenciaSolicitado'];
$talla=$_POST['tallaCamisaSolicitada'];
$terminos=$_POST['teminosSolicitados'];

$datosUsuario = array("tipDocu" => $tipoDocumento, "documento" => "$documento", "nombre" => "$nombres", "apellidos" => "$apellidos", "genero" => $genero,
"fechaNacimiento" => "$fechaNacimiento", "correoElec" => "$correoElectronico", "tipoSangre"=>$tipoSangre,
"paisResi" => $paisResi, "ciuResi" => $ciuResi, "dirResi" => $dirResi, "celular" => $celular);
$objUsu = new UsuarioControlador();
$objUsu->validarUsuario($datosUsuario);

$datosInscrip = array("carrera" => $carrera, "usuario" => $documento, "eps" => $eps, "nomContacto" => "$nombreContactoEmergencia",
"telContacto" => "$telefonoContactoEmergencia", "talla" => $talla,  "terminos" => $terminos, "equipo" => $equipo, "rama" => $categoria);
$objInc = new InscripcionControlador();
$objInc->validarInscripcion($datosInscrip);



header("Location:https://biz.payulatam.com/L0c3e44B5D062C5");


/* $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

$valoresFecha = explode('/', $fechaNacimiento);
count($valoresFecha);
checkdate($valores[1], $valores[0], $valores[2]);

if($tipoDocumento=="" || $documento=="" || $nombres=="" || $apellidos=="" || $genero=="" || $fechaNacimiento=="" || $correoElectronico=="" || $contrasenia==""){
  header("Location: ../login.php");
}
// Valida formato de correo electrónico
elseif(filter_var($correoElectronico, FILTER_VALIDATE_EMAIL) === FALSE){
  header("Location: ../login.php");
}
// Valida solo texto para el nombre
elseif(preg_match($patron_texto, $nombres) ){
  header("Location: ../login.php");
}
// Valida solo texto para el apellido
elseif(preg_match($patron_texto, $apellidos) ){
  header("Location: ../login.php");
}

elseif(count($valoresFecha) !== 3 && !checkdate($valores[1], $valores[0], $valores[2])){
  header("Location: ../login.php");
}


else{ */
  /*$datos = array("carrera" => $carrera, "usuario" => $usuario, "eps" => $eps, "nomContacto" => "$nombreContactoEmergencia",
  "telContacto" => "$telefonoContactoEmergencia",
  "parentContacto" => "$parentescoContactoEmergencia", "talla" => $talla,  "terminos" => $terminos);
  $obj = new InscripcionControlador();
  $obj->validarInscripcion($datos);*/

//}

?>
