<?php
    session_start();
	
			if(!isset($_SESSION['rol'])){
			header('location: index.php');
	
			}else{
				if($_SESSION['rol']!=2){
				header('location: menuPrincipalUsuarios.php');
				}
			}
			
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Pasaporte</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="lib/main_proyecto/main.css"> 


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default  sticky-top " role="navigation" style="margin-bottom: 0"><img src="lib/img/header2.jpg">
		<img src="lib/img/header1.jpg" style="float:right">
            <div class="navbar-header">
            <button style=" background-color: #08298A; color:#FFFFFF" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><strong> MENU </strong>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand"><img class="img" src="lib/img/header.png"></a>-->
				
            </div>
            <!-- /.navbar-header -->
			
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
						<a href="https://login.live.com/" target="_blank"><img src="lib/img/outlook.png"></a>.                          
                                                                                      
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://accounts.google.com/" target="_blank"><img src="lib/img/gmail.png"></a>.
                                
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://login.yahoo.com/" target="_blank"><img src="lib/img/yahoo.png"></a>.
                               
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ingrese su Correo</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">                    
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                        <li class="divider"></li>
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown cerrar sesion-->
				
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Agregar Usuario</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuracion</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="bd/cerrarSesion.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
						
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="BUSCAR...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> MENU USUARIO</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> TABLAS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li>
                                <a href="informacionPasaportes.php"style="color:#FE9A2E"><i class="fa  fa-check-square-o "></i> Informacion Pasaportes</a>
                                </li>
								<li>
                                <a href="modulo_datosFiliatorios/informacionDF.php"style="color:#FE9A2E"><i class="fa  fa-check-square-o "></i> Informacion Datos Filiatorios</a>
                                </li>
								<li>
                                <a href="modulo_empleados/informacionEmpleados.php"style="color:#FE9A2E"><i class="fa  fa-check-square-o "></i> Informacion Empleados</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../index.html"><i class="fa fa-edit fa-fw"></i> REGISTRO DE USUARIOS</a>
                        </li>
                        
                       
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>SALIR<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="bd/cerrarSesion.php">Cerrar Sesion</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
				<!------///////////HEADER SECUNDARIO--->
				
                    <h3 class="page-header"style="color:#01A9DB; font-weight: bold">SISTEMA CONTROL:<span class="badge badge badge-pill" style="color:#B40431; background:#01A9DB">Pasaportes</span></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   <img src="lib/img/frontal.png"></a>    
                                    
                                </div>
                            </div>
                        </div>
                        <a href="http://www.saime.gob.ve/" target="_blank">
                            <div class="panel-footer">
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <span class="pull-right"> Saime</span>								                             
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   <img src="lib/img/seniat.png"></a>    
                                    
                                </div>
                            </div>
                        </div>
                        <a href="http://declaraciones.seniat.gob.ve/" target="_blank">
                            <div class="panel-footer">
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <span class="pull-right"> Seniat!</span>
                                
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-laptop fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   <img src="lib/img/elcarupanero.png"></a>    
                                    
                                </div>
                            </div>
                        </div>
                        <a href="https://elcarupanero.com/" target="_blank">
                            <div class="panel-footer">
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <span class="pull-right"> Priodico Digital</span>								                             
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow ">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-unlock fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   <img src="lib/img/contrasena.png"></a>    
                                    
                                </div>
                            </div>
                        </div>
                        <a href="https://tramites.saime.gob.ve/index.php?r=usuario/usuario/rememberPass" target="_blank">
                            <div class="panel-footer">
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <span class="pull-right"> Contrasena Saime</span>								                             
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                   
                    <div class="panel panel-default">
                       
                    </div>
                                <!-- /.col-lg-4 (nested) -->
                    <div class="col-lg-8">
                        <div id="morris-bar-chart"></div>
                    </div>                               <!-- /.col-lg-8 (nested) -->
                </div>                           
            </div> 
			<!--------IMAGEN DE FONDO---->		
																										
        </div>								
	</div>
	      
                
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	
	
								<!-----------//////////////// F   O   O   T   E   R ///////////////----------------->
		
		
                                <div class="footer">                            
                    <div class="footer-copy">
                        <br>
                        <p class="piefooter1" style="color:rgb(50,50,50); font-family: Georgia, 'Times New Roman', serif;"><b>  &copy; Miguel A. Rodríguez || MARROJAS DESARROLLO || Todos los Derechos Reservados, Julio 2020 </b></P>
                        <p style="color:rgb(50,50,50); font-family: Georgia, 'Times New Roman', serif;"> Dise&ntildeo:|  PHP - MYSQL - BOOTSTRAP 4 - JAVASCRIP |.</p>
                    </div>
                    <div class="footer-redes">
                        <a href="https://www.facebook.com/SomosRedSaime/" target="_blank" class="fa fa-facebook" style="color:#212121; width:30px; height:30px;"></a>
                        <a href="https://twitter.com/VenezuelaSaime/" target="_blank" class="fa fa-twitter" style="color:#212121; width:30px"></a>
                        <a href="https://www.youtube.com/channel/UCjWtRFqVVmc3ecd5kVTrftw/" target="_blank" class="fa fa-youtube-play" style="color:#212121; width:30px"></a>
                        <a href="https://github.com/" target="_blank" class="fa fa-github" style="color:#212121; width:30px"></a>
                    </div> 
            </div> 
			
</body>

</html>
