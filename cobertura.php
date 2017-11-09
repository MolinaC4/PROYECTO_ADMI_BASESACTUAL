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

	<body>
		<div id='page'>
			<header>
			<form method="post" enctype="multipart/form-data">		
				 <nav class="nav-extended">
				    <div class="nav-wrapper">
				      <a href="#" class="brand-logo">FinancieroCR - Cobertura</a>
				      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				      <ul id="nav-mobile" class="right hide-on-med-and-down">
				         <li><a href="index.php">Notas</a></li>
				        <li><a href="periodos.php">periodos</a></li>
				        <li><a href="estadosFinancieros.php">Estados Financieros</a></li>
				        <li><a href="liquidez.php">Líquidez</a></li>
				        <li><a href="endeudamiento.php">Endeudamiento</a></li>
				        <li><a href="rentabilidad.php">Rentabilidad</a></li>
				        <li><a href="periodos.php">Cobertura</a></li>
				        <li><a href="cobertura.php">periodos</a></li>
				      </ul>
				      <ul class="side-nav" id="mobile-demo">
				        <li><a href="index.php">Notas</a></li>
				      </ul>
				    </div>

				  </nav>
			</form>
				  <div id="test1" class="col s12">Test 1</div>
				  <div id="test2" class="col s12">Test 2</div>
				  <div id="test3" class="col s12">Test 3</div>
				  <div id="test4" class="col s12">Test 4</div>
			</header>

			

			<footer>
				
			</footer>
		</div>
	</body>
</html>