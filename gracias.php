<?php
$pagina = 'Gracias';
require_once("includes/head.php");
require_once('envio.php');


?>

<main class="fondo-portada reset">

<section class="container">

<!-- identidad sitio -->

<div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
    <img class=" img-fluid" src="./img/logoAglayaD.png" width="250" height="300" alt="logo Aglaya">
    <h1 class=" titulo text-uppercase display-4">Aglaya Designs</h1>

    <blockquote class="blockquote">
        <p class="mb-0 text-white">"Los artistas conceptuales son místicos más que racionalistas. Llegan a conclusiones a las que no llega la lógica. "</p>
        <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> Sol LeWitt </cite></p>
    </blockquote>
</div>
</section>



      <section>
            <div class=" col-lg-6 col-md-6 mx-auto mt-5 pb-5">
                  <div class="alert alert-success" role="alert">
                        <div class="text-center">
                              <h4 class="alert-heading"><?php echo "¡Muchas Gracias " .$_REQUEST['Nombre']."!"?></h4>
                              <p>Llenaste correctamente el formulario y llego a nuestra casilla. Este fue el primer paso para resolver tus dudas...</p>
                              <hr>
                              <p>En breve nos pondremos en contacto con vos!</p>
                              <div class="d-flex justify-content-center">
                                    <form class=" pr-2"action="index.php">
                                          <button type="submit" class="btn btn-outline-dark"  class="text-success">
                                                Volver a inicio</button>
                                    </form>
                                    <form action="producciones.php">
                                          <button type="submit" class="btn btn-outline-dark" class="text-success">
                                                 Seguir mirando </button>
                                    </form>
                              
                              </div>
                              
                        </div>
                  </div>
            </div>
      </section>

</main>


<!-- footer  -->
<?php
require_once("includes/footer.php");
?>

