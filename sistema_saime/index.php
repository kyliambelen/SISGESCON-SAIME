
<?php

	include_once "bd/conexion.php";
		
		session_start();		
		if(isset($_GET['cerrar_sesion'])){
			session_unset();
			session_destroy();		
		}		
		if(isset($_SESSION['rol'])){	
			switch($_SESSION['rol']){
				case 1:
					header('location: menuPrincipalAdmin.php');
				break;			
				case 2:
					header('location: menuPrincipalUsuarios.php');
				break;			
				default:			
			}		
		} 
		
		if(isset($_POST['usuario_privi']) && isset($_POST['pass'])){
			$usuario_privi= $_POST['usuario_privi'];
			$pass= $_POST['pass'];
			
		$objeto = new Conexion();
		$conexion = $objeto->Conectar()->prepare('SELECT *FROM usuarios WHERE usuario_privi = :usuario_privi AND pass = :pass');		
		$conexion->execute(["usuario_privi" => $usuario_privi, "pass" => $pass]);
		
		$row = $conexion->fetch(PDO::FETCH_NUM);
		if($row == true){
		
			
			// VALIDACION DEL ROL 
			$rol=$row[4];
			$_SESSION['rol'] = $rol;
			switch($_SESSION['rol']){
				case 1:
					header('location: menuPrincipalAdmin.php');
				break;			
				case 2:
					header('location: menuPrincipalUsuarios.php');
				break;			
				default:			
			}		
		}else{
			
			
		}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>:: Registro | Usuarios ::</title>

    <!-- Tema Personalizado -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- //Tema Personalizado  -->

    <link href="lib/admin/admcss/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="lib/admin/admcss/component.css" rel="stylesheet" type="text/css" media="all" />
    <link href="lib/admin/admcss/style_grid.css" rel="stylesheet" type="text/css" media="all" />
    <link href="lib/admin/admcss/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Iconos de font-awesome-icons -->
	
	    <link href="lib/admin/admcss/font-awesome.css" rel="stylesheet"> 

    <!-- //font-awesome-icons -->

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>

    <!-- banner -->

    <div class="wthree_agile_admin_info">
		  
        <!-- /w3_agileits_top_nav-->
		 
        <!-- /Navegacion-->
		  
        <div class="w3_agileits_top_nav">

			<ul id="gn-menu" class="gn-menu-main">
			
				
                <!-- //nav_agile_w3l -->
                
                <li class="second logo admin"><h3 style="text-align:center"><i class="fa fa-book fa-2x" aria-hidden="true"></i>&nbsp<b>SISGESCON-SAIME</b></h3></li>
					
				<li class="second w3l_search admin_login">
				 
						<form action="#" method="post">
							<input type="search" name="search" placeholder="Buscar..." required="">
							<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					
				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			
            <!-- //nav -->
			
		</div>
						           				
            <div class="inner_content_w3_agile_info">
				<div class="registration admin_agile">
					<div class="signin-form profile admin">
													
                        <h2> INICIAR SESION</h2>
													
                       <div class="login-form">
							<form action="#" id="formLogin" method="post" autocomplete="off">
								<input type="text" placeholder="Usuario" class="input" name="usuario_privi">
								<input type="password" placeholder="Contraseña" class="input" name="pass"> 
								<br><br>																												
								<div class="tp">
									<input type="submit" value="iniciar sesion">
								</div>									
							</form>
					   </div>
				       <div class="login-social-grids admin_w3">
							<ul>
								<li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://www.rss.com"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>																																 			                	
				    </div>			
                </div>          
	        </div>

                      
                
<!--Los Derechos De Copia Comienzan Aqui-->

<div class="copyrights">
    
	 <p>© 2020 MAROJAS. Todos Los Derechos Reservados | Saime Carúpano Estado Sucre. </p>

</div>	



                        <!--Los Derechos de Copia Terminan Aquí-->

                        <!-- js -->

                  <script type="text/javascript" src="lib/admin/admjs/jquery-2.1.4.min.js"></script>
                  <script src="lib/admin/admjs/modernizr.custom.js"></script>

                  <script src="lib/admin/admjs/classie.js"></script>
                  <script src="lib/admin/admjs/gnmenu.js"></script>
				  <script src="lib/admin/admjs/scripts.js"></script>
				  <script src="lib/admin/admjs/jquery.nicescroll.js"></script>
				  <script type="text/javascript" src="lib/admin/admjs/bootstrap-3.1.1.min.js"></script>
				  

</body>
</html>