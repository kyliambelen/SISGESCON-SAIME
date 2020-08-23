<?php

		session_start();
		if(!isset($_SESSION['rol'])){
		header('location: index.php');		
			}

	?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link rel="shortcut icon" href="#" />-->  
    <title>::TablaPasaporte::</title>
      
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="lib/main_proyecto/main.css">  
     <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet"> 
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="lib/datatables/datatables.min.css">
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"type="text/css" href="lib/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome -->  
    <link rel="stylesheet" href="lib/fontawesome/all.css">  
	<link rel="stylesheet" href="lib/main_proyecto/glificon.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">  	
  </head>
    
  <body> 
                <!-- MENU NAVEGACION PRINCIPAL(........MENU 1.........)-------->        			  	     	                                                 				  					  					  					  
	 <header class="sticky-top 2">		  
	 <div class="col-lg-12">
                <!------///////////HEADER SECUNDARIO--->

            <img src="lib/img/bannerPrincipal2.png">
        </div>
            <!-- /.col-lg-12 -->
        <br><br>
	</header>  	   
             
		
	<nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:rgb(0,61,124)">
		
		<!---///////// LOGO 1 ///////////------->
	
	<img src="lib/img/passport9.jpg"class="logoPasaportes">
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>&nbsp &nbsp &nbsp &nbsp

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link"style="color: rgb(226,30,72); font-weight: bold" href="menuPasaportes.php"><i class="fa fa-dashboard fa-fw" style="color: rgb(0,155,193);"></i> MENU<span class="sr-only">(current)</span></a>
				</li>&nbsp &nbsp &nbsp &nbsp
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle"style="color: rgb(226,30,72); font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa  fa-sign-out" style="color: rgb(0,155,193);"></i>  REGRESAR</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item"style="color:rgb(226,30,72); font-weight: bold" href="tablaPasaportes.php">Agregar Pasaportes</a>						
						<div class="dropdown-divider"></div>
						<a class="dropdown-item"style="color: #FFBF00 rgb(226,30,72); font-weight: bold" href="bd/cerrarSesion.php">Cerrar Sesion</a>
					</div>
				</li>&nbsp &nbsp &nbsp &nbsp
				<li class="img1">
                    <img src="lib/img/tituloinfopasaportes.png"> 
                </li>
				
			</ul>
			<li class="nav-item">

				<!---///////// LOGO 2 ///////////------->

				<img src="lib/img/passport10.jpg"class="logoPasaportes">
			</li>
		</div>
	</nav><br> 		   	    	   
          <br>                                    <!--------------------------------------TABLA CON DATATABLE---------------------------------->	                  
    <div class="container-fluid caja2">
		<div class="row d-flex justify-content-center">
            <div class="col-lg-10 align center">
                <div class="table-responsive">        
                    <table id="tablaUsuarios2" class="cell-border compact stripe" cellspacing="0" width="100%">
						<thead class="text-center" style="background-color:rgb(0,155,193);color: blue; font-weight: bold;">
							<tr>
								<th>ID</th>
								<th>CEDULA</th>
								<th>NOMBRES</th>                                
								<th>SEXO</th>  
								<th>TIPO</th>
								<th>PASAPORTE</th>
								<th>UBICACION</th>
								<th>OBSRVACION</th>								
								<th class="text-center" style="background-color:rgb(0,120,180);color: black; font-weight: bold">ELIMINAR</th>	
							</tr>
						</thead>
						<tbody> 
												                                                              												
						</tbody>        
					</table>               
				</div>
            </div>
        </div>  
    </div>   

			
    <script src="lib/main_proyecto/custom.js"></script>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      
    <!------------------------- datatables JS ----------------------------------------------------->
    <script type="text/javascript" src="lib/datatables/datatables.min.js"></script>    
     
    <!-------------------------- para usar botones en datatables JS ------------------------------->  
	
	<script src="lib/fontawesome/bca26d2fca.js"></script>  
    <script src="lib/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>  
    <script src="lib/datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="lib/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="lib/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="lib/datatables/Buttons-1.6.2/js/buttons.html5.min.js"></script>
     
    <!------------------------- código JS propìo---------------------------------------------------->    
    <script type="text/javascript" src="lib/main_proyecto/main.js"></script> 
 

		


 
    
  </body>
</html>
