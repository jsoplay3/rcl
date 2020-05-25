<?php
session_start();
if (!isset ($_SESSION['uxt_codUsuario']))
{
header('Location: ../views/login.php');
}
else {

}

?>
