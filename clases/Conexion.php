<?php 

	class Conectar{
		public function conexion() {
			$usuario = "gestor";
			$password = "l*uY07d8EXQHpTL7ey";
			$base = "gestor";

			$conexion = mysqli_connect($servidor, 
										$usuario, 
										$password, 
										$base);
			$conexion->set_charset('utf8mb4_bin');
			return $conexion;
		}
	}

 ?>