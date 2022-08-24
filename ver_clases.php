<?php
include('connect.php');

$consulta_unit = mysqli_query($connect, "SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM clases ORDER BY unidad");

  while($ver_unit = mysqli_fetch_assoc($consulta_unit) ) {
?>
    <tr>
      <td> <?php echo $ver_unit['unidad']; ?></td>
      <td> <?php echo $ver_unit['fecha']; ?></td> 
    </tr>	
	
<?php  }; 

?>
