<?php
$pagina = 'Contacto';
require_once("includes/head.php");



?>
<!-- fin nav -->

<main class="fondo-portada">

  <section class="container">

    <!-- identidad sitio -->

    <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
      <h1 class="titulo">Aglaya Designs</h1>

      <blockquote class="blockquote">
        <p class="mb-0 text-white">"Ningún gran artista ve las cosas como son en realidad; si lo hiciera, dejaría de ser artista."</p>
        <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> Oscar Wilde </cite></p>
      </blockquote>
    </div>
  </section>

  <section>
    <div class="container col-lg-6 mt-5 pt-5 pb-5">
      <h2 class="titulo">Contactenos</h2>
      <form action="gracias.php" id= "formcontacto" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label class="colorlbl" for="Nombre">Nombre:</label>
            <input type="Nombre" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre">
          </div>
          <div class="form-group col-md-6">
            <label class="colorlbl" for="inputapellido">Apellido:</label>
            <input type="apellido" class="form-control" name="Apellido" id="apellido" placeholder="Apellido">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6 ">
            <label class="colorlbl" for="inputAddress">E-mail:</label>
            <input type="email" class="form-control" name="mail" id="email" placeholder="Direccion de email">
          </div>

          <div class="form-group col-md-6">
            <label class="colorlbl" for="Telefono">Teléfono:</label>
            <input type="number" class="form-control" name='telefono' id="Telefono" placeholder="Telefono" max="99999999999999">
          </div>
        </div>


        <div class="form-row">
          <div class="col-md-6">
            <label class="colorlbl" for="Asunto"></label>
            <input type="Asunto" class="form-control" name="Asunto" id="Asunto" placeholder="Asunto">
          </div>
          <div class="col-md-6">

            <label class="colorlbl" for="Asunto"><span></span></label>
            <select class="custom-select" id="Area" name="Area">
              <option selected disabled value="">Para:</option>
              <option value="Ventas">ventas@Aglaya.com.ar</option>
              <option value="Info">info@Aglaya.com.ar</option>
              <option value="Pedidos">pedidos@Aglaya.com.ar</option>
              <option value="Reclamos">reclamos@Aglaya.com.ar</option>
            </select>

          </div>
        </div>
        <div class="form-group pt-3">
          <label class="colorlbl" for="Mensaje">Mensaje:</label>
          <textarea class="form-control" id="Mensaje" name="Mensaje" rows="6" min="50"></textarea>
        </div>
        
        
        <div class="form-group col-md-6 mb-1">
        <label class="colorlbl" for="Nombre">Agregar un archivo</label>
        <input type="hidden" class="colorlbl" name="MAX_FILE_SIZE" value="30000000" />
        <input class="mb-2" name="archivo" type="file" />
        </div>


        <div class="">
          <button type="reset" class="btn btn-secondary mr-3" action="contacto.php"> Limpiar</button>
          <button type="submit" class="btn btn-warning"  id="Enviar" action="gracias.php"> Enviar</button>
        </div>
      </form>

     
    </div>

  </section>
  <script>  window.onload= function() {
    document.getElementById("formcontacto").addEventListener('submit', validarFormulario); 
  };
</script>

</main>



<!-- footer  -->
<?php
require_once("includes/footer.php");

?>