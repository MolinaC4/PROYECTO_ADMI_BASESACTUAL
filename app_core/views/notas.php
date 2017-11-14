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
			<form method="post" enctype="multipart/form-data">	
			</form>
				  <div id="test1" class="col s12">
		<div  id="imagen" class="row">
		        <div class="col s12 m7">
		          <div class="card">
		            <div class="card-image">
		              <img src="app_design/img/hola.jpg">
		              <span class="card-title">Administracion de Bases de Datos</span>
		            </div>
		            <div class="card-content">
		            	<span class="card-title">Integrantes:</span>
		              <p>Luis Fernando Duarte Blanco</p>
		              <p>Milton Gomez Perez</p>
		              <p>Alejandra Melendez Molina</p>
		            </div>
		 
		          </div>
		        </div>
		      </div>
		      <h1 id="titulo">Actividades realizadas</h1>
		      <table class="striped">
		              <thead>
		                <tr>
		                    <th>Nombre</th>
		                    <th>Actividad</th>
		                </tr>
		              </thead>

		              <tbody>
		                <tr>
		                  <td>Luis</td>
		                  <td>Modulos Endeudamiento y Rentabilidad, notas.</td>
		                </tr>
		                <tr>
		                  <td>Milton</td>
		                  <td>Modulo de periodos y estados finacieros, arreglo problemas respecto a periodos.</td>
		                </tr>
		                <tr>
		                  <td>Ale</td>
		                  <td>Modulos Cobertura y Liquidez y arreglo los problemas respecto a periodos.</td>
		                </tr>
		              </tbody>
		            </table>
				  </div>
				  
			</header>

			<footer>
				
			</footer>
		</div>
	</body>
</html>