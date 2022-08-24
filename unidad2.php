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
		<h2>Eventos</h2>
		<div id="contact">
		<h3>Descubre cuánto tiempo falta para tu proximo examen.</h3>
        <form method="POST" action="unidad2.php">
         <input type="number" name="day" min="1" max="31" placeholder="Día" required>
         <input type="number" name="month" min="1" max="12" placeholder="Mes" required>
         <input type="number" name="year" min="2021" max="2022" placeholder="Año" required>
         <input type="submit" value="Calcular" id="submit">
        </form>
    	</div>
    </section>
	<aside>
		<div id="side">
    <?php
		include ('calculo_fecha.php');
		?>
		</div>  
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>