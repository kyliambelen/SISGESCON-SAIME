<?php

		session_start();
		if(!isset($_SESSION['rol'])){
		header('location: ../index.php');		
			}

        require ("empleadosController.php");
?>

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
           
    <!--<link rel="shortcut icon" href="#" />-->  
    
    <title>VISOL EMPLEADOS</title>
       
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

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:rgb(226,30,72)">

            <!---///////// LOGO 1 ///////////------->

        <img src="../lib/img/empleado3.jpg"  class="logoEmpleados">

        <!----------------------------------------------->
        <button class="navbar-toggler" style=" background-color: rgb(0,155,193); color: #FFFFFF" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">MENU
        <span class="navbar-toggler-icon"></span>
        </button>&nbsp &nbsp &nbsp &nbsp

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"style="color:rgb(0,155,193); font-weight: bold" href="menuEmpleados.php">MENU<span class="sr-only">(current)</span></a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color:rgb(0,155,193); font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALIDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="tablaEmpleados.php">Tabla Empleados</a>
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="permisosEmpleados.php">Permisos Empleados</a>
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="informacionAcademica.php">Información Acádemica</a>
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="visolInfoAcademica.php">visol Información Acádemica</a>
                        <div class="dropdown-divider"> </div>
                            <a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="../bd/cerrarSesion.php"><i class="fa fa-sign-out fa-fw">  Cerrar Sesion</i></a>                                         
                    </div>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="img1">
                    <img src="../lib/img/titulovisolEmpleados.png"> 
                </li>
            </ul>
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/empleado4.jpg"  class="logoEmpleados">
                <!--------------------------------------->	
            </li>
        </div>
    </nav>
    <br> 		   	           
   
</head>
<body>  
    <div class="container-fluid caja ">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">              
                        <table id="visolEmpleados" class="table table-bordered table condensed table-hover table display example compact stripe"   cellspacing="0" width="100%">
                            <thead class="thead text-center"style="background:rgb(0,155,193); color:rgb(0,64,130);font-size: 90%">
                                <tr>
                                
                                    <th>FOTO</th>
                                    <th>CEDULA</th>
                                    <th>NOMBRES</th>                                   
                                    <th>CODIGO</th>
                                    <th>SEDE</th>
                                    <th>CARGO</th>                                                                   
                                    <th>INGRESO</th>
                                    <th>CORREO</th>                                   
                                    <th>TELEFONO</th>                                                                     
                                </tr>
                            </thead>
                                <?php foreach($listarEmpleados AS $empleados){?>

                                <tr>
                        
                                    <td><img  width="70px"  height="70px" src="imagenes/imagenesEmpleados/<?php echo $empleados['foto_emp']; ?>" /></td>
                                    <td><?php echo $empleados['cedula_emp'];?></td>
                                    <td><?php echo $empleados['nombres_emp'];?></td>                                  
                                    <td><?php echo $empleados['codigo_emp'];?></td>
                                    <td><?php echo $empleados['sede_emp'];?></td>
                                    <td><?php echo $empleados['cargo_emp'];?></td>                                                                                                     
                                    <td><?php echo $empleados['ingreso_emp'];?></td>
                                    <td><?php echo $empleados['correo_emp'];?></td>                                   
                                    <td><?php echo $empleados['telefono_emp'];?></td>                                                                               
                                </tr>

                                <?php } ?>

                        </table>                                                
                </div>
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
        
    <!------ SCRIPT DE JQUERY PARA EL FUNCIONAMIENTO DEL DATATABLE Y EL CAMBIO DEL EDIOMA A ESPAÑOL ------>
    
            <script>
               $(document).ready(function() { 
    
           visolEmpleados = $('#visolEmpleados').DataTable({   
             
            language: {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados(Registros no existen)",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando Registros del 0 al 0 de un Total de 0 Registros",
                    "infoFiltered": "(Filtrado de un Total de _MAX_ Registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast":"Último",
                        "sNext":"Siguiente",
                        "sPrevious": "Anterior"
                     },
                     "sProcessing":"Procesando...",
                },
    
                "lengthMenu":		[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
                "iDisplayLength":	5,
                "bJQueryUI":		false,

                
    
            //para usar los botones   
            responsive: "true",
            dom: 'Bfrtilp',       
            buttons:[ 
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fas fa-file-excel"></i> ',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success'
                },
                    
                {
                    extend:    'print',
                    text:      '<i class="fa fa-print"></i> ',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-warning'
                },
            ],
    
                    
                });
            });
                   
            </script>
</body>
</html>