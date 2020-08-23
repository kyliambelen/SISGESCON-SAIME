<?php

session_start();

if(!isset($_SESSION['rol'])){
header('location: index.php');

}else{
    if($_SESSION['rol']!=1){
    header('location: menuPrincipalUsuarios.php');
    }
}
        require ("permisosController.php");
?>

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!--<link rel="shortcut icon" href="#" />-->  
   
            <title>PERMISOS EMPLEADOS</title>
        
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

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:rgb(0,65,132)">

            <!---///////// LOGO 1 ///////////------->

        <img src="../lib/img/empleado9.png" class="logoEmpleados">

        <!----------------------------------------------->
        <button class="navbar-toggler" style=" background-color: #FFBF00; color: #FFFFFF" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">MENU
        <span class="navbar-toggler-icon"></span>
        </button>&nbsp &nbsp &nbsp &nbsp

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"style="color: #FF0000; font-weight: bold" href="menuEmpleados.php">MENU<span class="sr-only">(current)</span></a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color: #FF0000; font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALIDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="visolEmpleados.php">Visol Empleados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="../bd/cerrarSesion.php">Cerrar Sesion</a>
                    </div>
                </li>
                <li class="nav-item">&nbsp &nbsp &nbsp &nbsp 				
                       
                <!--------/////////////// BOTON PARA AGREGAR REGISTROS //////////////--------------->			
                        
                <button type="button" type="button" class="btn" style="background-color:rgb(0,155,193)" data-toggle="modal" data-target="#exampleModal"><i class="fa  fa-plus-circle fa-2x"></i></button>  
                        <!--<button type="button"  type="button" class="btn"style="background-color:rgb(0,155,193)" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">library_add</i></button>-->     
                    <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Agregar Registros+</button>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link"style="color: #FF0000; font-weight: bold" href="#">NUEVO+</a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="img1">
                    <img src="../lib/img/titulopermisosEmpleados.png"> 
                </li>
            </ul>
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/empleado10.png" class="logoEmpleados">
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
                            <div class="modal-header font-weight-bold img-thumbnail"style=background:rgb(237,238,102)><img src="../lib/img/permisos4.jpg" class="logopermiEmpleados">&nbsp&nbsp &nbsp
                                    <h5 class="modal-title"style="color:rgb(0,0,0)" id="exampleModalLabel">PERMISOS EMPLEADOS</h5>
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
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula_per']))?"is-invalid":"";?>" style="color:#848484" required name="cedula_per" value="<?php echo $cedula_per;?>" placeholder="" id="cedula_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula_per']))?$error['cedula_per']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17">NOMBRES:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombres_per']))?"is-invalid":"";?>"style="color:#848484"  required name="nombres_per" value="<?php echo $nombres_per;?>" placeholder="" id="nombres_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombres_per']))?$error['nombres_per']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> SEDE:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['oficina_per']))?"is-invalid":"";?>" style="color:#848484" required  name="oficina_per" value="<?php echo $oficina_per;?>" placeholder="" id="oficina_per" require="">>
                                            <option value="OF-128 TRAILER CARUPANO">OF 128 TRAILER</option>
                                            <option value="OF-29 CARUPANO">OF 29 CARUPANO </option>
                                            <option value="MIGRACION CARUPANO">MIGRACION CARUPANO </option>
                                            <option value="PUNTO CONTROL CHACOPATA">PUNTO CONTROL CHACOPATA </option>
                                            <option value="OF-119 GUIRIA">OF 119 GUIRIA</option>
                                            <option value="MIGRACION GUIRIA">MIGRACION GUIRIA </option>                         									
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['oficina_per']))?$error['oficina_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">FECHA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fecha_per']))?"is-invalid":"";?>" style="color:#848484" required  name="fecha_per" value="<?php echo $fecha_per;?>" placeholder="" id="fecha_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fecha_per']))?$error['fecha_per']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> TIPO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['tipo_per']))?"is-invalid":"";?>" style="color:#848484" required  name="tipo_per" value="<?php echo $tipo_per;?>" placeholder="" id="tipo_per" require="">>
                                                <option value="PERMISO">PERMISO</option>
                                                <option value="REPOSO">REPOSO</option>                                              									
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['tipo_per']))?$error['tipo_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17"> PERMISO OBLIGATORIO :</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['permisoObligatorio']))?"is-invalid":"";?>" style="color:#848484" required  name="permisoObligatorio" value="<?php echo $permisoObligatorio;?>" placeholder="" id="permisoObligatorio" require="">>
                                                 <option value="NO APLICA">NO APLICA</option>
                                                 <option value="COMPARECENCIA ACTOS ADMINISTRATIVOS Y JUDICIALES">COMPARECENCIA ACTOS ADMINISTRATIVOS Y JUDICIALES</option>
                                                 <option value="CARGOS ACADEMICOS, DOCENTES O ASISTENCIALES">CARGOS ACADEMICOS, DOCENTES O ASISTENCIALES</option>
                                                 <option value="NACIMIENTO DE HIJO(A)">NACIMIENTO DE HIJO(A)</option>
                                                 <option value="PARTICIPACION EN EVENTOS DEPORTIVOS">PARTICIPACION EN EVENTOS DEPORTIVOS</option>
                                                 <option value="POR MATRIMONIO">POR MATRIMONIO</option>
                                                 <option value="POR DEFUNCION">POR DEFUNCION</option>
                                                 <option value="ACTIVIDADES DE DIRIGENCIA SINDICAL">ACTIVIDADES DE DIRIGENCIA SINDICAL</option>
                                                 <option value="ACTIVIDADES RELACIONADAS AL PERSONAL(ANALISTA)">ACTIVIDADES RELACIONADAS AL PERSONAL(ANALISTA)</option>
                                                 <option value="ACTIVIDADES DE AREA TECNOLOGICA(SOPORTE TECNICO)">ACTIVIDADES DE AREA TECNOLOGICA(SOPORTE TECNICO)</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['permisoObligatorio']))?$error['permisoObligatorio']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17"> PERMISO POTESTATIVO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['permisoPotestativo']))?"is-invalid":"";?>" style="color:#848484" required  name="permisoPotestativo" value="<?php echo $permisoPotestativo;?>" placeholder="" id="permisoPotestativo" require="">>
                                                 <option value="NO APLICA">NO APLICA</option>
                                                 <option value="POR ENFERMEDAD O ACCIDENTES FAMILIARES">POR ENFERMEDAD O ACCIDENTES FAMILIARES</option>
                                                 <option value="ESTUDIOS FORMALES">ESTUDIOS FORMALES</option>
                                                 <option value="EVENTOS EDUCATIVOS">EVENTOS EDUCATIVOS</option>
                                                 <option value="SINIESTROS">SINIESTROS</option>
                                                 <option value="DILIGENCIAS PERSONALES JUSTIFICADAS">DILIGENCIAS PERSONALES JUSTIFICADAS</option>
                                                 <option value="OTRO">OTRO</option>	          
                                        </select>

                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['permisoPotestativo']))?$error['permisoPotestativo']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">DIAGNOSTICO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['diagnostico_per']))?"is-invalid":"";?>" style="color:#848484" required  name="diagnostico_per" value="<?php echo $diagnostico_per;?>" placeholder="" id="diagnostico_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['diagnostico_per']))?$error['diagnostico_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">INSTITUCION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['institucion_per']))?"is-invalid":"";?>" style="color:#848484" required  name="institucion_per" value="<?php echo $institucion_per;?>" placeholder="" id="institucion_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['institucion_per']))?$error['institucion_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17"> DIA INICIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaInicio_per']))?"is-invalid":"";?>" style="color:#848484" required  name="fechaInicio_per" value="<?php echo $fechaInicio_per;?>" placeholder="" id="fechaInicio_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaInicio_per']))?$error['fechaInicio_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17"> DIA FINAL:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaFin_per']))?"is-invalid":"";?>" style="color:#848484" required  name="fechaFin_per" value="<?php echo $fechaFin_per;?>" placeholder="" id="fechaFin_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaFin_per']))?$error['fechaFin_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17"> HORARIO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['horario_per']))?"is-invalid":"";?>" style="color:#848484" required  name="horario_per" value="<?php echo $horario_per;?>" placeholder="" id="horario_per" require="">>
                                                <option value="MAÑANA">MAÑANA</option>
                                                <option value="TARDE">TARDE</option>
                                                <option value="COMPLETO">COMPLETO</option>    									
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['horario_per']))?$error['horario_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17">CANTIDAD DIAS:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['totalDias_per']))?"is-invalid":"";?>" style="color:#848484" required  name="totalDias_per" value="<?php echo $totalDias_per;?>" placeholder="" id="totalDias_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['totalDias_per']))?$error['totalDias_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">CANTIDAD HORAS:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['totalHoras_per']))?"is-invalid":"";?>" style="color:#848484" required  name="totalHoras_per" value="<?php echo $totalHoras_per;?>" placeholder="" id="totalHoras_per" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['totalHoras_per']))?$error['totalHoras_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> MES:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['mes_per']))?"is-invalid":"";?>" style="color:#848484" required  name="mes_per" value="<?php echo $mes_per;?>" placeholder="" id="mes_per" require="">> 
                                                 <option value="ENERO">ENERO</option>
                                                 <option value="FEBRERO">FEBRERO</option>
                                                 <option value="MARZO">MARZO</option>
                                                 <option value="ABRIL">ABRIL</option>
                                                 <option value="MAYO">MAYO</option>
                                                 <option value="JUNIO">JUNIO</option>
                                                 <option value="JULIO">JULIO</option>
                                                 <option value="AGOSTO">AGOSTO</option>
                                                 <option value="SEPTIEMBRE">SEPTIEMBRE</option>
                                                 <option value="OCTUBRE">OCTUBRE</option>
                                                 <option value="NOVIEMBRE">NOVIEMBRE</option>
                                                 <option value="DICIEMBRE">DICIEMBRE</option> 
                                                                        
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['mes_per']))?$error['mes_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> AÑO:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['ano_per']))?"is-invalid":"";?>" style="color:#848484" required  name="ano_per" value="<?php echo $ano_per;?>" placeholder="" id="ano_per" require="">> 
                                                 <option value="2020">2020</option>
                                                 <option value="2021">2021</option>
                                                 <option value="2022">2022</option>
                                                 <option value="2023">2023</option>
                                                 <option value="2024">2024</option>
                                                 <option value="2025">2025</option>
                                                 <option value="2026">2026</option>
                                                 <option value="2027">2027</option>
                                                 <option value="2028">2028</option>
                                                 <option value="2029">2029</option>
                                                 <option value="2030">2030</option> 
                                                                        
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['ano_per']))?$error['ano_per']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                      
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">FOTO:</label> </b>
                                        <?php if($foto_per!=""){ ?> 
                                        
                                        <img class="img-thumbnail rounded mx-auto d-block" width="100px"  src="imagenes/imagenesPermisos/<?php echo $foto_per;?>"/>   
                                        
                                        
                                        <?php } ?>


                                        <input type="file" accept="image/*" class="font-weight-bold form-control"style="color:#FF0040" name="foto_per" value="<?php echo $foto_per;?>"  placeholder="" id="foto_per" require="">
                                    </div>
                                    <br>
                                    <br>

                                </div>
                                
                            </div>           
                            <div class="modal-footer"style="background:#F2F5A9">
                                <button value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                                <button value="btnModificar"<?php echo $accionModificar;?> class="btn btn-warning"; style="color:rgb(255,255,255)" type="submit" name="accion">Modificar</button>
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
                        <table id="tablaPermisos" class="cell-border compact stripe  table bordered table hover" cellspacing="0" width="100%">
                            <thead class="text-center" style="background-color:rgb(0,155,193); color:rgb(0,0,0); font-size: 80%">
                                <tr>
                                
                                    <th>FOTO</th>
                                    <th>CEDULA</th>
                                    <th>NOMBRES</th>
                                    <th>SEDE</th>
                                    <th>FECHA</th>
                                    <th>TIPO</th>
                                    <th>P.OBLIGATORIO</th>
                                    <th>P.POTESTATIVO</th>                                  
                                    <th>DIAGNOSTICO</th>
                                    <th>INICIO</th>
                                    <th>TERMINA</th>
                                    <th>HORARIO</th>
                                    <th>CANT.DIAS</th>
                                    <th>CANT.HORAS</th>
                                    <th>INSTITUCION</th>
                                    <th>MES</th>
                                    <th>AÑO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                                <?php foreach($listarPermisos AS $permisos){?>

                                <tr>
                        
                                    <td><img  width="70px"  height="70px" src="imagenes/imagenesPermisos/<?php echo $permisos['foto_per']; ?>" /></td>
                                    <td><?php echo $permisos['cedula_per'];?></td>
                                    <td><?php echo $permisos['nombres_per'];?></td>
                                    <td><?php echo $permisos['oficina_per'];?></td>
                                    <td><?php echo $permisos['fecha_per'];?></td>
                                    <td><?php echo $permisos['tipo_per'];?></td>
                                    <td><?php echo $permisos['permisoObligatorio'];?></td>
                                    <td><?php echo $permisos['permisoPotestativo'];?></td>
                                    <td><?php echo $permisos['diagnostico_per'];?></td>
                                    <td><?php echo $permisos['fechaInicio_per'];?></td>
                                    <td><?php echo $permisos['fechaFin_per'];?></td>
                                    <td><?php echo $permisos['horario_per'];?></td>
                                    <td><?php echo $permisos['totalDias_per'];?></td>
                                    <td><?php echo $permisos['totalHoras_per'];?></td>
                                    <td><?php echo $permisos['institucion_per'];?></td>
                                    <td><?php echo $permisos['mes_per'];?></td>
                                    <td><?php echo $permisos['ano_per'];?></td>                                  
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $permisos['id'];?>">                      
                                            <button type="submit" value="Seleccionar" class="btn btn-info" name="accion"><span class="badge badge-dark"> Editar - Eliminar</span>
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
    
           tablapermisos = $('#tablaPermisos').DataTable({   
             
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