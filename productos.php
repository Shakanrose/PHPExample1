<?php 
class Productos {
	private $db;

	function __construct($base) {
		$this->db = $base;
	}

	public function ListarProductos(){
		$respuesta = $this->db->ejecutarQuery("SELECT * FROM productos");
		return $respuesta;
	}


}
?>