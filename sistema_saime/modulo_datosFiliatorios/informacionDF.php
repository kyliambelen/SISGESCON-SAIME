

<!DOCTYPE html>
<html lang="en">

<head>
    <title>INFORMACION DF</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../lib/main_proyecto/bootstrap.min3.css">
    <link rel="stylesheet" href="../lib/main_proyecto/mystylesDF.css">
    <link rel="stylesheet" href="../lib/main_proyecto/main.css">

    <style>
        .slider {
            background: url("../lib/img/bannersaimedf.png");
            background-size: cover;
            background-position: center;
            height: 300px;
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
        <div class="text-left" style="color:#0343F1;">
            <h1 class="display-4"><b>SAIME</b><span style="font-size:35px"><b>Carúpano</b></span></h1>
            <p class="lead" style="color:#FFF;"><b>Servicio Administrativo de Identificacion Migración y Extranjería....</b></p>
        </div>
    </div>
    <!--Fin slider banner-->

    <!--Menu de Navegacion-->

    <nav class="navbar navbar-primary bg-primary navbar-toggleable-sm sticky-top">
        <button class="navbar-toggler navbar-toggler-right"style="background-color:#2E9AFE; color:#FFFFFF" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><b>MENU</b>
		    <span class="navbar-toggler-icon"></span>
        </button>
        <li class="navbar-brand">
            <img src="../lib/img/logo1.png" width="70" height="40" class="d-inline-block align-top" alt="logo Elizabeth">
        </li>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav mr-auto ">
                <a class="nav-item nav-link active" style="color:#ffffff" href="../menuPrincipalAdmin.php"><b>MENU PRINCIPAL</b></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                <a class="nav-item nav-link " style="color:#ffffff" href="menuDatosFiliatorios.php"><b>MENU D.F</b></a> &nbsp &nbsp &nbsp &nbsp
                <a class="nav-item nav-link" style="color:#ffffff" href="tabladatosFiliatorios.php"><b>GESTION D.F</b></a> &nbsp &nbsp &nbsp &nbsp
                <a class="nav-item nav-link" style="color:#ffffff" href="../bd/cerrarSesion.php"><b>SALIR</b></a>
            </div>
            <div>
                <!--//// FORMULARIO PARA AGREGAR CEDULA Y BUSCAR EL DATO FILIATORIO ////-->

                <li class="nav-item">
                    <form action="" method="POST" class="form_search_DF">
                        <input type="text" name="ceduladf" id="ceduladf" placeholder=" N°CEDULA">
                        <input type="submit" value="Ver Documento" class="btn_search_DF">
                    </form>
                </li>
                
            </div>
        </div>
    </nav>
    <!--fin del menu de navegacion-->
    <span class="d-block"style="background-color:#2A5886; height:8px"></span>
    <hr>
    
    <?php

        $ceduladf=(isset($_POST['ceduladf'])) ? $_POST['ceduladf']:"";


		        
        include ("../modulo_empleados/baseDatos/conexion.php");



            $sentencia= $pdo-> prepare(" SELECT 
                                            `fecha_actual`,
                                            `cedula_df`,
                                            `fechaExpedicion`,
                                            `nombres_df`, 
                                            `apellidos_df`, 
                                            `estadoCivil_df`, 
                                            `nacionalidad_df`, 
                                            `fechaNac_df`, 
                                            `madre_df`, 
                                            `padre_df`, 
                                            `lugarNac_df`, 
                                            `documentos1_df`,
                                            `documentos2_df`,
                                            `documentos3_df`,
                                            `documentos4_df`,
                                            `documentos5_df`,
                                            `documentos6_df`, 
                                            `jefeOficina`, 
                                            `bancos_df`                                  
                                    FROM  `datos_filiatorios` 
                                    WHERE  cedula_df = $ceduladf ");
            $sentencia->execute();
            $resultDF= $sentencia->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <?php foreach($resultDF AS $DF){?>


    <div class="container mb-5 mt-5">
        <div class="row">
            <!--Articulos-->
            <div class="col-12 col-md-12">
            
                <!-- Primer articulo -->
                <div class="row mb-6">
                    <div class="col-2">
                        <img src="../lib/img/saime4.jpg" alt="" class="img-fluid img-thumbnail rounded"><br><br>
                        <hr style="color: #2A5886;"/>

                    </div>
                    
                    <div class="col-6 mt-10"> 
                    <br>           
                        <p class="text-center font-italic" style="font-size:20px;color:#2A5886"><b>INFORMACION DATOS FILIATORIOS</b></p><br><br>
                                    
                        <p class="text-center font-italic" style="color:#000000"> <span class="badge badge-pill" style="background-color:#2A5886;font-size:18px;color:#FFF"><b>V.- <?php echo $DF['cedula_df'];?>&nbsp &nbsp <?php echo $DF['nombres_df'];?> <?php echo $DF['apellidos_df'];?></b></p><br>            
                    </div>
                    <div class="col-12 col-md-3 mt-3">
                        <div class="card" style="width: 18rem; height:3rem; background-color:#E6E9F1">
                            <div class="card-block">
                                <p class="card-title" style="color:#2A5886; font-size:12px"><b>FECHA DE EXPEDICIÓN:</b> &nbsp &nbsp<span class="badge badge-pill" style="background-color:#2A5886;font-size:12px;"><?php echo $DF['fecha_actual'];?></b></p>
                                <p class="card-text"></p>
                            </div>
                        </div><br>
                        <div class="card" style="width: 18rem; height:3rem; background-color:#E6E9F1">
                            <div class="card-block">
                                <p class="card-title" style="color:#2A5886; font-size:12px"><b>FECHA DE CEDULACIÓN:</b> &nbsp &nbsp<span class="badge badge-pill" style="background-color:#2A5886;font-size:12px;"><?php echo $DF['fechaExpedicion'];?></b></p>
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <br>
                        <div class="card" style="width: 18rem; height:3rem; background-color:#E6E9F1">
                            <div class="card-block">
                                <p class="card-title" style="color:#2A5886; font-size:12px"><b>ESTADO CIVIL:</b> &nbsp &nbsp<span class="badge badge-pill" style="background-color:#2A5886;font-size:12px;"><?php echo $DF['estadoCivil_df'];?></b></p>
                                <p class="card-text"></p>
                            </div>
                        </div>

                        <hr style="color: #0056b2;" />

                        <div class="card" style="width: 18rem; height:3rem; background-color:#E6E9F1">
                            <div class="card-block">
                                <p class="card-title" style="color:#2A5886; font-size:12px"><b>FECHA DE NACIMIENTO:&nbsp &nbsp<span class="badge badge-pill" style="background-color:#2A5886;font-size:12px;"><?php echo $DF['fechaNac_df'];?></b></p>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                       
                </div>
                <!-- Fin del Primer Articulo  -->
                <hr >
                <!--jumbotron Padre y Madre -->

                <div class="jumbo"  style="width:80%;">
                    <h6 style="color:#2A5886"><strong><b>MADRE:</b></strong></h6>               
                   
                    <p class="alert-link" style="color:#000000; font-size:18px"><span class="badge badge-pill" style="background-color:#2A5886"><?php echo $DF['madre_df'];?></span>             
                    <h6 style="font-size:16px; color:#2A5886"><strong>PADRE:</strong></h6>                  
                        <p class="alert-link" style="color:#000000; font-size:18px"><span class="badge badge-pill" style="background-color:#2A5886"><?php echo $DF['padre_df'];?></span>           
                </div>
                                      
                <!--jumbotron Documentos Presentados-->

                <div class="jumbo mt-3 pt-5" style="background-color:#F7F2E0">
                    <h1 style="font-size:16px; color:#2A5886"><strong><b>LUGAR DE NACIMIENTO</b></strong></h1>
                    <div class="alert alert" style="background-color:#D0D8EE">
                        <p class="alert-link" style="color:#2A5886; font-size:12px"><b><?php echo $DF['lugarNac_df'];?></b></p>
                    </div>
                    <hr class="my-5">
                    <h1 style="font-size:16px; color:#2A5886"><strong><b>DOCUMENTOS PRESENTADOS</b></strong></h1>
                    <div class="lead">
                        <div class="alert"style="background-color:#E6E9F1">
                            <p class="alert-link" style="color:#2A5886; font-size:12px"><?php echo $DF['documentos1_df'];?></p>
                        </div>
                        <hr style="color: #0056b2;" />
                        <div class="alert"style="background-color:#E6E9F1">
                            <p class="alert-link" style="color:#2A5886; font-size:12px"><?php echo $DF['documentos2_df'];?></p>
                        </div>
                        <hr style="color: #0056b2;" />
                        <div class="alert"style="background-color:#E6E9F1">
                            <p class="alert-link" style="color:#2A5886; font-size:12px"><?php echo $DF['documentos3_df'];?></p>
                        </div>
                        <hr style="color: #0056b2;" />
                        <div class="alert"style="background-color:#E6E9F1">
                            <p class="alert-link" style="color:#2A5886; font-size:12px"><?php echo $DF['documentos4_df'];?></p>
                        </div>
                        <hr style="color: #0056b2;" />
                        <div class="alert"style="background-color:#E6E9F1">
                            <p class="alert-link" style="color:#2A5886; font-size:12px"><?php echo $DF['documentos5_df'];?></p>
                        </div>
                        <hr style="color: #0056b2;" />
                        <div class="alert"style="background-color:#E6E9F1">
                            <p class="alert-link" style="color:#2A5886; font-size:12px"><?php echo $DF['documentos6_df'];?></p>
                        
                        </div>
                    </div>   
                </div>
                <hr>  
                  
            </div>     
            <!--  Fin Articulos  -->
        </div>
        <?php } ?>  
    </div>
    <!-- Fin del Container -->
    
    <!-- Footer  -->
    <!-----------//////////////// F   O   O   T   E   R ///////////////----------------->
    
    <div class="footer bg-primary">
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
    <script src="../lib/jquery/jquery-3.2.1.slim.min.js"></script>
    <script src="../lib/jquery/popper.min.js"></script>
    <script src="../lib/main_proyecto/bootstrap.min.js"></script>

</body>

</html>
