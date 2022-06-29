<?php

require_once '../conexion.php';
session_start();

if(!empty($_POST)){
    $nombre = $_POST["nombre"];
    $pass = $_POST["password"];
    $mail = $_POST["mail"];

	$user = strstr($mail, '@', true);
	
	$sql ="SELECT `MAIL` FROM `usuarios` WHERE MAIL ='$mail'";
	$query = Connection::connectDb()->query($sql);

	$mails = Connection::obtenerArray($query);
	$existe = 0;
	foreach ($mails as $aparicion){
		$existe +=1;
	}
	
	if ($existe > 0) {
		    echo "NO INSERTO";
			$_SESSION['error'] = "ERROR AL REGISTRARSE. EL MAIL INGRESADO YA EXISTE EN NUESTRA BASE DE DATOS. $sql $existe ";
			header('location: ../index.php');
			}
	else {
        $sql =
        "INSERT INTO usuarios
        (NOMBRE, MAIL, `PASSWORD`, USER, CATEGORIA)
        VALUES
        ('$nombre', '$mail', '$pass', '$user','Cliente');";

        $query = Connection::connectDb()->exec($sql);
		echo $query;

        
        if($query == 1 ){

            echo "INSERTO";
			$_SESSION['exito'] = "Se ha registrado con exito";
			header('location: ../index.php');
        }
        else {

            echo "NO INSERTO";
			$_SESSION['error'] = "ERROR AL REGISTRARSE. HUBO UN ERROR, PRUEBE MAS TARDE.";
			header('location: ../index.php');
			}
		}
    }    




/*function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

if($_SERVER['REQUEST_METHOD'] === 'POST'):
    session_start();
	$conexion = mysqli_connect('localhost','root','','agencia_disenio');
    if(strlen($_POST['mail'])<=5):
        $_SESSION['error'] = 'Ingrese un mail valido';
        header('location: ../index.php?content=registro');
    else:
        $mail = mysqli_real_escape_string($conexion, $_POST['mail']);
        # en este paso nos tenemos que asegurar de que el mail no se repita, porque es la forma en la que ingresamos al sistema y no querriamos que varios usuarios utilicen el mismo correo
        $verificarMail = "SELECT u.email FROM usuarios u WHERE u.email = '$mail' LIMIT 1";
        $res = mysqli_query($conexion, $verificarMail);

        # si $existeMail es nulo, puedo seguir laburando
    endif;
    # validamos la contrasena
    if(strlen($_POST['password'])< 4):
        $_SESSION['error'] = 'Tenes que poner una contrasena con mas de 4 caracteres';
        header('location: ../index.php?content=registro');
    else:
        # aca no vamos a sanitizar la contrasena sino que la vamos a hashear
        # el hasheo es un proceso criptografico destructivo que sirve para proteger las contrasenas
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    endif;
    # aca validamos que el usuario haya ingresado cualquier cosa como nombre
    if(empty($_POST['nombre'])):
        $_SESSION['error'] = 'Ingresa tu nombre';
        header('location: ../index.php?content=registro');
    # si o si lo tenemos que sanitizar
    else:
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    endif;
    $crearUsuario = "INSERT INTO usuarios
    (NOMBRE, MAIL, `PASSWORD`,NOMBRE,USER, CATEGORIA)
    VALUES
    ('$nombre', '$mail', '$password',$nombre, 'empleado');";
    $res = mysqli_query($conexion, $crearUsuario);
	echo "Test";
    if($res):
        $_SESSION['exito'] = 'Se creo tu usuario, ahora te podes loguear';
        header('location: ../index.php?content=login');
		console.log("aprobe");
    else:
        $_SESSION['error'] = 'A causa de un error , no se pudo crear tu usuario, intenta mas tarde';
        header('location: ../index.php?content=registro');
		console.log("no aprobe");
    endif;
else:
    header('location: ../index.php?content=registro');
endif;*/