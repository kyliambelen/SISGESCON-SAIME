<?php
    error_reporting(0);


    $id=(isset($_POST['id'])) ? $_POST['id']:"";
    $cedula_func=(isset($_POST['cedula_func'])) ? $_POST['cedula_func']:"";
    $nombres_func=(isset($_POST['nombres_func'])) ? $_POST['nombres_func']:"";
    $sede_func=(isset($_POST['sede_func'])) ? $_POST['sede_func']:"";
    $estudios_func=(isset($_POST['estudios_func'])) ? $_POST['estudios_func']:"";
    $areaEstudios_func=(isset($_POST['areaEstudios_func'])) ? $_POST['areaEstudios_func']:"";
    $titulo_func=(isset($_POST['titulo_func'])) ? $_POST['titulo_func']:"";
    $condicion_func=(isset($_POST['condicion_func'])) ? $_POST['condicion_func']:"";
    $nivelPost_func=(isset($_POST['nivelPost_func'])) ? $_POST['nivelPost_func']:"";
    $foto_func=(isset($_FILES['foto_func']['name'])) ? $_FILES['foto_func']['name']:"";

    $accion=(isset($_POST['accion'])) ? $_POST['accion']:"";

    $error = array();

    $accionAgregar="";
    $accionModificar=$accionEliminar=$accionCancelar="disabled";
    $mostrarModal = false;

        include ("baseDatos/conexion.php");
    
    switch($accion){

        case "btnAgregar":

                if($cedula_func==""){
                    $error['cedula_func']= "Debe escribir el número de la  cédula";
                }
                    
                if($nombres_func==""){
                    $error['nombres_func']= "Debe escribir los Nombres del Funcionario";
                }
                                                       
                if($sede_func==""){
                    $error['sede_func']= "Seleccione la Oficina a la cual Pertenece";
                }
                if($estudios_func==""){
                    $error['estudios_func']= "Seleccione que estudia";
                }
                if($areaEstudios_func==""){
                    $error['areaEstudios_func']= "Seleccione el area de estudios";
                }
                if($titulo_func==""){
                    $error['titulo_func']= "Seleccione el area de estudios";
                }
                if($condicion_func==""){
                    $error['condicion_func']= "Seleccione cual es la Condicion del estudio";
                }
                if($nivelPost_func==""){
                    $error['nivelPost_func']= "Seleccione el nivel de post grado realizado ";
                }
               
                if(count($error)>0 ){
                    $mostrarModal=true;
                    break;
                }
           
                $sentencia= $pdo->prepare("INSERT INTO estudios(cedula_func, nombres_func, sede_func, estudios_func, areaEstudios_func, titulo_func, condicion_func, nivelPost_func, foto_func)
                                            VALUES (:cedula_func, :nombres_func, :sede_func, :estudios_func, :areaEstudios_func, :titulo_func, :condicion_func, :nivelPost_func, :foto_func)");

                    $sentencia->bindParam(':cedula_func', $cedula_func);
                    $sentencia->bindParam(':nombres_func', $nombres_func);                  
                    $sentencia->bindParam(':sede_func', $sede_func);
                    $sentencia->bindParam(':estudios_func', $estudios_func); 
                    $sentencia->bindParam(':areaEstudios_func', $areaEstudios_func);
                    $sentencia->bindParam(':titulo_func', $titulo_func);
                    $sentencia->bindParam(':condicion_func', $condicion_func);
                    $sentencia->bindParam(':nivelPost_func', $nivelPost_func);      
                   
                    $fecha= new DateTime();
                    $nombreArchivo= ($foto_func!="")? $fecha->getTimestamp()."_".$_FILES['foto_func']['name']:"imagen.jpg";
                    $tempFoto= $_FILES['foto_func']['tmp_name'];

                    if($tempFoto!=""){
                        move_uploaded_file($tempFoto,"imagenes/imagenesEstudios/".$nombreArchivo);
                    }
                    
                    $sentencia->bindParam(':foto_func', $nombreArchivo);

                    $sentencia->execute();
                              
                    header ("location:informacionAcademica.php");  
        break;

        case "btnModificar":

            $sentencia= $pdo->prepare("UPDATE estudios SET
             cedula_func= :cedula_func,
             nombres_func= :nombres_func,
             sede_func= :sede_func,
             estudios_func= :estudios_func,
             areaEstudios_func= :areaEstudios_func,
             titulo_func= :titulo_func,
             condicion_func= :condicion_func,
             nivelPost_func= :nivelPost_func  WHERE id=:id  ");
              
             
             

            $sentencia->bindParam(':cedula_func', $cedula_func);
            $sentencia->bindParam(':nombres_func', $nombres_func);
            $sentencia->bindParam(':sede_func', $sede_func);
            $sentencia->bindParam(':estudios_func', $estudios_func);
            $sentencia->bindParam(':areaEstudios_func', $areaEstudios_func);
            $sentencia->bindParam(':titulo_func', $titulo_func);
            $sentencia->bindParam(':condicion_func', $condicion_func);
            $sentencia->bindParam(':nivelPost_func', $nivelPost_func);
            
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            $fecha= new DateTime();
                $nombreArchivo= ($foto_func!="")? $fecha->getTimestamp()."_".$_FILES['foto_func']['name']:"imagen.jpg";
                $tempFoto= $_FILES['foto_func']['tmp_name'];

                if($tempFoto!=""){
                    move_uploaded_file($tempFoto,"imagenes/imagenesEstudios/".$nombreArchivo);

                    $sentencia= $pdo->prepare("SELECT foto_func FROM estudios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $estudios=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($estudios['foto_func'])){
                    if(file_exists("imagenes/imagenesEstudios/".$estudios['foto_func'])){

                        if($estudios['foto_func']!="imagen.jpg") {  
                            unlink("imagenes/imagenesEstudios/".$estudios['foto_func']);
                        }
                    }
            }

            $sentencia= $pdo->prepare("UPDATE estudios SET
            foto_func=:foto_func WHERE id=:id");
            
            $sentencia->bindParam(':foto_func', $nombreArchivo);
            $sentencia->bindParam(':id', $id); 
            $sentencia->execute();
                }
            header ("location:informacionAcademica.php");
           
        break;

        case "btnEliminar":

            $sentencia= $pdo->prepare("SELECT foto_func FROM estudios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $estudios=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($estudios['foto_func'])&&($estudios['foto_func']!="imagen.jpg")){
                    if(file_exists("imagenes/imagenesEstudios/".$estudios['foto_func'])){
                         
                         unlink("imagenes/imagenesEstudios/".$estudios['foto_func']);
                        
                    }
            }
            $sentencia= $pdo->prepare("DELETE FROM estudios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            header ("location:informacionAcademica.php");
                  
        break;

        case "btnCancelar":
            header ("location:informacionAcademica.php");
        break;

        case "Seleccionar":
            $accionAgregar="disabled";
            $accionModificar=$accionEliminar=$accionCancelar="";
            $mostrarModal=true;

            $sentencia= $pdo->prepare("SELECT *FROM estudios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $estudios=$sentencia->fetch(PDO::FETCH_LAZY);

            $cedula_func=$estudios['cedula_func'];
            $nombres_func=$estudios['nombres_func'];
            $sede_func=$estudios['sede_func'];
            $estudios_func=$estudios['estudios_func'];
            $areaEstudios_func=$estudios['areaEstudios_func'];
            $titulo_func=$estudios['titulo_func'];
            $condicion_func=$estudios['condicion_func'];
            $nivelPost_func=$estudios['nivelPost_func'];
               
            $foto_func=$estudios['foto_func'];
           

        break;

    }

        $sentencia= $pdo-> prepare("SELECT `id`,`cedula_func`,`nombres_func`, `sede_func`, `estudios_func`, `areaEstudios_func`, `titulo_func`, `condicion_func`, `nivelPost_func`, `foto_func` FROM `estudios` WHERE 1 ");
        $sentencia->execute();
        $listarEstudios= $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
