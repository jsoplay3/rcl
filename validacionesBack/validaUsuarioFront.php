<?php
require_once("../controller/UsuarioControlador.php");

// print_r($_POST);

$tipoDocumento=$_POST['tipoDocumentoSolicitado'];
$documento=$_POST['documentoSolicitado'];
$nombres=$_POST['nombreSolicitado'];
$apellidos=$_POST['apellidoSolicitado'];
$genero=$_POST['generoSolicitado'];
$fechaNacimiento=$_POST['fechaNacimientoSolicitado'];
$tipoSangre=$_POST['tipoSangreSolicitado'];
$paisResi=$_POST['paisResidenciaSolicitado'];
$estadoResi=$_POST['estadoResidenciaSolicitado'];
$ciuResi=$_POST['ciudadResidenciaSocilitado'];
$dirResi=$_POST['direccionResidenciaSolicitado'];
// $celular=$_POST['celularSolicitado'];
$celular="1234567890";
$correoElectronico=$_POST['correoElectronicoSolicitado'];

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
  $datos = array("tipDocu" => $tipoDocumento, "documento" => "$documento", "nombre" => "$nombres", "apellidos" => "$apellidos", "genero" => $genero,
  "fechaNacimiento" => "$fechaNacimiento", "correoElec" => "$correoElectronico", "tipoSangre"=>$tipoSangre,
  "paisResi" => $paisResi, "estadoResi" => $estadoResi, "ciuResi" => $ciuResi, "dirResi" => $dirResi, "celular" => $celular);
  $obj = new UsuarioControlador();
  $obj->validarUsuario($datos);

//}

?>
