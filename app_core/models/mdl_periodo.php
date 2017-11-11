<?php 

	require_once("/../models/mdl_conexion.php");

	class mdl_Periodo {

		private $conexion;

		//Funcion que se encarga de extraer los campos de los registros
		public function periodo_mdl() {
			$conexion = new mdl_Conexion();
			$conexion->consulta("SELECT articulo.descripcion, articulo.costo, articulo.cantidad, 
										articulo.familia, articulo.gravado, articulo.venta
								 FROM articulo
								 WHERE codigo = '-1'");
			return $fila = $conexion->extraer_registro();

			$conexion->consulta("SELECT compra.fecha, compra.monto, compra.descuento, compra.impuesto, 
										compra.tfactura, compra.aplicado, compra.total
								 FROM compra
								 WHERE codigo = '1'");
			return $fila = $conexion->extraer_registro();		

			$conexion->consulta("SELECT cxc.fecha, cxc.tfactura, cxc.monto, cxc.cancelada, cxc.pago
								 FROM cxc
								 WHERE codigo = '1'");
			return $fila = $conexion->extraer_registro();

			$conexion->consulta("SELECT cxp.fecha, cxp.monto, cxp.cancelada, cxp.pago, cxp.factura
								 FROM cxp
								 WHERE codigo = '1'");
			return $fila = $conexion->extraer_registro();

			$conexion->consulta("SELECT factura.fecha, factura.costo, factura.monto, factura.impuestos, 
										factura.descuento, factura.total, factura.anulado,factura.gravado, factura.tfactura
								 FROM factura
								 WHERE codigo = '1'");
			return $fila = $conexion->extraer_registro();	 

			$conexion->consulta("SELECT rec_cxc.fecha, rec_cxc.total, rec_cxc.aplicado, rec_cxc.anulado
								 FROM rec_cxc
								 WHERE codigo = '1'");
			return $fila = $conexion->extraer_registro();	

			$conexion->consulta("SELECT rec_cxp.fecha, rec_cxp.aplicado, rec_cxp.anulado, rec_cxp.total
								 FROM rec_cxp
								 WHERE codigo = '1'");
			return $fila = $conexion->extraer_registro();	
		}

		//Funcion que se encarga de mostrar la cantidad de ventas realizadas en el periodo
		public function consultar_ventas_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL estadoResult_ventas('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la utilidad por accion realizadas en el periodo
		public function consultar_UtilidadPorAccion_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL UtilidadPorAccion('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar el costo de ventas realizadas en el periodo
		public function consultar_costoVentas_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL estadoResult_costoVentas('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de utilidad bruta realizadas en el periodo
		public function consultar_utilidadBruta_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL estadoResult_utilidadBruta('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de gasto de operacion realizadas en el periodo
		public function consultar_gastoOperaciones_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL estadoResult_gastoOperaciones('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de Ut. antes int. e imp. realizadas en el periodo
		public function consultar_estadoResult_antesEimpu_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL estadoResult_antesEimpu('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de Gastos financieros realizadas en el periodo
		public function consultar_estadoResult_gastosFinancieros_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL estadoResult_gastosFinancieros('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de Utilidad neta realizadas en el periodo
		public function consultar_estadoResult_utilidadNeta_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL estadoResult_utilidadNeta('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de efectivo en el periodo 1
		public function consultar_balanceGeneral_efectivo1_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_efectivo1('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de efectivo en el periodo 2
		public function consultar_balanceGeneral_efectivo2_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_efectivo2('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de cuentas por cobrar realizadas en el periodo
		public function consultar_balanceGeneral_cuentasXcobrar_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_cuentasXcobrar('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de inventarios realizadas en el periodo
		public function consultar_balanceGeneral_inventarios_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_inventarios('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de total activos circulantes realizadas en el periodo
		public function consultar_balanceGeneral_totalActivosCirculantes_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_totalActivosCirculantes('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de total impuestos realizadas en el periodo
		public function consultar_Impuestos_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL Impuestos('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de efectivo en el Activo Fijo Neto 1
		public function consultar_balanceGeneral_actiFN1_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_actiFN1('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de efectivo en el Activo Fijo Neto 2
		public function consultar_balanceGeneral_actiFN2_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_actiFN2('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de total activos realizadas en el periodo
		public function consultar_balanceGeneral_totalActivos_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_totalActivos('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de cuentas por pagar realizadas en el periodo
		public function consultar_balanceGeneral_cuentasXpagar_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_cuentasXpagar('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de efectivo en el pasivo a largo plazo 1
		public function consultar_balanceGeneral_PasiLP1_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_PasiLP1('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de efectivo en el pasivo a largo plazo 2
		public function consultar_balanceGeneral_PasiLP2_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_PasiLP2('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de total Pasivo en el periodo
		public function consultar_balanceGeneral_totalPasivo_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_totalPasivo('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de patrimonio en el periodo
		public function consultar_balanceGeneral_Patrimonio_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_Patrimonio('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		//Funcion que se encarga de mostrar la cantidad de total pasivo + patrimonio en el periodo
		public function consultar_balanceGeneral_totalPasivoPatrimonio_mdl($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL balanceGeneral_totalPasivoPatrimonio('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		public function Rotacion_Inven($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL Rotacion_Inven('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		public function Rotacion_cartera($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL Rotacion_cartera('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		public function Rotacion_cuentas_por_pagar($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL Rotacion_cuentas_por_pagar('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}

		public function abono_cxp($fecha1,$fecha2) {
			$conexion = new mdl_Conexion();
			$conexion->consulta("CALL abono_cxp('".$fecha1."','".$fecha2."')");
							
			return $fila = $conexion->extraer_registro();			 
		}								
	}	
?>