<h1>soy la accion de loguear</h1>
<?php
require_once '../conexion.php';
session_start();
	$mail = $_POST['mail'];
	$password = $_POST['password'];
    $consulta =
        "SELECT ID, `MAIL`, `PASSWORD` FROM `USUARIOS` WHERE MAIL = '$mail' LIMIT 1";

    $query = Connection::connectDb()->query($consulta);
    $producciones = Connection::obtenerArray($query);
	$dbpassword = $producciones[0]['PASSWORD'];
	$dbid = $producciones[0]['ID'];
	if($password != $dbpassword):


		$_SESSION['error'] = 'ERROR AL LOGUEARSE. USUARIO O PASSWORD INCORRECTO';
		header('location: ../index.php');
		else:
		$_SESSION['exito'] = "Se ha logueado con exito";
		session_start();
		$_SESSION['usuario'] = $mail;
		$_SESSION['id'] = $dbid;

		header('location: ../index.php');
		endif;

    ?>



