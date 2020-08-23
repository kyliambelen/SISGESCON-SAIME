<?php

session_start();

if(!isset($_SESSION['rol'])){
header('location: ../index.php');

}else{
    if($_SESSION['rol']!=1){
    header('location: ../menuPrincipalUsuarios.php');
    }
}
        require ("estudiosController.php");
?>

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!--<link rel="shortcut icon" href="#" />-->  
    
    <title>INFORMACION ACADEMICA EMPLEADOS SAIME CARUPANO</title>
       
    
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

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:rgb(0,112,168)">

            <!---///////// LOGO 1 ///////////------->

        <img src="../lib/img/empleado5.jpg" class="logoEmpleados">

        <!----------------------------------------------->
        <button class="navbar-toggler" style=" background-color: #4C0B5F; color: #FFFFFF" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">MENU

        <span class="navbar-toggler-icon"></span>
        </button>&nbsp &nbsp &nbsp &nbsp

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"style="color: rgb(255,255,80); font-weight: bold" href="menuEmpleados.php">MENU<span class="sr-only">(current)</span></a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color:rgb(255,255,80); font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALIDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="visolInfoAcademica.php">Visol Informacion Academica</a>    
                    <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="visolEmpleados.php">visol Empleados</a>
                        <a class="dropdown-item"style="color: #0080FF; font-weight: bold" href="tablaEmpleados.php">Tabla Empleados</a>
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="../bd/cerrarSesion.php">Cerrar Sesion</a>
                    </div>
                </li>
                <li class="nav-item">&nbsp &nbsp &nbsp &nbsp 	

                        <!--------/////////////// BOTON PARA AGREGAR REGISTROS //////////////--------------->	
                    <button type="button" type="button" class="btn" style="background-color:rgb(255,255,80)" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-folder-open fa-2x"></i></button>  
                    <!--<button type="button" class="btn" style="background-color:rgb(255,255,80)" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">library_add</i></button>-->
                    <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Agregar Registros+</button>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link"style="color:rgb(255,255,80); font-weight: bold" href="#">REGISTRAR+</a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="img1">
                    <img src="../lib/img/tituloinformacionAcademica.png"> 
                </li>

            </ul>
           
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/empleado6.jpg" class="logoEmpleados">
                <!--------------------------------------->	
            </li>
        </div>
    </nav>
    <br> 		   	           
   
</head>
<body>
    <!--<div class="container-fluid">-->
        <form action="" method="post" enctype="multipart/form-data">      
                   
                    <!-- Modal que contiene las acciones a realizar[INGRESAR-MODIFICAR-ELIMINAR] -->               
               
                    <div class="modal fade modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel -modal-lg" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header font-weight-bold img-thumbnail"style=background:rgb(0,120,180)><img src="../lib/img/empleado7.jpg"class="logoEmpleados">&nbsp&nbsp &nbsp
                                    <h5 class="modal-title"style="color:#FFFFFF" id="exampleModalLabel">INFORMACION ACADEMICA</h5>
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
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['cedula_func']))?"is-invalid":"";?>" style="color:#848484" required name="cedula_func" value="<?php echo $cedula_func;?>" placeholder="" id="cedula_func" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['cedula_func']))?$error['cedula_func']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-8">
                                        <b><label for="" style="color:#3B0B17">NOMBRES:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombres_func']))?"is-invalid":"";?>"style="color:#848484"  required name="nombres_func" value="<?php echo $nombres_func;?>" placeholder="" id="nombres_func" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombres_func']))?$error['nombres_func']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> SEDE:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['sede_func']))?"is-invalid":"";?>" style="color:#848484" required  name="sede_func" value="<?php echo $sede_func;?>" placeholder="" id="sede_func" require="">>
                                            <option value="OF-128 TRAILER CARUPANO">OF 128 TRAILER</option>
                                            <option value="OF-29 CARUPANO">OF 29 CARUPANO </option>
                                            <option value="MIGRACION CARUPANO">MIGRACION CARUPANO </option>
                                            <option value="PUNTO CONTROL CHACOPATA">PUNTO CONTROL CHACOPATA </option>
                                            <option value="OF-119 GUIRIA">OF 119 GUIRIA</option>
                                            <option value="MIGRACION GUIRIA">MIGRACION GUIRIA </option>                       									
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['sede_func']))?$error['sede_func']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>                                   
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17">ESTUDIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['estudios_func']))?"is-invalid":"";?>" style="color:#848484" required  name="estudios_func" value="<?php echo $estudios_func;?>" placeholder="" id="estudios_func" require="">>
                                                
                                                <option value="PRIMARIA">PRIMARIA</option>
                                                <option value="SECUNDARIA">SECUNDARIA</option>
                                                <option value="BACHILLER">BACHILLER</option>
                                                <option value="TECNICO MEDIO">TECNICO MEDIO</option>
                                                <option value="TECNICO SUPERIOR">TECNICO SUPERIOR</option>
                                                <option value="LICENCIADO(A)">LICENCIADO(A)</option>
                                                <option value="ABOGADO">ABOGADO</option>
                                                <option value="MEDICO">MEDICO</option>
                                                <option value="INGENIERO">INGENIERO</option>
                                                <option value="ARQUITECTO">ARQUITECTO</option>
                                                <option value="DOCENTE">DOCENTE</option>
                                                <option value="TURISMO">TURISMO</option>
                                                
                                            </select>
                                        
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['estudios_func']))?$error['estudios_func']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-4">
                                        <b><label for="" style="color:#3B0B17"> AREA ESTUDIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['areaEstudios_func']))?"is-invalid":"";?>" style="color:#848484" required  name="areaEstudios_func" value="<?php echo $areaEstudios_func;?>" placeholder="" id="areaEstudios_func" require="">>
                                                 <option value="AERONAUTICA">AERONAUTICA</option>
                                                 <option value="AGRONOMIA">AGRONOMIA</option>
                                                 <option value="NAVAL">NAVAL</option>
                                                 <option value="AGROPECUARIA">AGROPECUARIA</option>
                                                 <option value="PESCA">PESCA</option>
                                                 <option value="ALIMENTOS">ALIMENTOS</option>
                                                 <option value="CIENCIAS MILITAR">CIENCIAS MILITAR</option>
                                                 <option value="GERENCIA RECURSOS HUMANOS">GERENCIA RECURSOS HUMANOS</option>
                                                 <option value="INFORMATICA">INFORMATICA</option>
                                                 <option value="BIOLOGIA">BIOLOGIA</option>
                                                 <option value="D.JURIDICO">D.JURIDICO</option>
                                                 <option value="ADMINISTRACION">ADMINISTRACION</option>
                                                 <option value="CONTADURIA">CONTADURIA</option>
                                                 <option value="TRIBUTARIA">TRIBUTARIA</option>
                                                 <option value="SISTEMAS">SISTEMAS</option>
                                                 <option value="EDUCACION">EDUCACION</option>
                                                 <option value="GEOLOGIA">GEOLOGIA</option>
                                                 <option value="PETROLEO">PETROLEO</option>
                                                 <option value="QUIMICA">QUIMICA</option>
                                                 <option value="MATEMATICAS">MATEMATICAS</option>
                                                 <option value="CIENCIAS">CIENCIAS</option>
                                                 <option value="FISICA">FISICA</option>
                                                 <option value="COMPUTACION">COMPUTACION</option>                                         
                                                <option value="OTRO">OTRO </option>
                                                
                                        </select>

                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['areaEstudios_func']))?$error['areaEstudios_func']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <b><label for="" style="color:#3B0B17">TITULO OBTENIDO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['titulo_func']))?"is-invalid":"";?>"style="color:#848484"  required  name="titulo_func" value="<?php echo $titulo_func;?>" placeholder="" id="titulo_func" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['titulo_func']))?$error['titulo_func']:"";?>
                                        </div>
                                    </div>
                                    <br>                                              
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17"> CONDICION:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['condicion_func']))?"is-invalid":"";?>" style="color:#848484" required  name="condicion_func" value="<?php echo $condicion_func;?>" placeholder="" id="condicion_func" require="">>
                                                <option value="ESTUDIANDO">ESTUDIANDO</option>
                                                <option value="PAUSADO">PAUSADO</option>
                                                <option value="ESPERA TITULO">ESPERA TITULO</option>
                                                <option value="GRADUADO">GRADUADO</option>									
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['condicion_func']))?$error['condicion_func']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                    <div class="form-group col-md-3">
                                        <b><label for="" style="color:#3B0B17"> NIVEL POST:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['nivelPost_func']))?"is-invalid":"";?>" style="color:#848484" required  name="nivelPost_func" value="<?php echo $nivelPost_func;?>" placeholder="" id="nivelPost_func" require="">> 
                                                <option value="POST GRADO">POST GRADO</option>
                                                <option value="MAESTRIA">MAESTRIA</option>
                                                <option value="DOCTORADO">DOCTORADO</option>
                                                <option value="DIPLOMADO">DIPLOMADO</option>
                                                <option value="MAGISTER">MAGISTER</option>                           
                                                <option value="NINGUNO">NINGUNO</option>
                                                                        
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nivelPost_func']))?$error['nivelPost_func']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>                                                                                                                                                                                                                   
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">FOTO:</label> </b>
                                        <?php if($foto_func!=""){ ?> 
                                        
                                        <img class="img-thumbnail rounded mx-auto d-block" width="100px"  src="imagenes/imagenesEstudios/<?php echo $foto_func;?>"/>   
                                        
                                        
                                        <?php } ?>


                                        <input type="file" accept="image/*" class="font-weight-bold form-control"style="color:#04B404" name="foto_func" value="<?php echo $foto_func;?>"  placeholder="" id="foto_func" require="">
                                    </div>
                                    <br>

                                </div>
                                
                            </div>           
                            <div class="modal-footer"style="background:#CED8F6">
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
                        <table id="example" class="table table-bordered table condensed table-hover table display example compact stripe" cellspacing="0" width="100%">
                            <thead class=" text-center" style="background:rgb(0,65,132); color:#FFFFFF; font-size: 90%">
                                <tr>
                                
                                    <th>FOTO</th>
                                    <th>CEDULA</th>
                                    <th>NOMBRES</th>                                  
                                    <th>SEDE</th>
                                    <th>ESTUDIOS</th>
                                    <th>AREA</th>
                                    <th>TITULO</th>
                                    <th>CONDICION</th>
                                    <th>NIVEL</th>                                   
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                                <?php foreach($listarEstudios AS $estudios){?>

                                <tr>
                        
                                    <td><img  width="70px"  height="70px" src="imagenes/imagenesEstudios/<?php echo $estudios['foto_func']; ?>" /></td>
                                    <td><?php echo $estudios['cedula_func'];?></td>
                                    <td><?php echo $estudios['nombres_func'];?></td>                                  
                                    <td><?php echo $estudios['sede_func'];?></td>
                                    <td><?php echo $estudios['estudios_func'];?></td>
                                    <td><?php echo $estudios['areaEstudios_func'];?></td>
                                    <td><?php echo $estudios['titulo_func'];?></td>
                                    <td><?php echo $estudios['condicion_func'];?></td>
                                    <td><?php echo $estudios['nivelPost_func'];?></td>                                   
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $estudios['id'];?>">                      
                                            <input type="submit" value="Seleccionar" class="btn btn-info" name="accion">
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
                $('#example').DataTable({

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
                } );


            </script>

</body>
</html>