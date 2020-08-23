<?php

			session_start();
	
			if(!isset($_SESSION['rol'])){
			header('location: index.php');
	
			}else{
				if($_SESSION['rol']!=1){
				header('location: menuPrincipalUsuarios.php');
				}
			}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!--<link rel="shortcut icon" href="#" />-->  
   
	<title>Pasaportes</title>
      
    
     <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">            
    <!--font awesome -->  
    <link rel="stylesheet" href="lib/fontawesome/all.css">  
	<link rel="stylesheet" href="lib/main_proyecto/glificon.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="lib/main_proyecto/main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="lib/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="lib/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body class="fondo"> 

	  <!-- MENU NAVEGACION PRINCIPAL(........MENU 1.........)-------->  
	        			  	     	                                                 					  					  					  					  
	<header class="sticky-top 2">		  
	<div class="col-lg-12">
                <!------///////////HEADER SECUNDARIO--->

            <img src="lib/img/bannerPrincipal2.png">
        </div>
            <!-- /.col-lg-12 -->
        <br><br>
    </header>

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:rgb(0,120,180)">
	
		<!---///////// LOGO 1 ///////////------->
	
		<img src="lib/img/passport1.jpg" class="logoPasaportes">
		
		<!----------------------------------------------->
		<button class="navbar-toggler" style=" background-color: #6E6E6E; color:#FFFFFF" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><strong>MENU</strong>
			<span class="navbar-toggler-icon"></span>
		</button>&nbsp &nbsp &nbsp &nbsp

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
				<a class="nav-link"style="color: #000000; font-weight: bold" href="menuPasaportes.php"><i class="fa fa-dashboard fa-fw" style="color:#9ACD32;"></i> MENU<span class="sr-only">(current)</span></a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color: #000000; font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa  fa-sign-out" style="color:#CC0066;"></i>  SALIDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
						<div class="dropdown-divider"></div>
						<a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="informacionPasaportes.php">Informacion Pasaportes</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="bd/cerrarSesion.php">Cerrar Sesion</a>
					</div>
                </li>
				<li class="nav-item">&nbsp &nbsp &nbsp &nbsp 	

				<!--------/////////////// BOTON PARA AGREGAR REGISTROS //////////////--------------->	

					<button id="btnNuevo" type="button" type="button" class="btn" style="background-color:rgb(0,155,193)" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-book fa-2x"></i></button>      	
				  	<!--<button id="btnNuevo" type="button" class="btn" style="background:rgb(0,155,193)" data-toggle="modal"><i class="material-icons">library_add</i></button>--> 
				</li>
				<li class="nav-item">
					<a class="nav-link"style="color: #191007; font-weight: bold" href="#">NUEVO+</a>
				</li>&nbsp &nbsp &nbsp &nbsp
				<li class="img1">
                    <img src="lib/img/titulo+pasaportes.png"> 
                </li>
			</ul>
			<li class="nav-item">			
			<!---///////// LOGO 2 ///////////------->			
				<img src="lib/img/passport4.png" class="logoPasaportes">
			<!--------------------------------------->	
			</li>
		</div>
	</nav><br> 		   	           
                                               <!--------------------------------------TABLA CON DATATABLE---------------------------------->	
    <div class="container-fluid caja">
			<div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaUsuarios" class="cell-border compact stripe" cellspacing="0" width="100%">
							<thead class="text-center" style="background-color: rgb(0,146,181);color: rgb(37,36,34); font-weight: bold">
								<tr>
									<th>ID</th>
									<th>CEDULA</th>
									<th>NOMBRES </th>
									<th>SEXO</th>
									<th>TIPO</th>
									<th>PASAPORTE</th>
									<th>UBICACION</th>
									<th>FECHA</th>
									<th>MES</th>
									<th>AÑO</th>
									<th>USUARIO</th>
									<th>OBSERVACION</th>
									<th class="text-center" style="background-color: #FDB704;color: black; font-weight: bold">ACCIONES</th>									
								</tr>
							</thead>
																																																														                                                              			  
	 						<tbody>			
										      																																		
							</tbody>
						</table>									
					</div>							 
				</div>						
			</div>				
	</div>							
	
									<!--------------------AQUI SE INCLUYE EL ARCHIVO MODAL CON EL FORMULARIO PARA AGREGAR REGISTROS DE PASAPORTES------------------------>						
	<!--Modal para CRUD-->
	<div class="modal fade bd-example-modal-l" id="modalCRUD" tabindex="-1" role="dialog" exampleModalScrollableTitle aria-hidden="true">
		<div class="modal-dialog modal-l" role="document">
			<div class="modal-content">
					<div class="modal-header font-weight-bold "><img src="lib/img/passport1.jpg" class="modalUsuario">&nbsp&nbsp &nbsp
						<h5 class="modal-title" id="exampleModalLabel"></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form id="formUsuarios">    
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-4">
								<div class="form-group">
								<label for="" class="col-form-label"style="color: #000000; font-weight: bold">CEDULA:</label>
								<input type="text" class="form-control" id="cedula"required>
								</div>
								</div>
								<div class="col-lg-8">
								<div class="form-group">
								<label for="" class="col-form-label"style="color: #000000; font-weight: bold">NOMBRES</label>
								<input type="text" class="form-control" id="nombres"required>
								</div> 
								</div>    
							</div>
							<div class="row"> 
								<div class="col-lg-6">
								<div class="form-group">
								<label for="" class="col-form-label"style="color: #000000; font-weight: bold">SEXO</label>
								<select class="font-weight-bold form-control" style="color:#848484"  name="sexo" value="" placeholder="" id="sexo" require="">
									<option value="MASCULINO ADULTO">MASCULINO ADULTO</option>
									<option value="MASCULINO MENOR">MASCULINO MENOR </option>
									<option value="FEMENINO ADULTO">FEMENINO ADULTO  </option>
									<option value="FEMENINO MENOR">FEMENINO MENOR </option>																			
								</select>
								
								</div>               
								</div>
								<div class="col-lg-6">
								<div class="form-group">
								<label for="" class="col-form-label"style="color: #000000; font-weight: bold">TIPO</label>
								<select class="font-weight-bold form-control" style="color:#848484"  name="tipo" value="" placeholder="" id="tipo" require="">
									<option value="PASAPORTE">PASAPORTE</option>
									<option value="PRORROGA">PRORROGA </option>
									<option value="PASAPORTE PROV">PASAPORTE PROV.</option>
									<option value="OTROS">OTROS </option>																			
								</select>
								</div>
								</div>  
							</div>
							<div class="row">
								<div class="col-lg-6">
								<div class="form-group">
								<label for="" class="col-form-label"style="color: #000000; font-weight: bold">PASAPORTE</label>
								<input type="text" class="form-control" id="pasaporte"required>
								</div>
								</div>   
								<div class="col-lg-6">
								<div class="form-group">
								<label for="" class="col-form-label"style="color: #000000; font-weight: bold">UBICACION</label>
								<input type="text" class="form-control" id="ubicacion"required>
								</div>
								</div> 
							</div>
							<div class="row">
								<div class="col-lg-6">    
									<div class="form-group">
									<label for="" class="col-form-label"style="color: #000000; font-weight: bold">FECHA</label>
									<input type="text" class="form-control" id="fecha"required>
									</div>            
								</div>
								<div class="col-lg-6">    
									<div class="form-group">
									<label for="" class="col-form-label"style="color: #000000; font-weight: bold">MES</label>
									<select class="font-weight-bold form-control" style="color:#848484"  name="mes" value="" placeholder="" id="mes" require="">
								
									<option value="ENERO">ENERO</option>
									<option value="FEBRERO">FEBRERO </option>
									<option value="MARZO">MARZO </option>
									<option value="ABRIL">ABRIL </option>
									<option value="MAYO">MAYO </option>
									<option value="JUNIO">JUNIO </option>
									<option value="JULIO">JULIO </option>
									<option value="AGOSTO">AGOSTO </option>
									<option value="SEPTIEMBRE">SEPTIEMBRE </option>
									<option value="OCTUBRE">OCTUBRE </option>
									<option value="NOVIEMBRE">NOVIEMBRE </option>
									<option value="DICIEMBRE">DICIEMBRE  </option>									
								</select>
									</div>           
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">    
									<div class="form-group">
									<label for="" class="col-form-label"style="color: #000000; font-weight: bold">AÑO</label>
									<select class="font-weight-bold form-control" style="color:#848484"  name="ano" value="" placeholder="" id="ano" require="">
								
									<option value="2015">2015 </option>
									<option value="2016">2016 </option>
									<option value="2017">2017 </option>											
									<option value="2018">2018 </option>
									<option value="2019">2019 </option>
									<option value="2020">2020 </option>
									<option value="2021">2021 </option>
									<option value="2022">2022 </option>
									<option value="2023">2023  </option>
									<option value="2024">2024  </option>
									<option value="2025">2025  </option>
									<option value="2026">2026  </option>
									<option value="2027">2027  </option>
									<option value="2028">2028  </option>
									<option value="2029">2029  </option>
									<option value="2030">2030  </option>
								</select>
									</div>            
								</div>
								<div class="col-lg-6">    
									<div class="form-group">
									<label for="" class="col-form-label"style="color: #000000; font-weight: bold">USUARIO</label>
									<input type="text" class="form-control" id="usuario"required>
									</div>            
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">    
									<div class="form-group">
									<label for="" class="col-form-label"style="color: #000000; font-weight: bold">OBSERVACION</label>
									<select class="font-weight-bold form-control" style="color:#848484"  name="observacion" value="" placeholder="" id="observacion" require="">
								
									<option value="PASAPORTE SIN PROBLEMAS">PASAPORTE SIN PROBLEMAS </option>
									<option value="RETENER PASAPORTE">RETENER PASAPORTE </option>
									<option value="PASAPORTE DAÑADO">PASAPORTE DAÑADO </option>
									<option value="PASAPORTE CON ERRORES"> PASAPORTE CON ERRORES</option>											
									<option value="PASAPORTE ENVIADO A SEDE CENTRAL">PASAPORTE ENVIADO A SEDE CENTRAL </option>
									<option value="PASAPORTE ADULTERADO">PASAPORTE ADULTERADO </option>
									<option value="PASAPORTE POR AVERIGUACION">PASAPORTE POR AVERIGUACION </option>
									<option value="NO ENTREGAR (DETENER AL USUARIO)">NO ENTREGAR(RETENER AL USUARIO) </option>
									<option value="RETENER POR ERROR EN LAS IMAGENES">RETENER POR ERROR EN LAS IMAGENES </option>
									<option value="RETENER (PASAPORTE USULPADO)">RETENER(PASAPORTE USULPADO)  </option>
									<option value="RETENER (AVERIGUAR IDENTIDAD)">RETENER (AVERIGUAR IDENTIDAD)  </option>
									<option value="RETENER (PAGO FALTANTE)">RETENER (PAGO FALTANTE)  </option>
									<option value="RETENER (PRORROGA DAÑADA)">RETENER (PRORROGA DAÑADA)  </option>
									<option value="RETENER (PRORROGA DE OTRA PERSONA)">RETENER (PRORROGA DE OTRA PERSONA) </option>
									<option value="RETENER (PRORROGA CON IMAGEN DAÑADA)">RETENER (PRORROGA CON IMAGEN DAÑADA)  </option>
									<option value="RETENER (AVISAR A AUTORIDADES)">RETENER Y AVISAR A AUTORIDADES  </option>
									<option value="RETENER (NO PERTENECE A ESTA OFICINA)">RETENER (NO PERTENECE A ESTA OFICINA)  </option>
								</select>
									</div>            
								</div>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-warning"style="color: #000000; font-weight: bold" data-dismiss="modal">CANCELAR</button>
								<button type="submit" id="btnGuardar" class="btn btn-dark">GUARDAR</button>
							</div>
						</div>
				</form>    
				
			</div>
		</div>  								
	</div>	
	<!------------------------------------------------------------------ARCHIVOS JAVASCRIP----------------------------------------------------------------->
	
	<!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="lib/datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="lib/datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="lib/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="lib/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="lib/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>  
    <script src="lib/datatables/Buttons-1.6.2/js/buttons.html5.min.js"></script>
     
    							<!-- código JS propìo-->    
	<script type="text/javascript" src="lib/main_proyecto/main.js"></script>  
	
				<!--- código JS propìo------->  	
	<script src="lib/main_proyecto/custom.js"></script>
     
  </body>
</html>