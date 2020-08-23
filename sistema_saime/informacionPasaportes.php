

<!DOCTYPE html>
<html lang="en">

<head>
    
	<title>INFORMACION PASAPORTES</title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/main_proyecto/bootstrap.min3.css">
    <link rel="stylesheet" href="lib/main_proyecto/mystylesDF.css">
    <link rel="stylesheet" href="lib/main_proyecto/main.css">

    <style>
        .slider {
            background: url("lib/img/bannerpass.png");
            background-size: cover;
            background-position: center;
            height:300px;
        }
        
        body {
            background: #F5F5DC;
        }
        
        p {
            font-size: 1rem;
        }
    </style>

</head>

<body>
    <!-- Slider banner-->

    <div class="container-fluid slider d-flex justify-content-left item align-items-center">
        <div class="text-center" style="color:#4682B4;">
            <h1 class="display-4"><b>SAIME</b><span style="font-size:35px"><b>Carúpano</b></span></h1>
            <p class="lead" style="color:#4682B4;">&nbsp &nbsp &nbsp <b>Servicio Administrativo de Identificacion Migración y Extranjería....</b></p>
        </div>
    </div>
    <!--Fin slider banner-->

    <!--Menu de Navegacion-->

    <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm sticky-top">
        <button class="navbar-toggler navbar-toggler-right"style="background-color:#F5DA81; color:#FFFFFF" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><b>MENU</b>
		    <span class="navbar-toggler-icon"></span>
        </button>
        <li class="navbar-brand">
            <img src="lib/img/logo1.png" width="70" height="40" class="d-inline-block align-top" alt="LOGO PASAPORTE">
        </li>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav mr-auto ">
                <a class="nav-item nav-link active" style="color:#FFFFFF; font-size:14px" href="menuPrincipalAdmin.php"><b>MENU PRINCIPAL</b></a> &nbsp &nbsp &nbsp &nbsp
                <a class="nav-item nav-link " style="color:#4682B4; font-size:14px" href="menuPasaportes.php"><b>MENU PASAPORTES</b></a> &nbsp &nbsp 
                <a class="nav-item nav-link" style="color:#4682B4; font-size:14px" href="tablaPasaportes.php"><b>REGISTROS PASAPORTES</b></a> &nbsp &nbsp
                <a class="nav-item nav-link" style="color:#4682B4; font-size:14px" href="eliminarPasaportes.php"><b>ELIMINAR PASAPORTES</b></a> &nbsp &nbsp &nbsp &nbsp
                <a class="nav-item nav-link" style="color:#4682B4; font-size:14px" href="bd/cerrarSesion.php"><b>SALIR</b></a>
            </div>
            <div>
                <!--//// FORMULARIO PARA AGREGAR CEDULA Y BUSCAR EL DATO FILIATORIO ////-->

                <li class="nav-item">
                    <form action="" method="POST" class="form_search_Pass">
                        <input type="text" name="cedulapassp"  id="cedulapassp" placeholder="N°CEDULA">
                        <input type="submit" value="Ver Documento" class="btn_search_Pass">
                    </form>
                </li>
                
            </div>
        </div>
    </nav>
    <!--fin del menu de navegacion-->
    <span class="d-block"style="background-color:#008B8B; height: 8px"></span>
    <hr>
    
    <?php

        $cedulapassp=(isset($_POST['cedulapassp'])) ? $_POST['cedulapassp']:"";


		        
        include ("modulo_empleados/baseDatos/conexion.php");



            $sentencia= $pdo-> prepare(" SELECT 
                                            `cedula`,
                                            `nombres`,
                                            `sexo`,
                                            `tipo`, 
                                            `pasaporte`, 
                                            `ubicacion`, 
                                            `fecha`, 
                                            `mes`, 
                                            `ano`, 
                                            `usuario`,
                                            `observacion`
                                                                                                                     
                                    FROM  `pasaportes` 
                                    WHERE  cedula = $cedulapassp ");
            $sentencia->execute();
            $resultpassp= $sentencia->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <?php foreach($resultpassp AS $passp){?>


    <div class="container mb-5 mt-5">
        <div class="row">
            <!--Articulos-->
            <div class="col-12 col-md-12">
            
                <!-- Primer articulo -->
                <div class="row mb-6">
                    <div class="col-2">
                        <img src="lib/img/passportdf2.png" alt="" class=" img-thumbnail rounded"><br><br>
                        <hr style="color: #008B8B;"/>

                    </div>
                    
                    <div class="col-6 mt-10"> <br>                            
                        <p class="text-center font-italic" style="font-size:20px; color:#008B8B"> <b>INFORMACION BOVEDA DE PASAPORTES </b></p><br><br>
                                    
                        <p class="text-center font-italic" style="color:#000000"> <span class="badge badge-pill" style="background-color:#008B8B;font-size:18px;color:#FFFFFF"><b>V.- <?php echo $passp['cedula'];?>&nbsp &nbsp <?php echo $passp['nombres'];?></b></p><br>            
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="card" style="width: 18rem; height:13rem;">
                            <div class="card-block">
                                <h5 class="card-title" style="color:#4682B4; font-size:12px"><b>SEXO:&nbsp &nbsp<span class="badge badge-pill" style="background-color:#008B8B;font-size:12px;"><?php echo $passp['sexo'];?></b></h5>
                                <span class="d-block"style="background-color:#DF7401"></span>
                                <hr>
                                <p class="card-text"></p>
                                <h5 class="card-title" style="color:#4682B4; font-size:12px"><b>TIPO DE PASAPORTE:&nbsp &nbsp<span class="badge badge-pill" style="background-color:#008B8B;font-size:12px;"><?php echo $passp['tipo'];?></b></h5>
                                <span class="d-block"style="background-color:#DF7401"></span>
                                <hr>
                                <p class="card-text"></p>
                                <h5 class="card-title" style="color:#4682B4; font-size:12px"><b>N°DE PASAPORTE:&nbsp &nbsp<span class="badge badge-pill" style="background-color:#008B8B;font-size:12px;"><?php echo $passp['pasaporte'];?></b></h5>
                                <span class="d-block"style="background-color:#DF7401"></span>
                                <hr>
                                <p class="card-text"></p>
                                <h5 class="card-title" style="color:#4682B4; font-size:12px"><b>UBICACION:&nbsp &nbsp<span class="badge badge-pill" style="background-color:#008B8B;font-size:12px;"><?php echo $passp['ubicacion'];?>&nbsp &nbsp&nbsp &nbsp</b></h5>
                                
                            </div>
                        </div><br>
                        
                    </div>
                       
                </div>
                <!-- Fin del Primer Articulo  -->
                <span class="d-block mb-5 mt-5"style="background-color:#008B8B; height: 5px"></span>
               
                <div class="row mb-6 mb-5 mt-5">
                    <div class="col-2"></div>
                    <div class="col-6 mt-10"> <br> 
                        <div class="card" style="width: 35rem; height:16rem;"> 
                            <div class="card-block">            
                                <h5 class="card-title" style="color:#008B8B; font-size:14px"><b>FECHA DEL PASAPORTE:</b>&nbsp &nbsp<span class="b" style="color:#4682B4;font-size:14px;"><b><?php echo $passp['fecha'];?></b></h5>                                        
                                <span class="d-block"style="background-color:#DF7401"></span>
                                <hr>
                                <h5 class="card-title" style="color:#008B8B; font-size:14px"><b>MES DE EXPEDICION:</b>&nbsp &nbsp<span class="b" style="color:#4682B4;font-size:14px;"><b><?php echo $passp['mes'];?></b></h5>                                        
                                <span class="d-block"style="background-color:#DF7401"></span>
                                <hr> 
                                <h5 class="card-title" style="color:#008B8B; font-size:14px"><b>AÑO DE EXPEDICION:</b>&nbsp &nbsp<span class="b" style="color:#4682B4;font-size:14px;"><b><?php echo $passp['ano'];?></b></h5>                                        
                                <span class="d-block"style="background-color:#DF7401"></span>
                                <hr>
                                <h5 class="card-title" style="color:#008B8B; font-size:14px"><b>FUNCIONARIO:</b>&nbsp &nbsp<span class="b" style="color:#4682B4;font-size:14px;"><b><?php echo $passp['usuario'];?></b></h5>                                        
                                <span class="d-block"style="background-color:#DF7401"></span>
                                <hr>
                                <h5 class="card-title" style="color:#008B8B; font-size:14px"><b>ESTATUS DEL PASAPORTE:</b>&nbsp &nbsp<span class="b" style="color:#4682B4;font-size:14px;"><b><?php echo $passp['observacion'];?></b></h5>                                                                                                                                                 
                            </div>
                        </div>
                    </div>   
                </div>                                    
            </div>     
            <!--  Fin Articulos  -->
        </div>
        <?php } ?>  
    </div>
    <!-- Fin del Container -->
    
    <!-- Footer  -->
    <!-----------//////////////// F   O   O   T   E   R ///////////////----------------->
    
    <div class="footer bg-inverse">
        <div class="footer-copy">
            <br>
            <p class="piefooter1" style="color:#ffffff; font-family: Georgia, 'Times New Roman', serif;"><b>  &copy; Miguel A. Rodríguez || MARROJAS DESARROLLO || Todos los Derechos Reservados, Julio 2020 </b></P>
            <p style="color:#ffffff; font-family: Georgia, 'Times New Roman', serif;"> Dise&ntildeo:| PHP - MYSQL - BOOTSTRAP 4 - JAVASCRIP |.</p>
        </div>
        <div class="footer-redes">
            <a href="https://www.facebook.com/SomosRedSaime/" target="_blank" class="fa fa-facebook" style="color:#212121; width:30px; height:30px;"></a>
            <a href="https://twitter.com/VenezuelaSaime/" target="_blank" class="fa fa-twitter" style="color:#212121; width:30px"></a>
            <a href="https://www.youtube.com/channel/UCjWtRFqVVmc3ecd5kVTrftw/" target="_blank" class="fa fa-youtube-play" style="color:#212121; width:30px"></a>
            <a href="https://github.com/" target="_blank" class="fa fa-github" style="color:#212121; width:30px"></a>
        </div>
    </div>
    <!--  Fin del Footer  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="lib/jquery/jquery-3.2.1.slim.min.js"></script>
    <script src="lib/jquery/popper.min.js"></script>
    <script src="lib/main_proyecto/bootstrap.min.js"></script>

</body>

</html>
