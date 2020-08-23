<?php

session_start();

if(!isset($_SESSION['rol'])){
header('location: ../index.php');

}else{
    if($_SESSION['rol']!=1){
    header('location: menuPrincipalUsuarios.php');
    }
}
        require ("usuariosController.php");
?>

<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!--<link rel="shortcut icon" href="#" />-->  
    <title>::Tabla Control Usuarios::</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../lib/main_proyecto/main.css">  
    <link href="../lib/bootstrap/css/bootstrap.css" rel="stylesheet"> 
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../lib/datatables/datatables.min.css">
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"type="text/css" href="../lib/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

        <!--font awesome -->  
    <link rel="stylesheet" href="../lib/fontawesome/all.css">  
    <link rel="stylesheet" href="../lib/main_proyecto/glificon.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"> 

    <link href="../modulo_empleados/bootstra/css/bootstrap.min.css" rel="stylesheet">
    <link href="../modulo_empleados/plugins/datatable_css/bootstrap.min.css" rel="stylesheet">
    <link href="../modulo_empleados/plugins/datatable_css/bootstrap.css" rel="stylesheet">
    <link href="../modulo_empleados/plugins/datatable_css/datatables.min.css" rel="stylesheet">
    <link href="../modulo_empleados/plugins/datatable_css/all.css" rel="stylesheet">
    <link href="../modulo_empleados/plugins/datatable_css/glificon.css" rel="stylesheet">
    <link rel="stylesheet" href="../modulo_empleados/plugins/sweetAlert2/sweetalert2.min.css"> 
    <link rel="stylesheet" href="../modulo_empleados/plugins/animate.css/animate.css">
    <link rel="stylesheet" href="../modulo_empleados/plugins/empleados.css">

        <!-- MENU NAVEGACION PRINCIPAL(........MENU 1.........)--------> 

    <header class="sticky-top 2">
    <div class="col-lg-12">
                <!------///////////HEADER SECUNDARIO--->

            <img src="../lib/img/bannerPrincipal2.png">
        </div>
            <!-- /.col-lg-12 -->
        <br><br>
    </header>

    <nav class="navbar navbar-expand-lg sticky-top 2" style="background-color:rgb(0,147,183)">

            <!---///////// LOGO 1 ///////////------->

            <img src="../lib/img/usuarios4.jpg" class="logoUsuario">

        <!----------------------------------------------->
        <button class="navbar-toggler" style=" background-color: #6E6E6E; color:#FFFFFF" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><strong>MENU</strong>
        <span class="navbar-toggler-icon"></span>
        </button>&nbsp &nbsp &nbsp &nbsp

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"style="color: #000000; font-weight: bold" href="menuUsuarios.php"><i class="fa fa-dashboard fa-fw" style="color:#CC0066;"></i> MENU<span class="sr-only">(current)</span></a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color: #000000; font-weight: bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa  fa-sign-out" style="color:#CC0066;"></i>  SALIDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"style="color: #FFBF00; font-weight: bold" href="../bd/cerrarSesion.php">Cerrar Sesion</a>
                    </div>
                </li>
                <li class="nav-item">&nbsp &nbsp &nbsp &nbsp 

                        <!--------/////////////// BOTON PARA AGREGAR REGISTROS //////////////--------------->		
                        
                        <button type="button" type="button" class="btn" style="background-color:rgb(226,30,72)" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-md fa-2x"></i></button>      
                    <!--<button type="button"  type="button" class="btn" style="background: rgb(0,65,132)" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">library_add</i></button>-->     
                    <!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Agregar Registros+</button>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link"style="color: #000000; font-weight: bold" href="#">NUEVO</a>
                </li>&nbsp &nbsp &nbsp &nbsp
                <li class="img1">
                    <img src="../lib/img/tituloUsuario.png"> 
                </li>
            </ul>
            <li class="nav-item">			
                <!---///////// LOGO 2 ///////////------->			
                <img src="../lib/img/usuarios3.jpg" class="logoUsuario">
                <!--------------------------------------->	
            </li>
        </div>
    </nav>
    <br> 		   	           
   
</head>
<body>

            <!--------- Modal que contiene las acciones a realizar[INGRESAR-MODIFICAR-ELIMINAR] ------------->    

    <div class="container-fluid">
        <form action="" method="post" enctype="multipart/form-data">      
                              
                <div class="modal fade modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel -modal-lg" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header font-weight-bold img-thumbnail"style=background:#58ACFA><img src="../lib/img/empleados3.jpg" class="modalUsuario">&nbsp&nbsp &nbsp
                                    <h5 class="modal-title"style="color:#FFFFFF" id="exampleModalLabel">USUARIOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <input type="hidden" required name="id" value="<?php echo $id;?>" placeholder="" id="id" require="">
                                    <br>
                                    <div class="form-group col-md-6">
                                        <b><label for=""style="color:#3B0B17">NOMBRES COMPLETOS:</label></b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['nombres_privi']))?"is-invalid":"";?>" style="color:#848484" required name="nombres_privi" value="<?php echo $nombres_privi;?>" placeholder="" id="nombres_privi" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['nombres_privi']))?$error['nombres_privi']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <b><label for="" style="color:#3B0B17">USUARIO:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['usuario_privi']))?"is-invalid":"";?>"style="color:#848484"  required name="usuario_privi" value="<?php echo $usuario_privi;?>" placeholder="" id="usuario_privi" require="">
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['usuario_privi']))?$error['usuario_privi']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <b><label for="" style="color:#3B0B17">PASSWORD:</label> </b>
                                        <input type="text" class="font-weight-bold form-control <?php echo (isset($error['pass']))?"is-invalid":"";?>"style="color:#848484"  required name="pass" value="<?php echo $pass;?>" placeholder="" id="pass" require="">
                                        <div class="invalid-feedback">
                                        <?php echo (isset($error['pass']))?$error['pass']:"";?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <b><label for="" style="color:#3B0B17"> ROL USUARIOS:</label> </b>
                                        <select class="font-weight-bold form-control <?php echo (isset($error['rol_id']))?"is-invalid":"";?>" style="color:#848484" required  name="rol_id" value="<?php echo $rol_id;?>" placeholder="" id="rol_id" require="">>
                                                <option value="1">ADMINISTRADOR</option>
                                                <option value="2">USUARIO</option>
                                               								
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo (isset($error['rol_id']))?$error['rol_id']:"";?>
                                        </div>                                            
                                    </div>
                                    <br>
                                                                
                                    <div class="form-group col-md-12">
                                        <b><label for="" style="color:#3B0B17">FOTO USUARIO:</label> </b>
                                        <?php if($foto_usu!=""){ ?> 
                                        
                                        <img class="img-thumbnail rounded mx-auto d-block" width="100px"  src="imagenes_usuarios/<?php echo $foto_usu;?>"/>   
                                        
                                        
                                        <?php } ?>


                                        <input type="file" accept="image/*" class="font-weight-bold form-control"style="color:#0080FF" name="foto_usu" value="<?php echo $foto_usu;?>"  placeholder="" id="foto_usu" require="">
                                    </div>
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
    </div> <!-------------FIN DEL MODAL ACCIONES USUARIOS ----------------------->


     <!------------ TABLA PARA MOSTRAR LOS USUARIOS DEL SISTEMA ----------------->
     
    <div class="container-fluid caja ">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="table-responsive">              
                        <table id="example" class="table table-bordered table-hover  compact stripe" cellspacing="0" width="100%">
                            <thead class="text-center" style="background: rgb(0,65,132); color:#000000";>
                                <tr>
                                
                                    <th>FOTO</th>
                                    <th>NOMBRES COMPLETO</th>
                                    <th>USUARIO</th>
                                    <th>PASSWORD</th>
                                    <th>ROL</th>
                                    <th class="text-center"style="color:#FFFFFF; background:rgb(226,30,72)">ACCIONES</th>
                                </tr>
                            </thead>
                                <?php foreach($listarUsuarios AS $usuarios){?>

                                <tr>
                        
                                    <td><img  width="70px"  height="70px" src="imagenes_usuarios/<?php echo $usuarios['foto_usu']; ?>" /></td>
                                    <td><?php echo $usuarios['nombres_privi'];?></td>
                                    <td><?php echo $usuarios['usuario_privi'];?></td>
                                    <td><?php echo $usuarios['pass'];?></td>
                                    <td><?php echo $usuarios['rol_id'];?></td>
                                    
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $usuarios['id'];?>">                      
                                            <input type="submit" value="Seleccionar" class="btn btn-outline-primary btn-lg btn-block" name="accion">
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
    <!--------LLAMADO DE LOS ARCHIVOS JAVASCRIPT DE LA TABLA, EL DATATABLE Y EL MODAL BOOSTRAP-----> 

        <script src="../modulo_empleados/bootstra/js/jquery-3.3.1.min.js"></script>
        <script src="../modulo_empleados/bootstra/js/bootstrap.min.js"></script> 
        <script src="../modulo_empleados/plugins/datatable_js/jquery.dataTables.min.js"></script>
        <script src="../modulo_empleados/plugins/datatable_js/dataTables.bootstrap4.min.js"></script>
        <script src="../modulo_empleados/plugins/datatable_js/bca26d2fca.js"></script>
        <script src="../modulo_empleados/plugins/datatable_js/dataTables.buttons.min.js"></script>
        <script src="../modulo_empleados/plugins/datatable_js/jszip.min.js"></script> 
        <script src="../modulo_empleados/plugins/datatable_js/pdfmake.min.js"></script>
        <script src="../modulo_empleados/plugins/datatable_js/vfs_fonts.js"></script>
        <script src="../modulo_empleados/plugins/datatable_js/buttons.html5.min.js"></script>  
        <script src="../modulo_empleados/bootstra/js/popper.min.js"></script>       
         
        
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

            "lengthMenu":		[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
			"iDisplayLength":	5,
			"bJQueryUI":		false,


             //para usar los botones   
            responsive: "true",
            // dom: 'Bfrtilp',       
            buttons:[ 
                        {
                            extend:    'excelHtml5',
                            text:      '<i class="fas fa-file-excel"></i> ',
                            titleAttr: 'Exportar a Excel',
                            className: 'btn btn-success'
                        },
                        {
                            extend:    'pdfHtml5',
                            text:      '<i class="fas fa-file-pdf"></i> ',
                            titleAttr: 'Exportar a PDF',
                            className: 'btn btn-danger'

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