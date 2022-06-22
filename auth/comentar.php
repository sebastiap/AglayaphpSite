<?php
session_start();
require_once '../conexion.php';


if(!empty($_POST)){
    $comentario = $_POST["comentario"];
    $puntaje = $_POST["puntaje"];
	$puntajetotal = htmlspecialchars($_GET["puntajetotal"]); 
	$cantidadcomentarios = htmlspecialchars($_GET["cantidadcomentarios"]); 
	$bdid = htmlspecialchars($_GET["id"]);
	$bduser = htmlspecialchars($_GET["user"]);
	$promedio = round((($puntajetotal + $puntaje) / ($cantidadcomentarios +1)) , 0, PHP_ROUND_HALF_DOWN);
	echo $_POST["puntaje"];
	echo 	$promedio;


        $sql =
        "INSERT INTO comentarios
        (CONTENIDO, ID_PRODUCCION, ID_USUARIO, PUNTAJE)
        VALUES
        ('$comentario', '$bdid' , $bduser,'$puntaje');";

        $query = Connection::connectDb()->exec($sql);

		$sql = "UPDATE producciones SET PUNTAJE = $promedio WHERE ID ='$bdid'";

		$query2 = Connection::connectDb()->exec($sql);

					
		if($query == 1 && $query2 == 1){

            echo "INSERTO";
			header('location: ../produccion.php?id='.$bdid.'');
			$_SESSION['exito'] = "Comentario insertado";
					}
		else {

            echo "NO INSERTO";
			header('location: ../produccion.php?id='.$bdid.'');
			$_SESSION['exito'] = "Fallo al insertar Comentario";
					}
				
        
    }    


