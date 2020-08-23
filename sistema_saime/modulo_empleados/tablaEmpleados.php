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

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!--<link rel="shortcut icon" href="#" />-->  
   
            <title>EMPLEADOS SAIME CARUPANO</title>
        
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

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:rgb(0,113,170)">

            <!---///////// LOGO 1 ///////////------->

        <img src="../lib/img/empleado1.jpg" class="logoEmpleados">

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
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="informacionEmpleados1.php">Informacion del Empleados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="tabladatosAnexos.php">Datos Anexos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="informacionAcademica.php">Informacion Academica</a>
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
                    <img src="../lib/img/titulotablaEmpleados.png"> 
                </li>
            </ul>
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/empleado2.jpg" class="logoEmpleados">
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
                            <div class="modal-header font-weight-bold img-thumbnail" style="background:#FF0040";><img src="../lib/img/empleados2.jpg" class="logoEmpleados">&nbsp&nbsp &nbsp
                                    <h5 class="modal-title"style="color:rgb(255,255,255)" id="exampleModalLabel">EMPLEADOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <input type="hidden" required name="id" value="<?php echo $id;?>" placeholder="" id="id" require="">
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for=""style="color:#3B0B17">CEDULA:</label></b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula_emp']))?"is-invalid":"";?>" style="color:#848484" required name="cedula_emp" value="<?php echo $cedula_emp;?>" placeholder="" id="cedula_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula_emp']))?$error['cedula_emp']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17">NOMBRES:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombres_emp']))?"is-invalid":"";?>"style="color:#848484"  required name="nombres_emp" value="<?php echo $nombres_emp;?>" placeholder="" id="nombres_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombres_emp']))?$error['nombres_emp']:"";?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <b><label for=""style="color:#3B0B17">RIF:</label></b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['rif_emp']))?"is-invalid":"";?>" style="color:#848484" required name="rif_emp" value="<?php echo $rif_emp;?>" placeholder="" id="rif_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['rif_emp']))?$error['rif_emp']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> SEXO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['sexo_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="sexo_emp" value="<?php echo $sexo_emp;?>" placeholder="" id="sexo_emp" require="">>
                                                <option value="MASCULINO">MASCULINO</option>
                                                <option value="FEMENINO">FEMENINO</option>                          									
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['sexo_emp']))?$error['sexo_emp']:"";?>
                                        </div>                                            
                                    </div>
                                   
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">CODIGO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['codigo_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="codigo_emp" value="<?php echo $codigo_emp;?>" placeholder="" id="codigo_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['codigo_emp']))?$error['codigo_emp']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">OFICINA SEDE:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['sede_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="sede_emp" value="<?php echo $sede_emp;?>" placeholder="" id="sede_emp" require="">>
                                                
                                                <option value="OF-128 TRAILER CARUPANO">OF 128 TRAILER</option>
                                                <option value="OF-29 CARUPANO">OF 29 CARUPANO </option>
                                                <option value="MIGRACION CARUPANO">MIGRACION CARUPANO </option>
                                                <option value="PUNTO CONTROL CHACOPATA">PUNTO CONTROL CHACOPATA </option>
                                                <option value="OF-119 GUIRIA">OF 119 GUIRIA</option>
                                                <option value="MIGRACION GUIRIA">MIGRACION GUIRIA </option>
                                            </select>
                                        
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['sede_emp']))?$error['sede_emp']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> CARGO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['cargo_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="cargo_emp" value="<?php echo $cargo_emp;?>" placeholder="" id="cargo_emp" require="">>
                                                
                                                <option value="OBRERO">OBRERO</option>
                                                <option value="BACHILLER 1">BACHILLER I </option>
                                                <option value="BACHILLER 2"> BACHILLER II </option>
                                                <option value="BACHILLER 3">BACHILLER III   </option>
                                                <option value="TECNICO 1">TECNICO I</option>
                                                <option value="TECNICO 2">TECNICO II</option>
                                                <option value="TECNICO 3">TECNICO III</option>
                                                <option value="PROFESIONAL 1">PROFESIONAL I</option>
                                                <option value="PROFESIONAL 2">PROFESIONAL II </option>
                                                <option value="PROFESIONAL 3">PROFESIONAL III </option>
                                                <option value="CHOFER">CHOFER </option>
                                                <option value="JEFE DE OFICINA">JEFE DE OFICINA </option>
                                                <option value="OTRO">OTRO </option>
                                                
                                        </select>

                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cargo_emp']))?$error['cargo_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> PUESTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['puesto_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="puesto_emp" value="<?php echo $puesto_emp;?>" placeholder="" id="puesto_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['puesto_emp']))?$error['puesto_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> CONDICION:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['condicion_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="condicion_emp" value="<?php echo $condicion_emp;?>" placeholder="" id="condicion_emp" require="">>
                                                <option value="FIJO">FIJO</option>
                                                <option value="CONTRATADO">CONTRATADO</option>
                                                <option value="COMISION SERVICIO">COMISION SERVICIO</option>
                                                <option value="JUBILADO">JUBILADO</option>									
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['condicion_emp']))?$error['condicion_emp']:"";?>
                                        </div>                                            
                                    </div>                                  
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> FECHA NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaNAC_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="fechaNAC_emp" value="<?php echo $fechaNAC_emp;?>" placeholder="" id="fechaNAC_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaNAC_emp']))?$error['fechaNAC_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> FECHA INGRESO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaING_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="fechaING_emp" value="<?php echo $fechaING_emp;?>" placeholder="" id="fechaING_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaING_emp']))?$error['fechaING_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>   
                                    <br>          
                                    <div class="form-group col-md-6">
                                        <label for="" style="color:#3B0B17"><b>NACIMIENTO:</b></label> 
                                        <input type="text" class="font-weight-bold   col-md-2<?php echo (isset($error['nacimientoDIA_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="nacimientoDIA_emp" value="<?php echo $nacimientoDIA_emp;?>" placeholder="DIA" id="nacimientoDIA_emp" require="">                                      
                                        <input type="text" class="font-weight-bold   col-md-2<?php echo (isset($error['nacimientoMES_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="nacimientoMES_emp" value="<?php echo $nacimientoMES_emp;?>" placeholder="MES" id="nacimientoMES_emp" require="">
                                        <input type="text" class="font-weight-bold   col-md-3<?php echo (isset($error['nacimientoANIO_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="nacimientoANIO_emp" value="<?php echo $nacimientoANIO_emp;?>" placeholder="AÑO" id="nacimientoANIO_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nacimientoDIA_emp']))?$error['nacimientoDIA_emp']:"";?>
                                            <?php echo (isset($error['nacimientoMES_emp']))?$error['nacimientoMES_emp']:"";?>
                                            <?php echo (isset($error['nacimientoANIO_emp']))?$error['nacimientoANIO_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                       <?php 
                                       
                                            $diactual = date('d');
                                            $mesactual = date('m');
                                            $anioactual =date('Y');
                            
                                            $edad_emp = $anioactual - $empleados['nacimientoANIO_emp'];                                                                               
                                            
                                            if($mesactual < $empleados['nacimientoMES_emp']){
                                                $edad_emp--;
                                            }
            
                                            elseif($mesactual == $empleados['nacimientoMES_emp']){
                                                if($diactual < $empleados['nacimientoDIA_emp']){
                                                    $edad_emp--;
                                                }
                                            }
                                       ?>
                                    <input type="hidden" required name="edad_emp" value="<?php echo $edad_emp;?>" placeholder="" id="edad_emp" require="">
                                    <br>
                                    <div class="form-group col-md-6">
                                        <b><label for="" style="color:#3B0B17">INGRESO:</label> </b>
                                        <input type="text" class="font-weight-bold   col-md-2<?php echo (isset($error['ingresoDIA_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="ingresoDIA_emp" value="<?php echo $ingresoDIA_emp;?>" placeholder="DIA" id="ingresoDIA_emp" require="">
                                        <input type="text" class="font-weight-bold   col-md-2<?php echo (isset($error['ingresoMES_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="ingresoMES_emp" value="<?php echo $ingresoMES_emp;?>" placeholder="MES" id="ingresoMES_emp" require="">
                                        <input type="text" class="font-weight-bold   col-md-3<?php echo (isset($error['ingresoANIO_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="ingresoANIO_emp" value="<?php echo $ingresoANIO_emp;?>" placeholder="AÑO" id="ingresoANIO_emp" require="">                                                                            
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['ingresoDIA_emp']))?$error['ingresoDIA_emp']:"";?>
                                            <?php echo (isset($error['ingresoMES_emp']))?$error['ingresoMES_emp']:"";?>
                                            <?php echo (isset($error['ingresoANIO_emp']))?$error['ingresoANIO_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <?php 
                                       
                                            $diactual = date('d');
                                            $mesactual = date('m');
                                            $anioactual =date('Y');
                            
                                            $tiempoSERV_emp = $anioactual - $empleados['ingresoANIO_emp'];                                                                               
                                            
                                            if($mesactual < $empleados['ingresoMES_emp']){
                                                $tiempoSERV_emp--;
                                            }
            
                                            elseif($mesactual == $empleados['ingresoMES_emp']){
                                                if($diactual < $empleados['ingresoDIA_emp']){
                                                    $tiempoSERV_emp--;
                                                }
                                            }
                                       ?>
                                    <input type="hidden" required name="tiempoSERV_emp" value="<?php echo $tiempoSERV_emp;?>" placeholder="" id="tiempoSERV_emp" require="">
                                    <br>                                
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17"> ESTATUS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['estatus_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="estatus_emp" value="<?php echo $estatus_emp;?>" placeholder="" id="estatus_emp" require="">> 
                                                <option value="ACTIVO">ACTIVO</option>
                                                <option value="SUSPENDIDO">SUSPENDIDO</option>
                                                <option value="REPOSO PRE-POST">REPOSO PRE-POST</option>
                                                <option value="REPOSO MEDICO">REPOSO MEDICO</option>
                                                <option value="VACACIONES">VACACIONES</option>
                                                <option value="ANO SABATICO">AÑO SABATICO</option>
                                                <option value="JUBILADO">JUBILADO</option>
                                                                        
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estatus_emp']))?$error['estatus_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-5">
                                        <b><label for="" style="color:#3B0B17"> E-MAIL:</label> </b>
                                        <input type="mail" class="font-weight-bold form-control <?php echo (isset($error['correo_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="correo_emp" value="<?php echo $correo_emp;?>" placeholder="" id="correo_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['correo_emp']))?$error['correo_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    
                                    
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17"> TELEFONO:</label></b>
                                        <b><input type="mail" class="font-weight-bold form-control <?php echo (isset($error['telefono_emp']))?"is-invalid":"";?>"style="color:#848484" required  name="telefono_emp" value="<?php echo $telefono_emp;?>" placeholder="" id="telefono_emp" require=""></b>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['telefono_emp']))?$error['telefono_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17"> DIRECCION:</label> </b>
                                        <input type="mail" class="font-weight-bold form-control <?php echo (isset($error['direccion_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="direccion_emp" value="<?php echo $direccion_emp;?>" placeholder="" id="direccion_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['direccion_emp']))?$error['direccion_emp']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">CONYUGE(Pareja):</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['conyuge_emp']))?"is-invalid":"";?>" style="color:#848484" required  name="conyuge_emp" value="<?php echo $conyuge_emp;?>" placeholder="" id="conyuge_emp" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['conyuge_emp']))?$error['conyuge_emp']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">FOTO:</label> </b>
                                        <?php if($foto_emp!=""){ ?> 
                                        
                                        <img class="img-thumbnail rounded mx-auto d-block" width="100px"  src="imagenes/imagenesEmpleados/<?php echo $foto_emp;?>"/>   
                                        
                                        
                                        <?php } ?>


                                        <input type="file" accept="image/*" class="font-weight-bold form-control"style="color:#FF0040" name="foto_emp" value="<?php echo $foto_emp;?>"  placeholder="" id="foto_emp" require="">
                                    </div>
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
                        <table id="tablaEmpleados" class="table table-bordered table condensed table-hover table display example compact stripe" cellspacing="0" width="100%">
                            <thead class=" text-center" style="color:#FFFFFF; font-size: 80%; background-color: rgb(226,30,72)">
                                <tr>
                                
                                    <th>FOTO</th>
                                    <th>CEDULA</th>
                                    <th>RIF</th>
                                    <th>NOMBRES</th>
                                    <th>SEXO:</th>
                                    <th>CODIGO:</th>
                                    <th>SEDE:</th>
                                    <th>CARGO:</th>
                                    <th>PUESTO:</th>
                                    <th>CONDICION:</th>
                                    <th>ESTATUS:</th>
                                    <th>NACIMIENTO:</th>
                                    <th>INGRESO:</th>
                                    <th>CORREO:</th>
                                    <th>EDAD:</th>
                                    <th>AÑO SERVICIOS:</th>
                                    <th>TELEFONO:</th>                                   
                                    <th>DIRECCION:</th>
                                    <th>CONYUGE:</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            
                                <?php foreach($listarEmpleados AS $empleados){?>

                                <tr>
                        
                                    <td><img  width="70px"  height="70px" src="imagenes/imagenesEmpleados/<?php echo $empleados['foto_emp']; ?>" /></td>
                                    <td><?php echo $empleados['cedula_emp'];?></td>
                                    <td><?php echo $empleados['rif_emp'];?></td>
                                    <td><?php echo $empleados['nombres_emp'];?></td>
                                    <td><?php echo $empleados['sexo_emp'];?></td>
                                    <td><?php echo $empleados['codigo_emp'];?></td>
                                    <td><?php echo $empleados['sede_emp'];?></td>
                                    <td><?php echo $empleados['cargo_emp'];?></td>
                                    <td><?php echo $empleados['puesto_emp'];?></td>
                                    <td><?php echo $empleados['condicion_emp'];?></td>
                                    <td><?php echo $empleados['estatus_emp'];?></td>
                                    <td><?php echo $empleados['fechaNAC_emp'];?></td>
                                    <td><?php echo $empleados['fechaING_emp'];?></td>
                                    <td><?php echo $empleados['correo_emp'];?></td>                                 
                                    <td><?php 
                                            $diactual = date('d');
                                            $mesactual = date('m');
                                            $anioactual =date('Y');
                            
                                            $edad_emp = $anioactual - $empleados['nacimientoANIO_emp'];                                                                               
                                            
                                            if($mesactual < $empleados['nacimientoMES_emp']){
                                                $edad_emp--;
                                            }
            
                                            elseif($mesactual == $empleados['nacimientoMES_emp']){
                                                if($diactual < $empleados['nacimientoDIA_emp']){
                                                    $edad_emp--;
                                                }
                                            }

                                            if($edad_emp == $anioactual){
                                                $edad_emp = '<div class="alert alert-info" role="alert">
                                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                <span class="sr-only">Error:</span>
                                                <b>DEBE INTRODUCIR LA FECHA DE NACIMIENTO !!!."</b>
                                              </div>';

                                            }

                                            echo $edad_emp; 
                                            
                                          ?>                                                  
                                    </td>                                                                                     
                                    <td><?php                                     
                                            $diactual = date('d');
                                            $mesactual = date('m');
                                            $anioactual =date('Y');
                            
                                            $tiempoSERV_emp = $anioactual - $empleados['ingresoANIO_emp'];
                                            
                                            if($mesactual < $empleados['ingresoMES_emp']){
                                                $tiempoSERV_emp--;
                                            }
            
                                            elseif($mesactual == $empleados['ingresoMES_emp']){
                                                if($diactual < $empleados['ingresoDIA_emp']){
                                                    $tiempoSERV_emp--;
                                                }
                                            }

                                            if($tiempoSERV_emp == $anioactual){
                                                
                                                
                                                    $tiempoSERV_emp = '<div class="alert alert-info" role="alert">
                                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                    <span class="sr-only">Error:</span>
                                                    <b>DEBE INTRODUCIR LA FECHA DE INGRESO AL "SAIME !!!."</b>
                                                  </div>';
                                                
                                            }

                                            echo $tiempoSERV_emp; 

                                            ?>                                           
                                    </td>                                                           
                                    <td><?php echo $empleados['telefono_emp'];?></td>
                                    <td><?php echo $empleados['direccion_emp'];?></td>
                                    <td><?php echo $empleados['conyuge_emp'];?></td>


                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $empleados['id'];?>">                      
                                            <button type="submit" value="Seleccionar" class="btn btn-danger" name="accion">Seleccionar &nbsp<span class="badge badge-light"> Editar-Eliminar</span>
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
    
           tablaEmpleados = $('#tablaEmpleados').DataTable({   
             
            language: {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados(Registros no existen)",
                    "info": "Mostrando Registros Del _START_ al _END_ De Un Total De _TOTAL_ Registros",
                    "infoEmpty": "Mostrando Registros Del 0 Al 0 De Un Total De 0 Registros",
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