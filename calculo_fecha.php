<?php
if($_POST){
date_default_timezone_set ("America/Argentina/Cordoba");	
$dia = $_POST['day'];
$mes = $_POST['month'];
$año = $_POST['year'];

$fecha_actual = date("d-m-Y");
echo "<h4>Seleccionaste: ".$dia."/".$mes."/".$año." </h4>";

$dif = strtotime($dia."-".$mes."-".$año) - strtotime($fecha_actual);

if ($dif>0){
    echo "<P>Falta/n ".$dif/(86400). " día/s para tu examen.</p>";
}
if ($dif<0){
    echo "<p> Lo sentimos, tu examen pasó hace ".$dif/(-86400). " día/s </p>";
}

if ($dif==0){
   echo"<p> Su examen es hoy.</p>";
}
};

?>