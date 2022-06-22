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


        $sql =
        "INSERT INTO comentarios
        (CONTENIDO, ID_PRODUCCION, ID_USUARIO, PUNTAJE)
        VALUES
        ('$comentario', '$bdid' , $bdusuario,'$puntaje');";

        $query = Connection::connectDb()->exec($sql);

		$sql2 = "UPDATE producciones SET PUNTAJE = $promedio WHERE ID ='$bdid'";

		$query2 = Connection::connectDb()->exec($sql2);
		
			echo "<h1>QUERY $query </h1>";
	echo "<h1>QUERY2	$query2</h1>";

			
		if($query == 1 && $query2 == 1){

            echo "INSERTO";
			header('location: ../produccion.php?id='.$bdid.'');
			$_SESSION['exito'] = "Comentario insertado";
					}
		else {

            echo "NO INSERTO";
			header('location: ../index.php?id='.$bdid.'');
			$_SESSION['error'] = "Fallo al insertar";
					}
				
   
    }    


