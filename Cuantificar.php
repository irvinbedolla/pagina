
<!DOCTYPE html>
<html class="pruebavoto2021.iem.org.mx" lang="en">
<style type="text/css">
body,td,th {
    font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;
    font-size: 15px;
}
h1 {
    font-size: 50px;
}
h2 {
    font-size: 30px;
}
h3 {
    font-size: 20px;
}
h4 {
    font-size: 16px;
}
h5 {
    font-size: 14px;
}
h6 {
    font-size: 8px;
}

table .tablaResultados{
	background: #809798 !important;
}

table thead tr th.encabezados {
	text-align: center;
}

table tbody tr td.resultados {
	text-align: center;
}

.botones{
	font-weight: 400;
	line-height: 1.5;
	text-align: center;
	cursor: pointer;
	font-size: 1rem;
	border-radius: 0.25rem;
	padding: 0.375rem 0.75rem;
	border-color: #d3a929;
}

.botones:hover{
	color: #fff;
	border-color: #f9c3d0;
}

.btnCalcular{
	background-color: #6f1c46;
	color: #fff;
}

.btnCalcular:hover{
	background-color: #512d36;
}

.btnLimpiar{
	background-color: #476162;
	color: #fff;
}

.btnLimpiar:hover{
	background-color: #689997;
}

.label-cuantificar {
	padding-right: 25px;
	font-size: 13px;
	font-weight: 400;
	line-height: 26px;
	letter-spacing: .075em;
	pointer-events: none;
	text-align: left;
	transition: .25s;
	will-change: transform;
	transform: translateY(-50%);
	margin-bottom: 0;
	color: #777777;
}

.input-cuantificar {
	display: block;
    width: 100%;
    padding: 15px;
    font-size: 15px;
    line-height: 1.85;
    color: #495057;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    text-align: center;
}

.alert-cuantificar {
    padding: 20px;
    background-color: #6f1c46;
    color: white;
  }

</style>
  <head>
  <title>CCLMichoacán</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
  <link rel="icon" href="images/cclm.ico" type="image/x-icon">

    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>

<script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=0C5BC1B7-E009-4CFC-A83A-AE8CD2324C85&tipo=header&aut=conciliacionlaboral.michoacan.gob.mx" type="text/javascript"></script>

</head>


<body>      
    <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=0C5BC1B7-E009-4CFC-A83A-AE8CD2324C85&tipo=body&aut=conciliacionlaboral.michoacan.gob.mx" type="text/javascript"></script>
    <div class="preloader">
      <div class="wrapper-triangle">
      </div>
    </div>
  <div class="page">
  
    <!-- Page Header-->
	<header class="section page-header">
		<div class="rd-navbar-wrap" style="height: 108.109px;">
			<nav class="rd-navbar rd-navbar-modern rd-navbar-original rd-navbar-static rd-navbar--is-stuck"
				data-layout="rd-navbar-fixed">
				<div class="rd-navbar-inner-outer" style="margin-top: 20px; background-color: #6A0F49">
					<div class="rd-navbar-inner">
						<div class="rd-navbar-panel">
							<div class="rd-navbar-brand"><img src="images/LOGOS_circulo2.png"></a></div>
						</div>
						<div class="rd-navbar-right rd-navbar-nav-wrap background-color:">
							<div class="rd-navbar-main" style="margin-top: 20px; background-color: #6A0F49">
								<ul class="rd-navbar-nav">
									<li class="rd-nav-item active"><a class="rd-nav-link" href="index.html"
											style="color: #ffffff;">INICIO</a>
									</li>
									<li class="rd-nav-item"><a class="rd-nav-link" href="index.html#acerca"
											style="color: #ffffff;">ACERCA
											DE</a></li>
									<li class="rd-nav-item"><a class="rd-nav-link" href="index.html#servicios"
											style="color: #ffffff;">SERVICIOS</a></li>
									<li class="rd-nav-item"><a class="rd-nav-link" href="index.html#contac"
											style="color: #ffffff;">CONTACTO</a>
									</li>
									<li class="rd-nav-item">
										<button class="custom-btn btn-concilo">SI CONCILIO</button>
									</li>
								</ul>
							</div>
						</div>
						<div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1"
							data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap"
							data-multitoggle-isolate="data-multitoggle-isolate">
							<div class="project-hamburger"><span class="project-hamburger-arrow"></span><span
									class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
							</div>
						</div>
						<div class="rd-navbar-project" style=" max-width: 260px; padding: 30px;">
							<!-- Header Section -->
							<div class="rd-navbar-project-header">
								<h5 class="rd-navbar-project-title">MENU</h5>
								<div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close"
									onclick="toggleMenu()">
									<div class="project-close"><span></span><span></span></div>
								</div>
							</div>
							<!-- Menu Section -->
							<div class="rd-navbar-project-content rd-navbar-content hidden" id="menu">
								<div class="menu-menu-1-container">

									<div class="menu">
										<nav id="menu-content" class="menu-content">
											<ul>
												<li><a href="index.html">Inicio</a></li>
												<li><a href="Somos.html">Nuestra Identidad</a></li>
												<li><a href="Ejes.html">Ejes</a></li>
												<li><a href="PlanT.html">Plan de Trabajo</a></li>
												<li class="personal">
													<button class="submenu-button personal">Personal</button>
													<ul class="submenu">
														<li class="personal"><a href="PersonalD.html">Personal Directivo</a></li>
														<li class="personal"><a href="DelegM.html">Delegación Morelia</a></li>
														<li class="personal"><a href="DelegU.html">Delegación Uruapan</a></li>
														<li class="personal"><a href="DelegZ.html">Delegación Zamora</a></li>
														<li class="personal"><a href="DirectorioG.html">Directorio General</a></li>
													</ul>
												</li>
												<li><a href="Organigrama.html">Organigrama</a></li>
												<li><a href="MenDirec.html">Mensaje del Director</a></li>
											</ul>
										</nav>
									</div>
									<script src="js/menu.js"></script>
								</div>
							</div>
						</div>

					</div>
				</div>

			</nav>
		</div>

      </header>
    <div class="container " >
        <br> <h3 class="wow fadeInLeft" align="left">Realiza tu cuantificación<img src="images/Linea.png" alt="" width="605" height="15"/></h3>
        <button type="submit" class="botones btnCalcular col-md-2" onclick="location.href='index.html'"> Regresar</button>
          <br>
      <br><br>
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-2">
            <div class='col-md-12'>
                <label for="selectMotivoSeparacion" class="label-cuantificar">Seperación</label>
                <select class="selectpicker" id="selectMotivoSeparacion" data-show-subtext="true" data-live-search="true" onchange="habilitarInputsCuantificacion(this);">
                    <option value="-1">Opciones </option>
                    <option value="1">Despido </option>
                    <option value="2">Renuncia </option>
                </select>
            </div>
          </div>

          <div class="col-md-2">
            <div class='col-md-12'>
              <label for="pagoMensual" class="label-cuantificar">Pago mensual</label>
              <input type="text" class="input-cuantificar" id="pagoMensual" onchange="calcularPagoDia();">
            </div>
          </div>

          <div class="col-md-2">
            <div class='ol-md-12'>
              <label for="diasTotal" class="label-cuantificar">Pago por dia</label>
              <input type="text" class="input-cuantificar" id="pagoDia" disabled>
            </div>
          </div>

          <div class="col-md-2">
            <div class='ol-md-12'>
              <label for="fechaInicio" class="label-cuantificar">Fecha Ingreso</label>
              <input type="date" class="input-cuantificar" id="fechaInicio">
            </div>
          </div>

          <div class="col-md-2">
            <div class='ol-md-12'>
              <label for="fechaFin" class="label-cuantificar">Fecha Egreso</label>
              <input type="date" class="input-cuantificar" id="fechaFin" onchange="calcularDias();">
            </div>
          </div>

          <div class="col-md-2">
            <div class='ol-md-12'>
              <label for="diasTotal" class="label-cuantificar">Dias totales</label>
              <input type="text" class="input-cuantificar" id="diasTotal" disabled>
            </div>
          </div>
          
          <input type="date" class="input-cuantificar" id="fechaEneroActual"  hidden>
          <input type="text" class="input-cuantificar" id="diasTotalAguinaldo" hidden>

          <input type="date" class="input-cuantificar" id="fechaAniversario"  hidden>

          <input type="text" class="input-cuantificar" id="diasTotalAniversario" hidden>
          <input type="text" class="input-cuantificar" id="aniosTotalAniversario" hidden>

        </div>
        <br><br>
        <center>
          <button type="submit" class="botones btnCalcular col-md-2" onclick="mostrarTabla();">Calcular</button>
          <button type="submit" class="botones btnLimpiar col-md-2" onclick="limpiarCampos();">Limpiar</button>
        </center>
        <br><br>
        <div class="alertaFecha"></div>
        <br><br>
        <div class="tablaCuantificacion"></div>
        <br>
        <center><div id="sumaTotal">Cuantificación total: $ 0.00</div></center>
      </div>
    </div>
  </div>
  <br>
  <footer style="background-color: #6A0F49;">
		<div class="div-footer" style="display: flex; justify-content: space-evenly; padding: 60px;">
			<div>
				<h5 class="nombre-footer" style="font-size: 15px; color:#ffff">Centro de</h5>
				<h5 class="nombre-footer" style="font-size: 15px; color:#ffff">conciliacion</h5>
				<h5 class="nombre-footer" style="font-size: 15px; color:#ffff">laboral</h5>
			</div>
			<div> <a href="documentos/AvisoPrivacidad/Aviso_de_Privacidad_Simplificado.pdf" target="_blank"
					style="color:#ffff;">Aviso de privacidad</a> </div>
			<ul class="list-share-2 sociales">
				<li>
					<a class="icon mdi mdi-facebook" href="https://www.facebook.com/conciliacionlaboralmich"
						target="_blank"></a>
				</li>
				<li>
					<a class="icon mdi mdi-twitter" href="https://www.twitter.com/cclaboralmich" target="_blank"></a>
				</li>
				<li>
					<a class="icon mdi mdi-instagram" href="https://www.instagram.com/conciliacionlaboralmichoacan/"
						target="_blank"></a>
				</li>
				<!-- <li><a class="icon mdi mdi-google-plus" href="#"></a></li>-->
			</ul>
			<ul class="rd-navbar-contacts-2 contacto">
				<li>
					<div class="unit unit-spacing-xs">
						<div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
						<div class="unit-body"><a class="phone" id="contac" style="color:#ffff" href="tel:#">(443)
								6886337</a></div>
					</div>
				</li>
				<li>
					<div class="unit unit-spacing-xs">
						<div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
						<div class="unit-body"><a class="address"
								href="https://www.google.com.mx/maps/place/Centro+de+Conciliaci%C3%B3n+Laboral+del+Estado+de+Michoac%C3%A1n/@19.6886808,-101.1661655,17z/data=!3m1!4b1!4m5!3m4!1s0x86972e4da3b81177:0xb3bdb18efbe90610!8m2!3d19.6886758!4d-101.1639715"
								target="_blank" style="color:#ffff"> Boulevard García de Leon #1575, Col. Chapultepec
								Oriente.</a></div>
					</div>
				</li>
			</ul>
		</div>
	</footer>

      
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
    
  <div class="container-boton">
        <a href="https://wa.me/4438692167?text=Necesito%20información%20del%20el%20CCLMichoacán" target="_blank">
            <img class="boton" src="images/icono.png" alt="">
        </a>
    </div>
      
    <footer>
  </footer>
  </div>
  <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=0C5BC1B7-E009-4CFC-A83A-AE8CD2324C85&tipo=footer&aut=conciliacionlaboral.michoacan.gob.mx" type="text/javascript"></script>
  </body>
</html>

<script>

  //FUNCION HABILITAR CAMPOS ==========================================================
  function habilitarInputsCuantificacion(e) {
  
    motivo = $(e).val();
    
    if (motivo == -1) {
      $("#pagoMensual").prop('disabled', true);
      $("#fechaInicio").prop('disabled', true);
      $("#fechaFin").prop('disabled', true);

    }else{
      $("#pagoMensual").prop('disabled', false);
      $("#fechaInicio").prop('disabled', false);
      $("#fechaFin").prop('disabled', false);
      
    }
  
    
  
  }
  //==================================================================================
  
  //FUNCION HABILITAR CAMPOS ==========================================================
  function mostrarTabla() {
    var pagoMensual = $("#pagoMensual").val();
    var fechaInicio = $("#fechaInicio").val();
    var fechaFin = $("#fechaFin").val();
    var motivo = $("#selectMotivoSeparacion").val();
  
    if (motivo == "-1") {
      var htmlAlerta =
          "<div class='alert-cuantificar'>"+
            "<div> Seleciona el motivo de la separación.</div>"+
          "</div>";

        // "<div class='alert alert-warning alert-dismissible fade show' role='alert'>"+
        //     "<strong>Seleciona el motivo de la separación.</strong>"+
        //     "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"+
        //         "<span aria-hidden='true'>&times;</span>"+
        //     "</button>"+
        // "</div>";
          
      $(".alertaFecha").html(htmlAlerta);
      return false;
    }
  
    if (pagoMensual == "") {
      var htmlAlerta =
          "<div class='alert-cuantificar'>"+
            
        "<div> El campo del pago mensual es obligatorio.</div>"+
        
          "</div>";
          
      $(".alertaFecha").html(htmlAlerta);
      return false;
    }
  
    if (fechaInicio == "") {
      var htmlAlerta =
          "<div class='alert-cuantificar'>"+
            
        "<div> El campo de la fecha de ingreso es obligatorio.</div>"+
        
          "</div>";
          
      $(".alertaFecha").html(htmlAlerta);
      return false;
    }
  
    if (fechaFin == "") {
      var htmlAlerta =
          "<div class='alert-cuantificar'>"+
            
        "<div> El campo de la fecha de egreso es obligatorio.</div>"+
        
          "</div>";
          
      $(".alertaFecha").html(htmlAlerta);
      return false;
    }
  
    var htmlTablaResultados = "";
  
    if (motivo == 1) {
      htmlTablaResultados =
      "<table class='table tablaResultados' style='width:100%'>"+
        "<thead>"+
        "<tr>"+
          "<th class='encabezados'>Vacaciones</th>"+
          "<th class='encabezados'>Prima Vacacional</th>"+
          "<th class='encabezados'>Aguinaldo</th>"+
          "<th class='encabezados'>Indemnización</th>"+
          "<th class='encabezados'>Prima De Antiügedad</th>"+
        "</tr>"+
        "</thead>"+
        "<tbody>"+
        "<tr>"+
          "<td class='resultados totalVacaciones'></td>"+
          "<td class='resultados totalPrima'></td>"+
          "<td class='resultados totalAguinaldo'></td>"+
          "<td class='resultados totalPrimaIndemnizacion'></td>"+
          "<td class='resultados totalPrimaAntiguedad'></td>"+
        "</tr>"+
        "</tbody>"+
      "</table>";

    // "<div class='container-fluid'>"+
    //     "<div class='row'>"+

    //         "<div class='col-md-2'>"+
    //             "<div class='col-md-12'>"+
    //                 "<label class='label-cuantificar'>Vacaciones</label>"+
    //                 "<label class='label-cuantificar totalVacaciones'></label>"+
    //             "</div>"+
    //         "</div>"+

    //         "<div class='col-md-3'>"+
    //             "<div class='col-md-12'>"+
    //                 "<label class='label-cuantificar'>Prima Vacacional</label>"+
    //                 "<label class='label-cuantificar totalPrima'></label>"+
    //             "</div>"+
    //         "</div>"+

    //         "<div class='col-md-2'>"+
    //             "<div class='col-md-12'>"+
    //                 "<label class='label-cuantificar'>Aguinaldo</label>"+
    //                 "<label class='label-cuantificar totalAguinaldo'></label>"+
    //             "</div>"+
    //         "</div>"+

    //         "<div class='col-md-2'>"+
    //             "<div class='col-md-12'>"+
    //                 "<label class='label-cuantificar'>Indemnización</label>"+
    //                 "<label class='label-cuantificar totalPrimaIndemnizacion'></label>"+
    //             "</div>"+
    //         "</div>"+

    //         "<div class='col-md-3'>"+
    //             "<div class='col-md-12'>"+
    //                 "<label class='label-cuantificar'>Prima De Antiügedad</label>"+
    //                 "<label class='label-cuantificar totalPrimaAntiguedad'></label>"+
    //             "</div>"+
    //         "</div>"+
            
    //     "</div>"+
        
    // "</div>";
  
      $(".tablaCuantificacion").html(htmlTablaResultados);
      $(".alertaFecha").html("");
      calcularVacacionesPrima();
    }
    else if (motivo == 2) {
  
      htmlTablaResultados =
      "<table class='table tablaResultados' style='width:100%'>"+
        "<thead>"+
        "<tr>"+
          "<th class='encabezados'>Vacaciones</th>"+
          "<th class='encabezados'>Prima Vacacional</th>"+
          "<th class='encabezados'>Aguinaldo</th>"+
        "</tr>"+
        "</thead>"+
        "<tbody>"+
        "<tr>"+
          "<td class='resultados totalVacaciones'></td>"+
          "<td class='resultados totalPrima'></td>"+
          "<td class='resultados totalAguinaldo'></td>"+
        "</tr>"+
        "</tbody>"+
      "</table>";

    // "<div class='container-fluid'>"+
    //     "<div class='row'>"+

    //         "<div class='col-md-4'>"+
    //             "<div class='col-md-12'>"+
    //                 "<label class='label-cuantificar'>Vacaciones</label>"+
    //                 "<label class='label-cuantificar totalVacaciones'></label>"+
    //             "</div>"+
    //         "</div>"+

    //         "<div class='col-md-4'>"+
    //             "<div class='col-md-12'>"+
    //                 "<label class='label-cuantificar'>Prima Vacacional</label>"+
    //                 "<label class='label-cuantificar totalPrima'></label>"+
    //             "</div>"+
    //         "</div>"+

    //         "<div class='col-md-4'>"+
    //             "<div class='col-md-12'>"+
    //                 "<label class='label-cuantificar'>Aguinaldo</label>"+
    //                 "<label class='label-cuantificar totalAguinaldo'></label>"+
    //             "</div>"+
    //         "</div>"+
            
    //     "</div>"+
        
    // "</div>";
  
      $(".tablaCuantificacion").html(htmlTablaResultados);
      $(".alertaFecha").html("");
      calcularVacacionesPrima();
    }
    else{
      $(".tablaCuantificacion").html("");
      $(".alertaFecha").html("");
      limpiarCampos();
    }
  
    calcularSumaTotal();
  }
  //==================================================================================
  
  //FUNCION LIMPIAR CAMPOS ==========================================================
  function limpiarCampos(){
  
    $("#pagoMensual").val("");
    $("#pagoDia").val("");
    $("#fechaInicio").val("");
    $("#fechaFin").val("");
    $("#diasTotalAguinaldo").val("");
    $("#diasTotal").val("");
    $("#diasTotalAniversario").val("");
    $("#selectMotivoSeparacion").val("-1").trigger("change");
    $("#sumaTotal").html("Cuantificación total: $ 0.00");
  
    $(".totalVacaciones").html("");
    $(".totalPrima").html("");
    $(".totalAguinaldo").html("");
    $(".totalPrimaIndemnizacion").html("");
    $(".totalPrimaAntiguedad").html("");
    
    $(".tablaCuantificacion").html("");
  
    $("#pagoMensual").prop('disabled', true);
    $("#fechaInicio").prop('disabled', true);
    $("#fechaFin").prop('disabled', true);
  
  }
  //==================================================================================
  
  //FUNCION CALCULAR DIAS FECHAS======================================================
  function calcularDias(){
  
    var fechaFin = $("#fechaFin").val();
     var anioFin = fechaFin;
      var separador = "-";
      var anioSeparado = anioFin.split(separador);
  
      var anio  = anioSeparado[0];
  
      var mesEneroTermino = $("#fechaEneroActual").val(anio+"-"+"01"+"-"+"01");
  
      var fechaInicio = new Date(document.getElementById("fechaInicio").value);
      var fechaFin = new Date(document.getElementById("fechaFin").value);
  
      var fechaEnero = new Date(document.getElementById("fechaEneroActual").value);
  
      var actualDate = new Date();
      if (fechaFin > fechaInicio)
      {
          var diferencia = fechaFin.getTime() - fechaInicio.getTime();
          // document.getElementById("diasTotal").value = Math.round(diferencia / (1000 * 60 * 60 * 24));
          var diasTotalesTrabajados = Math.round(diferencia / (1000 * 60 * 60 * 24));
  
          var diasCorrectosTrabajados = diasTotalesTrabajados + 1;
  
          $("#diasTotal").val(diasCorrectosTrabajados);
  
          $(".alertaFecha").html("");
      }
      else if (fechaFin != null && fechaFin < fechaInicio) {
  
          var htmlAlerta =
          "<div class='alert-cuantificar'>"+
        "<div> La fecha final debe ser mayor a la fecha inicial</div>"+
        
          "</div>";
          
      $(".alertaFecha").html(htmlAlerta);
  
          $("#fechaInicio").val("");
          $("#fechaFin").val("");
          document.getElementById("diasTotal").value = 0;
      }
  
      if (fechaFin > fechaEnero)
      {
          var diferenciaAguinaldo = fechaFin.getTime() - fechaEnero.getTime();
  
          // document.getElementById("diasTotalAguinaldo").value = Math.round(diferenciaAguinaldo / (1000 * 60 * 60 * 24));
  
  
          var diasTotalesTrabajadosAguinaldo = Math.round(diferenciaAguinaldo / (1000 * 60 * 60 * 24));
  
          var diasCorrectosTrabajadosAguinaldo = diasTotalesTrabajadosAguinaldo + 1;
  
          $("#diasTotalAguinaldo").val(diasCorrectosTrabajadosAguinaldo);
  
  
          $(".alertaFecha").html("");
      }
      else if (fechaFin != null && fechaFin < fechaEnero) {
  
          // var htmlAlerta =
          // "<div class='alertaFecha'>"+
          // 	
      // 	"<div>La fecha final debe ser mayor a la fecha de Enero</div>"+
          // "</div>";
          
      // $(".alertaFecha").html(htmlAlerta);
  
          document.getElementById("diasTotalAguinaldo").value = 0;
      }
  
  }
  //==================================================================================
  
  //FUNCION CALCULAR PAGO DIAS =======================================================
  function calcularPagoDia(){
  
    var pagoMensual = $("#pagoMensual").val();
  
    var resultadoPagoDia = pagoMensual / 30;
  
    var total = parseFloat(resultadoPagoDia).toFixed(2);
  
    $("#pagoDia").val(total);
  
  }
  //==================================================================================
  
  //FUNCION CALCULAR PAGO DIAS VACACIONES ============================================
  function calcularVacacionesPrima(){

    var fechaInicio = $("#fechaInicio").val();
    var fechaFin = $("#fechaFin").val();
    var diasLeyVacaciones = "";
  
    var anioFin = fechaFin;
      var separador = "-";
      var anioSeparado = anioFin.split(separador);
  
      var anio  = anioSeparado[0];
  
  
    // CALCULAR LOS DIAS DESPUES DE AÑO DE ANIVERSARIO =============================
    var diaMesInicio = fechaInicio;
      var separador = "-";
      var diaMesSeparado = diaMesInicio.split(separador);
  
      var mes  = diaMesSeparado[1];
    var dia  = diaMesSeparado[2];
  
    var aniversario = anio+"-"+mes+"-"+dia;
    // console.log("aniversario"+aniversario);
  
    var fechaAniversario = $("#fechaAniversario").val(aniversario);
  
    var fechaAni = new Date(document.getElementById("fechaAniversario").value);
  
    var fechaEgreso = new Date(document.getElementById("fechaFin").value);
  
    var fechaIngreso = new Date(document.getElementById("fechaInicio").value);
  
    var actualDate = new Date();
  
      if (fechaEgreso > fechaAni){
          var diferencia = fechaEgreso.getTime() - fechaAni.getTime();
          // document.getElementById("diasTotalAniversario").value = Math.round(diferencia / (1000 * 60 * 60 * 24));
  
          var diasTotalesTrabajadosVacaciones = Math.round(diferencia / (1000 * 60 * 60 * 24));
  
          var diasCorrectosTrabajadosVacaciones = diasTotalesTrabajadosVacaciones + 1;
  
          $("#diasTotalAniversario").val(diasCorrectosTrabajadosVacaciones);
  
          // $(".alertaFecha").html("");
      }
      else if (fechaEgreso < fechaAni) {
        var restaAño = anio - 1;
  
        aniversario = restaAño+"-"+mes+"-"+dia;
  
        var fechaAniversario = $("#fechaAniversario").val(aniversario);
  
        var fechaAni = new Date(document.getElementById("fechaAniversario").value);
  
      var fechaEgreso = new Date(document.getElementById("fechaFin").value);
  
      var diferencia = fechaEgreso.getTime() - fechaAni.getTime();
          // document.getElementById("diasTotalAniversario").value = Math.round(diferencia / (1000 * 60 * 60 * 24));
  
  
          var diasTotalesTrabajadosVacaciones = Math.round(diferencia / (1000 * 60 * 60 * 24));
  
          var diasCorrectosTrabajadosVacaciones = diasTotalesTrabajadosVacaciones + 1;
  
          $("#diasTotalAniversario").val(diasCorrectosTrabajadosVacaciones);
  
         // var total = $("#diasTotalAniversario").val();
         // console.log(total);
      }
      // =============================================================================
  
      // CALCULAR LOS AÑOS TRABAJADOS ================================================
  
      var egreso = new Date(fechaFin);
      var ingreso = new Date(fechaInicio);
      var anios = egreso.getFullYear() - ingreso.getFullYear();
      var m = egreso.getMonth() - ingreso.getMonth();
  
      if (m < 0 || (m === 0 && egreso.getDate() < ingreso.getDate())) {
          anios--;
      }
  
      var respuesta = $("#aniosTotalAniversario").val(anios);
  
      var aniosTrabajados = $("#aniosTotalAniversario").val();
  
      // console.log("Años trabajado de aniversario: "+aniosTrabajados);
  
      //==============================================================================
  
      // ENCONTRAR EL AÑO DE TERMINACION LABORAL =====================================
  
      if (anio <= 2022) {
        diasLeyVacaciones = 6;
  
        if (aniosTrabajados == 2) {
          diasLeyVacaciones = 8
        }
        else if (aniosTrabajados == 3) {
          diasLeyVacaciones = 10
        }
        else if (aniosTrabajados == 4) {
          diasLeyVacaciones = 12
        }
        else if (aniosTrabajados == 5) {
          diasLeyVacaciones = 14
        }
        else if ((aniosTrabajados >= 6) && (aniosTrabajados <= 10)) {
          diasLeyVacaciones = 16
        }
        else if ((aniosTrabajados >= 11) && (aniosTrabajados <= 15)) {
          diasLeyVacaciones = 18
        }
        else if ((aniosTrabajados >= 16) && (aniosTrabajados <= 20)) {
          diasLeyVacaciones = 20
        }
        else if ((aniosTrabajados >= 21) && (aniosTrabajados <= 25)) {
          diasLeyVacaciones = 22
        }
        else if ((aniosTrabajados >= 26) && (aniosTrabajados <= 30)) {
          diasLeyVacaciones = 24
        }
        else if ((aniosTrabajados >= 31) && (aniosTrabajados <= 35)) {
          diasLeyVacaciones = 26
        }
        else if ((aniosTrabajados >= 36) && (aniosTrabajados <= 40)) {
          diasLeyVacaciones = 28
        }
        else if ((aniosTrabajados >= 41) && (aniosTrabajados <= 45)) {
          diasLeyVacaciones = 30
        }
        else if ((aniosTrabajados >= 46) && (aniosTrabajados <= 50)) {
          diasLeyVacaciones = 32
        }
        else if ((aniosTrabajados >= 51) && (aniosTrabajados <= 55)) {
          diasLeyVacaciones = 34
        }
        else if ((aniosTrabajados >= 56) && (aniosTrabajados <= 60)) {
          diasLeyVacaciones = 36
        }
        else if ((aniosTrabajados >= 61) && (aniosTrabajados <= 65)) {
          diasLeyVacaciones = 38
        }
        else if ((aniosTrabajados >= 66) && (aniosTrabajados <= 70)) {
          diasLeyVacaciones = 40
        }
        else if ((aniosTrabajados >= 71) && (aniosTrabajados <= 75)) {
          diasLeyVacaciones = 42
        }
        else if ((aniosTrabajados >= 76) && (aniosTrabajados <= 80)) {
          diasLeyVacaciones = 44
        }
        else if ((aniosTrabajados >= 81) && (aniosTrabajados <= 85)) {
          diasLeyVacaciones = 46
        }
        else if ((aniosTrabajados >= 86) && (aniosTrabajados <= 90)) {
          diasLeyVacaciones = 48
        }
        else if ((aniosTrabajados >= 91) && (aniosTrabajados <= 95)) {
          diasLeyVacaciones = 50
        }
        else if ((aniosTrabajados >= 96) && (aniosTrabajados <= 100)) {
          diasLeyVacaciones = 52
        }
        else if ((aniosTrabajados >= 101) && (aniosTrabajados <= 105)) {
          diasLeyVacaciones = 54
        }
      }
      else if (anio >= 2023) {
        diasLeyVacaciones = 12;
  
        if (aniosTrabajados == 2) {
          diasLeyVacaciones = 14
        }
        else if (aniosTrabajados == 3) {
          diasLeyVacaciones = 16
        }
        else if (aniosTrabajados == 4) {
          diasLeyVacaciones = 18
        }
        else if (aniosTrabajados == 5) {
          diasLeyVacaciones = 20
        }
        else if ((aniosTrabajados >= 6) && (aniosTrabajados <= 10)) {
          diasLeyVacaciones = 22
        }
        else if ((aniosTrabajados >= 11) && (aniosTrabajados <= 15)) {
          diasLeyVacaciones = 24
        }
        else if ((aniosTrabajados >= 16) && (aniosTrabajados <= 20)) {
          diasLeyVacaciones = 26
        }
        else if ((aniosTrabajados >= 21) && (aniosTrabajados <= 25)) {
          diasLeyVacaciones = 28
        }
        else if ((aniosTrabajados >= 26) && (aniosTrabajados <= 30)) {
          diasLeyVacaciones = 30
        }
        else if ((aniosTrabajados >= 31) && (aniosTrabajados <= 35)) {
          diasLeyVacaciones = 32
        }
        else if ((aniosTrabajados >= 36) && (aniosTrabajados <= 40)) {
          diasLeyVacaciones = 34
        }
        else if ((aniosTrabajados >= 41) && (aniosTrabajados <= 45)) {
          diasLeyVacaciones = 36
        }
        else if ((aniosTrabajados >= 46) && (aniosTrabajados <= 50)) {
          diasLeyVacaciones = 38
        }
        else if ((aniosTrabajados >= 51) && (aniosTrabajados <= 55)) {
          diasLeyVacaciones = 40
        }
        else if ((aniosTrabajados >= 56) && (aniosTrabajados <= 60)) {
          diasLeyVacaciones = 42
        }
        else if ((aniosTrabajados >= 61) && (aniosTrabajados <= 65)) {
          diasLeyVacaciones = 44
        }
        else if ((aniosTrabajados >= 66) && (aniosTrabajados <= 70)) {
          diasLeyVacaciones = 46
        }
        else if ((aniosTrabajados >= 71) && (aniosTrabajados <= 75)) {
          diasLeyVacaciones = 48
        }
        else if ((aniosTrabajados >= 76) && (aniosTrabajados <= 80)) {
          diasLeyVacaciones = 50
        }
        else if ((aniosTrabajados >= 81) && (aniosTrabajados <= 85)) {
          diasLeyVacaciones = 52
        }
        else if ((aniosTrabajados >= 86) && (aniosTrabajados <= 90)) {
          diasLeyVacaciones = 54
        }
        else if ((aniosTrabajados >= 91) && (aniosTrabajados <= 95)) {
          diasLeyVacaciones = 56
        }
        else if ((aniosTrabajados >= 96) && (aniosTrabajados <= 100)) {
          diasLeyVacaciones = 58
        }
        else if ((aniosTrabajados >= 101) && (aniosTrabajados <= 105)) {
          diasLeyVacaciones = 60
        }
      }
      
      // =============================================================================
  
      // CALCULAR LAS VACACIONES Y LA PRIMA VACACIONAL ===============================
      
    var diasCalendario = 365;
    var pagoDiario = $("#pagoDia").val();
    var diasLaboradosAniosAniversario = $("#diasTotalAniversario").val();
  
  
    // console.log("dias ley vacaciones: "+diasLeyVacaciones);
    // console.log("dias calendario: "+diasCalendario);
    // console.log("dias por año de aniversario: "+diasLaboradosAniosAniversario);
    // console.log("pago diario: "+pagoDiario);
  
    var resultadoDias = diasLeyVacaciones / diasCalendario;
    // var totalDias = parseFloat(resultadoDias).toFixed(4);
    var totalDias = parseFloat(resultadoDias);
  
    // console.log("dias de vacaciones entre los dias del año: "+totalDias);
  
    var resultadoDiasTrabajados = totalDias * diasLaboradosAniosAniversario;
    var totalDiasTrabajados = parseFloat(resultadoDiasTrabajados).toFixed(4);
    // var totalDiasTrabajados = parseFloat(resultadoDiasTrabajados);
  
    // console.log("resultado por dias de año aniversario: "+totalDiasTrabajados);
  
    var resultadoSalarioDiario = totalDiasTrabajados * pagoDiario;
    var totalVacaciones = parseFloat(resultadoSalarioDiario).toFixed(2);
  
    // console.log("resultado por pago diario: "+totalVacaciones);
  
    // var htmlTotalVacaciones =
    // "<p>Vacaciones : "+totalVacaciones+"</p>";
    // "<p>$ "+totalVacaciones+"</p>";
  
    $(".totalVacaciones").text(totalVacaciones);
  
    var resultadoPrima = totalVacaciones * 0.25;
    var totalPrima = parseFloat(resultadoPrima).toFixed(2);
  
    // var htmlTotalPrima =
    // "<p>Prima Vacacional : "+totalPrima+"</p>";
    // "<p>$ "+totalPrima+"</p>";
  
    $(".totalPrima").text(totalPrima);
    // =============================================================================
      
    calcularAguinaldo();
  
  }
  //==================================================================================
  
  //FUNCION CALCULAR PAGO DIAS AGUINALDO =============================================
  function calcularAguinaldo(){
  
    var diasLey = 15;
    var diasCalendario = 365;
    var diasAguinaldo = $("#diasTotalAguinaldo").val();
    // var diasTrabajados = $("#diasTotal").val();
    var pagoDiario = $("#pagoDia").val();
  
    // console.log("dias de ley: "+diasLey);
    // console.log("dias de calendario :"+diasCalendario);
    // console.log("dias laborados del año: "+diasAguinaldo);
    // console.log("salario diario: "+pagoDiario);
  
    var resultadoFormula = diasLey / diasCalendario;
    // var totalFormula = parseFloat(resultadoFormula).toFixed(4);
    var totalFormula = parseFloat(resultadoFormula);
  
    // console.log("resultado de dias de ley entre dias del año: "+totalFormula);
  
    var diasTrabajadosAguinaldo = totalFormula * diasAguinaldo;
    // var totalDiasTrabajadosAguinaldo = parseFloat(diasTrabajadosAguinaldo).toFixed(4);
    var totalDiasTrabajadosAguinaldo = parseFloat(diasTrabajadosAguinaldo);
  
    // console.log("resultado por dias laborados del año: "+totalDiasTrabajadosAguinaldo);
  
    var aguinaldo = totalDiasTrabajadosAguinaldo * pagoDiario;
    var totalAguinaldo = parseFloat(aguinaldo).toFixed(2);
    // var totalAguinaldo = parseFloat(aguinaldo);
  
    // console.log("resultado por salario diario: "+totalAguinaldo);
  
    // var htmlTotalAguinaldo =
    // "<p>Aguinaldo : "+totalAguinaldo+"</p>";
    // "<p>$ "+totalAguinaldo+"</p>";
  
    $(".totalAguinaldo").text(totalAguinaldo);
  
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
  
    // console.log("diasley"+diasLey);
    // console.log("diascalendario"+diasCalendarioAntiguedad);
    // console.log("diasTrabajados"+diasTrabajadosAntiguedad);
    // console.log("pagodiario"+pagoDiario);
  
  
    var antiguedad = diasLey / diasCalendarioAntiguedad;
    // var totalAntiguedad = parseFloat(antiguedad).toFixed(3);
    var totalAntiguedad = parseFloat(antiguedad);
  
    // console.log("12entre365"+totalAntiguedad);
  
    var diasLaborados = totalAntiguedad * diasTrabajadosAntiguedad;
    // var totalDiasLaborados = parseFloat(diasLaborados).toFixed(2);
    var totalDiasLaborados = parseFloat(diasLaborados);
  
    // console.log("respordiaslaborados"+totalDiasLaborados);
  
  
    var primaAntiguedad = totalDiasLaborados * pagoDiario;
    var propuestaPrima = parseFloat(primaAntiguedad).toFixed(2);
    var totalPrimaAntiguedad = propuestaPrima / 2;
    // var totalPrimaAntiguedad = parseFloat(primaAntiguedad);
  
    // console.log("diaslabporsalariodiario"+totalPrimaAntiguedad);
  
    // var htmlTotalPrimaAntiguedad =
    // "<p>Prima de Antiguedad : "+totalPrimaAntiguedad+"</p>";
    // "<p>$ "+totalPrimaAntiguedad+"</p>";
  
    $(".totalPrimaAntiguedad").text(totalPrimaAntiguedad);
  
    calcularPrimaIndemnizacion();
  
  }
  //==================================================================================
  
  //FUNCION CALCULAR PRIMA DE INDEMNIZACION ==========================================
  function calcularPrimaIndemnizacion(){
  
    var diasLey = 90;
    var pagoDiario = $("#pagoDia").val();
  
    var indemnizacion = diasLey * pagoDiario;
    var propuestaIndemnizacion = parseFloat(indemnizacion).toFixed(2);
    var totalIndemnizacion = propuestaIndemnizacion / 2;
    // var totalIndemnizacion = parseFloat(indemnizacion);
  
    // var htmlTotalPrimaIndemnizacion =
    // "<p>Indemnizacion : "+totalIndemnizacion+"</p>";
    // "<p>$ "+totalIndemnizacion+"</p>";
  
    $(".totalPrimaIndemnizacion").text(totalIndemnizacion);
  
  }
  //==================================================================================
  
  //FUNCION SUMA DE CUANTIFICACIÓN ===================================================
  function calcularSumaTotal() {
    var sumaTotal = 0;

    // Recorre todas las celdas de la tabla y suma los valores
    $(".tablaResultados tbody tr td.resultados").each(function () {
      var valor = parseFloat($(this).text().replace('$ ', '').replace(',', '')); // Obtén el valor numérico de la celda
      if (!isNaN(valor)) {
        sumaTotal += valor;
      }
    });

    // Muestra la suma total en algún lugar de tu página
    $("#sumaTotal").text("Cuantificación total: $ " + sumaTotal.toFixed(3));
  }
  //==================================================================================
  
  // EVENTO READY ======================================================================================
  $(document).ready(function () {
    $("#pagoMensual").prop('disabled', true);
    $("#fechaInicio").prop('disabled', true);
    $("#fechaFin").prop('disabled', true);
  
    motivo = "";
  
  });
  // ===================================================================================================
  
  </script>