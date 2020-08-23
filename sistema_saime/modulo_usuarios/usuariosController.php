<?php
    error_reporting(0);


    $id=(isset($_POST['id'])) ? $_POST['id']:"";
    $nombres_privi=(isset($_POST['nombres_privi'])) ? $_POST['nombres_privi']:"";
    $usuario_privi=(isset($_POST['usuario_privi'])) ? $_POST['usuario_privi']:"";
    $pass=(isset($_POST['pass'])) ? $_POST['pass']:"";
    $rol_id=(isset($_POST['rol_id'])) ? $_POST['rol_id']:"";   
    $foto_usu=(isset($_FILES['foto_usu']['name'])) ? $_FILES['foto_usu']['name']:"";

    $accion=(isset($_POST['accion'])) ? $_POST['accion']:"";

    $error = array();

    $accionAgregar="";
    $accionModificar=$accionEliminar=$accionCancelar="disabled";
    $mostrarModal = false;

        include ("../modulo_empleados/baseDatos/conexion.php");
    
    switch($accion){

        case "btnAgregar":

                if($nombres_privi==""){
                    $error['nombres_privi']= "Debe escribir el Nombre del Usuario";
                }
                    
                if($usuario_privi==""){
                    $error['usuario_privi']= "Debe escribir el usuario";
                }
                                        
                if($pass==""){
                    $error['pass']= "Debe escribir el password";
                }                            
                
                if($rol_id==""){
                    $error['rol_id']= "Ingrese el Rol del Usuario";
                }
                 
                if(count($error)>0 ){
                    $mostrarModal=true;
                    break;
                }
           
                $sentencia= $pdo->prepare("INSERT INTO usuarios(nombres_privi, usuario_privi, pass, rol_id, foto_usu)
                                            VALUES (:nombres_privi, :usuario_privi, :pass, :rol_id, :foto_usu)");

                    $sentencia->bindParam(':nombres_privi', $nombres_privi);
                    $sentencia->bindParam(':usuario_privi', $usuario_privi);
                    $sentencia->bindParam(':pass', $pass);
                    $sentencia->bindParam(':rol_id', $rol_id);
                              
                    $fecha= new DateTime();
                    $nombreArchivo= ($foto_usu!="")? $fecha->getTimestamp()."_".$_FILES['foto_usu']['name']:"imagen.jpg";
                    $tempFoto= $_FILES['foto_usu']['tmp_name'];

                    if($tempFoto!=""){
                        move_uploaded_file($tempFoto,"imagenes_usuarios/".$nombreArchivo);
                    }
                    
                    $sentencia->bindParam(':foto_usu', $nombreArchivo);

                    $sentencia->execute();
                              
                    header ("location:tablaUsuarios.php");  
        break;

        case "btnModificar":

            $sentencia= $pdo->prepare("UPDATE usuarios SET
             nombres_privi= :nombres_privi,
             usuario_privi= :usuario_privi,
             pass= :pass,
             rol_id= :rol_id WHERE id=:id  ");
               
            $sentencia->bindParam(':nombres_privi', $nombres_privi);
            $sentencia->bindParam(':usuario_privi', $usuario_privi);
            $sentencia->bindParam(':pass', $pass);
            $sentencia->bindParam(':rol_id', $rol_id);            
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            $fecha= new DateTime();
                $nombreArchivo= ($foto_usu!="")? $fecha->getTimestamp()."_".$_FILES['foto_usu']['name']:"imagen.jpg";
                $tempFoto= $_FILES['foto_usu']['tmp_name'];

                if($tempFoto!=""){
                    move_uploaded_file($tempFoto,"imagenes_usuarios/".$nombreArchivo);

            $sentencia= $pdo->prepare("SELECT foto_usu FROM usuarios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $usuarios=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($usuarios['foto_usu'])){
                    if(file_exists("imagenes_usuarios/".$usuarios['foto_usu'])){

                        if($usuarios['foto_usu']!="imagen.jpg") {  
                            unlink("imagenes_usuarios/".$usuarios['foto_usu']);
                        }
                    }
            }

            $sentencia= $pdo->prepare("UPDATE usuarios SET
            foto_usu=:foto_usu WHERE id=:id");
            
            $sentencia->bindParam(':foto_usu', $nombreArchivo);
            $sentencia->bindParam(':id', $id); 
            $sentencia->execute();
                }
            header ("location:tablaUsuarios.php");
           
        break;

        case "btnEliminar":

            $sentencia= $pdo->prepare("SELECT foto_usu FROM usuarios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $usuarios=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($usuarios['foto_usu'])&&($usuarios['foto_usu']!="imagen.jpg")){
                    if(file_exists("imagenes_usuarios/".$usuarios['foto_usu'])){
                         
                         unlink("imagenes_usuarios/".$usuarios['foto_usu']);
                        
                    }
            }
            $sentencia= $pdo->prepare("DELETE FROM usuarios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            header ("location:tablaUsuarios.php");
                  
        break;

        case "btnCancelar":
            header ("location:tablaUsuarios.php");
        break;

        case "Seleccionar":
            $accionAgregar="disabled";
            $accionModificar=$accionEliminar=$accionCancelar="";
            $mostrarModal=true;

            $sentencia= $pdo->prepare("SELECT *FROM usuarios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $usuarios=$sentencia->fetch(PDO::FETCH_LAZY);

            $nombres_privi=$usuarios['nombres_privi'];
            $usuario_privi=$usuarios['usuario_privi'];
            $pass=$usuarios['pass'];
            $rol_id=$usuarios['rol_id'];      
            $foto_usu=$usuarios['foto_usu'];
           
        break;

    }

        $sentencia= $pdo-> prepare("SELECT `id`,`nombres_privi`,`usuario_privi`,`pass`,`rol_id`, `foto_usu` FROM `usuarios` WHERE 1 ");
        $sentencia->execute();
        $listarUsuarios= $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
