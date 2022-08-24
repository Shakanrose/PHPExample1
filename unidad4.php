<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">

</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section >
		<h2>Imágenes con PHP</h2>
		<div id="sidetoside">
		<p>Marca de Agua</p>	
		<img src="marca_agua.php" >
		</div>
	</section>
	<aside id="sidetoside">
    <?php  
    	include('thumb.php');
    ?>
    	<p>Resizing</p>	
    <a href="imagenes/unidad4.jpg" data-lightbox="try">
    <img src="imagenes/img_mini.jpg"></a>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
<script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
</body>
</html>