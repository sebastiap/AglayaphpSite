<?php
$pagina = 'Login';
require_once("includes/head.php");



?>

<main class="fondo-portada fondo-login">

  <section class="container">
    <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
      <h1 class="titulo">Iniciar sesión</h1>
		<form action="auth/login.php" method="POST">
			<div class="form-group ">
				<label for="usuario" class="colorlbl">Usuario</label>
				<input class="form-control" type="text" name="usuario" placeholder="usuario" id="usuario">
				<label for="password" class="colorlbl">Contraseña</label>
				<input class="form-control" type="password" name="password" placeholder="contraseña" id="password">
			</div>
			   <input type="submit" value="Ingresar" class="btn btn-warning">
		</form>
</div>
</section>
</main>

<!-- footer  -->
<?php
require_once("includes/footer.php");

?>