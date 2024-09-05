<?php
require_once('bdd.php');


//$sql = "SELECT * FROM archivo INNER JOIN tipo ON tipo.Id_Tipo=archivo.Id_Tipo where Status = 'activo' ";
$sql = "SELECT * FROM muebles";
$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

require ('conexion.php');

	$resultado = $mysqli->query($sql);
	
	$queryt = "SELECT * FROM sedes";
	$resultadot=$mysqli->query($queryt);



$query = "SELECT * FROM unidad ";
	$resultadoa=$mysqli->query($query);

$martha="SELECT tipo.Nombre FROM tipo INNER JOIN archivo where tipo.Id_Tipo=archivo.Id_Tipo and Id_Archivo=Id_Archivo";
?>


<?php

// Definimos nuestra zona horaria
date_default_timezone_set('America/Mexico_City');

// incluimos el archivo de funciones
include 'funciones.php';

// incluimos el archivo de configuracion
include 'bdd.php';

// Verificamos si se ha enviado el campo con name from
if (isset($_POST['title'])) 
{

        $titulo = evaluar($_POST['title']);

        // y con la funcion evaluar
        $Observa   = evaluar($_POST['obs']);


        $query="INSERT INTO estrados VALUES(null,'$titulo','$Observa')";

        // Ejecutamos nuestra sentencia sql
        $bdd->query($query)or die('<script type="text/javascript">alert("Horario No Disponible ")</script>');

       // header("Location:$base_url");        
   
}

if (isset($_POST['tipo'])) 
{
	

        $tipo = evaluar($_POST['tipo']);

        // y con la funcion evaluar
        $DEst   = evaluar($_POST['DesEst']);


        $query="INSERT INTO tipo VALUES(null,'$tipo','$DEst')";

        // Ejecutamos nuestra sentencia sql
        $bdd->query($query)or die('<script type="text/javascript">alert("Horario No Disponible ")</script>');

     //   header("Location:$base_url");        
   
}
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
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
	  
	 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="lib/main.css" rel="stylesheet">	
<script src="lib/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>			
 <title>Calendario</title>

	
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
	  
	  
	  
	  
	 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="lib/main.css" rel="stylesheet">	
<script src="lib/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>			
 <title>Calendario</title>

	
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
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="preloader">
      <!--<div class="wrapper-triangle">
        <div class="pen">
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
        </div>
      </div>-->
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
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo_iem.png" alt="" width="198" height="66"/></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap">
                  <div class="rd-navbar-aside">
                    <ul class="rd-navbar-contacts-2">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="tel:#">(443) 3221400</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="address" href="#">Bruselas No. 80, Col. Villa Universidad</a></div>
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
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">Normatividad</a>
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
                <div class="rd-navbar-project">
                  <div class="rd-navbar-project-header">
                    <h5 class="rd-navbar-project-title">Gallery</h5>
                    <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                      <div class="project-close"><span></span><span></span></div>
                    </div>
                  </div>
                  <div class="rd-navbar-project-content rd-navbar-content">
                    <div>
                      <div class="row gutters-20" data-lightgallery="group">
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-1-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-1-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-2-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-2-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-3-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-3-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-4-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-4-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-5-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-5-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-6-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-6-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
  
   <div class="container">

        <div class="row">
 
            
            <div class="">

				<h3>Catálogo de Personas</h3> 
            <a class="btn btn-info" data-toggle='modal' data-target='#add_archivo' title="Agregar clasificación de estrado">Agregar</a>
			
                <div id="calendar" class="col-centered">
					
                </div>
            </div>
          </div>
        <!-- /.row -->
		<!--Fecha-->
      <script type="text/javascript">
                        $(function () {
                            $('#from').datetimepicker({
                                language: 'es',
                                minDate: new Date()
                            });
                            $('#to').datetimepicker({
                                language: 'es',
                                minDate: new Date()
                            });

                        });
                    </script>
   
	

	
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
					<br>
						<label for="NomAr">Nombre </label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
						<label for="NomAr">Primer apellido</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
						<label for="NomAr">Segundo apellido</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
						<label for="NomAr">Color</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
						<label for="NomAr">Descripción</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
					<label for="idtipo">Seleccionar tipo de alta</label> 
							<select name="idtipo" id="idtipo">
							<option value="0">Agrega el Tipo de alta</option>
							<?php while($row = $resultadoa->fetch_assoc()) { ?>
								<option value="<?php echo $row['id_unidad']; ?>"><?php echo $row['Unidad']; ?></option>
								<?php echo ['Unidad']; ?>
							<?php } ?>
						</select>
						<br>
							<label for="idtipo">Seleccionar la sede</label> 
							<select name="idtipo" id="idtipo">
							<option value="0">Agrega la sede</option>
							<?php while($row = $resultadot->fetch_assoc()) { ?>
								<option value="<?php echo $row['id_sede']; ?>"><?php echo $row['Nombre_sede']; ?></option>
								<?php echo ['id_cog']; ?>
							<?php } ?>
						</select>
						<br>
							<label for="NomAr">Cargo</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>
					
						<label for="NomAr">Estructura</label>
                    <input type="text" required autocomplete="off" name="NomAr" class="form-control" id="NomAr" placeholder="Introduce el nombre del archivo">
                    <br>			
						 <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                  <button  onclick="enviaDatos()" type="submit" class="btn btn-success"><i class="fa fa-check"></i> Agregar</button>

          </form>
							
										 

              
				</div>
	
             
      </div>
  </div>

</div>	
	<!--fin de agregar-->	
<div class="container">
			<div class="row">
				<!--<img src="Imagenes/IEM.png" width=17% height=15% align="left" />
				<h1 style="text-align:center">Lista de Estrados Publicados</h1>
				<div class="pull-right form-inline"><br>
					
					<a href="admin.php" class="btn btn-info" title="Regresar">Regresar</a>
            </div>
			</div>-->
			<div class="container" class="row">
				
				
		
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			
			<div class="form-group">
				<div class="col-sm-3">
					<br>
						
				</form>
					</div>
				</div>
				
			</div>			
			<br>
			<form class="form-inline"  method="post"  name="formFechas" id="formFechas">
				<div class="col-xs-10 col-xs-offset-3">
					<div class="form-group">
						<label for="Area" >Nombre:</label>
						<select class="form-control" id="campo" name="campo">
						
					</div>
					
					<div class="form-group">
						<button type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info">Buscar</button>
					</div>
				</div>
		</form>
			<br><br>
			<form class="form-inline"  method="post"  name="formFechas" id="formFechas">
				<div class="col-xs-10 col-xs-offset-3">
					<div class="form-group">
						<label for="fecha_inicio">Fecha Inicio:</label>
						<input type="date" class="form-control" name="fecha_inicio" required>
					</div>
					<div class="form-group">
						<label for="fecha_final">Fecha Final:</label>
						<input type="date" class="form-control" name="fecha_final" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info">Buscar</button>
					</div>
				</div>
		</form>
<br><br><br>
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Primer apellido</th>
							<th>Segundo apelloido</th>
							<th>Cargo</th>
							<th>Sede</th>
						
							
						
							<th></th>
							<th></th>

						</tr>
					</thead>
					
					<tbody>	

						
						<?php 
		
							
$archivos = scandir("subidas");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;

						while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { 
					
					
							?>
					
								
								<td><?php echo $row['Fecha']; ?></td>
								<td><?php echo $row['Nombre']; ?></td>
								<td><?php echo $row['Autoridad']; ?></td>
								<td><?php echo $row['NombreT']; ?></td>
								

								
				
					<td><as><a href="modificar.php?Id_Archivo=<?php echo $row['Id_Archivo']; ?>"><span class="glyphicon glyphicon-pencil" title="Editar"></span></a></td>
                 <td><a title="Descargar Archivo" href="<?php echo $row['Documento'];  ?>" download="<?php echo $row['Documento']; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> </td>
                <td><a href="eliminar.php?Id_Tipo=<?php echo $row['Id_Tipo']; ?>" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" title="Eliminar" ></span></a></td>
					<!--	<td><a ><i class="far fa-eye" onclick="pdf();"></i></a></td>-->
						
							</tr>
				
						<?php }}
				?>
				</tbody>
				</table>
			<!-- Otro boton
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="admin.php" class="btn btn-default" title="Regresar" align="Right">Regresar</a>
					</div>
				</div>-->
			
			</div>
		</div>


   

   
                <!-- Rights-->
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