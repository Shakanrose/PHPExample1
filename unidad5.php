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
		<h2>Consultas</h2>
		<div id="contact">
		<form method="POST" action="cargar.php">
          <input type="text" name="nombre" placeholder="Nombre" maxlength="30" required>
          <input type="text" name="apellido" placeholder="Apellido" maxlength="30" required>
          <input type="email" name="correo" placeholder="Correo Electrónico" maxlength="100"required> 
          <textarea  type="text" name="comment" placeholder="Comentario" maxlength="450" required></textarea>
          <div id="try1">
          <div id="imgtry">	
          <img src="captcha.php" >
          </div>
          <div id="msjtry">
          <?php
           if(isset($_GET['error'])) {
			echo "<p>El codigo ingresado es incorrecto.</p>";
		}
		 if(isset($_GET['ok'])) {
			echo "<p>Datos cargados correctamente.</p>";
		}	
          ?>
          </div>
          </div>
          <input type="text" name="v_captcha" placeholder="Código de verificación required">
          <input type="submit" value="Comentar" id="submit">
        </form>
        <?php
		session_start();
          function textcaptcha (){
       	  $cadena = "0123456789abcdefghijklmnopqrstuvwxyz#$%&?";
       	  $codigo = "";
       	  for ($i=0; $i<5; $i++) { 
       	  		$codigo .= $cadena[rand(0,40)];
       	  }
       	  return $codigo;				
       	  }

       	$_SESSION['captcha'] = textcaptcha();
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