<?php session_name("MYAPP"); //Inicio de la sesion, ubicados antes que cualquier salida HTML

  require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  require_once(__MDL_PATH . "mdl_html.php");
  require(__CTR_PATH . "ctr_periodo.php"); //Agregamos la referencia al controlador respectivo

  $HTML = new mdl_Html();
  $periodo = new ctr_Periodo();
 
?>

<html>
	<body onload="prueba()">
		<head>
		<?php
            echo $HTML->html_js_header(__JS_PATH . "jquery.js"); 
            echo $HTML->html_js_header(__JS_PATH . "funciones.js");
        ?>
		</head>
		<div id='page'>
			<header>
				<h3>Pollitos en Fuga S.A.</h3>
				<h6>Estados Financieros para el año que terminal el Dec 31, 2016</h6>
				<br>
				<h3>Estado de Resultados</h3>
				<div id="tablaestado">
					<table class="striped" id="estadoresul">
		              <thead>
		                <tr>
		                    <th>Periodo</th>
		                    <th id="primer">Primer Periodo</th>
		                    <th id="segundo">Segundo Periodo</th>
		                </tr>
		              </thead>

		              <tbody>
		              	<tr>
		                 	<td>Ventas</td>
		                 	<td class="Vent_pp"><?php 
		                 	echo $periodo->ventas($_SESSION['fecha1'],$_SESSION['fecha2']);
		                 	 ?></td>
		                 	<td class="Vent_sp"><?php echo $periodo->ventas($_SESSION['fecha3'],$_SESSION['fecha4']);
		                 	?></td>
		                </tr>
		                <tr>
		                	<td>Costo de Ventas</td>
		                	<td class="CostVen_pp"><?php echo $periodo->costoVentas($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="CostVen_sp"><?php echo $periodo->costoVentas($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Utilidad Bruta</td>
		                	<td class="UtiBru_pp"><?php echo $periodo->utiBruta($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="UtiBru_sp"><?php echo $periodo->utiBruta($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		              	<tr>
		                	<td>Gastos de Operación</td>
		                	<td class="GasOpe_pp"><?php echo $periodo->gasOpera($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="GasOpe_sp"><?php echo $periodo->gasOpera($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Ut.Antes int.e imp.</td>
		                	<td class="UtAntes_pp"><?php echo $periodo->UtAntesInt($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="UtAntes_sp"><?php echo $periodo->UtAntesInt($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Gastos Financieros</td>
		                	<td class="GasFina_pp"><?php echo $periodo->gasFinan($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="GasFina_sp"><?php echo $periodo->gasFinan($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Utilidad Neta</td>
		                	<td class="UtiNeta_pp"><?php echo $periodo->utiNeta($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="UtiNeta_sp"><?php echo $periodo->utiNeta($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		              </tbody>
		            </table>
		        </div>
		        
		        <br><br>
		        <br><br>
		        <br><br>
		        <br><br>

		        <h3>Balance General</h3>
				<div id="tablabalance">
					<table class="striped">
		              <thead>
		                <tr>
		                    <th>Ventas</th>
		                    <th id="primer1">Primer Periodo</th>
		                    <th id="segundo2">Segundo Periodo</th>
		                </tr>
		              </thead>

		              <tbody>
		              	<tr>
		              		<!--Para el caso de efectivo se puede hacer de manera estatica el valor, solo dependiendo de que se marque
		              			el checkbox para que aparezca-->
		                 	<td>Efectivo</td>
		                 	<td class="Efecti_pp"><?php echo $periodo->efectivo1($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                 	<td class="Efecti_sp"><?php echo $periodo->efectivo2($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Cuentas Por Cobrar</td>
		                	<td class="Cxc_pp"><?php echo $periodo->cxc($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="Cxc_sp"><?php echo $periodo->cxc($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Inventarios</td>
		                	<td class="Invent_pp"><?php echo $periodo->inventarios($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="Invent_sp"><?php echo $periodo->inventarios($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		              	<tr>
		                	<td>Total Activo Circulante</td>
		                	<td class="TotalAC_pp"><?php echo $periodo->TotalAC($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="TotalAC_sp"><?php echo $periodo->TotalAC($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<!--Para el caso de Activo Fijo Neto se puede hacer de manera estatica el valor, solo dependiendo de que se marque
		              			el checkbox para que aparezca-->
		                	<td>Activo Fijo Neto</td>
		                	<td class="ActiFN_pp"><?php echo $periodo->actiFN1($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="ActiFN_sp"><?php echo $periodo->actiFN2($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Total Activo</td>
		                	<td class="TotalA_pp"><?php echo $periodo->TotalA($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="TotalA_sp"><?php echo $periodo->TotalA($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<!--Va Vacio, porque, no se-->
		                	<td>Pasivo Circulante</td>
		                	<td class="PasiCir_pp"></td>
		                	<td class="PasiCir_sp"></td>
		                </tr>
		                <tr>
		                	<td>Cuentas Por Pagar</td>
		                	<td class="Cxp_pp"><?php echo $periodo->cxp($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="Cxp_sp"><?php echo $periodo->cxp($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<!--Para el caso de Pasivo A Largo Plazo se puede hacer de manera estatica el valor, solo dependiendo de que se marque el checkbox para que aparezca-->
		                	<td>Pasivo A Largo Plazo</td>
		                	<td class="PasiLP_pp"><?php echo $periodo->PasiLP1($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="PasiLP_sp"><?php echo $periodo->PasiLP2($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Total Pasivo</td>
		                	<td class="TotalPasi_pp"><?php echo $periodo->TotalP($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="TotalPasi_sp"><?php echo $periodo->TotalP($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<!--Para el caso de Patrimonio se puede hacer de manera estatica el valor, solo dependiendo de que se marque
		              			el checkbox para que aparezca-->
		                	<td>Patrimonio</td>
		                	<td class="Patri_pp"><?php echo $periodo->Patrimonio($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="Patri_sp"><?php echo $periodo->Patrimonio($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Total Pasivo + Patrimonio</td>
		                	<td class="TotalPaPa_pp"><?php echo $periodo->TotalPaPa($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td class="TotalPaPa_sp"><?php echo $periodo->TotalPaPa($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		              </tbody>
		            </table>
				</div>	
			</header>
			<footer>
				<p id='creditos'>Un Proyecto de Luis Duarte, Milton Gomez y Alejandra Melendez. Derechos Reservados. &copy;2017</p>
			</footer>
		</div>
	</body>
</html>