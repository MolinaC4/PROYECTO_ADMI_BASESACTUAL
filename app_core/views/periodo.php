<?php //session_name("MYAPP"); session_start();//Inicio de la sesion, ubicados antes que cualquier salida HTML

  require_once(__MDL_PATH . "mdl_html.php"); //Agregamos la referencia al controlador respectivo
  //require_once(__CTR_PATH . "ctr_periodo.php"); //Agregamos la referencia al controlador respectivo

  $HTML = new mdl_Html();
  //$periodo = new ctr_Periodo(); //variable del controlador
?>

<html>
	<head>
		<?php
            echo $HTML->html_js_header(__JS_PATH . "jquery.js"); 
            echo $HTML->html_js_header(__JS_PATH . "funciones.js");
        ?>
	</head>
	<body>
    <form id="formulario" method="POST">
		<div id='page'>
			<header>
			<div id="primerperiodo" class="divs">
			<h5>Primer Periodo</h5>
				<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
				<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
				<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
				<script src="jquery.ui.datepicker-es.js"></script>
				
				<script>
				$(function () {
				$.datepicker.setDefaults($.datepicker.regional['es']);
				$("#datepicker1").datepicker({dateFormat: 'yy-mm-dd',
				firstDay: 1
				});
				});
				</script>
				Inicio:
				<input type="text" id="datepicker1" required="required" value="2015-01-01" name="txt_datepicker1"/>
				<!--<script type="text/javascript">alert(datepicker1.value)</script>-->
				<br>

				<script>
				$(function () {
				$.datepicker.setDefaults($.datepicker.regional['es']);
				$("#datepicker2").datepicker({dateFormat: 'yy-mm-dd',
				firstDay: 1
				});
				});
				</script>
				Final:
				<input type="text" id="datepicker2" required="required" value="2015-12-31" name="txt_datepicker2"/>
				<br>
				<input class='check' id="condicion1" name="chk_condicion" type="checkbox" value="primerperiodo" title='Primer Periodo' onclick="mostrarPrimerPeriodo();" checked="true">
				<label for="condicion1">Ver Primer Periodo</label>
				
				<div>
				</div>
			</div><br>
			
			<div id="segundoperiodo" class="divs">
			<h5>Segundo Periodo</h5>
				<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
				<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
				<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
				<script src="jquery.ui.datepicker-es.js"></script>
				
				<script>
				$(function () {
				$.datepicker.setDefaults($.datepicker.regional['es']);
				$("#datepicker3").datepicker({dateFormat: 'yy-mm-dd',
				firstDay: 1
				});
				});
				</script>
				Inicio:
				<input type="text" id="datepicker3" required="required" value="2016-01-01" name="txt_datepicker3"/>
				<br>

				<script>
				$(function () {
				$.datepicker.setDefaults($.datepicker.regional['es']);
				$("#datepicker4").datepicker({dateFormat: 'yy-mm-dd',
				firstDay: 1
				});
				});
				</script>
				Final:
				<input type="text" id="datepicker4" required="required" value="2016-12-31" name="txt_datepicker4"/>
				<br>
				<input class='check' id="condicion2" name="chk_condicion" type="checkbox" value="segundoperiodo" title='Segundo Periodo' onclick="mostrarSegundoPeriodo();" checked="true">
				<label for="condicion2">Ver Segundo Periodo</label>
			</div>
			</header>

			<footer>
				<p id='creditosp'>Un Proyecto de Luis Duarte, Milton Gomez y Alejandra Melendez. Derechos Reservados. &copy;2017</p>
			</footer>
		</div>
		<input type="submit" class="boton" value="Carga Periodos" id="btn_cargarPeriodos" name="btn_cargarPeriodos">
	</form>
	</body>
</html>

<?php 

if (isset($_POST['btn_cargarPeriodos'] )) {
    if (isset($_POST['txt_datepicker1']) && isset($_POST['txt_datepicker2'])) {
    	$_SESSION['fecha1'] = $_POST['txt_datepicker1'];
    	$_SESSION['fecha2'] = $_POST['txt_datepicker2'];
    	//print_r($_POST['txt_datepicker2']) ;
    }
    if (isset($_POST['txt_datepicker3']) && isset($_POST['txt_datepicker4'])) {
    	$_SESSION['fecha3'] = $_POST['txt_datepicker3'];
    	$_SESSION['fecha4'] = $_POST['txt_datepicker4'];
    	//print_r($_POST['txt_datepicker2']) ;
    }
}
?>