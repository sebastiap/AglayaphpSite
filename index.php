<?php
session_start();
$pagina = 'Inicio';
require_once("includes/head.php");
require_once("conexion.php");

?>
<!-- contenido pagina -->
<main class="fondo-portada">

    <section class="container">
<div class="fondo-portada">
        <?php
        if(isset($_SESSION['error'])){
            echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error']. '</div>' ;
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['exito'])){
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['exito']. '</div>';
            unset($_SESSION['exito']);
        }
    
        ?>
    </div>	
	
        <!-- identidad sitio -->

        <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
            <img class=" img-fluid" src="./img/logoAglayaD.png" width="250" height="300" alt="logo Aglaya">
            <h1 class=" titulo text-uppercase display-4">Aglaya Designs</h1>

            <blockquote class="blockquote">
                <p class="mb-0 text-white">"Se dice que el tiempo cambia las cosas, pero en realidad es uno el que tiene que cambiarlas."</p>
                <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> Andy Warhol </cite></p>
            </blockquote>
        </div>
    </section>
    <!-- fin identidad sitio -->
    <!-- inicio de nuestros servicios -->
    <section class="container">
    <h2 class="titulo">Nuestros servicios</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm text-center">
                        <img class= "fotos" src="./img/web.png" alt="web">
                        <h3>Paginas Web</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="col-sm text-center">
                        <img  class= "fotos" src="./img/ilustracion.png" alt="dibujando estrellas">
                        <h3>Ilustraciones y logos</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="col-sm text-center">
                        <img class= "fotos" src="./img/foto.png" alt="foto de campamento">
                        <h3>Fotografia</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- fin nuestro servicio -->
        <!-- inicio de historia -->
    <section class="container">

        <h2 class="titulo">Bienvenidos</h2>
        <p class="mb-0 text-dark display-8">
            En la mitología griega, las tres Gracias o Cárites, eran las diosas hijas de Zeus. Concedían a dioses y mortales alegría, así como elocuencia y sabiduría,
            podían dorar a los hombres de la genialidad y el talento necesarios para ser un brillante artista.Aglaya, Eufrósine y Talia eran las diosas del encanto, la belleza y el júbilo.
            Aglaya, Aglaia, Aglaye o también Áglae era la más bella y menor de las Cárites. Simbolizaba la inteligencia, el poder creativo y la intuición del intelecto.
        </p>
        <p class="mb-0 text-dark display-8">
            Esa es la explicacion de la gracia que nos da el nombre. Como Aglaya nos encanta fomentar el talento y la genialidad de nuestros clientes, trabajando de modo personalizado en cada proyecto y
            para cada cliente, atendiendo a las necesidades particulares de cada caso,
            por eso nuetros trabajos son bastante heterogéneos.Fomentamos la creatividad y somos responsables de cumplir con los requerimientos solicitados en tiempo y forma,
            involucrándonos en cada proyecto para aportar lo mejor, tanto en la imagen como en la comunicación y los conocimientos relacionados nuestra experiencia.
            Adicionalmente contamos con un equipo tecnologico de ultima generacion para poder brindar un servicio integral y de calidad:
            fotografía, edición y animación de video, manejo de redes, ilustración, etc.</p>
        <p class="mb-0 text-dark display-8">Proporcionamos servicios audiovisuales de alta calidad, con conocimiento experto y soporte profesional.
            Nuestro objetivo es satisfacer la necesidad del cliente, plasmando
            la idea en un producto final óptimo y de primer nivel.</p>

    </section>
    <!-- fin historia -->
    <!-- inicio quienes somos -->
    <section class="container">

    <h2 class="titulo">Quienes somos</h2>
    <div class="container">
  <div class="row">
                <div class="col-sm text-center" >
                    <img class= "fotos" src="./img/gonzalo.jpeg" alt="Gonzalo Hernandez diseñador">
                        <h4>Gonzalo Hernandez</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
                    </div>
                    <div class="col-sm text-center">
                    <img class= "fotos" src="./img/lucia.jpeg" alt="Lucia Tercic Diseñadora">
                        <h4>Lucia Tercic</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
                    </div>
                <div class="col-sm text-center">
                    <img class= "fotos" src="./img/romina.jpg" alt="Romina Montes de Oca Diseñadora">
                        <h4>Romina Montes De Oca</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
                    </div>
                </div>
                </div>
        </section>
        <!-- fin quienes somos -->
</main>

<!-- inicio Footer -->
<?php
require_once("includes/footer.php");
?>
<!-- fin Footer -->