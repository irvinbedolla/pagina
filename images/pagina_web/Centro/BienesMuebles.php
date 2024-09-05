<?php

// Cómo subir el archivo
if (isset($_POST['NomAr'])) {

	$NomA = evaluar($_POST['NomAr']);
	//$DesA= evaluar($_POST['DesA']);
		$Idt= evaluar($_POST['idtipo']);
		//$Ide= evaluar($_POST['idestrado']);
		//$fecha= evaluar($_POST['from']);
	
	// Recibimos el fecha de inicio y la fecha final desde el form
        $Datein                    = date('Y-m-d H:i:s', strtotime($_POST['from']));
        //$Datefi                    = date('Y-m-d H:i:s', strtotime($_POST['to']));
       $inicio = _formatear($Datein);
        // y la formateamos con la funcion _formatear

        //$final  = _formatear($Datefi);

        // Recibimos el fecha de inicio y la fecha final desde el form
        $orderDate                      = date('Y-m-d H:i:s', strtotime($_POST['from']));
        $fecha = $orderDate;

        // y la formateamos con la funcion _formatear
       // $orderDate2                      = date('Y-m-d H:i:s', strtotime($_POST['to']));
	
	
	
	

	$doc= $_FILES["file"];
	//$doc= evaluar($_POST['file']);
	move_uploaded_file($doc["tmp_name"], "subidas/".$doc["name"]);
	header("Location: " . $_SERVER["HTTP_REFERER"]);
		$link=("subidas/".$doc["name"]);
		//$fechaser=DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;
		//$status='Activo';
		//$Idu
		//$Urldoc
	//ALTER TABLE `mitabla` ADD `fecha` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ;
	//$query="INSERT INTO archivo VALUES(null,'$NomA','$DesA','$Idt','$Ide','$fecha','','','','')";
		//$query="INSERT INTO archivo VALUES(null,'a','','','','','','','','')";
	/*$query="INSERT INTO `archivo` (`Id_Archivo`, `Nombre`, `Descrip`, `Id_Tipo`, `Id_Estrado`, `Fecha`, `Fecha_server`, `Status`, `Id_Usuario`, `Documento`) VALUES (NULL, 'Nombre', 'des', '4', '10', '2021-02-23', '2021-02-23', 'activo', '3', '1') ";*/
$query="INSERT INTO `archivo` (`Id_Archivo`, `Nombre`, `Autoridad`, `Id_Tipo`, `Fecha`, `Fecha_server`, `Status`, `Id_Usuario`, `Documento`) VALUES (NULL, '$NomA', 'Secretaria Ejecutiva del IEM', '$Idt', '$fecha', 'DATETIME', 'activo', '3', '$link') ";
        // Ejecutamos nuestra sentencia sql
        $bdd->query($query)or die('<script type="text/javascript">alert("Error al guardar ")</script>');
}
	

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>CCLMichoacán</title>
    <meta name="format-detection" content="telephone=no">
    <!--<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
	  <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="lib/main.css" rel="stylesheet">	
<script src="lib/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>			
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link href="css/font-awesome.min.css" rel="stylesheet"> 
  <script src="js/jquery.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" /> 
	
	<script src="lib/locales/es.js"></script>
	<!--<script src="js/fullcalendar.js"></script>-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="estilos.css">
	<!--<script language="javascript" src="js/jquery-3.1.1.min.js"></script>-->
	<link rel="stylesheet" href="css/menu.css">
	  
  </head>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
         <!-- <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>-->
        </div>
      </div>
    </div>
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
                <div class="rd-navbar-right rd-navbar-nav-wrap">
                  <div class="rd-navbar-aside">
                    <ul class="rd-navbar-contacts-2">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="tel:#">(443) 32XXXXXX</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="address" href="#">Bulevard García de León 1575, Col. Capultepec Oriente</a></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-share-2">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Inicio</a>
                      </li>
                   
						 <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">Catálogo</a>
							  
                      </li>
						 <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">Galería</a>
                      </li>
                       <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">Acerca de</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacto</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                  <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                  </div>
                </div>
           
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->

		   <h4 class="modal-title" id="myModalLabel">Agregar un Bien Mueble</h4>
		<button type="button" class="btn btn-primary">Agregar Bienes</button>
		<form action="http://google.com">
        <input type="submit" value="Go to Google" />
</form>
	
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar un Bien Mueble</h5>
		  
		  
		  
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
		  <br><br>
						<label>Nombre del articulo</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>
      </div>
      <div class="modal-footer">
		  	 <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                  <button  onclick="enviaDatos()" type="submit" class="btn btn-success"><i class="fa fa-check"></i> Agregar</button>
      </div>
    </div>
  </div>
</div>		
			<!--Agregar Archivo-->
	<div class="modal fade" id="add_archivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
			  <div class="modal-header"> 
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar un Bien Mueble</h4>
            	</div>
				  
				
					 <div class="modal-body">
				<form id="f1" method="POST" action="" enctype="multipart/form-data">
					<label for="from">Inicio</label>
                    <div class='input-group date' id='from'>
                        <input type='text' id="from" name="from" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>	
	
							<br><br>
						<label for="NomAr">Nombre del articulo</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>
						<label for="NomAr">Marca</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>
						<label for="NomAr">Modelo</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>
						<label for="NomAr">Color</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>
						<label for="NomAr">Descripción</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>
					<label for="idtipo">Seleccionar tipo de alta</label> 
							<select name="idtipo" id="idtipo">
							<option value="0">Tipo de alta</option>
						
						</select>
						<br><br>

							<label for="idtipo">Seleccionar el COG</label> 
							<select name="idtipo" id="idtipo">
							<option value="0">COG</option>
							
						</select>
						<br><br>
							<label for="NomAr">Vida útil</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>
						
						<label for="NomAr">Valor de desecho</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>
						<label for="NomAr">Codígo de barras</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
                    <br>

						<div class="form-group">
					  <label class="btn btn-primary" for="my-file-selector">
						<input required="" type="file" name="file" id="exampleInputFile">
					  </label>

						</div>
						
				
						 <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                  <button  onclick="enviaDatos()" type="submit" class="btn btn-success"><i class="fa fa-check"></i> Agregar</button>

          </form>
							
										 

              
				</div>
	
             
      </div>
  </div>

</div>	
		
		
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </section>
      <!-- What We Offer-->
   

                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span><span> Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">IEM</a></span></p>
              </div>
       
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>