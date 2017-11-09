<?php 
  //Inicio de la sesión, ubicados antes que cualquier salida HTML

  require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  require_once(__MDL_PATH . "mdl_html.php");

  $HTML = new mdl_Html();
?>


<!DOCTYPE html>
<head>
	<title>FinancieroCR</title>
	<meta charset='utf-8'>
	<meta name='description' content='Laboratorio #3 JavaScript-JQUERY'>
	<meta name='keywords' content='HTML5, CSS3, JavaScript, JQUERY'>
	<link rel="shortcut icon" href="jquery.png"/>

	<?php

    //echo $HTML->html_js_header(__JS_PATH . "jquery1.js");
    echo $HTML->html_js_header(__JS_PATH . "jquery.js");
    echo $HTML->html_js_header(__JS_PATH . "funciones.js");
    echo $HTML->html_js_header(__JS_PATH . "materialize.js");
    echo $HTML->html_js_header(__JS_PATH . "materialize.min.js");

    echo $HTML->html_css_header(__CSS_PATH . "estilos.css","screen");
    echo $HTML->html_css_header(__CSS_PATH . "materialize.css","screen");
    echo $HTML->html_css_header(__CSS_PATH . "materialize.min.css","screen");

    ?>
</head>

	<body>
		<div id='page'>
			<header>
			<form method="post" enctype="multipart/form-data">		
				 <nav class="nav-extended">
				    <div class="nav-wrapper">
				      <a href="#" class="brand-logo">FinancieroCR - Estados Financieros</a>
				      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				      <ul id="nav-mobile" class="right hide-on-med-and-down">
				        <li><a href="periodos.php">PERIODOS</a></li>
				        <li><a href="estadosFinancieros.php">ESTADOS FINANCIEROS</a></li>
				        <li><a href="liquidez.php">LÍQUIDEZ</a></li>
				        <li><a href="endeudamiento.php">ENDEUDAMIENTO</a></li>
				        <li><a href="rentabilidad.php">RENTABILIDAD</a></li>
				        <li><a href="cobertura.php">COBERTURA</a></li>
				        <li><a href="index.php">NOTAS</a></li>
				      </ul>
				      <ul class="side-nav" id="mobile-demo">
				        <li><a href="index.php">Notas</a></li>
				      </ul>
				    </div>
				  </nav>
			</form>
				<h3>Pollitos en Fuga S.A.</h3>
				<h6>Estados Financieros para el año que terminal el Dec 31, 2016</h6>
				<br>
				<h3>Estado de Resultados</h3>
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
		                 	<td>Ventas</td>
		                 	<td>1000</td>
		                 	<td>2000</td>
		                </tr>
		                <tr>
		                	<td>Costo de Ventas</td>
		                	<td>1000</td>
		                	<td>2100</td>
		                </tr>
		                <tr>
		                	<td>Utilidad Bruta</td>
		                	<td>12</td>
		                	<td>14</td>
		                </tr>
		              	<tr>
		                	<td>Gastos de Operación</td>
		                	<td>52</td>
		                	<td>100</td>
		                </tr>
		                <tr>
		                	<td>Ut.Antes int.e imp.</td>
		                	<td>500</td>
		                	<td>600</td>
		                </tr>
		                <tr>
		                	<td>Gastos Financieros</td>
		                	<td>650</td>
		                	<td>700</td>
		                </tr>
		                <tr>
		                	<td>Utilidad Neta</td>
		                	<td>1000</td>
		                	<td>1950</td>
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
		                    <th>Primer Periodo</th>
		                    <th>Segundo Periodo</th>
		                </tr>
		              </thead>

		              <tbody>
		              	<tr>
		              		<!--Para el caso de efectivo se puede hacer de manera estatica el valor, solo dependiendo de que se marque
		              			el checkbox para que aparezca-->
		                 	<td>Efectivo</td>
		                 	<td>2500000</td>
		                 	<td>2200000</td>
		                </tr>
		                <tr>
		                	<td>Cuentas Por Cobrar</td>
		                	<td>1500</td>
		                	<td>1200</td>
		                </tr>
		                <tr>
		                	<td>Inventarios</td>
		                	<td>1000</td>
		                	<td>1100</td>
		                </tr>
		              	<tr>
		              		<!--Falta de crear procedimiento o consulta, preguntar al profe-->
		                	<td>Total Activo Circulante</td>
		                	<td>4500</td>
		                	<td>4400</td>
		                </tr>
		                <tr>
		                	<!--Para el caso de Activo Fijo Neto se puede hacer de manera estatica el valor, solo dependiendo de que se marque
		              			el checkbox para que aparezca-->
		                	<td>Activo Fijo Neto</td>
		                	<td>8000</td>
		                	<td>8500</td>
		                </tr>
		                <tr>
		                	<!--Falta de crear procedimiento o consulta, preguntar al profe-->
		                	<td>Total Activo</td>
		                	<td>12500</td>
		                	<td>12900</td>
		                </tr>
		                <tr>
		                	<td>Pasivo Circulante</td>
		                	<td></td>
		                	<td></td>
		                </tr>
		                <tr>
		                	<td>Cuentas Por Pagar</td>
		                	<td>2500</td>
		                	<td>2600</td>
		                </tr>
		                <tr>
		                	<!--Para el caso de Pasivo A Largo Plazo se puede hacer de manera estatica el valor, solo dependiendo de que se marque el checkbox para que aparezca-->
		                	<td>Pasivo A Largo Plazo</td>
		                	<td>7500</td>
		                	<td>7800</td>
		                </tr>
		                <tr>
		                	<!--Falta de crear procedimiento o consulta, preguntar al profe-->
		                	<td>Total Pasivo</td>
		                	<td>10000</td>
		                	<td>10400</td>
		                </tr>
		                <tr>
		                	<!--Para el caso de Patrimonio se puede hacer de manera estatica el valor, solo dependiendo de que se marque
		              			el checkbox para que aparezca-->
		                	<td>Patrimonio</td>
		                	<td>2500</td>
		                	<td>2300</td>
		                </tr>
		                <tr>
		                	<!--Falta de crear procedimiento o consulta, preguntar al profe-->
		                	<td>Total Pasivo</td>
		                	<td>12500</td>
		                	<td>12700</td>
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