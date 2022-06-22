<?php
session_start();
$pagina = 'Producciones';
require_once 'includes/head.php';
require_once 'conexion.php';
?>

<!-- Contenido pagina -->
<main>
        <div class="row banners">

                <!-- carrusel -->
                <div id="carouselExampleIndicators" class="carousel slide my-4 ocultar" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <a><img class="d-block img-fluid" src="./img/bannerexpo.png" alt="Exposicion en Cali">
                            </a>
                        </div>
                        <div class="carousel-item">
                          <a > <img class="d-block img-fluid" src="./img/expoBanner.png" alt="expo kandinsky">
                          </a>
                        </div>
                        <div class="carousel-item">
                            <a><img class="d-block img-fluid" src="./img/fraseBanner.png" alt="banner con frase">
                            </a>
    
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
                <!-- fin carrusel -->

<ul class="producciones">

    <!-- presentacion nueva -->
    <?php
	$bdid = htmlspecialchars($_GET["id"]);

    $consulta =
        "SELECT `ID`,`NOMBRE_PRODUCCION`,`URLIMAGEN`, `ID_CATEGORIA`, `FECHA_ASIGNACION`, `FECHA_ENTREGA`, `ID_USUARIO`, `PUNTAJE` FROM `producciones` WHERE ID ='$bdid'";
		

    $query = Connection::connectDb()->query($consulta);
    $producciones = Connection::obtenerArray($query);
	
	$consulta2 =
        "SELECT `ID`,`CONTENIDO`, `ID_USUARIO`, `PUNTAJE` FROM `comentarios` WHERE ID_PRODUCCION ='$bdid'";
		

    $query2 = Connection::connectDb()->query($consulta2);
    $comentarios = Connection::obtenerArray($query2);
	
	
    ?>

	
	
    <li class="col">
        <?php
        if(isset($producciones)){
            

            foreach ($producciones as $produccion){
				$idpost = $produccion['ID'];
				$img = $produccion['URLIMAGEN'];

                echo "<img width='500' height='500' src='img/producciones/$img.JPEG' alt='$img'>";

                echo '<h3>' . $produccion['NOMBRE_PRODUCCION'] . '</h3>';
                echo '<p>' . $produccion['FECHA_ASIGNACION'] . '</p>';
				for ($i = 1; $i <= $produccion['PUNTAJE']; $i++) {
				echo  '⭐' ;
				}
        }
				$puntajetotal = 0;
				$cantidadcomentarios = 0;
		            foreach ($comentarios as $comentario){
						$idcomentario = $comentario['ID_USUARIO'];
					$consultaUser = 
					"SELECT `ID`,`MAIL`, `NOMBRE`, `USER` FROM `usuarios` WHERE ID ='$idcomentario' LIMIT 1";
		

				$query3 = Connection::connectDb()->query($consultaUser);
				$comentarista = Connection::obtenerArray($query3);
				echo  '<li class="col com">';
							echo '<h2>' . $comentario['CONTENIDO'] . '</h2>';
							echo '<p>' . $comentarista[0]['MAIL'] . '</p>';
							for ($i = 1; $i <= $comentario['PUNTAJE']; $i++) {
							echo  '⭐' ;
							}
			    echo '</li>';
                # sistema de calificacion
				$puntajetotal += $comentario['PUNTAJE'];
				$cantidadcomentarios += 1;
				
        }}

		
        ?>
    </li>
			<?php 
			if(isset($_SESSION['usuario'])):
			$iduser = $_SESSION['id'];
			$promedio = round(($puntajetotal )/ $cantidadcomentarios , 0, PHP_ROUND_HALF_DOWN);
			echo "<h3> Deje su comentario :</h3>";
			echo	"<form  action='auth/comentar.php?id=$bdid&user=$iduser&puntajetotal=$puntajetotal&cantidadcomentarios=$cantidadcomentarios' method='POST'>" ;
			echo	'<div class="form-group ">
					<label class="colorlbl" for="comentario" class="label">Comentario</label>
					<input class="form-control" type="textarea" name="comentario" placeholder="Ingresa un comentario" id="comentario">
					<label class="colorlbl" for="puntaje" class="label">Puntaje</label>
					<input class="form-control" type="text" name="puntaje" placeholder="puntaje" id="puntaje">
				</div>
				<input type="submit" class="btn btn-warning" value="Comentar" >
			</form>			';
			 endif; 
			 
			 ?>
	
</ul>

            </div>
</main>

<!-- inicio Footer -->
<?php require_once 'includes/footer.php';
?>
