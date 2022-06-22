<?php
$pagina = 'Login';
require_once("includes/head.php");



?>

<main class="fondo-portada fondo-login">

  <section class="container">

    <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
      <h1 class="titulo">Crear una cuenta</h1>
<form action="auth/registrarse.php" method="POST">
<div class="form-group ">
    <label class="colorlbl" for="mail">Email</label>
    <input class="form-control" type="email" name="mail" id="mail" placeholder="Ingresá tu mail" required>
    <!-- para este ejemplo vamos a utilizar un minimo de 4 caracteres pero deberiamos exigir 8 como minimo -->
    <label class="colorlbl" for="password">Contraseña</label>
    <input class="form-control" type="password" name="password" id="password" placeholder="Mínimo 4 caracteres" required>

    <label class="colorlbl" for="nombre">Nombre</label>
    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingresá tu nombre" required>
</div>
    <input type="submit" value="Crear cuenta" class="btn btn-warning">
</form>
</div>
</section>

</main>

<!-- footer  -->
<?php
require_once("includes/footer.php");

?>