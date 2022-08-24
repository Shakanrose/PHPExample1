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
		<h2>Agenda de clases</h2>

	<div id="contact">
        <form method="POST" action="insertar_clases.php">
          <input type="text" name="unidad" placeholder="Unidad" maxlength="30" required>
          <input type="date" name="fecha" placeholder="Fecha" required>  
          <input type="submit" value="Registrar" id="submit">
        </form>
      
    <?php 
      if(isset($_GET['sent'])){
         echo "<p>Registro Exitoso!</p>";
      }
    ?>
      
  </div>
    <nav>
        <ul>
            <li><a href="unidad1.php?show">Ver Clases</a></li>
        </ul>
    </nav>
    
    
    
	</section>
	<aside>
			<table class="tabla">   
        <tr id="top">
          <th>Unidad</th>
          <th>Fecha</th> 
        </tr>
		<?php 
		if(isset($_GET['show'])){
    include('ver_clases.php');
  }
    ?>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>