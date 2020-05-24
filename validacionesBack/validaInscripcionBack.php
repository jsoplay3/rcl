<?php
require_once("../controller/InscripcionControlador.php");

// print_r($_POST);

$carrera=$_POST['carreraSolicitada'];
$usuario=$_POST['usuarioSolicitado'];
$eps=$_POST['epsSolicitada'];
$nombreContactoEmergencia=$_POST['nombreContactoEmergenciaSolicitado'];
$telefonoContactoEmergencia=$_POST['telefonoContactoEmergenciaSolicitado'];
$parentescoContactoEmergencia=$_POST['parentescoContactoEmergenciaSolicitado'];
$talla=$_POST['tallaCamisaSolicitada'];
$terminos=$_POST['teminosSolicitados'];


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
  $datos = array("carrera" => $carrera, "usuario" => $usuario, "eps" => $eps, "nomContacto" => "$nombreContactoEmergencia",
  "telContacto" => "$telefonoContactoEmergencia",
  "parentContacto" => "$parentescoContactoEmergencia", "talla" => $talla,  "terminos" => $terminos);
  $obj = new InscripcionControlador();
  $obj->validarInscripcion($datos);

//}

?>
