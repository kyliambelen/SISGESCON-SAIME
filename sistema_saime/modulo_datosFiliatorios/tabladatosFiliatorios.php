<?php

session_start();

if(!isset($_SESSION['rol'])){
header('location: index.php');

}else{
    if($_SESSION['rol']!=1){
    header('location: menuPrincipalUsuarios.php');
    }
}
        require ("dfController.php");
?>

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!--<link rel="shortcut icon" href="#" />-->  
   
            <title>DATOS FILIATORIOS</title>
        
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

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:#D8D8D8">
            <!---///////// LOGO 1 ///////////------->

        <img src="../lib/img/datosFiliatorios1.jpg" class="logoEmpleados">

        <!----------------------------------------------->
        <button class="navbar-toggler" style=" background-color: #FFBF00; color: #FFFFFF" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">MENU
        <span class="navbar-toggler-icon"></span>
        </button>&nbsp &nbsp &nbsp &nbsp

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"style="color: #190707; font-weight: bold" href="menuDatosFiliatorios.php">MENU<span class="sr-only">(current)</span></a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color: #190707; font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALIDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="">Visol Empleados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="../bd/cerrarSesion.php">Cerrar Sesion</a>
                    </div>
                </li>
                <li class="nav-item">&nbsp &nbsp &nbsp &nbsp

                        <!--------/////////////// BOTON PARA AGREGAR REGISTROS //////////////--------------->

                    <button type="button" type="button" class="btn" style="background-color:#FFFFFF" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit fa-2x"></i></button>     
                   
                    <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Agregar Registros+</button>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link"style="color: #190707; font-weight: bold" href="#">INGRESAR+</a>
                </li>&nbsp &nbsp &nbsp &nbsp &nbsp
                <li class="img1">
                    <img src="../lib/img/tituloDF.png"> 
                </li>

                    <!--//// FORMULARIO PARA AGREGAR CEDULA E IMPRIMIR EL DATO FILIATORIO ////-->

                <li class="nav-item">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                    <form action="reporteDF.php" method="POST" class="form_search">
                        <input type="text" name="cedula" id="cedula" placeholder="INGRESE N° CEDULA">
                        <input type="submit" value="Imprimir DF" class="btn_search">
                    </form>
                </li>
                &nbsp &nbsp &nbsp &nbsp
            </ul>
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/datosFiliatorios2.png" class="logoEmpleados">
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
                            <div class="modal-header font-weight-bold img-thumbnail"style=background:#FF0040><img src="../lib/img/empleados3.jpg">&nbsp&nbsp &nbsp
                                    <h5 class="modal-title"style="color:#FFFFFF" id="exampleModalLabel">DATOS FILIATORIOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <input type="hidden" required name="id" value="<?php echo $id;?>" placeholder="" id="id" require="">
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for=""style="color:#3B0B17">FECHA ACTUAL:</label></b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fecha_actual']))?"is-invalid":"";?>" style="color:#848484" required name="fecha_actual" value="<?php echo $fecha_actual;?>" placeholder="" id="fecha_actual" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fecha_actual']))?$error['fecha_actual']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17">CEDULA:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula_df']))?"is-invalid":"";?>"style="color:#848484"  required name="cedula_df" value="<?php echo $cedula_df;?>" placeholder="" id="cedula_df" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula_df']))?$error['cedula_df']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17"> FECHA EXPEDICION:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaExpedicion']))?"is-invalid":"";?>"style="color:#848484"  required name="fechaExpedicion" value="<?php echo $fechaExpedicion;?>" placeholder="" id="fechaExpedicion" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaExpedicion']))?$error['fechaExpedicion']:"";?>
                                        </div>                                            
                                    </div>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17">FECHA NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['fechaNac_df']))?"is-invalid":"";?>" style="color:#848484" required  name="fechaNac_df" value="<?php echo $fechaNac_df;?>" placeholder="" id="fechaNac_df" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['fechaNac_df']))?$error['fechaNac_df']:"";?>
                                        </div>
                                    </div>             
                                    
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">NOMBRES:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombres_df']))?"is-invalid":"";?>" style="color:#848484" required  name="nombres_df" value="<?php echo $nombres_df;?>" placeholder="" id="nombres_df" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombres_df']))?$error['nombres_df']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">APELLIDOS:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['apellidos_df']))?"is-invalid":"";?>" style="color:#848484" required  name="apellidos_df" value="<?php echo $apellidos_df;?>" placeholder="" id="apellidos_df" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['apellidos_df']))?$error['apellidos_df']:"";?>
                                        </div>
                                    </div>             
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">ESTADO CIVIL:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['estadoCivil_df']))?"is-invalid":"";?>" style="color:#848484" required  name="estadoCivil_df" value="<?php echo $estadoCivil_df;?>" placeholder="" id="estadoCivil_df" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estadoCivil_df']))?$error['estadoCivil_df']:"";?>
                                        </div>
                                    </div>             
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> NACIONALIDAD:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['nacionalidad_df']))?"is-invalid":"";?>" style="color:#848484" required  name="nacionalidad_df" value="<?php echo $nacionalidad_df;?>" placeholder="" id="nacionalidad_df" require="">>
                                                <option value="VENEZOLANA">VENEZOLANA</option>        								
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nacionalidad_df']))?$error['nacionalidad_df']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">MADRE:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['madre_df']))?"is-invalid":"";?>" style="color:#848484" required  name="madre_df" value="<?php echo $madre_df;?>" placeholder="" id="madre_df" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['madre_df']))?$error['madre_df']:"";?>
                                        </div>
                                    </div>             
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">PADRE:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['padre_df']))?"is-invalid":"";?>" style="color:#848484" required  name="padre_df" value="<?php echo $padre_df;?>" placeholder="" id="padre_df" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['padre_df']))?$error['padre_df']:"";?>
                                        </div>
                                    </div>             
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17"> LUGAR NACIMIENTO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['lugarNac_df']))?"is-invalid":"";?>" style="color:#848484" required  name="lugarNac_df" value="<?php echo $lugarNac_df;?>" placeholder="" id="lugarNac_df" require=""></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['lugarNac_df']))?$error['lugarNac_df']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> JEFE DE OFICINA:</label> </b>
                                        <input type="mail" class="font-weight-bold form-control <?php echo (isset($error['jefeOficina']))?"is-invalid":"";?>" style="color:#848484" required  name="jefeOficina" value="<?php echo $jefeOficina;?>" placeholder="" id="jefeOficina" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['jefeOficina']))?$error['jefeOficina']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">  DOCUMENTOS 1:</label> </b>
                                        <input type="text"  class="font-weight-bold form-control"  style="color:#848484" required  name="documentos1_df" value="<?php echo $documentos1_df;?>" placeholder="" id="documentos1_df" require="">
                                                                                
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">  DOCUMENTOS 2:</label> </b>
                                        <input type="text"  class="font-weight-bold form-control" style="color:#848484"   name="documentos2_df" value="<?php echo $documentos2_df;?>" placeholder="" id="documentos2_df" require="">
                                                                                
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">  DOCUMENTOS 3:</label> </b>
                                        <input type="text"  class="font-weight-bold form-control" style="color:#848484"   name="documentos3_df" value="<?php echo $documentos3_df;?>" placeholder="" id="documentos3_df" require="">
                                                                                
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">  DOCUMENTOS 4:</label> </b>
                                        <input type="text"  class="font-weight-bold form-control" style="color:#848484"   name="documentos4_df" value="<?php echo $documentos4_df;?>" placeholder="" id="documentos4_df" require="">
                                                                                
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">  DOCUMENTOS 5:</label> </b>
                                        <input type="text"  class="font-weight-bold form-control" style="color:#848484"   name="documentos5_df" value="<?php echo $documentos5_df;?>" placeholder="" id="documentos5_df" require="">
                                                                                
                                    </div>
                                    <br>
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">  DOCUMENTOS 6:</label> </b>
                                        <input type="text"  class="font-weight-bold form-control" style="color:#848484"   name="documentos6_df" value="<?php echo $documentos6_df;?>" placeholder="" id="documentos6_df" require="">
                                                                                
                                    </div>
                                    <br>
                                   
                                    <div class="form-group col-md-12">
                                        <label for="" class="col-form-label"style="color: #000000; font-weight: bold">BANCOS</label>
                                            <select class="font-weight-bold form-control <?php echo (isset($error['bancos_df']))?"is-invalid":"";?>" style="color:#848484" required  name="bancos_df" value="<?php echo $bancos_df;?>" placeholder="" id="bancos_df" require="">>
                                                <option value="BANCARIBE 0114-0182-16-1820032205">BANCO DEL CARIBE</option>
                                                <option value="BANCO BANESCO 0134-1099-25-0001002020">BANESCO   2020</option>
                                                <option value="BANCO BANESCO 0134-1099-23-0001002021">BANESCO   2021</option>
                                                <option value="BANCO BICENTENARIO 0175-0141-14-0060183212">BICENTENARIO   3212</option>
                                                <option value="BANCO BICENTENARIO 0175-0141-17-0073019206">BICENTENARIO   9206</option>
                                                <option value="BANCO BOD 0116-0083-28-0196030188">BANCO BOD</option> 
                                                <option value="BANCOCARONI 0128-0002-91-0200996965">BANCO CARONI</option>
                                                <option value="BANCO EXTERIOR 0115-0010-22-3000402808">BANCO EXTERIOR</option>
                                                <option value="BANCO BFC 0151-0116-47-4411616834">BANCO BFC</option> 
                                                <option value="BANCO PLAZA 0138-0003-16-0030141150">BANCO PLAZA</option> 
                                                <option value="PROVINCIAL 0108-0582-19-0100040633">BANCO PROVINCIAL</option> 
                                                <option value="BANCO DEL TESORO 0163-0204-01-20430065024">BANCO DEL TESORO</option> 
                                                <option value="BANCO VENEZUELA 0102-0552-26-0000022282">BANCO VENEZUELA   2282</option>
                                                <option value="BANCO VENEZUELA 0102-0552-21-0000027261">BANCO VENEZUELA   7261</option>
                                                <option value="BANCO VENEZUELA 0102-0762-25-0000012988">BANCO VENEZUELA   2988</option>                         									
                                            </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['bancos_df']))?$error['bancos_df']:"";?>
                                        </div>                                            
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
                        <table id="tablaDF" class="table table-bordered table condensed table-hover table display example compact stripe" cellspacing="0" width="100%">
                            <thead class="text-center; font-weight-bold" style="background-color:rgb(0,120,180); color:#FFFFFF; font-size: 80%">
                                <tr>
                                
                                    <th>FECHA</th>
                                    <th>CEDULA</th>
                                    <th>F.EXPEDICION</th>
                                    <th>NOMBRES</th>
                                    <th>APELLIDOS</th>
                                    <th>EDO.CIVIL</th>
                                    <th>NACIONALIDAD</th>
                                    <th>F.NACIMIENTO</th>
                                    <th>MADRE</th>
                                    <th>PADRE</th>
                                    <th>LUGAR NACIMIENTO</th>
                                    <th>DOCUMENTOS 1</th>
                                    <th>DOCUMENTOS 2</th>
                                    <th>DOCUMENTOS 3</th>
                                    <th>DOCUMENTOS 4</th>
                                    <th>DOCUMENTOS 5</th>
                                    <th>DOCUMENTOS 6</th>
                                    <th>JEFE OFICINA</th>
                                    <th>BANCOS</th>                                   
                                    <th>ACCIONES</th>
                                    
                                    
                                </tr>
                            </thead>
                                <?php foreach($listarDF AS $df){?>

                                <tr>
                        
                                    
                                    <td><?php echo $df['fecha_actual'];?></td>
                                    <td><?php echo $df['cedula_df'];?></td>
                                    <td><?php echo $df['fechaExpedicion'];?></td>
                                    <td><?php echo $df['nombres_df'];?></td>
                                    <td><?php echo $df['apellidos_df'];?></td>
                                    <td><?php echo $df['estadoCivil_df'];?></td>
                                    <td><?php echo $df['nacionalidad_df'];?></td>
                                    <td><?php echo $df['fechaNac_df'];?></td>
                                    <td><?php echo $df['madre_df'];?></td>
                                    <td><?php echo $df['padre_df'];?></td>
                                    <td><?php echo $df['lugarNac_df'];?></td>
                                    <td><?php echo $df['documentos1_df'];?></td>
                                    <td><?php echo $df['documentos2_df'];?></td>
                                    <td><?php echo $df['documentos3_df'];?></td>
                                    <td><?php echo $df['documentos4_df'];?></td>
                                    <td><?php echo $df['documentos5_df'];?></td>
                                    <td><?php echo $df['documentos6_df'];?></td>
                                    <td><?php echo $df['jefeOficina'];?></td>
                                    <td><?php echo $df['bancos_df'];?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $df['id'];?>">                      
                                            <input type="submit" value="Seleccionar" class="btn btn-danger" name="accion">   
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
    
                tablaDF = $('#tablaDF').DataTable({   
             
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