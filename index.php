<?php  session_start();
		//Variables utilizadas para estado resultado
		$_SESSION['ventas1'] = 0;
		$_SESSION['ventas2'] = 0;
		$_SESSION['costoVen1'] = 0;
		$_SESSION['costoVen2'] = 0;
		$_SESSION['utiBruta1'] = 0;
		$_SESSION['utiBruta2'] = 0;
		$_SESSION['gasOpera1'] = 0;
		$_SESSION['gasOpera2'] = 0;
		$_SESSION['utiAntes1'] = 0;
		$_SESSION['utiAntes2'] = 0;
		$_SESSION['gasFinan1'] = 0;
		$_SESSION['gasFinan2'] = 0;
		$_SESSION['utiNeta1'] = 0;
		$_SESSION['utiNeta2'] = 0;
		//Variables utilizadas para el balance general
		$_SESSION['Impuestos1'] = 0;
		$_SESSION['Impuestos2'] = 0;
		$_SESSION['UtilidadPorAccion1'] = 0;
		$_SESSION['UtilidadPorAccion2'] = 0;
		$_SESSION['efectivo1'] = 0;
		$_SESSION['efectivo2'] = 0;
		$_SESSION['cxc1'] = 0;
		$_SESSION['cxc2'] = 0;
		$_SESSION['invent1'] = 0;
		$_SESSION['invent2'] = 0;
		$_SESSION['totalAC1'] = 0;
		$_SESSION['totalAC2'] = 0;
		$_SESSION['activoFN1'] = 0;
		$_SESSION['activoFN2'] = 0;
		$_SESSION['totalAct1'] = 0;
		$_SESSION['totalAct2'] = 0;
		$_SESSION['pasiCircu1'] = 0;
		$_SESSION['pasiCircu2'] = 0;
		$_SESSION['cxp1'] = 0;
		$_SESSION['cxp2'] = 0;
		$_SESSION['pasiLargoP1'] = 0;
		$_SESSION['pasiLargoP2'] = 0;
		$_SESSION['totalPasivo1'] = 0;
		$_SESSION['totalPasivo2'] = 0;
		$_SESSION['patrimonio1'] = 0;
		$_SESSION['patrimonio2'] = 0;
		$_SESSION['totalPasiMatri1'] = 0;
		$_SESSION['totalPasiMatri2'] = 0;

		error_reporting(E_ALL);  ini_set('display_errors', 1); 

		require_once("global.php");
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

    echo $HTML->html_js_header(__JS_PATH . "jquery1.js");
    echo $HTML->html_js_header(__JS_PATH . "jquery.js");
    echo $HTML->html_js_header(__JS_PATH . "funciones.js");
    echo $HTML->html_js_header(__JS_PATH . "materialize.js");
    echo $HTML->html_js_header(__JS_PATH . "materialize.min.js");

    echo $HTML->html_css_header(__CSS_PATH . "estilos.css","screen");
    echo $HTML->html_css_header(__CSS_PATH . "materialize.css","screen");
    echo $HTML->html_css_header(__CSS_PATH . "materialize.min.css","screen");

    ?>

</head>
		
		<body id="main_page">
		
		<div id='msg_box_container'></div>
		<div id="main_box">
			<?php
				//Incluimos la vista en nuestro HTML de inicio
				include_once(__VWS_PATH . "periodos.php"); 
			?>
		</div> 
	</body>
</html>