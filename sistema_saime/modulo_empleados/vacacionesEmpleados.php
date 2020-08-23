<?php

session_start();

if(!isset($_SESSION['rol'])){
header('location: index.php');

}else{
    if($_SESSION['rol']!=1){
    header('location: menuPrincipalUsuarios.php');
    }
}
        require ("vacacionesController.php");
?>

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!--<link rel="shortcut icon" href="#" />-->  
   
            <title>VACACIONES EMPLEADOS</title>
        
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

    <nav class="navbar navbar-expand-lg sticky-top 2"style="background-color:rgb(0,120,180)">

            <!---///////// LOGO 1 ///////////------->

        <img src="../lib/img/empleado11.png"  class="logoEmpleados">

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
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="visolEmpleados.php">Visol Empleados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="../bd/cerrarSesion.php">Cerrar Sesion</a>
                    </div>
                </li>
                <li class="nav-item">&nbsp &nbsp &nbsp &nbsp 				
                        
                <!--------/////////////// BOTON PARA AGREGAR REGISTROS //////////////--------------->			
                    
                        <button type="button" type="button" class="btn" style="background-color:rgb(0,155,193)" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-smile fa-2x"></i></button>  
                        <!--<button type="button"  type="button" class="btn" style="background-color:rgb(0,180,197)" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">library_add</i></button>-->     
                    <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Agregar Registros+</button>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link"style="color:rgb(0,0,0); font-weight: bold" href="#">NUEVO+</a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="img1">
                    <img src="../lib/img/titulovacionesEmpleados.png"> 
                </li>
            </ul>
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/empleado12.png" class="logoEmpleados">
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
                            <div class="modal-header font-weight-bold img-thumbnail"style=background:rgb(53,203,166)><img src="../lib/img/vacaciones2.jpg" class="logovacaEmpleados"> &nbsp&nbsp &nbsp
                                    <h5 class="modal-title"style="color:rgb(255,255,255)" id="exampleModalLabel">VACACIONES EMPLEADOS</h5>
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
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula_vac']))?"is-invalid":"";?>" style="color:#848484" required name="cedula_vac" value="<?php echo $cedula_vac;?>" placeholder="" id="cedula_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula_vac']))?$error['cedula_vac']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17">NOMBRES:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombres_vac']))?"is-invalid":"";?>"style="color:#848484"  required name="nombres_vac" value="<?php echo $nombres_vac;?>" placeholder="" id="nombres_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombres_vac']))?$error['nombres_vac']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> CODIGO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['codigo_vac']))?"is-invalid":"";?>"style="color:#848484"  required name="codigo_vac" value="<?php echo $codigo_vac;?>" placeholder="" id="codigo_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['codigo_vac']))?$error['codigo_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                   
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">OFICINA SEDE:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['oficina_vac']))?"is-invalid":"";?>" style="color:#848484" required  name="oficina_vac" value="<?php echo $oficina_vac;?>" placeholder="" id="oficina_vac" require="">>
                                                
                                                <option value="OF-128 TRAILER CARUPANO">OF 128 TRAILER</option>
                                                <option value="OF-29 CARUPANO">OF 29 CARUPANO </option>
                                                <option value="MIGRACION CARUPANO">MIGRACION CARUPANO </option>
                                                <option value="PUNTO CONTROL CHACOPATA">PUNTO CONTROL CHACOPATA </option>
                                                <option value="OF-119 GUIRIA">OF 119 GUIRIA</option>
                                                <option value="MIGRACION GUIRIA">MIGRACION GUIRIA </option>
                                            </select>
                                        
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['oficina_vac']))?$error['oficina_vac']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> FECHA INGRESO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaIngreso_vac']))?"is-invalid":"";?>"style="color:#848484"  required name="fechaIngreso_vac" value="<?php echo $fechaIngreso_vac;?>" placeholder="" id="fechaIngreso_vac" require="">

                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaIngreso_vac']))?$error['fechaIngreso_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> AÑOS SERVICIOS:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['tiempoServicios_vac']))?"is-invalid":"";?>" style="color:#848484" required  name="tiempoServicios_vac" value="<?php echo $tiempoServicios_vac;?>" placeholder="" id="tiempoServicios_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['tiempoServicios_vac']))?$error['tiempoServicios_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> PERIODO VACACIONES:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['periodo_vac']))?"is-invalid":"";?>"style="color:#848484"  required name="periodo_vac" value="<?php echo $periodo_vac;?>" placeholder="" id="periodo_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['periodo_vac']))?$error['periodo_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> FECHA INICIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaInicio_vac']))?"is-invalid":"";?>"style="color:#848484"  required name="fechaInicio_vac" value="<?php echo $fechaInicio_vac;?>" placeholder="" id="fechaInicio_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaInicio_vac']))?$error['fechaInicio_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> FECHA FINAL:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaFin_vac']))?"is-invalid":"";?>" style="color:#848484" required  name="fechaFin_vac" value="<?php echo $fechaFin_vac;?>" placeholder="" id="fechaFin_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaFin_vac']))?$error['fechaFin_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> FECHA REINTEGRO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaReintegro_vac']))?"is-invalid":"";?>" style="color:#848484" required  name="fechaReintegro_vac" value="<?php echo $fechaReintegro_vac;?>" placeholder="" id="fechaReintegro_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaReintegro_vac']))?$error['fechaReintegro_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> TOTAL DIAS:</label> </b>
                                        <input type="mail" class="font-weight-bold form-control <?php echo (isset($error['totalDias_vac']))?"is-invalid":"";?>" style="color:#848484" required  name="totalDias_vac" value="<?php echo $totalDias_vac;?>" placeholder="" id="totalDias_vac" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['totalDias_vac']))?$error['totalDias_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> MES VACACIONES:</label></b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['mes_vac']))?"is-invalid":"";?>" style="color:#848484" required  name="mes_vac" value="<?php echo $mes_vac;?>" placeholder="" id="mes_vac" require="">> 
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
                                            <?php echo (isset($error['mes_vac']))?$error['mes_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> MES EFECTIVA:</label></b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['mesEfectiva_vac']))?"is-invalid":"";?>" style="color:#848484" required  name="mesEfectiva_vac" value="<?php echo $mesEfectiva_vac;?>" placeholder="" id="mesEfectiva_vac" require="">> 
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
                                            <?php echo (isset($error['mesEfectiva_vac']))?$error['mesEfectiva_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> AÑO VACACION:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['ano_vac']))?"is-invalid":"";?>" style="color:#848484" required  name="ano_vac" value="<?php echo $ano_vac;?>" placeholder="" id="ano_vac" require="">> 
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
                                            <?php echo (isset($error['ano_vac']))?$error['ano_vac']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">FOTO:</label> </b>
                                        <?php if($foto_emp!=""){ ?> 
                                        
                                        <img class="img-thumbnail rounded mx-auto d-block" width="100px"  src="imagenes/imagenesVacaciones/<?php echo $foto_vac;?>"/>   
                                        
                                        
                                        <?php } ?>


                                        <input type="file" accept="image/*" class="font-weight-bold form-control"style="color:#FF0040" name="foto_vac" value="<?php echo $foto_vac;?>"  placeholder="" id="foto_vac" require="">
                                    </div>
                                    <br>
                                    <br>

                                </div>
                                
                            </div>           
                            <div class="modal-footer"style="background:#E0F8F7">
                                <button value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                                <button value="btnModificar"<?php echo $accionModificar;?> class="btn btn-warning"style="color: #FFFFFF" type="submit" name="accion">Modificar</button>
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
                        <table id="tablaVacaciones" class="table table-bordered table condensed table-hover table display example compact stripe" cellspacing="0" width="100%">
                            <thead class="text-center" style="background-color:rgb(0,180,197);color:rgb(255,255,255); font-size: 80%">
                                <tr>
                                
                                    <th>FOTO</th>
                                    <th>CEDULA</th>
                                    <th>NOMBRES</th>
                                    <th>CODIGO</th>
                                    <th>SEDE</th>
                                    <th>INGRESO</th>
                                    <th>TIEMPO</th>
                                    <th>PERIODO</th>
                                    <th>F. INICIO</th>
                                    <th>F. FINAL</th>
                                    <th>F.REGRESO</th>
                                    <th>DIAS</th>
                                    <th>MES VACACION</th>
                                    <th>MES EFECTIVO</th>
                                    <th>AÑO VACACION</th>                                 
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                                <?php foreach($listarVacaciones AS $vacaciones){?>

                                <tr>
                        
                                    <td><img  width="70px"  height="70px" src="imagenes/imagenesVacaciones/<?php echo $vacaciones['foto_vac']; ?>" /></td>
                                    <td><?php echo $vacaciones['cedula_vac'];?></td>
                                    <td><?php echo $vacaciones['nombres_vac'];?></td>
                                    <td><?php echo $vacaciones['codigo_vac'];?></td>
                                    <td><?php echo $vacaciones['oficina_vac'];?></td>
                                    <td><?php echo $vacaciones['fechaIngreso_vac'];?></td>
                                    <td><?php echo $vacaciones['tiempoServicios_vac'];?></td>
                                    <td><?php echo $vacaciones['periodo_vac'];?></td>
                                    <td><?php echo $vacaciones['fechaInicio_vac'];?></td>
                                    <td><?php echo $vacaciones['fechaFin_vac'];?></td>
                                    <td><?php echo $vacaciones['fechaReintegro_vac'];?></td>
                                    <td><?php echo $vacaciones['totalDias_vac'];?></td>
                                    <td><?php echo $vacaciones['mes_vac'];?></td>
                                    <td><?php echo $vacaciones['mesEfectiva_vac'];?></td>
                                    <td><?php echo $vacaciones['ano_vac'];?></td>              
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $vacaciones['id'];?>">                      
                                            <input type="submit" value="Seleccionar" class="btn btn-danger" name="accion">
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
    
           tablaVacaciones = $('#tablaVacaciones').DataTable({   
             
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