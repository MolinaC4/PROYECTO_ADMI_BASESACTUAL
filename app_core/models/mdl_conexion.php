<?php

	class mdl_Conexion
	{
		private $servidor;
		private $usuario;
		private $clave;
		private $base_datos;
		private $conexion;
		private $resultado;

		function __construct()
		{
			//$this->servidor = "localhost";
			$this->servidor = "localhost";
			$this->usuario = "root";
			//$this->clave = "782221mm"; //ALE
			$this->clave = "1234"; //WIS
			//$this->clave = "782221mm"; //MILTON
			$this->base_datos = "bd_financiero";
			$this->conectar_base_datos();
		}

		private function conectar_base_datos()
		{
			$this->conexion = mysqli_connect($this->servidor,$this->usuario,$this->clave);
			mysqli_select_db($this->conexion, $this->base_datos) or die (mysqli_error($this->conexion));
            mysqli_query ($this->conexion, "SET NAMES 'utf8'");

            return $this->conexion;
		}

		public function consulta($consulta)
		{
			$this->resultado = mysqli_query($this->conexion, $consulta);
			echo mysqli_error($this->conexion);
		}

		public function extraer_registro ()
		{
			if ($fila = mysqli_fetch_row($this->resultado)){
				return $fila;
			} 
			else {
				return false;
			}

			echo mysqli_error($this->conexion);
		}
		function get_resultado(){
			return $this->resultado;
		}

	}
?>



