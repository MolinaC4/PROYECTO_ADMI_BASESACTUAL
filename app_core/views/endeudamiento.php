<?php session_name("MYAPP"); //Inicio de la sesion, ubicados antes que cualquier salida HTML

  	require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  	//Inicio de la sesión, ubicados antes que cualquier salida HTML

 	//require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  	require_once(__MDL_PATH . "mdl_html.php");
	// RAZON DE ENDEUDAMIENTO
	$_SESSION['totalPasivo1'] = $periodo->TotalP($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['totalAC1'] = $periodo->TotalA($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['totalPasivo2'] = $periodo->TotalP($_SESSION['fecha3'],$_SESSION['fecha4']);
	$_SESSION['totalAC2'] = $periodo->TotalA($_SESSION['fecha3'],$_SESSION['fecha4']);
	//RAZON PASIVO CAPITAL
	$_SESSION['pasiLargoP1'] =  $periodo->PasiLP1($_SESSION['fecha1'],$_SESSION['fecha2']);
	$_SESSION['pasiLargoP2'] =  $periodo->PasiLP2($_SESSION['fecha3'],$_SESSION['fecha4']);
 
  	$HTML = new mdl_Html();
?>

<html>
	<body>
		<div id='page'>
			<header>
				<h3>Pollitos en Fuga S.A.</h3>
				<h6>Las​​ razones​​ de​​ endeudamiento​​ permiten​​ identificar​​ el​​ grado​​ de​​ endeudamiento​​ que​​ tiene​​ la empresa​​ y​​ su​​ capacidad​​ para​​ asumir​​ sus​​ pasivos. </h6>
				<br>
				<h3>Razones de Endeudamiento: </h3>
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
		                 	<td>Razón​​ de​​ endeudamiento</td>
		                 	<td><?php
		                	echo $_SESSION['totalPasivo1']/$_SESSION['totalAC1']; ?></td>
		                 	<td><?php
		                	echo $_SESSION['totalPasivo2']/$_SESSION['totalAC2']; ?></td>
		                </tr>
		                <tr>
		                	<td>Razón ​​pasivo​​ capital</td>
		                	<td><?php
		                 	  echo $_SESSION['pasiLargoP1']/($_SESSION['totalAC1']-($_SESSION['totalPasivo1']));  ?></td>
		                	<td><?php 
		                	echo $_SESSION['pasiLargoP2']/($_SESSION['totalAC2']-($_SESSION['totalPasivo2']));   ?></td>
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