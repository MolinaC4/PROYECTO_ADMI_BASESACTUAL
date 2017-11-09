$(document).ready(function(){
	mostrarPrimerPeriodo();
	mostrarSegundoPeriodo();
});

function validarfecha(obj) {
  patron = /^\d{4}\/\d{2}\/\d{2}$/
  if (!patron.test(obj.value)) {
    alert('Error');
    obj.focus();
  }
}

//Funcion para seleccionar los datos de la base basandose en los estados de los checkbox
function cargarPrimerPeriodo(parametro){
    $.ajax({
        type: 'GET', //tipo de paso de parametros
        //no encuentra la ruta es?
        url: 'app_core/controllers/ctr_periodo.php', //Script PHP donde estan las funciones
        data: {key: parametro, fecha1:$('#datepicker1').val(), fecha2:$('#datepicker2').val()} //parametros a pasar GET, EJEM: /Page.html?id=2&name=hola
    }).done(function( datos ) {
        var json = eval("("+datos+")");
        console.log(json);
        /*//alert(json.ventas); //Cargamos los datos en la tabla html indicada
        if (json.ventas.confirmacion == "pp") {
            $(".Vent_pp").html("1");
        }else if (json.ventas.confirmacion == "sp") {}{
            $(".Vent_sp").html(json.ventas.sp);*/
        //document.cookie = "name=oeschger";
    }).fail(function (jqXHR, textStatus, errorThrow){
        //En caso de error de carga nos notifica
        //alert(jqXHR.responseText);
    });
}

function mostrarPrimerPeriodoAjax(){
        $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'ctr_periodo.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP
        data: { key: 'periodo1', fecha1: $('#datepicker1').val(), fecha2: $('#datepicker2').val()}
        }).done(function( datos ) {
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML
        //    if (datos == 1) {
        //        alert("Error al ingresar, el usuario ya existe");
        //    }else{
        //        alert("Ingresado con exito");    
        //    }
            alert("Ventas Primer Periodo" + datos);
        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            alert("Error al mostrar los datos");
        });    
}


function mostrarPrimerPeriodo(){
	if ($('#condicion1').is(":checked")) {
		cargarPrimerPeriodo("pp");
	}
}

function mostrarSegundoPeriodo(){
	if ($('#condicion2').is(":checked")) {
		cargarPrimerPeriodo("sp");
	}
}

function validacionPeriodo1(){
    fecha1 = document.getElementById("datepicker1").value;
    fecha2 = document.getElementById("datepicker2").value;

    if (fecha1 == null || fecha1.length == 0 || /^\s+$/.test(fecha1)) {
        alert("Digite una fecha de inicio");
        return false;
    }else if(fecha2 == null || fecha2.length == 0 || /^\s+$/.test(fecha2)){
        alert("Digite una fecha de final");
        return false;
    }
    return true;
}