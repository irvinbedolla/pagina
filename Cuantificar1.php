<?php
$fechaActual = date('Y-m-d');
$anioActual = date('Y');
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>CCLMichoacán</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/cclm.ico" type="image/x-icon">
 <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
  <body>
    
    <div class="page">
  
      <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/LOGOS_circulo2.png" alt="" width="198" height="66"/></a></div>
                </div>                
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper--
		<img src="images/trabajando.jpg">
		 <!-- Swiper-->
    

<!-- Botones-->
		<body>
			
		<div class="container">	
			
			<br> <h3 class="wow fadeInLeft" align="left">Realiza tu cuantificación<img src="images/Linea.png" alt="" width="605" height="15"/></h3>
			<br>
			
			<div class="container-fluid">
        <div class="row">
        	<div class='col-md-2'>
		      <div class='input-group mb-3'>
		        <label for="fechaInicio" class="form-label">Pago mensual</label>
		    	<input type="text" class="form-control" id="pagoMensual" onchange="calcularPagoDia();">
		      </div>
		    </div>

		    <div class='col-md-2'>
		      <div class='input-group mb-3'>
		        <label for="diasTotal" class="form-label">Pago por dia</label>
		    	<input type="text" class="form-control" id="pagoDia" disabled>
		      </div>
		    </div>

        	<div class='col-md-3'>
		      <div class='input-group mb-3'>
		        <label for="fechaInicio" class="form-label">Fecha Ingreso</label><br>
		    	<input type="date" class="form-control" id="fechaInicio">
		      </div>
		    </div>

		    <div class='col-md-3'>
		      <div class='input-group mb-3'>
		        <label for="fechaFin" class="form-label">Fecha Egreso</label>
		    	<input type="date" class="form-control" id="fechaFin" onchange="calcularDias();">
		      </div>
		    </div>
		    
		    <input type="date" class="form-control" id="fechaEneroActual" value="<?=$anioActual?>-01-01"  hidden>
		    <input type="text" class="form-control" id="diasTotalAguinaldo" hidden>

		    <div class='col-md-2'>
		      <div class='input-group mb-3'>
		        <label for="diasTotal" class="form-label">Dias totales</label>
		    	<input type="text" class="form-control" id="diasTotal" disabled>
		      </div>
		    </div>

		    

			<center>
				<button type="submit" class="btn btn-primary col-md-2" onclick="calcularVacacionesPrima();">Calcular</button>
				<button type="submit" class="btn btn-primary col-md-2" onclick="limpiarCampos();">Limpiar</button>
			</center>
        </div>
        <br><br>
        <div class="alertaFecha"></div>


        <br><br>
        <div class="totalVacaciones"></div>
        <div class="totalPrima"></div>
        <div class="totalAguinaldo"></div>
        <div class="totalPrimaIndemnizacion"></div>
        <div class="totalPrimaAntiguedad"></div>

    </div
		
	 </div	
	  </body>
				
 <!-- Banner-->
 
 

                
       
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

	  <script src="js/Ubica.js"></script>
  </body>
</html>

<script>
//FUNCION LIMPIAR CAMPOS ==========================================================
function limpiarCampos(){

	$("#pagoMensual").val("");
	$("#pagoDia").val("");
	$("#fechaInicio").val("");
	$("#fechaFin").val("");
	$("#diasTotalAguinaldo").val("");
	$("#diasTotal").val("");

	$(".totalVacaciones").html("");
	$(".totalPrima").html("");
	$(".totalAguinaldo").html("");
	$(".totalPrimaIndemnizacion").html("");
	$(".totalPrimaAntiguedad").html("");

}
//==================================================================================

//FUNCION CALCULAR DIAS FECHAS======================================================
function calcularDias(){

    var fechaInicio = new Date(document.getElementById("fechaInicio").value);
    var fechaFin = new Date(document.getElementById("fechaFin").value);

    var fechaEnero = new Date(document.getElementById("fechaEneroActual").value);

    var actualDate = new Date();
    if (fechaFin > fechaInicio)
    {
        var diferencia = fechaFin.getTime() - fechaInicio.getTime();
        document.getElementById("diasTotal").value = Math.round(diferencia / (1000 * 60 * 60 * 24));

        $(".alertaFecha").html("");
    }
    else if (fechaFin != null && fechaFin < fechaInicio) {

        var htmlAlerta =
        "<div class='alert alert-danger d-flex align-items-center' role='alert'>"+
        	"<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>"+
			"<div>La fecha final debe ser mayor a la fecha inicial</div>"+
        "</div>";
        
		$(".alertaFecha").html(htmlAlerta);

        $("#fechaInicio").val("");
        $("#fechaFin").val("");
        document.getElementById("diasTotal").value = 0;
    }

    if (fechaFin > fechaEnero)
    {
        var diferenciaAguinaldo = fechaFin.getTime() - fechaEnero.getTime();

        document.getElementById("diasTotalAguinaldo").value = Math.round(diferenciaAguinaldo / (1000 * 60 * 60 * 24));

        $(".alertaFecha").html("");
    }
    else if (fechaFin != null && fechaFin < fechaEnero) {

        var htmlAlerta =
        "<div class='alert alert-danger d-flex align-items-center' role='alert'>"+
        	"<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>"+
			"<div>La fecha final debe ser mayor a la fecha inicial</div>"+
        "</div>";
        
		$(".alertaFecha").html(htmlAlerta);

        document.getElementById("diasTotalAguinaldo").value = 0;
    }

}
//==================================================================================

//FUNCION CALCULAR PAFO DIAS =======================================================
function calcularPagoDia(){

	var pagoMensual = $("#pagoMensual").val();

	var resultadoPagoDia = pagoMensual / 30;

	var total = parseFloat(resultadoPagoDia).toFixed(2);

	$("#pagoDia").val(total);

}
//==================================================================================

//FUNCION CALCULAR PAGO DIAS VACACIONES ============================================
function calcularVacacionesPrima(){
	var diasLey = 12;
	var diasCalendario = 365;
	var diasTrabajados = $("#diasTotal").val();
	var pagoDiario = $("#pagoDia").val();


	var resultadoDias = diasLey / diasCalendario;
	var totalDias = parseFloat(resultadoDias).toFixed(4);

	var resultadoDiasTrabajados = totalDias * diasTrabajados;
	var totalDiasTrabajados = parseFloat(resultadoDiasTrabajados).toFixed(2);

	var resultadoSalarioDiario = totalDiasTrabajados * pagoDiario;
	var totalVacaciones = parseFloat(resultadoSalarioDiario).toFixed(2);

	var htmlTotalVacaciones =
	"<p>Vacaciones : "+totalVacaciones+"</p>";

	$(".totalVacaciones").html(htmlTotalVacaciones);

	var resultadoPrima = totalVacaciones * 0.25;
	var totalPrima = parseFloat(resultadoPrima).toFixed(2);

	var htmlTotalPrima =
	"<p>Prima Vacacional : "+totalPrima+"</p>";

	$(".totalPrima").html(htmlTotalPrima);


	calcularAguinaldo();
}
//==================================================================================

//FUNCION CALCULAR PAGO DIAS AGUINALDO =============================================
function calcularAguinaldo(){

	var diasLey = 15;
	var diasCalendario = 365;
	var diasAguinaldo = $("#diasTotalAguinaldo").val();
	var pagoDiario = $("#pagoDia").val();


	var resultadoFormula = diasLey / diasCalendario;
	var totalFormula = parseFloat(resultadoFormula).toFixed(4);

	var diasTrabajadosAgunaldo = totalFormula * diasAguinaldo;
	var totalDiasTrabajadosAguinaldo = parseFloat(diasTrabajadosAgunaldo).toFixed(4);

	var aguinaldo = totalDiasTrabajadosAguinaldo * pagoDiario;
	var totalAguinaldo = parseFloat(aguinaldo).toFixed(2);

	var htmlTotalAguinaldo =
	"<p>Aguinaldo : "+totalAguinaldo+"</p>";

	$(".totalAguinaldo").html(htmlTotalAguinaldo);

	calcularPrimaAntiguedad();

}
//==================================================================================

//FUNCION CALCULAR PRIMA DE ANTUGUEDAD =============================================
function calcularPrimaAntiguedad(){

	var diasLey = 12;
	var diasCalendarioAntiguedad = 365;
	var diasTrabajadosAntiguedad = $("#diasTotal").val();
	var pagoDiario = $("#pagoDia").val();

	if (pagoDiario > 414.88) {
		pagoDiario = 414.88;
	}

	var antiguedad = diasLey / diasCalendarioAntiguedad;
	var totalAntiguedad = parseFloat(antiguedad).toFixed(3);

	var diasLaborados = totalAntiguedad * diasTrabajadosAntiguedad;
	var totalDiasLaborados = parseFloat(diasLaborados).toFixed(2);

	var primaAntiguedad = totalDiasLaborados * pagoDiario;
	var totalPrimaAntiguedad = parseFloat(primaAntiguedad).toFixed(2);

	var htmlTotalPrimaAntiguedad =
	"<p>Prima de Antiguedad : "+totalPrimaAntiguedad+"</p>";

	$(".totalPrimaAntiguedad").html(htmlTotalPrimaAntiguedad);

	calcularPrimaIndemnizacion();

}
//==================================================================================

//FUNCION CALCULAR PRIMA DE INDEMNIZACION ==========================================
function calcularPrimaIndemnizacion(){

	var diasLey = 90;
	var pagoDiario = $("#pagoDia").val();

	var indemnizacion = diasLey * pagoDiario;
	var totalIndemnizacion = parseFloat(indemnizacion).toFixed(2);

	var htmlTotalPrimaIndemnizacion =
	"<p>Prima de indemnizacion : "+totalIndemnizacion+"</p>";

	$(".totalPrimaIndemnizacion").html(htmlTotalPrimaIndemnizacion);

}
//==================================================================================
</script>