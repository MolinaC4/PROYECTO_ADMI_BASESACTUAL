<?php 
  //Inicio de la sesión, ubicados antes que cualquier salida HTML

  require_once("global.php"); //ARCHIVO BÁSICO GLOBAL DE CONFIGURACIÓN
  require_once(__MDL_PATH . "mdl_html.php");

  $HTML = new mdl_Html();

  $_SESSION['utiAntes1'] = $periodo->UtAntesInt($_SESSION['fecha1'],$_SESSION['fecha2']);
  $_SESSION['utiAntes2'] = $periodo->UtAntesInt($_SESSION['fecha3'],$_SESSION['fecha4']);
  $_SESSION['abono_cxp1'] = $periodo->abono_cxp($_SESSION['fecha1'],$_SESSION['fecha2']);
  $_SESSION['abono_cxp2'] = $periodo->abono_cxp($_SESSION['fecha3'],$_SESSION['fecha4']);
?>

<html>
	<body>
		<div id='page'>
			<header>
				<h3>Pollitos en Fuga S.A.</h3>
				<h6>Las razones de cobertura miden la capacidad de la empresa para cubrir sus obligaciones o
				determinados cargos que pueden comprometer la salud financiera de la empresa. </h6>
				<br>
				<h3>Razones de cobertura: </h3>
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
		                 	<td>Cobertura total del pasivo</td>
		                 	<td><?php echo  round($_SESSION['utiAntes1'] / $_SESSION['abono_cxp1'],PHP_ROUND_HALF_DOWN) ?></td>
		                 	<td><?php echo round($_SESSION['utiAntes2'] / $_SESSION['abono_cxp2'],PHP_ROUND_HALF_DOWN) ?></td>
		                </tr>
		                <tr>
		                	<td>Razón de cobertura total</td>
		                	<td><?php echo round($_SESSION['utiAntes1'] / ($_SESSION['abono_cxp1'] + 21000),PHP_ROUND_HALF_DOWN) ?></td>
		                	<td><?php echo round($_SESSION['utiAntes2'] / ($_SESSION['abono_cxp2'] + 21000),PHP_ROUND_HALF_DOWN) ?></td>
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