<?php   
if($_POST) {
    date_default_timezone_set("America/Argentina/Cordoba");
	$dt = date("d-m-Y G:i:s");

	$nyaform = $_POST['nya'];
	$mailform = $_POST['correo'];
	$comment = $_POST['comment'];

	//$archivo = fopen('comentarios.txt', 'a+');
	$comment_sent = "<div class='commentsent'><h4>Nombre y Apellido: </h4>".$nyaform."<h4>Correo: </h4>".$mailform."<h4>Comentario:</h4>".$comment."<h4>Fecha y Hora: </h4>".$dt."</div>" .PHP_EOL;
	//fputs($archivo, $comment_sent);
	//fclose($archivo);

	$archivo = fopen("comentarios.txt", "c");
	$last = file_get_contents("comentarios.txt");
	$texto_final = $comment_sent.$last;
	fputs($archivo, $texto_final);
	fclose($archivo); 

	$archivo = fopen('comentarios.txt', 'r');
	while(!feof($archivo)){
	echo fgetc($archivo);
	}
	fclose($archivo);

	//$archivo = fopen('comentarios.txt', 'r');
	//fpassthru($archivo);		
	//fclose($archivo);
}
?> 