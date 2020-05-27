<?php
require_once("../modelo/Conectar.php");

class Conexiones extends Conectar {



	public function autenticaUsuario($user,$pass){

		
		$registros=mysqli_query($this->conexion,"select
									  ID,
									  DOCUMENT,
									  NAME,
									  MAIL,
									  PASS,
									  STATE,
									  TYPE
									  
									  from users 

									  where MAIL='$user' && PASS='$pass'")
		or die("Problemas en el select".mysqli_error($this->conexion));

		if ($this->reg=$this->registros->fetch_array())
		{
			/* Inicio de verificación si el tipo de usuario es tipo 1 y acciones a ejecutar */
			if ($this->reg['STATE']==1){
				$_SESSION['MAIL']=$user;
				$_SESSION['TYPE']=$this->reg['uta_codTipoUsuario'];

				echo "<meta http-equiv='Refresh' content='0;url=../views/adminCompany.php'>";
			}
			else {
				echo "<meta http-equiv='Refresh' content='0;url=../lading/index.php'>";
			}
		}
		else
		{
			echo "<meta http-equiv='Refresh' content='0;url=../lading/index.php'>";
		}

	}

	
}

$algo = new Conectar();
