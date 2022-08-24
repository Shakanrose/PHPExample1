<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Usuarios</h2>
	    <div id="contact">
        <form method="POST" action="unidad6.php">
          <input type="text" name="nombre" placeholder="Nombre" maxlength="30" required>
          <input type="text" name="apellido" placeholder="Apellido" maxlength="50" required>
          <input type="number" name="edad" min="1" max="99" placeholder="Edad" required>
          <input type="submit" value="Registrar" id="submit">
        </form>
    	</div>
	</section>
	<aside id="unit6">
    	<?php
    	include ('caract_usuarios.php');
    	?>
  	</aside>
  
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
	 
 
</div>
</body>
</html>