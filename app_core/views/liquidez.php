<?php session_name("MYAPP"); //Inicio de la sesion, ubicados antes que cualquier salida HTML

  	require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  	//Inicio de la sesión, ubicados antes que cualquier salida HTML

 	//require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  	require_once(__MDL_PATH . "mdl_html.php");

	$_SESSION['totalAC1'] = $periodo->TotalAC($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['pasiCircu1'] = $periodo->TotalP($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['totalAC2'] = $periodo->TotalAC($_SESSION['fecha3'],$_SESSION['fecha4']);
	$_SESSION['pasiCircu2'] = $periodo->TotalP($_SESSION['fecha3'],$_SESSION['fecha4']);
	$_SESSION['invent1'] =  $periodo->inventarios($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['invent2'] =  $periodo->inventarios($_SESSION['fecha3'],$_SESSION['fecha4']);

  	$HTML = new mdl_Html();
?>

<html>
	<body>
		<div id='page'>
			<header>
				<h3>Pollitos en Fuga S.A.</h3>
				<h6>Las razones de liquidez se refieren a la facilidad con la que la empresa puede pagar sus cuentas </h6>
				<br>
				<h3>Razones de liquidez: </h3>
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
		                 	<td>Capital neto de trabajo</td>
		                 	<td><?php
		                	echo $_SESSION['totalAC1']+$_SESSION['pasiCircu1']; ?></td>
		                 	<td><?php
		                	echo $_SESSION['totalAC2']+$_SESSION['pasiCircu2']; ?></td>
		                </tr>
		                <tr>
		                	<td>Índice de solvencia</td>
		                	<td><?php
		                 	  echo round($_SESSION['totalAC1']/$_SESSION['pasiCircu1'],PHP_ROUND_HALF_DOWN);  ?></td>
		                	<td><?php echo round($_SESSION['totalAC2']/$_SESSION['pasiCircu2'],PHP_ROUND_HALF_DOWN);   ?></td>
		                </tr>
		                <tr>
		                	<td>Prueba ácida</td>
		                	<td><?php echo round(($_SESSION['totalAC1'] - $_SESSION['invent1']) / $_SESSION['pasiCircu1'],PHP_ROUND_HALF_DOWN) ?></td>
		                	<td><?php echo round(($_SESSION['totalAC2'] - $_SESSION['invent2']) / $_SESSION['pasiCircu2'],PHP_ROUND_HALF_DOWN) ?></td>
		                </tr>
		              	<tr>
		                	<td>Rotación de inventarios</td>
		                	<td><?php echo $periodo->Rotacion_Inven($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td><?php echo $periodo->Rotacion_Inven($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Rotación de cartera</td>
		                	<td><?php echo $periodo->Rotacion_cartera($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td><?php echo $periodo->Rotacion_cartera($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
		                </tr>
		                <tr>
		                	<td>Rotación de cuentas por pagar</td>
		                	<td><?php echo $periodo->Rotacion_cuentas_por_pagar($_SESSION['fecha1'],$_SESSION['fecha2']); ?></td>
		                	<td><?php echo $periodo->Rotacion_cuentas_por_pagar($_SESSION['fecha3'],$_SESSION['fecha4']); ?></td>
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