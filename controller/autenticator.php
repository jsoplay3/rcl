<?php
	session_start();
	require("../modelo/Conectar.php");
	
	$total=new Conectar();
	$data = $total->autenticaUsuario($_POST['mail'],$_POST['pass']);

	
	$datos = $data->fetch_array();

	if($datos['STATE'] == 1){
		$_SESSION['uxt_codUsuario']=$datos['MAIL'];
		$_SESSION['TYPE']=$datos['TYPE'];
		echo "<meta http-equiv='Refresh' content='0;url=../views/adminCompany.php'>";
	} else {
		echo "<meta http-equiv='Refresh' content='0;url=../landing/index.php'>";
	}
	
  ?>  