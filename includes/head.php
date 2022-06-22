<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&family=Vollkorn&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/cedf025736.js" crossorigin="anonymous"></script>
    <title>Aglaya Designs - <?php echo $pagina; ?> - </title>
</head>

<body class="fondo">

    <!-- Barra navegacion -->

    <header>
        <nav class="container-fluid navbar navbar-icon-top navbar-expand-lg fondonav fixed-top ">
            <a  class="navbar-brand" href="index.php"><img class="img-fluid" src="./img/logo2.png" width="120" height="120" alt="logo Aglaya"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<?php if(isset($_SESSION['usuario'])):
					echo($_SESSION['usuario']);
			 endif; ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li <?php echo (($pagina == 'Inicio') ? ' class="nav-item active" ': 'class="nav-item"'); ?>>
                        <a class="nav-link" href="index.php"><i class="fas fa-home mr-2"></i>Inicio</a>
                    </li>
                    <li <?php echo (($pagina === 'Productos') ? ' class="nav-item active" ': 'class="nav-item"'); ?>>
                        <a class="nav-link" href="producciones.php"><i class="fas fa-book mr-2"></i>Producciones</a>
                    </li>
					<li  <?php echo (($pagina === 'Contacto') ? ' class="nav-item active" ': 'class="nav-item"'); ?>>
                        <a class="nav-link" href="contacto.php"><i class="fas fa-address-book mr-2"></i>Contacto</a>
                    </li>
					 <!-- Opciones de Logueo -->
					 <?php
					if(!isset($_SESSION['usuario'])):
					?>
                    <li  <?php echo (($pagina === 'Registrate') ? ' class="nav-item active" ': 'class="nav-item"'); ?>>
                        <a class="nav-link" href="registro.php"><i class="fas fa-address-book mr-2"></i>Registro</a>
                    </li>
					<li  <?php echo (($pagina === 'Login') ? ' class="nav-item active" ': 'class="nav-item"'); ?>>
                        <a class="nav-link" href="login.php"><i class="fas fa-address-book mr-2"></i>Login</a>
                    </li>
					<?php else: ?>
					<li  <?php echo (($pagina === 'Login') ? ' class="nav-item active" ': 'class="nav-item"'); ?>>
                        <a class="nav-link" href="auth/logout.php"><i class="fa fa-sign-out mr-2"></i>Salir</a>
                    </li>
                <?php endif; ?>


					
					
                </ul>
            </div>
        </nav>
    </header>