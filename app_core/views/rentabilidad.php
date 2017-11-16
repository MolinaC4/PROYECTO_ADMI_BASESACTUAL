<?php session_name("MYAPP"); //Inicio de la sesion, ubicados antes que cualquier salida HTML

  	require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  	//Inicio de la sesión, ubicados antes que cualquier salida HTML

 	//require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  	require_once(__MDL_PATH . "mdl_html.php");
	// MARGEN BRUTO DE UTILIDAD
	$_SESSION['ventas1'] = $periodo->ventas($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['costoVen1'] = $periodo->costoVentas($_SESSION['fecha1'],$_SESSION['fecha2']);

	$_SESSION['ventas2'] = $periodo->ventas($_SESSION['fecha3'],$_SESSION['fecha4']);
	$_SESSION['costoVen2'] = $periodo->costoVentas($_SESSION['fecha3'],$_SESSION['fecha4']);
	
	//MARGEN BRUTO DE UTILIDAD
	$_SESSION['gasFinan1'] = $periodo->gasFinan($_SESSION['fecha1'],$_SESSION['fecha2']);
 	$_SESSION['gasFinan2'] = $periodo->gasFinan($_SESSION['fecha3'],$_SESSION['fecha4']);

 	//MARGEN NETO DE UTILIDADES
 	$_SESSION['gasOpera1'] = $periodo->gasOpera($_SESSION['fecha1'],$_SESSION['fecha2']);
 	$_SESSION['gasOpera1'] = $periodo->gasOpera($_SESSION['fecha3'],$_SESSION['fecha4']);
 	$_SESSION['Impuestos1'] = $periodo->Impuestos($_SESSION['fecha1'],$_SESSION['fecha2']);
 	$_SESSION['Impuestos2'] = $periodo->Impuestos($_SESSION['fecha3'],$_SESSION['fecha4']);

 	//ROTACION DE ACTIVOS
 	$_SESSION['totalAC1'] = $periodo->TotalA($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['ttotalAC2'] = $periodo->TotalA($_SESSION['fecha3'],$_SESSION['fecha4']);

	//RENDIMIENTO DE LA INVERSION
	$_SESSION['utiNeta1'] = $periodo->utiNeta($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['utiNeta2'] = $periodo->utiNeta($_SESSION['fecha3'],$_SESSION['fecha4']);

	//UTILIDAD POR ACCION
	$_SESSION['UtilidadPorAccion1'] = $periodo->utiNeta($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['UtilidadPorAccion2'] = $periodo->utiNeta($_SESSION['fecha3'],$_SESSION['fecha4']);

  	$HTML = new mdl_Html();
?>

<html>
	<body>
		<div id='page'>
			<header>
				<h3>Pollitos en Fuga S.A.</h3>
				<h6>Con estas razones se pretende medir el nivel o grado de rentabilidad que obtiene la empresa ya sea con respecto a las venta, con respecto al monto de los activos de la empresa o respecto al  <br> capital aportado por lo socios. </h6>
				<br>
				<h3>Razones de Rentabilidad: </h3>
				<div id="tablaestado">
					<table class="striped">
		              <thead>
		                <tr>
		                    <th>Periodo</th>
		                    <th>Primer Periodo</th>
		                    <th>Segundo Periodo</th>
		                </tr>
		              </thead>

		              <tbody>
		              	<tr>
		                 	<td>Margen bruto de utilidad</td>
		                 	<td><?php if ($_SESSION['ventas1'] == 0) {
           									echo "Error, 0";
                						}
        								else { 
											echo ($_SESSION['ventas1'] - $_SESSION['costoVen1']) / $_SESSION['ventas1'];      
										}


		                	 ?></td>
		                 	<td><?php if ($_SESSION['ventas2'] == 0) {
           									echo "Error, 0";
                						}
        								else { 
											echo ($_SESSION['ventas2'] - $_SESSION['costoVen2']) / $_SESSION['ventas2'];;      
										}
		                	 ?></td>
		                </tr>
		                <tr>
		                	<td>Margen de utilidades operacionales</td>
		                	<td><?php
		                 	  echo $_SESSION['costoVen1'] - $_SESSION['gasFinan1'];  ?></td>
		                	<td><?php 
		                	echo $_SESSION['costoVen2'] - ($_SESSION['gasFinan2']);   ?></td>
		                </tr>
		                <tr>
		                	<td>Margen neto de utilidades</td>
		                	<td><?php
		                 	  echo $_SESSION['ventas1']-$_SESSION['gasOpera1']-$_SESSION['Impuestos1'];  ?></td>
		                	<td><?php 
		                	echo $_SESSION['ventas2']-$_SESSION['gasOpera2']-$_SESSION['Impuestos2'];   ?></td>
		                </tr>
		                <tr>
		                	<td>Rotacion de activos</td>
		                	<td><?php
		                 	  echo $_SESSION['ventas1']/$_SESSION['totalAC1'];  ?></td>
		                	<td><?php 
		                	echo $_SESSION['ventas2']/$_SESSION['totalAC2'];   ?></td>
		                </tr>
		                <tr>
		                	<td>Rendimiento de la inversion</td>
		                	<td><?php
		                 	  echo $_SESSION['utiNeta1']/$_SESSION['totalAC1'];  ?></td>
		                	<td><?php 
		                	echo $_SESSION['utiNeta2']/$_SESSION['totalAC2'];   ?></td>
		                </tr>
		                <tr>
		                	<td>Rendimiento del capital comun</td>
		                	<td><?php
		                 	  echo $_SESSION['pasiLargoP1']/$_SESSION['totalAC1']-$_SESSION['totalPasivo1'];  ?></td>
		                	<td><?php 
		                	echo $_SESSION['pasiLargoP2']/$_SESSION['totalAC2']-$_SESSION['totalPasivo2'];   ?></td>
		                </tr>
		                <tr>
		                	<td>Utilidad por accion</td>
		                	<td><?php
		                 	  echo $_SESSION['UtilidadPorAccion1']/10;  ?></td>
		                	<td><?php 
		                	echo $_SESSION['UtilidadPorAccion2']/10;   ?></td>
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