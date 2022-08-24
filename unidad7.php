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
		<h2>Compras</h2>
	<div id="tclient">
	<?php  
	include('recursos.php');
	$listar_datos = $producto->ListarProductos();
	$listar_compra = $carrito->listarCompra();
	?>	
    <table class="tabla">   
            <tr id="top">
               <th>Código</th>
               <th>Producto</th> 
               <th>Descripción</th> 
               <th>Precio</th>
               <th>Comprar</th>           
            </tr>
	<?php 
	for($i=0; $i<count($listar_datos); $i++) { ?>
             <tr>
                <td> <?php echo $listar_datos[$i]['codigo']; ?></td>
                <td> <?php echo $listar_datos[$i]['producto']; ?></td>
                <td> <?php echo $listar_datos[$i]['descripcion']; ?></td>
                <td> $<?php echo $listar_datos[$i]['precio']; ?></td>
                <td><a href="compras.php?codigo=<?php echo $listar_datos[$i]['codigo']; ?>&&producto=<?php echo $listar_datos[$i]['producto']; ?>&&descripcion=<?php echo $listar_datos[$i]['descripcion']; ?>&&precio=<?php echo $listar_datos[$i]['precio']; ?>"><img src="imagenes/carrito.png"></a></td>  
            </tr>
	<?php } ?>     
    </table>
	</div>

	</section>
	<aside>
	<table class="tabla">
    	<tr id="top">
    		<td>Producto</td>
    		<td>Precio</td>
    		<td>Eliminar</td>
    	</tr>
    	<tr>
    <?php
    for($i=0; $i<count($listar_compra); $i++) { ?>
    <td><?php echo $listar_compra[$i]['producto']?></td>
    <td>$<?php echo $listar_compra[$i]['precio']?></td>
    <td><a href="eliminar.php?codigo=<?php echo $listar_compra[$i]['codigo']?>"><img src="imagenes/delete.png"></a></td>
     	</tr>
    <?php } ?> 		
    </table>   
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>