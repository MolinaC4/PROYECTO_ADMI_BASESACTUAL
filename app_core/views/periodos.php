<?php  error_reporting(E_ALL);  ini_set('display_errors', 1); 

		require_once("global.php");
		require_once(__MDL_PATH. "mdl_html.php");
		
		$HTML = new mdl_Html(); 
?> 


<!DOCTYPE html>
<html>
	<head>
		<meta name="title" content="SIRHENA"/>
		<meta name="description" content="SIRHENA"/>
		<meta name="robots" content="index, follow"/>
		<meta name="keywords" content="Recursos humanos, HTML5, PHP, MySQL, jquery"/>
		<meta name="language" content="es"/>
		<link rel="shortcut icon" href="favicon.ico"/>
		
			<?php
		
				echo $HTML->html_js_header(__JS_PATH ."jquery.js");
				echo $HTML->html_js_header(__JS_PATH ."jquery1.js");				
				echo $HTML->html_css_header(__CSS_PATH . "materialize.min.css","screen");
				echo $HTML->html_css_header(__CSS_PATH . "materialize.css","screen");			
				echo $HTML->html_js_header(__JS_PATH . "materialize.js");
				echo $HTML->html_js_header(__JS_PATH . "materialize/js/materialize.min.js");
			?>
			
		<title>SIRHENA: Postulante</title>
	</head>
		
	<body id="main_page">
      <form method="post" enctype="multipart/form-data">			
			<nav class="nav-extended blue lighten-2">
				<div class="nav-wrapper">
				  <a href="#" class="brand-logo">&nbsp Financiero CR</a>
				  <a href="#" data-activates="mobile-demo" class="button-collapse"></i></a>		  
				</div>
				<div class="nav-content">
				  <ul class="tabs tabs-transparent">
					<li class="tab"><a class="active" href="#Inicio">PERIODOS</a></li>
					<li class="tab"><a href="#EstadosFinancieros">ESTADOS FINANCIEROS</a></li>
					<li class="tab"><a href="#Liquidez">LIQUIDEZ</a></li>
					<li class="tab"><a href="#Deuda">ENDEUDAMIENTO</a></li>
					<li class="tab"><a href="#Rentabilidad">RENTABILIDAD</a></li>
					<li class="tab"><a href="#Cobertura">COBERTURA</a></li>
					<li class="tab"><a href="#Notas">NOTAS</a></li>
				  </ul>
				</div>
			</nav>				
	  </form>
	    <div id="Inicio" class="col s12">
	    	<?php require(__VWS_PATH . "periodo.php");?>
	    </div>
	    <div id="EstadosFinancieros" class="col s12">
	    	<?php require(__VWS_PATH . "estadoFinanciero.php");?>	    	
	    </div>
	    <div id="Liquidez" class="col s12">
	    	<?php require(__VWS_PATH . "liquidez.php");?>
	    </div>
	    <div id="Deuda" class="col s12">
	    	<?php require(__VWS_PATH . "endeudamiento.php");?>
	    </div>
	    <div id="Rentabilidad" class="col s12">
	    	<?php require(__VWS_PATH . "rentabilidad.php");?>
	    </div>
	    <div id="Cobertura" class="col s12">
	    	<?php require(__VWS_PATH . "Rcobertura.php");?>
	    </div>	 
	    <div id="Notas" class="col s12">
	    	<?php require(__VWS_PATH . "notas.php");?>
	    </div>		       	    
	</body>
</html>