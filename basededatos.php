<?php
class Basedatos {
	private $conexion;

	function __construct ($servidor, $usuario, $clave, $base){
		$this->_connect($servidor, $usuario, $clave, $base);
	}

	function __destruct(){
		$this->conexion->close();
	}

	private function _connect($servidor, $usuario, $clave, $base) {
		$this->conexion = new mysqli($servidor, $usuario, $clave, $base);
	}

	public function ejecutarQuery($codigosql){
		$tipo = strtoupper(substr($codigosql, 0,6));

		switch ($tipo) {
			case 'INSERT':
				$resultado = $this->conexion->query($codigosql);
				break;
			case 'SELECT':
				$listar_datos = [];
				$resultado = $this->conexion->query($codigosql);
				while($fila = $resultado->fetch_assoc()){
					$listar_datos[] = $fila;
				}
				return $listar_datos;
				break;	
			case 'UPDATE':
				$resultado = $this->conexion->query($codigosql);
				break;
			case 'DELETE':
				$resultado = $this->conexion->query($codigosql);
				break;	
		}
	}
}
?>