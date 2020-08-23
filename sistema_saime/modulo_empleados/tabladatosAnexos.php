<?php

session_start();

if(!isset($_SESSION['rol'])){
header('location: index.php');

}else{
    if($_SESSION['rol']!=1){
    header('location: menuPrincipalUsuarios.php');
    }
}
        require ("datosanexosController.php");
?>

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!--<link rel="shortcut icon" href="#" />-->  
   
            <title>GESTION INFORMACION ANEXA</title>
        
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

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:rgb(247,185,0)">

            <!---///////// LOGO 1 ///////////------->

        <img src="../lib/img/beneficios1.jpg" class="logoEmpleados">

        <!----------------------------------------------->
        <button class="navbar-toggler" style=" background-color: #FFBF00; color: #FFFFFF" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">MENU
        <span class="navbar-toggler-icon"></span>
        </button>&nbsp &nbsp &nbsp &nbsp

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"style="color:rgb(0,0,0); font-weight: bold" href="menuEmpleados.php">MENU<span class="sr-only">(current)</span></a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color:rgb(0,0,0); font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALIDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="tablaEmpleados.php">Gestión Empleados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="informacionAcademica.php">Información Académica del Empleado</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="informacionEmpleados1.php">Información del Empleado</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="../bd/cerrarSesion.php">Cerrar Sesion</a>
                    </div>
                </li>
                <li class="nav-item">&nbsp &nbsp &nbsp &nbsp 	

                        <!--------/////////////// BOTON PARA AGREGAR REGISTROS //////////////--------------->	
                    <button type="button" type="button" class="btn" style="background-color:rgb(0,155,193)" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-users fa-2x"></i></button>  
                    <!--<button type="button"  type="button" class="btn" style="background-color:rgb(0,155,193)" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">library_add</i></button>-->     
                    <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Agregar Registros+</button>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link"style="color:rgb(0,0,0); font-weight: bold" href="#">REGISTRAR +</a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="img1">
                    <img src="../lib/img/datosAnexos.png"> 
                </li>
            </ul>
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/beneficios2.jpg" class="logoEmpleados">
                <!--------------------------------------->	
            </li>
        </div>
    </nav>
    <br> 		   	           
   
</head>
<body>
    <div class="container-fluid">
        <form action="" method="post" enctype="multipart/form-data">      
                    <!-- Modal que contiene las acciones a realizar[INGRESAR-MODIFICAR-ELIMINAR] -->               
                <div class="modal fade modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel -modal-lg" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header font-weight-bold img-thumbnail" style="background:rgb(247,185,0)";><img src="../lib/img/beneficios2.jpg" class="logoEmpleados">&nbsp&nbsp &nbsp
                                    <h5 class="modal-title"style="color:#009999" id="exampleModalLabel"><b>BENEFICIOS</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <input type="hidden" required name="id" value="<?php echo $id;?>" placeholder="" id="id" require="">
                                    <br>
                                    <div class="col-12">
                                        <p class="text-center font-italic text-primary" style="font-size:18px;"> <b>DATOS DEL EMPLEADO</b></p>
                                    </div> 
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for=""style="color:#3B0B17;font-size:14px">CEDULA:</label></b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula_bene']))?"is-invalid":"";?>" style="color:#848484"  name="cedula_bene" value="<?php echo $cedula_bene;?>" placeholder="" id="cedula_bene" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula_bene']))?$error['cedula_bene']:"";?>
                                        </div>
                                    </div>
                                    <br>                                  
                                    <div class="form-group col-md-6">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">NOMBRES:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombres_bene']))?"is-invalid":"";?>"style="color:#848484"   name="nombres_bene" value="<?php echo $nombres_bene;?>" placeholder="" id="nombres_bene" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombres_bene']))?$error['nombres_bene']:"";?>
                                        </div>
                                    </div>
                                    <br>                                                                   
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">TALLA CAMISA :</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['talla0']))?"is-invalid":"";?>" style="color:#848484"   name="talla0" value="<?php echo $talla0;?>" placeholder="" id="talla0" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['talla0']))?$error['talla0']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">TALLA PANTALON :</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['pantalon0']))?"is-invalid":"";?>" style="color:#848484"   name="pantalon0" value="<?php echo $pantalon0;?>" placeholder="" id="pantalon0" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['pantalon0']))?$error['pantalon0']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">TALLA CALZADO :</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['calzado0']))?"is-invalid":"";?>" style="color:#848484"   name="calzado0" value="<?php echo $calzado0;?>" placeholder="" id="calzado0" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['calzado0']))?$error['calzado0']:"";?>
                                        </div>
                                    </div>
                                    <br>                                  
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">N° DE HIJOS:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nroHijos']))?"is-invalid":"";?>" style="color:#848484"   name="nroHijos" value="<?php echo $nroHijos;?>" placeholder="" id="nroHijos" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nroHijos']))?$error['nroHijos']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <p class="text-center font-italic text-primary" style="font-size:18px;"> <b>DATOS DE LOS HIJOS:</b></p>
                                    </div> 
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">N°CEDULA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula1']))?"is-invalid":"";?>" style="color:#848484"   name="cedula1" value="<?php echo $cedula1;?>" placeholder="" id="cedula1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula1']))?$error['cedula1']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">NOMBRES (Hijo 1):</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['Hijo1']))?"is-invalid":"";?>" style="color:#848484"   name="Hijo1" value="<?php echo $Hijo1;?>" placeholder="" id="Hijo1" require="">
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">FECHA NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaNac1']))?"is-invalid":"";?>" style="color:#848484"   name="fechaNac1" value="<?php echo $fechaNac1;?>" placeholder="" id="fechaNac1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaNac1']))?$error['fechaNac1']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">EDAD:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['edad1']))?"is-invalid":"";?>" style="color:#848484"   name="edad1" value="<?php echo $edad1;?>" placeholder="" id="edad1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['edad1']))?$error['edad1']:"";?>
                                        </div>
                                    </div>
                                    <br>                                                                    
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">ESTUDIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['estudios1']))?"is-invalid":"";?>" style="color:#848484"   name="estudios1" value="<?php echo $estudios1;?>" placeholder="" id="estudios1" require="">>                                      
                                                <option value="PRE-ESCOLAR">PRE-ESCOLAR</option>
                                                <option value="PRIMARIA">PRIMARIA</option>
                                                <option value="SECUNDARIA"> SECUNDARIA</option>
                                                <option value="BACHILLERATO">BACHILLERATO</option>
                                                <option value="UNIVERSITARIO">UNIVERSITARIO</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estudios1']))?$error['estudios1']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TIPO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['tipo1']))?"is-invalid":"";?>" style="color:#848484"   name="tipo1" value="<?php echo $tipo1;?>" placeholder="" id="tipo1" require="">>                                               
                                                <option value="PUBLICA">PUBLICA</option>
                                                <option value="PRIVADA">PRIVADA</option>
                                                <option value="NINGUNA"> NINGUNA</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['tipo1']))?$error['tipo1']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombreInstitucion1']))?"is-invalid":"";?>" style="color:#848484"   name="nombreInstitucion1" value="<?php echo $nombreInstitucion1;?>" placeholder="" id="nombreInstitucion1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombreInstitucion1']))?$error['nombreInstitucion1']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">RIF INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['rif_institucion1']))?"is-invalid":"";?>" style="color:#848484"   name="rif_institucion1" value="<?php echo $rif_institucion1;?>" placeholder="" id="rif_institucion1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['rif_institucion1']))?$error['rif_institucion1']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> NIVEL DE ESTUDIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nivelEstudios1']))?"is-invalid":"";?>" style="color:#848484"   name="nivelEstudios1" value="<?php echo $nivelEstudios1;?>" placeholder="" id="nivelEstudios1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nivelEstudios1']))?$error['nivelEstudios1']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CAMISA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['talla1']))?"is-invalid":"";?>" style="color:#848484"   name="talla1" value="<?php echo $talla1;?>" placeholder="" id="talla1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['talla1']))?$error['talla1']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA PANTALON:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['pantalon1']))?"is-invalid":"";?>" style="color:#848484"   name="pantalon1" value="<?php echo $pantalon1;?>" placeholder="" id="pantalon1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['pantalon1']))?$error['pantalon1']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CALZADO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['calzado1']))?"is-invalid":"";?>" style="color:#848484"   name="calzado1" value="<?php echo $calzado1;?>" placeholder="" id="calzado1" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['calzado1']))?$error['calzado1']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <p class="text-center font-italic text-primary" style="font-size:18px;"> <b>HIJO 2:</b></p>
                                    </div> 
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">N°CEDULA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula2']))?"is-invalid":"";?>" style="color:#848484"   name="cedula2" value="<?php echo $cedula2;?>" placeholder="" id="cedula2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula2']))?$error['cedula2']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">NOMBRES (Hijo 2):</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['Hijo2']))?"is-invalid":"";?>" style="color:#848484"   name="Hijo2" value="<?php echo $Hijo2;?>" placeholder="" id="Hijo2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['Hijo2']))?$error['Hijo2']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">FECHA NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaNac2']))?"is-invalid":"";?>" style="color:#848484"   name="fechaNac2" value="<?php echo $fechaNac2;?>" placeholder="" id="fechaNac2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaNac2']))?$error['fechaNac2']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">EDAD:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['edad2']))?"is-invalid":"";?>" style="color:#848484"   name="edad2" value="<?php echo $edad1;?>" placeholder="" id="edad2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['edad2']))?$error['edad2']:"";?>
                                        </div>
                                    </div>
                                    <br>                                                                    
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">ESTUDIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['estudios2']))?"is-invalid":"";?>" style="color:#848484"   name="estudios2" value="<?php echo $estudios2;?>" placeholder="" id="estudios2" require="">>                                      
                                                <option value="PRE-ESCOLAR">PRE-ESCOLAR</option>
                                                <option value="PRIMARIA">PRIMARIA</option>
                                                <option value="SECUNDARIA"> SECUNDARIA</option>
                                                <option value="BACHILLERATO">BACHILLERATO</option>
                                                <option value="UNIVERSITARIO">UNIVERSITARIO</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estudios2']))?$error['estudios2']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TIPO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['tipo2']))?"is-invalid":"";?>" style="color:#848484"   name="tipo2" value="<?php echo $tipo2;?>" placeholder="" id="tipo2" require="">>                                               
                                                <option value="PUBLICA">PUBLICA</option>
                                                <option value="PRIVADA">PRIVADA</option>
                                                <option value="NINGUNA"> NINGUNA</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['tipo2']))?$error['tipo2']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombreInstitucion2']))?"is-invalid":"";?>" style="color:#848484"   name="nombreInstitucion2" value="<?php echo $nombreInstitucion2;?>" placeholder="" id="nombreInstitucion2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombreInstitucion2']))?$error['nombreInstitucion2']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">RIF INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['rif_institucion2']))?"is-invalid":"";?>" style="color:#848484"   name="rif_institucion2" value="<?php echo $rif_institucion2;?>" placeholder="" id="rif_institucion2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['rif_institucion2']))?$error['rif_institucion2']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> NIVEL DE ESTUDIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nivelEstudios2']))?"is-invalid":"";?>" style="color:#848484"   name="nivelEstudios2" value="<?php echo $nivelEstudios2;?>" placeholder="" id="nivelEstudios2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nivelEstudios2']))?$error['nivelEstudios2']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CAMISA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['talla2']))?"is-invalid":"";?>" style="color:#848484"   name="talla2" value="<?php echo $talla2;?>" placeholder="" id="talla2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['talla2']))?$error['talla2']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA PANTALON:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['pantalon2']))?"is-invalid":"";?>" style="color:#848484"   name="pantalon2" value="<?php echo $pantalon2;?>" placeholder="" id="pantalon2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['pantalon2']))?$error['pantalon2']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CALZADO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['calzado2']))?"is-invalid":"";?>" style="color:#848484"   name="calzado2" value="<?php echo $calzado1;?>" placeholder="" id="calzado2" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['calzado2']))?$error['calzado2']:"";?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-center font-italic text-primary" style="font-size:18px;"> <b>HIJO 3:</b></p>
                                    </div> 
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">N°CEDULA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula3']))?"is-invalid":"";?>" style="color:#848484"   name="cedula3" value="<?php echo $cedula3;?>" placeholder="" id="cedula3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula3']))?$error['cedula3']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">NOMBRES (Hijo 3):</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['Hijo3']))?"is-invalid":"";?>" style="color:#848484"   name="Hijo3" value="<?php echo $Hijo3;?>" placeholder="" id="Hijo3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['Hijo3']))?$error['Hijo3']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">FECHA NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaNac3']))?"is-invalid":"";?>" style="color:#848484"   name="fechaNac3" value="<?php echo $fechaNac3;?>" placeholder="" id="fechaNac3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaNac3']))?$error['fechaNac3']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">EDAD:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['edad3']))?"is-invalid":"";?>" style="color:#848484"   name="edad3" value="<?php echo $edad3;?>" placeholder="" id="edad3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['edad3']))?$error['edad3']:"";?>
                                        </div>
                                    </div>
                                    <br>                                                                    
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">ESTUDIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['estudios3']))?"is-invalid":"";?>" style="color:#848484"   name="estudios3" value="<?php echo $estudios3;?>" placeholder="" id="estudios3" require="">>                                      
                                                <option value="PRE-ESCOLAR">PRE-ESCOLAR</option>
                                                <option value="PRIMARIA">PRIMARIA</option>
                                                <option value="SECUNDARIA"> SECUNDARIA</option>
                                                <option value="BACHILLERATO">BACHILLERATO</option>
                                                <option value="UNIVERSITARIO">UNIVERSITARIO</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estudios3']))?$error['estudios3']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TIPO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['tipo3']))?"is-invalid":"";?>" style="color:#848484"   name="tipo3" value="<?php echo $tipo3;?>" placeholder="" id="tipo3" require="">>                                               
                                                <option value="PUBLICA">PUBLICA</option>
                                                <option value="PRIVADA">PRIVADA</option>
                                                <option value="NINGUNA"> NINGUNA</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['tipo3']))?$error['tipo3']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombreInstitucion3']))?"is-invalid":"";?>" style="color:#848484"   name="nombreInstitucion3" value="<?php echo $nombreInstitucion3;?>" placeholder="" id="nombreInstitucion3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombreInstitucion3']))?$error['nombreInstitucion3']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">RIF INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['rif_institucion3']))?"is-invalid":"";?>" style="color:#848484"   name="rif_institucion3" value="<?php echo $rif_institucion3;?>" placeholder="" id="rif_institucion3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['rif_institucion3']))?$error['rif_institucion3']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> NIVEL DE ESTUDIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nivelEstudios3']))?"is-invalid":"";?>" style="color:#848484"   name="nivelEstudios3" value="<?php echo $nivelEstudios3;?>" placeholder="" id="nivelEstudios3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nivelEstudios3']))?$error['nivelEstudios3']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CAMISA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['talla3']))?"is-invalid":"";?>" style="color:#848484"   name="talla3" value="<?php echo $talla3;?>" placeholder="" id="talla3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['talla3']))?$error['talla3']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA PANTALON:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['pantalon3']))?"is-invalid":"";?>" style="color:#848484"   name="pantalon3" value="<?php echo $pantalon3;?>" placeholder="" id="pantalon3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['pantalon3']))?$error['pantalon3']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CALZADO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['calzado3']))?"is-invalid":"";?>" style="color:#848484"   name="calzado3" value="<?php echo $calzado3;?>" placeholder="" id="calzado3" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['calzado3']))?$error['calzado3']:"";?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-center font-italic text-primary" style="font-size:18px;"> <b>HIJO 4:</b></p>
                                    </div> 
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">N°CEDULA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula4']))?"is-invalid":"";?>" style="color:#848484"   name="cedula4" value="<?php echo $cedula4;?>" placeholder="" id="cedula4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula4']))?$error['cedula4']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">NOMBRES (Hijo 4):</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['Hijo4']))?"is-invalid":"";?>" style="color:#848484"   name="Hijo4" value="<?php echo $Hijo4;?>" placeholder="" id="Hijo4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['Hijo4']))?$error['Hijo4']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">FECHA NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaNac4']))?"is-invalid":"";?>" style="color:#848484"   name="fechaNac4" value="<?php echo $fechaNac4;?>" placeholder="" id="fechaNac4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaNac4']))?$error['fechaNac4']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">EDAD:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['edad4']))?"is-invalid":"";?>" style="color:#848484"   name="edad4" value="<?php echo $edad4;?>" placeholder="" id="edad4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['edad4']))?$error['edad4']:"";?>
                                        </div>
                                    </div>
                                    <br>                                                                    
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">ESTUDIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['estudios4']))?"is-invalid":"";?>" style="color:#848484"   name="estudios4" value="<?php echo $estudios4;?>" placeholder="" id="estudios4" require="">>                                      
                                                <option value="PRE-ESCOLAR">PRE-ESCOLAR</option>
                                                <option value="PRIMARIA">PRIMARIA</option>
                                                <option value="SECUNDARIA"> SECUNDARIA</option>
                                                <option value="BACHILLERATO">BACHILLERATO</option>
                                                <option value="UNIVERSITARIO">UNIVERSITARIO</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estudios4']))?$error['estudios4']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TIPO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['tipo4']))?"is-invalid":"";?>" style="color:#848484"   name="tipo4" value="<?php echo $tipo4;?>" placeholder="" id="tipo4" require="">>                                               
                                                <option value="PUBLICA">PUBLICA</option>
                                                <option value="PRIVADA">PRIVADA</option>
                                                <option value="NINGUNA"> NINGUNA</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['tipo4']))?$error['tipo4']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombreInstitucion4']))?"is-invalid":"";?>" style="color:#848484"   name="nombreInstitucion4" value="<?php echo $nombreInstitucion4;?>" placeholder="" id="nombreInstitucion4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombreInstitucion4']))?$error['nombreInstitucion4']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">RIF INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['rif_institucion4']))?"is-invalid":"";?>" style="color:#848484"   name="rif_institucion4" value="<?php echo $rif_institucion4;?>" placeholder="" id="rif_institucion4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['rif_institucion4']))?$error['rif_institucion4']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> NIVEL DE ESTUDIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nivelEstudios4']))?"is-invalid":"";?>" style="color:#848484"   name="nivelEstudios4" value="<?php echo $nivelEstudios4;?>" placeholder="" id="nivelEstudios4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nivelEstudios4']))?$error['nivelEstudios4']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CAMISA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['talla4']))?"is-invalid":"";?>" style="color:#848484"   name="talla4" value="<?php echo $talla4;?>" placeholder="" id="talla4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['talla4']))?$error['talla4']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA PANTALON:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['pantalon4']))?"is-invalid":"";?>" style="color:#848484"   name="pantalon4" value="<?php echo $pantalon4;?>" placeholder="" id="pantalon4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['pantalon4']))?$error['pantalon4']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CALZADO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['calzado4']))?"is-invalid":"";?>" style="color:#848484"   name="calzado4" value="<?php echo $calzado4;?>" placeholder="" id="calzado4" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['calzado4']))?$error['calzado4']:"";?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-center font-italic text-primary" style="font-size:18px;"> <b>HIJO 5:</b></p>
                                    </div> 
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">N°CEDULA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula5']))?"is-invalid":"";?>" style="color:#848484"   name="cedula5" value="<?php echo $cedula5;?>" placeholder="" id="cedula5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula5']))?$error['cedula5']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">NOMBRES (Hijo 5):</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['Hijo5']))?"is-invalid":"";?>" style="color:#848484"   name="Hijo5" value="<?php echo $Hijo5;?>" placeholder="" id="Hijo5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['Hijo5']))?$error['Hijo5']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">FECHA NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaNac5']))?"is-invalid":"";?>" style="color:#848484"   name="fechaNac5" value="<?php echo $fechaNac5;?>" placeholder="" id="fechaNac5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaNac5']))?$error['fechaNac5']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">EDAD:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['edad5']))?"is-invalid":"";?>" style="color:#848484"   name="edad5" value="<?php echo $edad5;?>" placeholder="" id="edad5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['edad5']))?$error['edad5']:"";?>
                                        </div>
                                    </div>
                                    <br>                                                                    
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">ESTUDIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['estudios5']))?"is-invalid":"";?>" style="color:#848484"   name="estudios5" value="<?php echo $estudios5;?>" placeholder="" id="estudios5" require="">>                                      
                                                <option value="PRE-ESCOLAR">PRE-ESCOLAR</option>
                                                <option value="PRIMARIA">PRIMARIA</option>
                                                <option value="SECUNDARIA"> SECUNDARIA</option>
                                                <option value="BACHILLERATO">BACHILLERATO</option>
                                                <option value="UNIVERSITARIO">UNIVERSITARIO</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estudios5']))?$error['estudios5']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TIPO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['tipo5']))?"is-invalid":"";?>" style="color:#848484"   name="tipo5" value="<?php echo $tipo5;?>" placeholder="" id="tipo5" require="">>                                               
                                                <option value="PUBLICA">PUBLICA</option>
                                                <option value="PRIVADA">PRIVADA</option>
                                                <option value="NINGUNA"> NINGUNA</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['tipo5']))?$error['tipo5']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombreInstitucion5']))?"is-invalid":"";?>" style="color:#848484"   name="nombreInstitucion5" value="<?php echo $nombreInstitucion5;?>" placeholder="" id="nombreInstitucion5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombreInstitucion5']))?$error['nombreInstitucion5']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">RIF INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['rif_institucion5']))?"is-invalid":"";?>" style="color:#848484"   name="rif_institucion5" value="<?php echo $rif_institucion5;?>" placeholder="" id="rif_institucion5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['rif_institucion5']))?$error['rif_institucion5']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> NIVEL DE ESTUDIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nivelEstudios5']))?"is-invalid":"";?>" style="color:#848484"   name="nivelEstudios5" value="<?php echo $nivelEstudios5;?>" placeholder="" id="nivelEstudios5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nivelEstudios5']))?$error['nivelEstudios5']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CAMISA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['talla5']))?"is-invalid":"";?>" style="color:#848484"   name="talla5" value="<?php echo $talla5;?>" placeholder="" id="talla5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['talla5']))?$error['talla5']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA PANTALON:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['pantalon5']))?"is-invalid":"";?>" style="color:#848484"   name="pantalon5" value="<?php echo $pantalon5;?>" placeholder="" id="pantalon5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['pantalon5']))?$error['pantalon5']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CALZADO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['calzado5']))?"is-invalid":"";?>" style="color:#848484"   name="calzado5" value="<?php echo $calzado5;?>" placeholder="" id="calzado5" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['calzado5']))?$error['calzado5']:"";?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-center font-italic text-primary" style="font-size:18px;"> <b>HIJO 6:</b></p>
                                    </div> 
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">N°CEDULA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula6']))?"is-invalid":"";?>" style="color:#848484"   name="cedula6" value="<?php echo $cedula6;?>" placeholder="" id="cedula6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula6']))?$error['cedula6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">NOMBRES (Hijo 6):</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['Hijo6']))?"is-invalid":"";?>" style="color:#848484"   name="Hijo6" value="<?php echo $Hijo6;?>" placeholder="" id="Hijo6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['Hijo6']))?$error['Hijo6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">FECHA NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaNac6']))?"is-invalid":"";?>" style="color:#848484"   name="fechaNac6" value="<?php echo $fechaNac6;?>" placeholder="" id="fechaNac6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaNac6']))?$error['fechaNac6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">EDAD:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['edad6']))?"is-invalid":"";?>" style="color:#848484"   name="edad6" value="<?php echo $edad6;?>" placeholder="" id="edad6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['edad6']))?$error['edad6']:"";?>
                                        </div>
                                    </div>
                                    <br>                                                                    
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">ESTUDIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['estudios6']))?"is-invalid":"";?>" style="color:#848484"   name="estudios6" value="<?php echo $estudios6;?>" placeholder="" id="estudios6" require="">>                                      
                                                <option value="PRE-ESCOLAR">PRE-ESCOLAR</option>
                                                <option value="PRIMARIA">PRIMARIA</option>
                                                <option value="SECUNDARIA"> SECUNDARIA</option>
                                                <option value="BACHILLERATO">BACHILLERATO</option>
                                                <option value="UNIVERSITARIO">UNIVERSITARIO</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estudios6']))?$error['estudios6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TIPO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['tipo6']))?"is-invalid":"";?>" style="color:#848484"   name="tipo6" value="<?php echo $tipo6;?>" placeholder="" id="tipo6" require="">>                                               
                                                <option value="PUBLICA">PUBLICA</option>
                                                <option value="PRIVADA">PRIVADA</option>
                                                <option value="NINGUNA"> NINGUNA</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['tipo6']))?$error['tipo6']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombreInstitucion6']))?"is-invalid":"";?>" style="color:#848484"   name="nombreInstitucion6" value="<?php echo $nombreInstitucion6;?>" placeholder="" id="nombreInstitucion6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombreInstitucion6']))?$error['nombreInstitucion6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-2">
                                        <b><label for="" style="color:#3B0B17;font-size:14px">RIF INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['rif_institucion6']))?"is-invalid":"";?>" style="color:#848484"   name="rif_institucion6" value="<?php echo $rif_institucion6;?>" placeholder="" id="rif_institucion6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['rif_institucion6']))?$error['rif_institucion6']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> NIVEL DE ESTUDIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nivelEstudios6']))?"is-invalid":"";?>" style="color:#848484"   name="nivelEstudios6" value="<?php echo $nivelEstudios6;?>" placeholder="" id="nivelEstudios6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nivelEstudios6']))?$error['nivelEstudios6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CAMISA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['talla6']))?"is-invalid":"";?>" style="color:#848484"   name="talla6" value="<?php echo $talla6;?>" placeholder="" id="talla6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['talla6']))?$error['talla6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA PANTALON:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['pantalon6']))?"is-invalid":"";?>" style="color:#848484"   name="pantalon6" value="<?php echo $pantalon6;?>" placeholder="" id="pantalon6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['pantalon6']))?$error['pantalon6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17;font-size:14px"> TALLA CALZADO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['calzado6']))?"is-invalid":"";?>" style="color:#848484"   name="calzado6" value="<?php echo $calzado6;?>" placeholder="" id="calzado6" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['calzado6']))?$error['calzado6']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                </div>
                                
                            </div>           
                            <div class="modal-footer"style="background:#2E2E2E">
                                <button value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                                <button value="btnModificar"<?php echo $accionModificar;?> class="btn btn-warning" type="submit" name="accion">Modificar</button>
                                <button value="btnEliminar" onclick="return Confirmar('Realmente desea Eliminar este Registro?');" <?php echo $accionEliminar;?> class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                                <button value="btnCancelar" <?php echo $accionCancelar;?> class="btn btn-primary" type="submit" name="accion">Cancelar</button> 
                            </div>
                        

                        </div>
                    </div>    
                </div>    
        </form>
    </div>   
     
    <div class="container-fluid caja ">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">              
                        <table id="tabladatosAnexos" class="table table-bordered table condensed table-hover table display example compact stripe" cellspacing="0" width="100%">
                            <thead class=" text-center" style="color:#000000; font-size: 80%; background-color:rgb(0,155,193)">
                                <tr>
                                
                                    
                                    <th>CEDULA</th>
                                    <th>NOMBRES</th>                                  
                                    <th>TALLA CAMISA</th>
                                    <th>TALLA PANTALON</th>
                                    <th>TALLA CALZADO</th>
                                    <th>N° HIJOS</th>
                                    <th>HIJO 1 NOMBRES</th>
                                    <th>CEDULA</th>
                                    <th>FECHA NAC.</th>
                                    <th>EDAD</th>
                                    <th>ESTUDIOS</th>
                                    <th>TIPO</th>
                                    <th>INSTITUCION</th>
                                    <th>RIF INSTITUCION</th>
                                    <th>NIVEL ESTUDIOS</th>
                                    <th>T.CAMISA</th>
                                    <th>T.PANTALON</th>
                                    <th>T.CALZADO</th>
                                    <th>HIJO 2 NOMBRES</th>
                                    <th>CEDULA</th>
                                    <th>FECHA NAC.</th>
                                    <th>EDAD</th>
                                    <th>ESTUDIOS</th>
                                    <th>TIPO</th>
                                    <th>INSTITUCION</th>
                                    <th>RIF INSTITUCION</th>
                                    <th>NIVEL ESTUDIOS</th>
                                    <th>T.CAMISA</th>
                                    <th>T.PANTALON</th>
                                    <th>T.CALZADO</th>
                                    <th>HIJO 3 NOMBRES</th>
                                    <th>CEDULA</th>
                                    <th>FECHA NAC.</th>
                                    <th>EDAD</th>
                                    <th>ESTUDIOS</th>
                                    <th>TIPO</th>
                                    <th>INSTITUCION</th>
                                    <th>RIF INSTITUCION</th>
                                    <th>NIVEL ESTUDIOS</th>
                                    <th>T.CAMISA</th>
                                    <th>T.PANTALON</th>
                                    <th>T.CALZADO</th>
                                    <th>HIJO 4 NOMBRES</th>
                                    <th>CEDULA</th>
                                    <th>FECHA NAC.</th>
                                    <th>EDAD</th>
                                    <th>ESTUDIOS</th>
                                    <th>TIPO</th>
                                    <th>INSTITUCION</th>
                                    <th>RIF INSTITUCION</th>
                                    <th>NIVEL ESTUDIOS</th>
                                    <th>T.CAMISA</th>
                                    <th>T.PANTALON</th>
                                    <th>T.CALZADO</th>
                                    <th>HIJO 5 NOMBRES</th>
                                    <th>CEDULA</th>
                                    <th>FECHA NAC.</th>
                                    <th>EDAD</th>
                                    <th>ESTUDIOS</th>
                                    <th>TIPO</th>
                                    <th>INSTITUCION</th>
                                    <th>RIF INSTITUCION</th>
                                    <th>NIVEL ESTUDIOS</th>
                                    <th>T.CAMISA</th>
                                    <th>T.PANTALON</th>
                                    <th>T.CALZADO</th>
                                    <th>HIJO 6 NOMBRES</th>
                                    <th>CEDULA</th>
                                    <th>FECHA NAC.</th>
                                    <th>EDAD</th>
                                    <th>ESTUDIOS</th>
                                    <th>TIPO</th>
                                    <th>INSTITUCION</th>
                                    <th>RIF INSTITUCION</th>
                                    <th>NIVEL ESTUDIOS</th>
                                    <th>T.CAMISA</th>
                                    <th>T.PANTALON</th>
                                    <th>T.CALZADO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                                <?php foreach($listardatosanexos AS $Danexos){?>

                                <tr>
                        
                                   
                                    <td><?php echo $Danexos['cedula_bene'];?></td>
                                    <td><?php echo $Danexos['nombres_bene'];?></td>                                   
                                    <td><?php echo $Danexos['talla0'];?></td>
                                    <td><?php echo $Danexos['pantalon0'];?></td>
                                    <td><?php echo $Danexos['calzado0'];?></td>                                  
                                    <td><?php echo $Danexos['nroHijos'];?></td>
                                    <td><?php echo $Danexos['Hijo1'];?></td>
                                    <td><?php echo $Danexos['cedula1'];?></td>
                                    <td><?php echo $Danexos['fechaNac1'];?></td>
                                    <td><?php echo $Danexos['edad1'];?></td>
                                    <td><?php echo $Danexos['estudios1'];?></td>
                                    <td><?php echo $Danexos['tipo1'];?></td>
                                    <td><?php echo $Danexos['nombreInstitucion1'];?></td>
                                    <td><?php echo $Danexos['rif_institucion1'];?></td>
                                    <td><?php echo $Danexos['nivelEstudios1'];?></td>
                                    <td><?php echo $Danexos['talla1'];?></td>
                                    <td><?php echo $Danexos['pantalon1'];?></td>
                                    <td><?php echo $Danexos['calzado1'];?></td>
                                    <td><?php echo $Danexos['Hijo2'];?></td>
                                    <td><?php echo $Danexos['cedula2'];?></td>
                                    <td><?php echo $Danexos['fechaNac2'];?></td>
                                    <td><?php echo $Danexos['edad2'];?></td>
                                    <td><?php echo $Danexos['estudios2'];?></td>
                                    <td><?php echo $Danexos['tipo2'];?></td>
                                    <td><?php echo $Danexos['nombreInstitucion2'];?></td>
                                    <td><?php echo $Danexos['rif_institucion2'];?></td>
                                    <td><?php echo $Danexos['nivelEstudios2'];?></td>
                                    <td><?php echo $Danexos['talla2'];?></td>
                                    <td><?php echo $Danexos['pantalon2'];?></td>
                                    <td><?php echo $Danexos['calzado2'];?></td>
                                    <td><?php echo $Danexos['Hijo3'];?></td>
                                    <td><?php echo $Danexos['cedula3'];?></td>
                                    <td><?php echo $Danexos['fechaNac3'];?></td>
                                    <td><?php echo $Danexos['edad3'];?></td>
                                    <td><?php echo $Danexos['estudios3'];?></td>
                                    <td><?php echo $Danexos['tipo3'];?></td>
                                    <td><?php echo $Danexos['nombreInstitucion3'];?></td>
                                    <td><?php echo $Danexos['rif_institucion3'];?></td>
                                    <td><?php echo $Danexos['nivelEstudios3'];?></td>
                                    <td><?php echo $Danexos['talla3'];?></td>
                                    <td><?php echo $Danexos['pantalon3'];?></td>
                                    <td><?php echo $Danexos['calzado3'];?></td>
                                    <td><?php echo $Danexos['Hijo4'];?></td>
                                    <td><?php echo $Danexos['cedula4'];?></td>
                                    <td><?php echo $Danexos['fechaNac4'];?></td>
                                    <td><?php echo $Danexos['edad4'];?></td>
                                    <td><?php echo $Danexos['estudios4'];?></td>
                                    <td><?php echo $Danexos['tipo4'];?></td>
                                    <td><?php echo $Danexos['nombreInstitucion4'];?></td>
                                    <td><?php echo $Danexos['rif_institucion4'];?></td>
                                    <td><?php echo $Danexos['nivelEstudios4'];?></td>
                                    <td><?php echo $Danexos['talla4'];?></td>
                                    <td><?php echo $Danexos['pantalon4'];?></td>
                                    <td><?php echo $Danexos['calzado4'];?></td>
                                    <td><?php echo $Danexos['Hijo5'];?></td>
                                    <td><?php echo $Danexos['cedula5'];?></td>
                                    <td><?php echo $Danexos['fechaNac5'];?></td>
                                    <td><?php echo $Danexos['edad5'];?></td>
                                    <td><?php echo $Danexos['estudios5'];?></td>
                                    <td><?php echo $Danexos['tipo5'];?></td>
                                    <td><?php echo $Danexos['nombreInstitucion5'];?></td>
                                    <td><?php echo $Danexos['rif_institucion5'];?></td>
                                    <td><?php echo $Danexos['nivelEstudios5'];?></td>
                                    <td><?php echo $Danexos['talla5'];?></td>
                                    <td><?php echo $Danexos['pantalon5'];?></td>
                                    <td><?php echo $Danexos['calzado5'];?></td>
                                    <td><?php echo $Danexos['Hijo6'];?></td>
                                    <td><?php echo $Danexos['cedula6'];?></td>
                                    <td><?php echo $Danexos['fechaNac6'];?></td>
                                    <td><?php echo $Danexos['edad6'];?></td>
                                    <td><?php echo $Danexos['estudios6'];?></td>
                                    <td><?php echo $Danexos['tipo6'];?></td>
                                    <td><?php echo $Danexos['nombreInstitucion6'];?></td>
                                    <td><?php echo $Danexos['rif_institucion6'];?></td>
                                    <td><?php echo $Danexos['nivelEstudios6'];?></td>
                                    <td><?php echo $Danexos['talla6'];?></td>
                                    <td><?php echo $Danexos['pantalon6'];?></td>
                                    <td><?php echo $Danexos['calzado6'];?></td>

                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $Danexos['id'];?>">                      
                                            <button type="submit" value="Seleccionar" class="btn btn-warning" name="accion"><span class="badge badge-info"> Editar - Eliminar</span>
                                            <!--<button value="btnEliminar" id="btnEliminar"  type="submit" class="btn btn-danger" name="accion"> Eliminar </button>-->
                                        </form>                     
                                    </td>                          
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
        
        
    <!---- SCRIPT DE JQUERY PARA MOSTRAL EL MODAL ---->   
        
        <?php if($mostrarModal){?>
        <script>
            $('#exampleModal').modal('show');
        </script>
        <?php } ?>
          
    <!----- FUNCION JAVASCRIPT PARA LA CONFIRMACION DEL MENSAJE EN LA VALIDACION DE LOS CAMPOS DEL LADO DEL SERVIDOR --->

        <script>
        function Confirmar(Mensaje){
            return (confirm(Mensaje))?true:false;
            }
        </script>

    <!------ SCRIPT DE JQUERY PARA EL FUNCIONAMIENTO DEL DATATABLE Y EL CAMBIO DEL EDIOMA A ESPAÑOL ------>
    
    <script>
               $(document).ready(function() { 
    
                tabladatosAnexos = $('#tabladatosAnexos').DataTable({   
             
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
                    
               
            ],
    
                    
                });
            });
                   
            </script>

</body>
</html>