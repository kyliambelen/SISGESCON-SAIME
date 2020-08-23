<?php
		// INICIO DE SESION Y COMPROBACION DEL  ROL DEL USUARIO
			
			session_start();	
			if(!isset($_SESSION['rol'])){
			header('location: ../index.php');
			}else{
				if($_SESSION['rol']!=1){
				header('location: ../menuPrincipalUsuarios.php');
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
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="../lib/main_proyecto/main.css"> 
	<link rel="stylesheet" href="../lib/main_proyecto/formRegistro.css"> 
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-static-top"style="background:rgb(0,65,132)" role="navigation" style="margin-bottom: 0">
                            
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
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope fa-fw"style="color:#000000;font-weight-bold"></i> <i class="fa fa-caret-down"style="color:#000000;font-weight-bold"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
						<li>
						<a href="https://login.live.com/" target="_blank"><img src="../lib/img/outlook.png"></a>.                          
                                                                                      
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://accounts.google.com/" target="_blank"><img src="../lib/img/gmail.png"></a>.
                                
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://login.yahoo.com/" target="_blank"><img src="../lib/img/yahoo.png"></a>.
                               
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
                        <li><a href="../bd/cerrarSesion.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-usuario -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.Barra de Navegaacion Izquierda -->

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
                            <!-- /Grupos de Entradas[Barras desplegablees] -->
                        </li>
                        <li>
                            <a href="../menuPrincipalAdmin.php"><i class="fa fa-dashboard fa-fw  font-weight-bold" style="color:#1E88E5;"></i><strong><b style="color:#0066FF;">  MENU PRINCIPAL</b></strong></a>
                        </li>
                                                      
                        <li>
                            <a href="#"><i class="fa fa-arrow-circle-right" style="color:#FF5722;"></i><span class="fa arrow"></span><strong><b style="color:#0066FF;"> SALIR</b></strong></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="../bd/cerrarSesion.php"style="color:#FF5722"><i class="fa fa-external-link" style="color:#0066FF;"></i><b>  Cerrar Sesion</b></a>
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

        <div id="page-wrapper">

        <div class="col-lg-12">
                <!------///////////HEADER SECUNDARIO--->

            <img src="../lib/img/bannerUsuarios.png">
        </div>
            <!-- /.col-lg-12 -->
        <br><br><br>
    
            <!-- ---///////// 4 MODULOS IGUALES /////////----------->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-plus fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   
                                </div>
                            </div>
                        </div>
                      
                            <div class="panel-footer">
								
								<span class="pull-right">&nbsp <i class="fa fa-arrow-circle-right"style="color:#CC0033"></i></span>
                                 <h6><a href="#addnew" data-toggle="modal"> <span class="pull-right"style="color:#1565C0; text-center:center"><b>REGISTRAR USUARIOS</b></span></a> </h6>
                                <div class="clearfix"></div>
                            </div>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">                                                                     
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
							
							<span class="pull-right">&nbsp <i class="fa fa-arrow-circle-right" style="color:#039BE5 "></i></span>
                             <h6><a href="tablaUsuarios.php"> <span class="pull-right"style="color:#1565C0; text-center:center"> <b>USUARIOS REGISTRADOS</b></span> </h6>
                                
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
                                    <i class="fa fa-thumbs-up fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">                                                                    
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
							
							<span class="pull-right">&nbsp <i class="fa fa-arrow-circle-right" style="color:#FF5722"></i></span>
                                <h6><a href="#"> <span class="pull-right"style="color:#1565C0; text-center:center"><b>SAIME OF-29</b></span>	 </h6>							                             
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
                                    <i class="fa fa-external-link-square fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">                                 
                                </div>
                            </div>
                        </div>
                       
                            <div class="panel-footer">
							
							    <span class="pull-right">&nbsp <i class="fa fa-arrow-circle-right" style="color:#1D8348 "></i></span>
                                <h6><a href="../menuPrincipalAdmin.php"> <span class="pull-right" style="color:#1565C0;"><b> MENU PRINCIPAL</b></span></h6>							                             
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
			
            <?php
                require ("usuariosController.php");

            ?>
					
			<!--------FORMULARIO REGISTRO DE USUARIOS---->			
			<!--Modal para CRUD-->
			<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalsmallTitle" aria-hidden="true">
				<div class="modal-dialog modal-small" role="document">
					<div class="modal-content">
						<div class="modal-header "style="background:#7A7A7A; color:##FFFFFF;"><h3><b>NUEVO</b></h3><small class="color:#FFFFFF;"><b>Usuario</b></small>
					   
							
							<button type="button" class="close align rigth" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body" style=" background:#E3E2E1; color:#000000;">
							<div class="container-fluid"><img src="../lib/img/logo_modal2.png" class="modalUsuario" style="float:right"><br><br><br><br><br>
					
                                <form action="" method="post" enctype="multipart/form-data">  
					
									<div class="row form-group">
										<div class="col-sm-2">
                                        <b><label for="" style="color:#3B0B17">NOMBRES:</label> </b>
										</div>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="nombres_privi" required> 
										</div>
									</div>
									<div class="row form-group">
										<div class="col-sm-2">
                                        <b><label for="" style="color:#3B0B17">USUARIO:</label> </b>
										</div>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="usuario_privi" required>
										</div>
									</div>
									<div class="row form-group">
										<div class="col-sm-2">
                                        <b><label for="" style="color:#3B0B17">PASSWORD:</label> </b>
										</div>
										<div class="col-sm-9">
											<input type="password" class="form-control" name="pass" required>
										</div>
									</div>
								
									<div class="row form-group">
                                        <div class="col-sm-2">
                                            <b><label for="" style="color:#3B0B17">ROL:</label> </b>
                                        </div> 
                                        <div class="col-sm-9"> 
                                            <select class="font-weight-bold form-control" name="rol_id">
                                                <option value="1">ADMINISTRADOR</option>
                                                <option value="2">USUARIO</option>								
                                            </select> 
                                        </div>                                                        
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-2">
                                            <b><label for="" style="color:#3B0B17">FOTO:</label> </b>
                                        </div>
                                        <div class="col-sm-9">    

                                            <input type="file" accept="image/*" class="font-weight-bold form-control"style="color:#0080FF" name="foto_usu" value="<?php echo $foto_usu;?>"  placeholder="" id="foto_usu" require="">
                                        </div>    
                                    </div>
									<div class="modal-footer"style="background:#252423; color:#280303;font-weight-bold">
                                        <button value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion">Agregar</button>				
                                        <button value="btnCancelar" <?php echo $accionCancelar;?> class="btn btn-primary" type="submit" name="accion">Cancelar</button> 
									</div>
								
								</form>	
							</div> 	
						</div>
					</div>
				</div>
			</div>
			
			<div class="pieFooter">
				<div class="row">
					<div class="col-lg-12">
					
						<img class="imgFooter2" src="../lib/img/footerPrincipal2.jpg">		
					
					</div>			
				</div>			
            </div>
            <br><br><br>
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
	<script>
	  $('#addnew').on('shown.bs.modal', function () {
		$('#myInput').trigger('focus')
		}) 
	</script>
                
    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../vendor/raphael/raphael.min.js"></script>
    <script src="../../vendor/morrisjs/morris.min.js"></script>
    <script src="../../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>
	<script src="../lib/main_proyecto/formRegistro.js"></script>
	
	
								
		
		
				
			
</body>

</html>