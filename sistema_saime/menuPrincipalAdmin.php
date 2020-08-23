<?php
		// INICIO DE SESION Y COMPROBACION DEL  ROL DEL USUARIO
			
			session_start();	
			if(!isset($_SESSION['rol'])){
			header('location: index.php');
			}else{
				if($_SESSION['rol']!=1){
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

    <title>Registro de Usuarios</title>

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
	<link rel="stylesheet" href="lib/main_proyecto/formRegistro.css"> 
</head>

<body>             
    <div id="wrapper">     
                
        <img class="img" src="lib/img/bannerPrincipalAdmin2.png">
        
            <!-- Navigation -->

        <nav class="navbar navbar-static-top"style="background:#FFFFFF" role="navigation" style="margin-bottom: 0">
                            
            <div class="navbar-header">
                <button style=" background-color: #08298A; color:#FFFFFF" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><strong> MENU </strong>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                                                     
            </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope fa-fw"style="color:#000000;font-weight-bold"></i> <i class="fa fa-caret-down"style="color:#000000;font-weight-bold"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            
                            <a href="https://login.live.com/" target="_blank"><img src="lib/img/outlook.png"></a>.                          
                                                                                        
                            
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
                                <a class="text-center">
                                    <strong>Ingrese su Correo</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-mensajes -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-tasks fa-fw"style="color:#000000;font-weight-bold"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">                    
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell fa-fw"style="color:#000000;font-weight-bold"></i> <i class="fa fa-caret-down"style="color:#000000;font-weight-bold"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts"style="color:#000000;font-weight-bold">
                            
                        <li class="divider"></li>
                            
                        </ul>
                        <!-- /.dropdown-alertas -->
                    </li>
                    <!-- /.dropdown cerrar sesion-->
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"style="color:#000000;font-weight-bold"></i> <i class="fa fa-caret-down"style="color:#000000;font-weight-bold"></i>
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
                        <!-- /.dropdown-usuario -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                        <!-- /.Barra de Navegacion Izquierda -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /Grupos de Entradas[Barras desplegables] -->
                            </li>
                            <li>
                                <a><i class="fa fa-dashboard fa-fw" style="color:#0000ff;"></i><b style="color:#29B6F6">  PANEL ADMINISTRATIVO</b></a>
                            </li>
                            <li>
                                <a href="modulo_usuarios/menuUsuarios.php"><i class="fa fa-user " style="color:#0000ff;"></i><b style="color:#2196F3"> USUARIOS</b></a>
                            </li>
                            <li>
                                <a href="menuPasaportes.php"><i class="fa fa-book " style="color:#0000ff;"></i><b style="color:#2196F3"> PASAPORTES</b></a>
                            </li>
                            <li>
                                <a href="modulo_empleados/menuEmpleados.php"><i class="fa fa-users" style="color:#0000ff;"></i><b style="color:#2196F3"> EMPLEADOS</b></a>
                            </li>
                            <li>
                                <a href="modulo_datosFiliatorios/menuDatosFiliatorios.php"><i class="fa fa-file-text" style="color:#0000ff;"></i><b style="color:#2196F3"> DATOS FILIATORIOS</b></a>
                            </li>
                            
                            <li>
                                <a><i class="fa fa-table fa-fw" style="color:red;"></i><b style="color:red"> TABLAS<span class="fa arrow" ></span></b></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="modulo_usuarios/tablaUsuarios.php"style="color:#E91E63"><i class="fa  fa-table"style="color:#0000ff"></i><b> Tabla Usuarios</b></a>
                                    </li>
                                    <li>
                                        <a href="tablaPasaportes.php"style="color:#E91E63"><i class="fa  fa-pencil-square-o" style="color:#0000ff"></i><b> Agregar Pasaportes</b></a>
                                    </li>
                                    <li>
                                        <a href="informacionPasaportes.php"style="color:#E91E63"><i class="fa  fa-check-square-o " style="color:#0000ff"></i><b> Informacion Pasaportes</b></a>
                                    </li>
                                    <li>
                                        <a href="modulo_empleados/tablaEmpleados.php"style="color:#E91E63"><i class="fa fa-male" style="color:#0000ff"></i><b> Agregar Empleados</b></a>
                                    </li> 
                                    <li>
                                        <a href="modulo_empleados/visolEmpleados.php" style="color:#E91E63"><i class="fa fa-female" style="color:#0000ff"></i><b> Informacion Empleados</b></a>
                                    </li>
                                    <li>
                                        <a href="modulo_empleados/informacionAcademica.php" style="color:#E91E63"><i class="fa  fa-university" style="color:#0000ff"></i><b> Informacion Académica</b></a>
                                    </li>
                                    <li>
                                        <a href="modulo_empleados/visolInfoAcademica.php" style="color:#E91E63"><i class="fa fa-mortar-board" style="color:#0000ff"></i><b> Visol Infor. Académica</b></a>
                                    </li>
                                    <li>
                                        <a href="modulo_empleados/permisosEmpleados.php" style="color:#E91E63"><i class="fa fa-taxi" style="color:#0000ff"></i><b> Permisos</b></a>
                                    </li>
                                    <li>
                                        <a href="modulo_empleados/vacacionesEmpleados.php" style="color:#E91E63"><i class="fa fa-plane" style="color:#0000ff"></i><b> Vacaciones</b></a>
                                    </li>
                                </ul>
                                <!-- /.nav-segundo-nivel -->
                            </li>
                            <li>
                                <a><b><i class="fa  fa-sign-out" style="color:red; font-weight: 100;"></b></i><b style="color:red">  SALIR<span class="fa arrow"></span></b></a>
                                <ul class="nav nav-second-level">
                                
                                    <li>
                                        <a href="bd/cerrarSesion.php"style="color:#E91E63"><i class="fa  fa-sign-out" style="color:#0000ff;"></i><b> Cerrar Sesion</b></a>
                                    </li>
                                </ul>
                                <!-- /. cierre nav-segundo-nivel -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                                <!-- /.navbar-Estatica--->
        </nav>                       
                <!------///TITULO DEL MODULO ///--->

        <div id="page-wrapper">
            <br>
            <div class="row" id="page-wrapper2" style="background-color:rgb(55,72,131)">
                <div class="col-lg-12">                                                      
                    <h5 style="color:#FFFFFF; font-weight: bold; font-size: 18px;"><img class="logobannerAdmin" src="lib/img/of29carupano.png">  &nbsp <b>SISTEMA DE GESTION Y CONTROL SAIME</b></h5>
                </div>
                    <!-- /.col-lg-12 -->
            </div>
            <br><br><br>

            <!------///////////HEADER SECUNDARIO--->
                               
            <!-- ---///////// 4 MODULOS IGUALES /////////----------->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right"></div>                                                                      
                            </div>
                        </div>
                        <a href="http://www.saime.gob.ve/" target="_blank">
                            <div class="panel-footer">
                            <span class="pull-right"> &nbsp <i class="fa fa-arrow-circle-right" style="color:#CC0033"></i></span>
                            <h6><span class="pull-right"style="color:#1565C0;"><b>SITIO OFICIAL SAIME</b></span></h6>
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
                                    <i class="fa fa-tasks fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right"> </div>                                                  
                            </div>
                        </div>
                        <a href="http://declaraciones.seniat.gob.ve/" target="_blank">
                            <div class="panel-footer">
                            <span class="pull-right"> &nbsp <i class="fa fa-arrow-circle-right" style="color:#039BE5"></i></span>
                            <h6><span class="pull-right" style="color:#1565C0;"><b> SENIAT !</b></span></h6>
                                
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
                                    <i class="fa fa-laptop fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right"> </div>                                                                                                                                                    
                            </div>
                        </div>
                        <a href="https://elcarupanero.com/" target="_blank">
                            <div class="panel-footer">
                            <span class="pull-right"> &nbsp <i class="fa fa-arrow-circle-right" style="color:#FF5722"></i></span>
                            <h6><span class="pull-right" style="color:#1565C0;"><b>EL CARUPANERO.COM</b></span></h6>								                             
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
                                    <i class="fa fa-unlock-alt fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right"></div>                                                                                                      
                            </div>
                        </div>
                        <a href="https://tramites.saime.gob.ve/index.php?r=usuario/usuario/rememberPass" target="_blank">
                            <div class="panel-footer">
                                <span class="pull-right"> &nbsp <i class="fa fa-arrow-circle-right" style="color:#1D8348"></i></span>
                                <h6><span class="pull-right" style="color:#1565C0;"><b>  CONTRASE&Ntilde;A SAIME</b></span></h6>								                             
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
                            
                    <div class="col-lg-8">
                        <div id="morris-bar-chart"></div>
                    </div>                              
                </div>                           
            </div> 
                                
            <img class="imgFooter" src="lib/img/footerPrincipal2.jpg">	
                           
                         

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
           
        </div>		
		
    </div>								
            <!-- ARCHIVOS JAVASCRIP -->	
            													
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
			<script src="lib/main_proyecto/formRegistro.js"></script>
			
												
</body>

</html>