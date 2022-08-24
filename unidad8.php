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
		<h2>Seguridad</h2>
		<h2>Registrar Password:</h2>
		 <div id="unit8">
        <form method="POST" action="registrar.php">
          <input type="text" name="usuario" placeholder="Usuario" maxlength="20" required>
          <input type="password" name="clave" placeholder="Contraseña" maxlength="60" required>
          <input type="email" name="correo" placeholder="Correo Electrónico" maxlength="100"required> 
          <input type="submit" value="Registrar" id="submit">
        </form>
        <?php if(isset($_GET['ok'])) { echo "<p>Usuario Registrado.</p>";} ?>
    	</div>

    	<h2>Ingresar:</h2>
    	<div id="unit8">
        <form method="POST" action="verificar.php">
          <input type="text" name="usuario" placeholder="Usuario" maxlength="20" required>
          <input type="password" name="clave" placeholder="Contraseña" maxlength="60" required>
          <input type="submit" value="Ingresar" id="submit">
        </form>
       	<?php if(isset($_GET['error'])) { 
       			echo "Contraseña incorrecta."; }  
       	      if(isset($_GET['verificado'])) {
     			echo "Contraseña correcta."; } 
     	?>
    	</div>

    	
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>