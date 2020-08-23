<?php

session_start();

if(!isset($_SESSION['rol'])){
header('location: index.php');

}else{
    if($_SESSION['rol']!=1){
    header('location: menuPrincipalUsuarios.php');
    }
}
        require ("dfController.php");
?>

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!--<link rel="shortcut icon" href="#" />-->  
   
            <title>DATOS FILIATORIOS</title>
        
    <!-- Bootstrap CSS -->
    <link href="../lib/bootstrap/css/bootstrap.css" rel="stylesheet">            
    <!--font awesome -->  
    <link rel="stylesheet" href="../lib/fontawesome/all.css">  
	<link rel="stylesheet" href="../lib/main_proyecto/glificon.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../lib/main_proyecto/main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../lib/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../lib/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  

        <!-- MENU NAVEGACION PRINCIPAL(........MENU 1.........)--------> 

    <header class="sticky-top 2">
    <div class="col-lg-12">
                <!------///////////HEADER SECUNDARIO--->

            <img src="../lib/img/bannerPrincipal2.png">
        </div>
            <!-- /.col-lg-12 -->
        <br><br>
    </header>

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:#D8D8D8">
            <!---///////// LOGO 1 ///////////------->

        <img src="../lib/img/datosFiliatorios1.jpg" class="logoEmpleados">

        <!----------------------------------------------->
        <button class="navbar-toggler" style=" background-color: #FFBF00; color: #FFFFFF" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">MENU
        <span class="navbar-toggler-icon"></span>
        </button>&nbsp &nbsp &nbsp &nbsp

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"style="color: #190707; font-weight: bold" href="menuDatosFiliatorios.php">MENU<span class="sr-only">(current)</span></a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color: #190707; font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALIDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="">Visol Empleados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="../bd/cerrarSesion.php">Cerrar Sesion</a>
                    </div>
                </li>
                <li class="nav-item">
  
                </li>
                <li class="nav-item">
                   
                </li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <li class="img1">
                    <img src="../lib/img/tituloDF.png"> 
                </li>

                    <!--//// FORMULARIO PARA AGREGAR CEDULA Y BUSCAR EL DATO FILIATORIO ////-->

                <li class="nav-item">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                    <form action="informacionDF.php" method="POST" class="form_search2">
                        <input type="text" name="ceduladf" id="ceduladf" placeholder="INGRESE N°CEDULA">
                        <input type="submit" value="Ver Documento" class="btn_search2">
                    </form>
                </li>
                &nbsp &nbsp &nbsp &nbsp
            </ul>
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/datosFiliatorios2.png" class="logoEmpleados">
                <!--------------------------------------->	
            </li>
        </div>
    </nav>
    <br> 		   	           
   
</head>
<body>

         <!--------IMAGEN DE FONDO---->	

         <div class="pieFooter">
				<div class="row">
					<div class="col-lg-12">
					
						<img class="imgFooter2" src="../lib/img/footerPrincipal2.jpg">		
					
					</div>			
				</div>			
        </div>
                                    
    <!------------------------------------------------------------------ARCHIVOS JAVASCRIP----------------------------------------------------------------->
	
	<!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="../lib/datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="../lib/datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="../lib/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="../lib/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../lib/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>  
    <script src="../lib/datatables/Buttons-1.6.2/js/buttons.html5.min.js"></script>
     
    							<!-- código JS propìo-->    
	<script type="text/javascript" src="../lib/main_proyecto/main.js"></script>  
	
				<!--- código JS propìo------->  	
	<script src="../lib/main_proyecto/custom.js"></script>
        
        
    

</body>
</html>