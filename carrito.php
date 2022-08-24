<?php 
class Carrito {
	private $db;

	function __construct($base) {
		$this->db = $base;
	}

	public function insertarCompra($codigo, $producto, $descripcion, $precio) {
		$respuesta = $this->db->ejecutarQuery("INSERT INTO compras VALUES($codigo,'$producto','$descripcion',$precio)");
		return $respuesta; 
	}

	public function listarCompra(){
		$respuesta = $this->db->ejecutarQuery("SELECT * FROM compras");
		return $respuesta;
	}	

	public function eliminarCompra($codigo){
		$respuesta = $this->db->ejecutarQuery("DELETE FROM compras WHERE codigo = $codigo");
		return $respuesta;
	}
}
?>