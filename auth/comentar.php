<?php
session_start();
require_once '../conexion.php';


if(!empty($_POST)){
    $comentario = $_POST["comentario"];
    $puntaje = $_POST["puntaje"];
	$puntajetotal = htmlspecialchars($_GET["puntajetotal"]); 
	$cantidadcomentarios = htmlspecialchars($_GET["cantidadcomentarios"]); 
	$bdid = htmlspecialchars($_GET["id"]);
	$bdusuario = htmlspecialchars($_GET["user"]);
	$promedio = round((($puntajetotal + $puntaje) / ($cantidadcomentarios +1)) , 0, PHP_ROUND_HALF_DOWN);
	echo "<h1>	$promedio </h1>";
	echo "<h1>$puntaje </h1>";
	echo "<h1>$puntajetotal </h1>";
	echo "<h1>CANT	$cantidadcomentarios </h1>";
	
	$query = 0;
	$query2 = 0;
	if (filter_var($puntaje, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1, "max_range"=>5))) === false) {
		$error = true;
	} else {
		$error = false;
		$sql =
        "INSERT INTO comentarios
        (CONTENIDO, ID_PRODUCCION, ID_USUARIO, PUNTAJE)
        VALUES
        ('$comentario', '$bdid' , $bdusuario,'$puntaje');";

        $query = Connection::connectDb()->exec($sql);

		$sql2 = "UPDATE producciones SET PUNTAJE = $promedio WHERE ID ='$bdid'";

		$query2 = Connection::connectDb()->exec($sql2);
	}

		echo $query;
		echo $query2;
		echo $error;
		if($query == 1 && $query2 == 1 && !$error){

            echo "INSERTO";
			$_SESSION['exito'] = "Comentario insertado. El promedio de la produccion ha cambiado!";
			header('location: ../produccion.php?id='.$bdid.'');
			
					}
		else if($query == 1 && !$error){

            echo "INSERTO";
			$_SESSION['exito'] = "Comentario insertado. ";
			header('location: ../produccion.php?id='.$bdid.'');
			
					}
		else {

            echo "NO INSERTO";
			if (error){
				$_SESSION['error'] = "Fallo al insertar. El valor insertado no es valido.";
			}
			else {
				$_SESSION['error'] = "Fallo al insertar";
			}
			header('location: ../produccion.php?id='.$bdid.'');
			
			}
				
   
         }    


