<?php

session_start();

if(!isset($_SESSION['rol'])){
header('location: index.php');

}else{
    if($_SESSION['rol']!=1){
    header('location: menuPrincipalUsuarios.php');
    }
}
        require ("empleadosController.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>INFORMACION DEL EMPLEADO</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link href="../lib/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">        
        <link rel="stylesheet" href="../lib/main_proyecto/bootstrap.min3.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"  type="text/css" href="../lib/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">          
        <!--datables CSS básico-->
        <link rel="stylesheet" type="text/css" href="../lib/datatables/datatables.min.css"/>
        <!--font awesome con CDN-->  
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        <!--font awesome -->  
        
        <link rel="stylesheet" href="../lib/main_proyecto/glificon.css">
        <link rel="stylesheet" href="../lib/main_proyecto/main.css">
        <link rel="stylesheet" href="../lib/main_proyecto/mystylesDF.css">
        <style>
            .slider {
                background: url("../lib/img/displayEmpleados2.png");
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
                <div class="text-left" style="color:#FFF;">
                    <h1 class="display-4"><b>SAIME</b>
                    <p class="lead" style="color:#FFF;"><b>Servicio Administrativo de Identificacion Migración y Extranjería....</b></p>
                    <p class="lead" style="color:#FFFF00; font-size:15px"><b>Oficina Carúpano - Estado Sucre.</b></p>
                </div>
            </div>
            <!--Fin slider banner-->

            <!--Menu de Navegacion-->

            <nav class="navbar navbar-toggleable-sm sticky-top"style="background:#CEE3F6">
                <button class="navbar-toggler navbar-toggler-right"style="background-color:#B45F04; color:#FFFFFF" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><b>MENU</b>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <li class="navbar-brand">
                    <img src="../lib/img/logo1.png" width="70" height="40" class="d-inline-block align-top" alt="logo Elizabeth">
                </li>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <div class="navbar-nav mr-auto ">
                        <a class="nav-item nav-link active" style="color:#000000; font-size:14px" href="../menuPrincipalAdmin.php"><b>MENU PRINCIPAL</b></a> 
                        <a class="nav-item nav-link " style="color:#0D6EDE; font-size:14px" href="menuEmpleados.php"><b>MENU EMPLEADOS</b></a>
                        <a class="nav-item nav-link" style="color:#0D6EDE; font-size:14px" href="tablaEmpleados.php"><b>GESTION EMPLEADOS</b></a> 
                        <a class="nav-item nav-link" style="color:#0D6EDE; font-size:14px" href="informacionAcademica.php"><b>INFO.ACADEMICA</b></a>
                        <a class="nav-item nav-link" style="color:#0D6EDE; font-size:14px" href="tabladatosAnexos.php"><b>DATOS ANEXOS</b></a>
                        <a class="nav-item nav-link" style="color:#0D6EDE; font-size:14px" href="../bd/cerrarSesion.php"><b>SALIR</b></a>
                    </div>
                    <div>
                        <!--//// FORMULARIO PARA AGREGAR CEDULA Y BUSCAR INFORMACION DEL EMPLEADO ////-->

                        <li class="nav-item">
                            <form action="" method="POST" class="form_search_EMP">
                                <input type="text" name="cedulaiNFO" id="cedulaiNFO" placeholder=" N°CEDULA">
                                <input type="submit" value="Ver Documento" class="btn_search_EMP">
                            </form>
                        </li>
                        
                    </div>
                </div>
            </nav>
            <!--fin del menu de navegacion-->
            <span class="d-block"style="background-color:rgb(54,114,193); height:5px"></span>
            <hr>
            <div class="container-fluid mt-3 pt-3">
                <div class="row">
                    <div class="col-sm-2"></div>		
                        <div class="col-sm-10">
                            <div class="jumbotron  mb-5 mt-5"style="width:80%">
                                <div class="container">
                                    <h3 style="color:rgb(54,114,193); text-align:center">HOLA, PUEDES BUSCAR AQUI</h3>
                                    <p style="text-align:center"><b>Buscar Por "NOMBRE" o "CÉDULA DE IDENTIDAD".</b></p>
                                    <p style="text-align:center"><a  href="#demo" class="btn btn-primary btn-lg" data-toggle="collapse">BUSQUEDA &nbsp<span class="badge badge-info">Ir..</span></a></p>
                                    <div id="demo" class="collapse">
                                        <div class="container mb-3 mt-3">
                                            <div class="row">
                                                <div class="col-12 col-md-12"><span class="border border-info"></span>
                                                    <br> <br>                                                          
                                                        <!-----------////////////////SECCION 1 (TABLA PARA BUSCAR AL EMPLEADO) ///////////////----------------->
                                                    <section class="container mt-2 pt-2 justify-content-center">     
                                                        <div class="card-deck">
                                                            <div class="card">                         
                                                                <div class="card-block">
                                                                    <div class="container">
                                                                        <div class="row d-flex justify-content-center">
                                                                            <div class="col-lg-12">
                                                                                <div class="table-responsive">              
                                                                                    <table id="tablainfoEmpleados" class="table-borderless table-striped table-hover" cellspacing="0" width="80%">
                                                                                        <thead class="text-center" style="background-color:rgb(54,114,193); color:#FFF;">
                                                                                            <tr>                                      
                                                                                                <th style="font-size:14px">CEDULA</th>
                                                                                                <th style="font-size:14px">NOMBRES</th>
                                                                                                <th style="font-size:14px">SAIME CARUPANO</th>                                   
                                                                                            </tr>
                                                                                        </thead>
                                                                                            <?php foreach($listarEmpleados AS $empleados){?>

                                                                                            <tr>
                                                                                                <td style="font-size:13px; color:#000000"><?php echo $empleados['cedula_emp'];?></td>
                                                                                                <td style="font-size:13px; color:#000000"><?php echo $empleados['nombres_emp'];?></td>
                                                                                                <td></td>
                                                                                                <?php } ?>
                                                                                            </tr>
                                                                                    </table>                                              
                                                                                </div>                     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                      
                                                    </section>
                                                </div>              
                                            </div>               
                                       </div>
                                    </div>          
                                </div>
                            </div>                     
                        </div>                    
                </div>
            </div>
            
            <?php

                $cedulaiNFO=(isset($_POST['cedulaiNFO'])) ? $_POST['cedulaiNFO']:"";


                        
                include ("baseDatos/conexion.php");



                    $sentencia= $pdo-> prepare(" SELECT 
                                                    `cedula_emp`,
                                                    `rif_emp`,
                                                    `nombres_emp`,                                                
                                                    `sexo_emp`,
                                                    `codigo_emp`, 
                                                    `sede_emp`, 
                                                    `cargo_emp`, 
                                                    `puesto_emp`, 
                                                    `condicion_emp`, 
                                                    `estatus_emp`, 
                                                    `fechaNAC_emp`, 
                                                    `fechaING_emp`,
                                                    `nacimientoDIA_emp`, 
                                                    `nacimientoMES_emp`, 
                                                    `nacimientoANIO_emp`,
                                                    `edad_emp`,  
                                                    `ingresoDIA_emp`, 
                                                    `ingresoMES_emp`, 
                                                    `ingresoANIO_emp`,
                                                    `tiempoSERV_emp`,    
                                                    `correo_emp`,                                          
                                                    `telefono_emp`,
                                                    `direccion_emp`,
                                                    `conyuge_emp`,
                                                    `foto_emp`
                                                                                    
                                            FROM  `empleados` 
                                            WHERE  cedula_emp = $cedulaiNFO");
                    $sentencia->execute();
                    $resultEmp= $sentencia->fetchAll(PDO::FETCH_ASSOC);

            ?>
            <?php foreach($resultEmp AS $infoEmp){?>


                <div class="container mb-2 mt-2">
                    <div class="row">
                        <!--Articulos-->
                        <div class="col-12 col-md-12"><span class="border border-info"></span>
                        
                            <!-- Primer articulo -->
                            <div class="row mb-6">
                                <div class="col-3">
                                    <br><br><br><br><br><br>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<img  width="100px"  height="100px" src="imagenes/imagenesEmpleados/<?php echo $infoEmp['foto_emp']; ?>"alt="" class="img-fluid img-thumbnail rounded;" /> <br><br>
                                    
                                </div>
                                
                                <div class="col-6 mt-10"> 
                                    <br>           
                                    <p class="text-center font-italic" style="font-size:23px;color:#0D6EDE"> <b>INFORMACIÓN EMPLEADOS </b></p><br><br><br><br>

                                                
                                    <p class="text-center font-italic"> <span class="" style="font-size:18px;color:#0D6EDE"><b>V.- <?php echo $infoEmp['cedula_emp'];?></b>&nbsp &nbsp<b> <?php echo $infoEmp['nombres_emp'];?></b></p><br>            
                                </div>
                                <div class="col-12 col-md-3 mt-3">
                                    <br><br><br><br><br>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<img width="100px"  height="100px" src="../lib/img/imgInfoempleados.png" alt="" class="img-thumbnail rounded"><br><br>                       
                                </div> 
                            </div> 
                        </div>  
                    </div>
                </div>  
                        <br> <br> 
                        

                        <!-----------////////////////SECCION 1 (BLOQUE DE TRES TARJETAS CON DATOS DEL EMPLEADO) ///////////////----------------->

                        <section class="container mt-4 pt-4"> 
                        <span class="d-block"style="background-color:#096781; height:5px"></span>
                            <div class="card-deck mt-4 pt-4">
                                <div class="card"> 
                                                    
                                    <div class="card-block">
                                        <h5 class="card-title"style="color:#096781; text-align:center;"><b>DATOS LABORALES</b></h5><img src="../lib/img/empleado3.jpg" alt="..." class="rounded border-danger"><br><br>
                                        <hr style="color: #0056b2;" /> 
                                        <P class="card-title"style="color:#096781; font-size:13px"><b>CODIGO:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoEmp['codigo_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" /> 
                                        <P class="card-title"style="color:#096781; font-size:13px"><b>RIF:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoEmp['rif_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />                             
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>SEDE:  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['sede_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>CARGO:  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['cargo_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>PUESTO:  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['puesto_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>CONDICION:  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['condicion_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>ESTATUS:  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['estatus_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>FECHA NACIMIENTO:  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['fechaNAC_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>FECHA INGRESO:  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['fechaING_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>EDAD :  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['edad_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>AÑOS DE SERVICIOS:  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['tiempoSERV_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>CORREO :  </b><a style="color:#0040FF;font-size:13px;"><b><?php echo $infoEmp['correo_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b> TELEFONO :  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['telefono_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>DIRECCION :  </b><a style="color:#272D28;font-size:13px;"><b><?php echo $infoEmp['direccion_emp'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>CONYUGE :  </b><a style="color:#0040FF;font-size:13px;"><b><?php echo $infoEmp['conyuge_emp'];?></b></a></h6>
                                    </div>
                                    <?php } ?>  
                                </div>

                                <?php
                                $sentencia= $pdo-> prepare(" SELECT 
                                                    `cedula_func`, 
                                                    `nombres_func`, 
                                                    `sede_func`,                                                                                                                                                                           
                                                    `estudios_func`,
                                                    `areaEstudios_func`,
                                                    `titulo_func`,
                                                    `condicion_func`, 
                                                    `nivelPost_func`,                                            
                                                    `foto_func`                                                              
                                            FROM  `estudios` 
                                            WHERE  cedula_func = $cedulaiNFO");
                                $sentencia->execute();
                                $resultEmp= $sentencia->fetchAll(PDO::FETCH_ASSOC);

                                ?>
                                <?php foreach($resultEmp AS $infoAcade){?>
                
                                <div class="card">
                                
                                    <div class="card-block">
                                        <h5 class="card-title"style="color:#096781; text-align:center;"><b>DATOS ACADÉMICOS</b></h5><img src="../lib/img/empleado7.jpg" class="rounded "><br><br>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>ESTUDIOS:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAcade['estudios_func'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>AREA DE ESTUDIO:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAcade['areaEstudios_func'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>TITULO:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAcade['titulo_func'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>CONDICION:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAcade['condicion_func'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>NIVEL-POST:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAcade['nivelPost_func'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        
                                    </div>
                                    <?php } ?>  
                                </div>
                                
                                <?php
                                                                        
                                    $sentencia= $pdo-> prepare(" SELECT 
                                                        `cedula_bene`, 
                                                        `nombres_bene`,                                                                                                                                                                                                                                       
                                                        `talla0`,
                                                        `pantalon0`,
                                                        `calzado0`,                                                                                           
                                                        `nroHijos`,
                                                        `Hijo1`,
                                                        `cedula1`,
                                                        `fechaNac1`,
                                                        `edad1`,
                                                        `estudios1`,
                                                        `tipo1`,
                                                        `nombreInstitucion1`,
                                                        `rif_institucion1`,
                                                        `nivelEstudios1`,
                                                        `talla1`,
                                                        `pantalon1`,
                                                        `calzado1`,
                                                        `Hijo2`,
                                                        `cedula2`,
                                                        `fechaNac2`,
                                                        `edad2`,
                                                        `estudios2`,
                                                        `tipo2`,
                                                        `nombreInstitucion2`,
                                                        `rif_institucion2`,
                                                        `nivelEstudios2`,
                                                        `talla2`,
                                                        `pantalon2`,
                                                        `calzado2`,
                                                        `Hijo3`,
                                                        `cedula3`,
                                                        `fechaNac3`,
                                                        `edad3`,
                                                        `estudios3`,
                                                        `tipo3`,
                                                        `nombreInstitucion3`,
                                                        `rif_institucion3`,
                                                        `nivelEstudios3`,
                                                        `talla3`,
                                                        `pantalon3`,
                                                        `calzado3`,
                                                        `Hijo4`,
                                                        `cedula4`,
                                                        `fechaNac4`,
                                                        `edad4`,
                                                        `estudios4`,
                                                        `tipo4`,
                                                        `nombreInstitucion4`,
                                                        `rif_institucion4`,
                                                        `nivelEstudios4`,
                                                        `talla4`,
                                                        `pantalon4`,
                                                        `calzado4`,
                                                        `Hijo5`,
                                                        `cedula5`,
                                                        `fechaNac5`,
                                                        `edad5`,
                                                        `estudios5`,
                                                        `tipo5`,
                                                        `nombreInstitucion5`,
                                                        `rif_institucion5`,
                                                        `nivelEstudios5`,
                                                        `talla5`,
                                                        `pantalon5`,
                                                        `calzado5`,
                                                        `Hijo6`,
                                                        `cedula6`,
                                                        `fechaNac6`,
                                                        `edad6`,
                                                        `estudios6`,
                                                        `tipo6`,
                                                        `nombreInstitucion6`,
                                                        `rif_institucion6`,
                                                        `nivelEstudios6`,
                                                        `talla6`,
                                                        `pantalon6`,
                                                        `calzado6`                                                                                       
                                                FROM  `datos_anexos` 
                                                WHERE  cedula_bene = $cedulaiNFO");
                                    $sentencia->execute();
                                    $resultEmp= $sentencia->fetchAll(PDO::FETCH_ASSOC);

                                ?>
                                
                                <?php foreach($resultEmp AS $infoAnex){?>
                                
                                <div class="card"> 
                                
                                    <div class="card-block">
                                        <h5 class="card-title"style="color:#096781; text-align:center;"><b>INFORMACIÓN ANEXA</b></h5><img src="../lib/img/beneficios2.jpg" class="rounded border-danger"><br><br>
                                        <hr style="color: #0056b2;" />                                                              
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>TALLA CAMISA:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAnex['talla0'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>TALLA PANTALÓN:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAnex['pantalon0'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>TALLA CALZADOS:  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAnex['calzado0'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />                              
                                        <h6 class="card-title"style="color:#096781; font-size:13px"><b>CANTIDAD DE HIJOS:  </b><a style="color:#0040FF; font-size:13px;"><b><?php echo $infoAnex['nroHijos'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        
                                    </div>
                                </div>                                       
                            </div>
                        </section>
                        <br><br>                

                                    <!-----------////////////////SECCION 2 (BLOQUE DE TRES TARJETAS CON DATOS DE LOS HIJOS) ///////////////----------------->
                        
                        
                        <section class="container mt-4 pt-4"> 
                            <span class="d-block"style="background-color:#096781;height:5px"></span>                  
                                <div class="card-deck mt-4 pt-4">
                                    <div class="card">                                         
                                        <div class="card-block">
                                            <h5 class="card-title"style="color:#096781; text-align:center"><b>INFORMACIÓN HIJO 1</b></h5><img src="../lib/img/anexo1.jpg" style="width:150; height: 150px;"  class="rounded mx-auto d-block"><br><br>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px; font-size:13px"><b>CEDULA: &nbsp  </b><a style="color:#272D28; font-size:13px;"><b><?php echo $infoAnex['cedula1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRES: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['Hijo1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>FECHA NACIMIENTO:  &nbsp </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['fechaNac1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>EDAD: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['edad1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['estudios1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TIPO INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['tipo1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRE INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nombreInstitucion1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>RIF INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['rif_institucion1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NIVEL ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nivelEstudios1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CAMISA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['talla1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA PANTALON: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['pantalon1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CALZADO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['calzado1'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />                    
                                        </div>
                                    </div>

                                    <div class="card">                                         
                                        <div class="card-block">
                                            <h5 class="card-title"style="color:#096781; text-align:center"><b>INFORMACIÓN HIJO 2</b></h5><img src="../lib/img/anexo6.jpg" style="width:150; height: 150px;" class="rounded mx-auto d-block" alt="Responsive image"><br><br>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>CEDULA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['cedula2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRES: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['Hijo2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>FECHA NACIMIENTO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['fechaNac2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>EDAD: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['edad2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['estudios2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TIPO INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['tipo2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRE INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nombreInstitucion2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>RIF INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['rif_institucion2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NIVEL ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nivelEstudios2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CAMISA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['talla2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA PANTALON: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['pantalon2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CALZADO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['calzado2'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />                     
                                        </div>
                                    </div>
                                    <div class="card">                                         
                                        <div class="card-block">
                                            <h5 class="card-title"style="color:#096781; text-align:center"><b>INFORMACIÓN HIJO 3</b></h5><img src="../lib/img/anexo8.jpg" style="width:150; height: 150px;" class="rounded mx-auto d-block"><br><br>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>CEDULA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['cedula3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRES: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['Hijo3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>FECHA NACIMIENTO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['fechaNac3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>EDAD: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['edad3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['estudios3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TIPO INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['tipo3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRE INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nombreInstitucion3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>RIF INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['rif_institucion3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NIVEL ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nivelEstudios3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CAMISA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['talla3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA PANTALON: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['pantalon3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />
                                            <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CALZADO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['calzado3'];?></b></a></h6>
                                            <hr style="color: #0056b2;" />                    
                                        </div>
                                    </div>
                                </div>                    
                        </section>
                        <br><br>  
                        
                        <!-----------////////////////SECCION 3 (BLOQUE DE TRES TARJETAS CON DATOS DE LOS HIJOS) ///////////////----------------->
                       
                        
                        <section class="container mt-4 pt-4"> 
                            <span class="d-block"style="background-color:#096781;height:5px"></span>  
                            <div class="card-deck mt-4 pt-4">
                                <div class="card">                                         
                                    <div class="card-block">
                                        <h5 class="card-title"style="color:#096781; text-align:center"><b>INFORMACIÓN HIJO 4</b></h5><img src="../lib/img/anexo3.jpg" style="width:150; height: 150px;" class="rounded mx-auto d-block"><br><br>
                                        <hr style="color: #0056b2;" /> 
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>CEDULA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['cedula4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRES: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['Hijo4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>FECHA NACIMIENTO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['fechaNac4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>EDAD: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['edad4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['estudios4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TIPO INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['tipo4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRE INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nombreInstitucion4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>RIF INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['rif_institucion4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NIVEL ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nivelEstudios4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CAMISA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['talla4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA PANTALON: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['pantalon4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CALZADO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['calzado4'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />                   
                                    </div>
                                </div>

                                <div class="card">                                         
                                    <div class="card-block">
                                        <h5 class="card-title"style="color:#096781; text-align:center"><b>INFORMACIÓN HIJO 5</b></h5><img src="../lib/img/anexo5.jpg" style="width:150; height: 150px" class="rounded mx-auto d-block"><br><br>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>CEDULA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['cedula5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRES: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['Hijo5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>FECHA NACIMIENTO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['fechaNac5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>EDAD: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['edad5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['estudios5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TIPO INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['tipo5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRE INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nombreInstitucion5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>RIF INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['rif_institucion5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NIVEL ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nivelEstudios5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CAMISA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['talla5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA PANTALON: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['pantalon5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CALZADO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['calzado5'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />                    
                                    </div>
                                </div>

                                <div class="card">                                         
                                    <div class="card-block">
                                        <h5 class="card-title"style="color:#096781; text-align:center"><b>INFORMACIÓN HIJO 6</b></h5><img src="../lib/img/anexo7.jpg" style="width:150; height: 150px" class="rounded mx-auto d-block"><br><br>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>CEDULA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['cedula6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRES: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['Hijo6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>FECHA NACIMIENTO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['fechaNac6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>EDAD: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['edad6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['estudios6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TIPO INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['tipo6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NOMBRE INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nombreInstitucion6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>RIF INSTITUCION: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['rif_institucion6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>NIVEL ESTUDIOS: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['nivelEstudios6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CAMISA: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['talla6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA PANTALON: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['pantalon6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />
                                        <h6 class="card-title"style="color:#0489B1; font-size:13px"><b>TALLA CALZADO: &nbsp  </b><a style="color:#272D28; font-size:14px;"><b><?php echo $infoAnex['calzado6'];?></b></a></h6>
                                        <hr style="color: #0056b2;" />                    
                                    </div>
                                        <?php } ?> 
                                </div>    
                        </section>   <!--  Fin Articulos  -->
                    </div>
                    <hr>           
                </div>   <!-- Fin del Container -->  
                            
            <!-----------//////////////// F   O   O   T   E   R ///////////////----------------->
            
            <div class="footer"style="background: #CEE3F6">
                <div class="footer-copy">
                    <br>
                    <p class="piefooter1" style="color:#0040FF; font-family: Georgia, 'Times New Roman', serif;"><b> &copy; Miguel A. Rodríguez || MARROJAS DESARROLLO || Todos los Derechos Reservados, Julio 2020 </b></P>
                    <p style="color:#0040FF; font-family: Georgia, 'Times New Roman', serif;"><b> Dise&ntildeo:| PHP - MYSQL - BOOTSTRAP 4 - JAVASCRIP. |</b></p>
                </div>
                
            </div>   <!--  Fin del Footer  -->
           

            <!------------------------------------------------------------------ARCHIVOS JAVASCRIP----------------------------------------------------------------->
            
            
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="../lib/jquery/jquery-3.2.1.slim.min.js"></script>
            <script src="../lib/jquery/popper.min.js"></script>
            <script src="../lib/main_proyecto/bootstrap.min.js"></script> 
            <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
            <!-- datatables JS -->
            <script type="text/javascript" src="../lib/datatables/datatables.min.js"></script>    
            
            <!-- para usar botones en datatables JS -->  
            <script src="../lib/datatables/JSZip-2.5.0/jszip.min.js"></script>    
            <script src="../lib/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
            <script src="../lib/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
            <script src="../lib/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>  
            <script src="../lib/datatables/Buttons-1.6.2/js/buttons.html5.min.js"></script>  							  
            <script type="text/javascript" src="../lib/main_proyecto/main.js"></script>  
            
                        <!--- código JS propìo------->  	
            <script src="../lib/main_proyecto/custom.js"></script>
        
            
            <!------ SCRIPT DE JQUERY PARA EL FUNCIONAMIENTO DEL DATATABLE Y EL CAMBIO DEL EDIOMA A ESPAÑOL ------>
            
            <script>
                    $(document).ready(function() { 
            
                tablainfoEmpleados = $('#tablainfoEmpleados').DataTable({   
                    
                    language: {
                            "lengthMenu": "Mostrar _MENU_ registros",
                            "zeroRecords": "No se encontraron resultados(Registros no existen)",
                            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                            "infoEmpty": "Mostrando Registros del 0 al 0 de un Total de 0 Registros",
                            "infoFiltered": "(Filtrado de _MAX_ Registros)",
                            "sSearch": "Buscar:",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast":"Último",
                                "sNext":"Siguiente",
                                "sPrevious": "Anterior"
                            },
                            "sProcessing":"Procesando...",
                        },
            
                        "lengthMenu":		[[1, 3, 5, 10, 20, -1], [1, 3, 5, 10, 20, "Todos"]],
                        "iDisplayLength":	1,
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
