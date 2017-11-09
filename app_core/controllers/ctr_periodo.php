<?php 
	require_once(__MDL_PATH . "mdl_periodo.php"); //Agregamos la referencia al modelo respectivo de periodo
	require_once(__MDL_PATH . "mdl_message.php"); //Agregamos la referencia al modelo respectivo de menssage
	
	//Clase del controldor de periodo
	class ctr_Periodo {

		//variable privada para usar en el controlador
		private $periodo;

		//Funcion del controlador que se encarga de seleccionar la información de todos los candidatos		
		public function ctr_periodos() {
       		$periodo = new mdl_Periodo();
       		return $periodo->periodo_mdl();
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para ventas
		public function ventas($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_ventas_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];

			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para costo ventas
		public function costoVentas($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_costoVentas_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para utilidad bruta
		public function utiBruta($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_utilidadBruta_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para gastos de operaciones
		public function gasOpera($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_gastoOperaciones_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para uti antes de int
		public function UtAntesInt($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_estadoResult_antesEimpu_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para impuestos
		public function Impuestos($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_Impuestos_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para gastos financieros
		public function gasFinan($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_estadoResult_gastosFinancieros_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para utilidad Neta
		public function utiNeta($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_estadoResult_utilidadNeta_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Muestra de funciones utilizadas para el balance General

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para efectivo 1
		public function efectivo1($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_efectivo1_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para efectivo 2
		public function efectivo2($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_efectivo2_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para cuentas por cobrar
		public function cxc($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_cuentasXcobrar_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para inventarios
		public function inventarios($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_inventarios_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para utilidad por accion
		public function UtilidadPorAccion1($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_UtilidadPorAccion_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para utilidad por accion
		public function UtilidadPorAccion2($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_UtilidadPorAccion_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para total activo circulante
		public function TotalAC($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_totalActivosCirculantes_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				//echo $resul[0];
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para activo fijo neto 1
		public function actiFN1($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_actiFN1_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para activo fijo neto 2
		public function actiFN2($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_actiFN2_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para total activo 
		public function TotalA($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_totalActivos_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
				
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para cuentas por pagar
		public function cxp($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_cuentasXpagar_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para pasivo a largo plazo 1
		public function PasiLP1($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_PasiLP1_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para pasivo a largo plazo 2
		public function PasiLP2($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_PasiLP2_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para total pasivo
		public function TotalP($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_totalPasivo_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para patrimonio
		public function Patrimonio($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_Patrimonio_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		//Funcion que se encarga de tomar las fechas selecciodas de los datepicker del primer y segundo periodo para total pasivo + patrimonio
		public function TotalPaPa($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->consultar_balanceGeneral_totalPasivoPatrimonio_mdl($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		public function Rotacion_Inven($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->Rotacion_Inven($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		public function Rotacion_cartera($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->Rotacion_cartera($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}

		public function Rotacion_cuentas_por_pagar($fecha1, $fecha2){
			$periodo = new mdl_Periodo();
			$resul = $periodo->Rotacion_cuentas_por_pagar($fecha1,$fecha2);
			if (isset($resul[0])) {
				return $resul[0];
			}else{
				return 0;
			}
		}						
	}
?>