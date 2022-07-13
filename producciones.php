<?php
session_start();
$pagina = 'Producciones';
require_once 'includes/head.php';
require_once 'conexion.php';
?>

<!-- Contenido pagina -->
<main>
            <?php
        if(isset($_SESSION['error'])){
            echo '<div class="alert-danger">' . $_SESSION['error']. '</div>' ;
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['exito'])){
            echo '<div class="alert-success">' . $_SESSION['exito']. '</div>';
            unset($_SESSION['exito']);
        }
   
        ?>
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
    $consulta =
        'SELECT `ID`,`DESCRIPCION`,`NOMBRE_PRODUCCION`,`URLIMAGEN`, `ID_CATEGORIA`, `FECHA_ASIGNACION`, `FECHA_ENTREGA`, `ID_USUARIO`, `PUNTAJE` FROM `producciones`';

    $query = Connection::connectDb()->query($consulta);
    $producciones = Connection::obtenerArray($query);
    ?>

        <!-- presentacion nueva -->
    <?php
    $consultaCategorias =
        'SELECT * FROM `categorias`';

    $queryCat = Connection::connectDb()->query($consultaCategorias);
    $categorias = Connection::obtenerArray($queryCat);
    ?>

    <li class="col">
        <?php
        if(isset($producciones)){
            

            foreach ($producciones as $produccion){
				$idpost = (int)$produccion['ID'];
				$img = $produccion['URLIMAGEN'];

                echo "<img width='300' height='300' src='img/producciones/$img.JPEG' alt='$img'>";
                echo '<h3>' . $produccion['NOMBRE_PRODUCCION'] . '</h3>';
                echo '<p>' . $produccion['DESCRIPCION'] . '</p>';
                echo '<p>' . $produccion['FECHA_ASIGNACION'] . '</p>';
				for ($i = 1; $i <= $produccion['PUNTAJE']; $i++) {
				echo  '⭐' ;
				}
				
                
				echo "<a class='nav-link' href='produccion.php?id=$idpost'> <i class='fa fa-user-o mr-2'></i>Ver Comentarios</a>";
                # sistema de calificacion
        }}


            if(isset($_SESSION['usuario']) && $_SESSION['id'] <4):
            $iduser = $_SESSION['id'];
            echo "<h3> Publicar un nuevo Articulo :</h3>";
            echo    "<form  action='auth/publicar.php?user=$iduser' method='POST' enctype='multipart/form-data'>" ;
            echo    '<div class="form-group ">
                    <label class="colorlbl" for="publicacion" class="label">Publicacion</label>
                    <input class="form-control" type="textarea" name="publicacion" placeholder="Ingresa el titulo de la publicacion" id="publicacion">
                    <label class="colorlbl" for="contenido" class="label">Contenido</label>
                    <input class="form-control" type="textarea" name="contenido" placeholder="Escriba el contenido de la publicacion" id="contenido">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn btn-warning" type="submit" value="Enviar" name="submit">
                    <label class="colorlbl" for="categoria" class="label">Categoria</label>
                    <select name="categoria" id="categoria">
                    ';

                foreach ($categorias as $categoria){
               $cat = $categoria['NOMBRE_CAT'];
               $catid = $categoria['ID'];
               echo '<option value='. $catid .'>'.$cat.  '</option>';
               };
            echo    '</select>     </div>

            </form>         ';
             endif; 


        ?>
    </li>
</ul>
            </div>
</main>

<!-- inicio Footer -->
<?php require_once 'includes/footer.php';
?>



