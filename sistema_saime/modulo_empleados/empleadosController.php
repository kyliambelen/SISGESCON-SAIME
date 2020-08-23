<?php
    error_reporting(0);


    $id=(isset($_POST['id'])) ? $_POST['id']:"";
    $cedula_emp=(isset($_POST['cedula_emp'])) ? $_POST['cedula_emp']:"";
    $rif_emp=(isset($_POST['rif_emp'])) ? $_POST['rif_emp']:"";
    $nombres_emp=(isset($_POST['nombres_emp'])) ? $_POST['nombres_emp']:"";
    $sexo_emp=(isset($_POST['sexo_emp'])) ? $_POST['sexo_emp']:"";
    $codigo_emp=(isset($_POST['codigo_emp'])) ? $_POST['codigo_emp']:"";
    $sede_emp=(isset($_POST['sede_emp'])) ? $_POST['sede_emp']:"";
    $cargo_emp=(isset($_POST['cargo_emp'])) ? $_POST['cargo_emp']:"";
    $puesto_emp=(isset($_POST['puesto_emp'])) ? $_POST['puesto_emp']:"";
    $condicion_emp=(isset($_POST['condicion_emp'])) ? $_POST['condicion_emp']:"";
    $estatus_emp=(isset($_POST['estatus_emp'])) ? $_POST['estatus_emp']:"";
    $fechaNAC_emp=(isset($_POST['fechaNAC_emp'])) ? $_POST['fechaNAC_emp']:"";
    $fechaING_emp=(isset($_POST['fechaING_emp'])) ? $_POST['fechaING_emp']:"";
    $nacimientoDIA_emp=(isset($_POST['nacimientoDIA_emp'])) ? $_POST['nacimientoDIA_emp']:"";
    $nacimientoMES_emp=(isset($_POST['nacimientoMES_emp'])) ? $_POST['nacimientoMES_emp']:"";
    $nacimientoANIO_emp=(isset($_POST['nacimientoANIO_emp'])) ? $_POST['nacimientoANIO_emp']:"";
    $edad_emp=(isset($_POST['edad_emp'])) ? $_POST['edad_emp']:"";
    $ingresoDIA_emp=(isset($_POST['ingresoDIA_emp'])) ? $_POST['ingresoDIA_emp']:"";
    $ingresoMES_emp=(isset($_POST['ingresoMES_emp'])) ? $_POST['ingresoMES_emp']:"";
    $ingresoANIO_emp=(isset($_POST['ingresoANIO_emp'])) ? $_POST['ingresoANIO_emp']:"";
    $tiempoSERV_emp=(isset($_POST['tiempoSERV_emp'])) ? $_POST['tiempoSERV_emp']:"";  
    $correo_emp=(isset($_POST['correo_emp'])) ? $_POST['correo_emp']:"";  
    $telefono_emp=(isset($_POST['telefono_emp'])) ? $_POST['telefono_emp']:"";
    $direccion_emp=(isset($_POST['direccion_emp'])) ? $_POST['direccion_emp']:"";
    $conyuge_emp=(isset($_POST['conyuge_emp'])) ? $_POST['conyuge_emp']:""; 
    $foto_emp=(isset($_FILES['foto_emp']['name'])) ? $_FILES['foto_emp']['name']:"";
   
    $accion=(isset($_POST['accion'])) ? $_POST['accion']:"";

    $error = array();

    $accionAgregar="";
    $accionModificar=$accionEliminar=$accionCancelar="disabled";
    $mostrarModal = false;

        include ("baseDatos/conexion.php");

                
    switch($accion){

        case "btnAgregar":

                if($cedula_emp==""){
                    $error['cedula_emp']= "Debe escribir el número de la  cédula";
                }
                if($rif_emp==""){
                    $error['rif_emp']= "Debe escribir el número del  Rif";
                }
                    
                if($nombres_emp==""){
                    $error['nombres_emp']= "Debe escribir los Nombres del Funcionario";
                }
                                        
                if($sexo_emp==""){
                    $error['sexo_emp']= "Debe escribir el Sexo del Funcionario";
                }                            
                
                if($codigo_emp==""){
                    $error['codigo_emp']= "Ingrese el Código de Empleado";
                }
                if($sede_emp==""){
                    $error['sede_emp']= "Seleccione la Oficina a la cual Pertenece";
                }
                if($cargo_emp==""){
                    $error['cargo_emp']= "Seleccione que Cargo Tiene";
                }
                if($puesto_emp==""){
                    $error['puesto_emp']= "Ingrese el Nombre del Puesto de Trabajo";
                }
                if($condicion_emp==""){
                    $error['condicion_emp']= "Seleccione cual es la Condicion de Trabajo";
                }
                if($estatus_emp==""){
                    $error['estatus_emp']= "Seleccione el Estatus ";
                }
                if($fechaNAC_emp==""){
                    $error['fechaNAC_emp']= "Ingrese la fecha de nacimiento";
                }
                if($fechaING_emp==""){
                    $error['fechaING_emp']= "Ingrese la fecha de ingreso al saime";
                }
                if($nacimientoDIA_emp==""){
                    $error['nacimientoDIA_emp']= "Ingrese el dia de nacimiento";
                }
                if($nacimientoMES_emp==""){
                    $error['nacimientoMES_emp']= "Ingrese el mes de nacimiento";
                }
                if($nacimientoANIO_emp==""){
                    $error['nacimientoANIO_emp']= "Ingrese el año de nacimiento";
                }
                if($edad_emp==""){
                    $error['edad_emp']= "Ingrese el la edad del empleado";
                }
                if($ingresoDIA_emp==""){
                    $error['ingresoDIA_emp']= "Ingrese el dia de Ingresó al Saime";
                }
                if($ingresoMES_emp==""){
                    $error['ingresoMES_emp']= "Ingrese el mes que Ingresó al Saime";
                }
                if($ingresoANIO_emp==""){
                    $error['ingresoANIO_emp']= "Agregue el año de ingreso al Saime";
                }
                if($tiempoSERV_emp_emp==""){
                    $error['tiempoSERV_emp']= "Ingrese el año de nacimiento";
                }
                if($correo_emp==""){
                    $error['correo_emp']= "Ingrese el Correo Electrónico";
                }
                
                if($telefono_emp==""){
                    $error['telefono_emp']= "Ingrese al menos un Número de Teléfono";
                }
                if($direccion_emp==""){
                    $error['direccion_emp']= "Ingrese la Dirección del Empleado";
                }
                if($conyuge_emp==""){
                    $error['conyuge_emp']= "Ingrese el nombre del conyuge el empleado";
                }
                
                if(count($error)>0 ){
                    $mostrarModal=true;
                    break;
                }

                
                $sentencia= $pdo->prepare("INSERT INTO empleados(cedula_emp, rif_emp, nombres_emp, sexo_emp, codigo_emp, sede_emp, cargo_emp, puesto_emp, condicion_emp, estatus_emp, fechaNAC_emp, fechaING_emp, nacimientoDIA_emp, nacimientoMES_emp, nacimientoANIO_emp, edad_emp, ingresoDIA_emp, ingresoMES_emp, ingresoANIO_emp, tiempoSERV_emp, correo_emp, telefono_emp, direccion_emp, conyuge_emp, foto_emp)
                                            VALUES (:cedula_emp, :nombres_emp, :sexo_emp, :codigo_emp, :sede_emp, :cargo_emp, :puesto_emp, :condicion_emp, :estatus_emp, :fechaNAC_emp, :fechaING_emp, :nacimientoDIA_emp, :nacimientoMES_emp, :nacimientoANIO_emp, :edad_emp, :ingresoDIA_emp, :ingresoMES_emp, :ingresoANIO_emp, :tiempoSERV_emp, :correo_emp, :telefono_emp, :direccion_emp, :conyuge_emp, :foto_emp)");

                    $sentencia->bindParam(':cedula_emp', $cedula_emp);
                    $sentencia->bindParam(':rif_emp', $rif_emp);
                    $sentencia->bindParam(':nombres_emp', $nombres_emp);
                    $sentencia->bindParam(':sexo_emp', $sexo_emp);
                    $sentencia->bindParam(':codigo_emp', $codigo_emp);
                    $sentencia->bindParam(':sede_emp', $sede_emp);
                    $sentencia->bindParam(':cargo_emp', $cargo_emp);
                    $sentencia->bindParam(':puesto_emp', $puesto_emp);
                    $sentencia->bindParam(':condicion_emp', $condicion_emp);
                    $sentencia->bindParam(':estatus_emp', $estatus_emp);
                    $sentencia->bindParam(':fechaNAC_emp', $fechaNAC_emp);
                    $sentencia->bindParam(':fechaING_emp', $fechaING_emp);
                    $sentencia->bindParam(':nacimientoDIA_emp', $nacimientoDIA_emp);
                    $sentencia->bindParam(':nacimientoMES_emp', $nacimientoMES_emp);
                    $sentencia->bindParam(':nacimientoANIO_emp', $nacimientoANIO_emp);
                    $sentencia->bindParam(':edad_emp', $edad_emp);
                    $sentencia->bindParam(':ingresoDIA_emp', $ingresoDIA_emp);
                    $sentencia->bindParam(':ingresoMES_emp', $ingresoMES_emp);
                    $sentencia->bindParam(':ingresoANIO_emp', $ingresoANIO_emp);
                    $sentencia->bindParam(':tiempoSERV_emp', $tiempoSERV_emp);
                    $sentencia->bindParam(':correo_emp', $correo_emp);          
                    $sentencia->bindParam(':telefono_emp', $telefono_emp);
                    $sentencia->bindParam(':direccion_emp', $direccion_emp);
                    $sentencia->bindParam(':conyuge_emp', $conyuge_emp);
                   
                    $fecha= new DateTime();
                    $nombreArchivo= ($foto_emp!="")? $fecha->getTimestamp()."_".$_FILES['foto_emp']['name']:"imagen.jpg";
                    $tempFoto= $_FILES['foto_emp']['tmp_name'];

                    if($tempFoto!=""){
                        move_uploaded_file($tempFoto,"imagenes/imagenesEmpleados/".$nombreArchivo);
                    }
                    
                    $sentencia->bindParam(':foto_emp', $nombreArchivo);

                    $sentencia->execute();
                              
                    header ("location:tablaEmpleados.php");  
        break;

        case "btnModificar":

            $sentencia= $pdo->prepare("UPDATE empleados SET
             cedula_emp= :cedula_emp,
             rif_emp= :rif_emp,
             nombres_emp= :nombres_emp,
             sexo_emp= :sexo_emp,
             codigo_emp= :codigo_emp,
             sede_emp= :sede_emp,
             cargo_emp= :cargo_emp,
             puesto_emp= :puesto_emp,
             condicion_emp= :condicion_emp,
             estatus_emp= :estatus_emp,
             fechaNAC_emp= :fechaNAC_emp,
             fechaING_emp= :fechaING_emp,
             nacimientoDIA_emp= :nacimientoDIA_emp,
             nacimientoMES_emp= :nacimientoMES_emp,
             nacimientoANIO_emp= :nacimientoANIO_emp,
             edad_emp= :edad_emp,
             ingresoDIA_emp= :ingresoDIA_emp,      
             ingresoMES_emp= :ingresoMES_emp,
             ingresoANIO_emp= :ingresoANIO_emp,
             tiempoSERV_emp= :tiempoSERV_emp,
             correo_emp= :correo_emp,           
             telefono_emp= :telefono_emp,
             direccion_emp= :direccion_emp,
             conyuge_emp= :conyuge_emp  WHERE id=:id  ");
             
             

            $sentencia->bindParam(':cedula_emp', $cedula_emp);
            $sentencia->bindParam(':rif_emp', $rif_emp);
            $sentencia->bindParam(':nombres_emp', $nombres_emp);
            $sentencia->bindParam(':sexo_emp', $sexo_emp);
            $sentencia->bindParam(':codigo_emp', $codigo_emp);
            $sentencia->bindParam(':sede_emp', $sede_emp);
            $sentencia->bindParam(':cargo_emp', $cargo_emp);
            $sentencia->bindParam(':puesto_emp', $puesto_emp);
            $sentencia->bindParam(':condicion_emp', $condicion_emp);
            $sentencia->bindParam(':estatus_emp', $estatus_emp);
            $sentencia->bindParam(':fechaNAC_emp', $fechaNAC_emp);
            $sentencia->bindParam(':fechaING_emp', $fechaING_emp);
            $sentencia->bindParam(':nacimientoDIA_emp', $nacimientoDIA_emp);
            $sentencia->bindParam(':nacimientoMES_emp', $nacimientoMES_emp);
            $sentencia->bindParam(':nacimientoANIO_emp', $nacimientoANIO_emp);
            $sentencia->bindParam(':edad_emp', $edad_emp);
            $sentencia->bindParam(':ingresoDIA_emp', $ingresoDIA_emp);
            $sentencia->bindParam(':ingresoMES_emp', $ingresoMES_emp);
            $sentencia->bindParam(':ingresoANIO_emp', $ingresoANIO_emp);
            $sentencia->bindParam(':tiempoSERV_emp', $tiempoSERV_emp);           
            $sentencia->bindParam(':correo_emp', $correo_emp);           
            $sentencia->bindParam(':telefono_emp', $telefono_emp);
            $sentencia->bindParam(':direccion_emp', $direccion_emp);
            $sentencia->bindParam(':conyuge_emp', $conyuge_emp);
           
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            $fecha= new DateTime();
                $nombreArchivo= ($foto_emp!="")? $fecha->getTimestamp()."_".$_FILES['foto_emp']['name']:"imagen.jpg";
                $tempFoto= $_FILES['foto_emp']['tmp_name'];

                if($tempFoto!=""){
                    move_uploaded_file($tempFoto,"imagenes/imagenesEmpleados/".$nombreArchivo);

                    $sentencia= $pdo->prepare("SELECT foto_emp FROM empleados WHERE id=:id");
                    $sentencia->bindParam(':id', $id);
                    $sentencia->execute();
                    $empleados=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($empleados['foto_emp'])){
                    if(file_exists("imagenes/imagenesEmpleados/".$empleados['foto_emp'])){

                        if($empleados['foto_emp']!="imagen.jpg") {  
                            unlink("imagenes/imagenesEmpleados/".$empleados['foto_emp']);
                        }
                    }
            }

            $sentencia= $pdo->prepare("UPDATE empleados SET
            foto_emp=:foto_emp WHERE id=:id");
            
            $sentencia->bindParam(':foto_emp', $nombreArchivo);
            $sentencia->bindParam(':id', $id); 
            $sentencia->execute();
                }
            header ("location:tablaEmpleados.php");
           
        break;

        case "btnEliminar":

            $sentencia= $pdo->prepare("SELECT foto_emp FROM empleados WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $empleados=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($empleados['foto_emp'])&&($empleados['foto_emp']!="imagen.jpg")){
                    if(file_exists("imagenes/imagenesEmpleados/".$empleados['foto_emp'])){
                         
                         unlink("imagenes/imagenesEmpleados/".$empleados['foto_emp']);
                        
                    }
            }
            $sentencia= $pdo->prepare("DELETE FROM empleados WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            header ("location:tablaEmpleados.php");
                  
        break;

        case "btnCancelar":
            header ("location:tablaEmpleados.php");
        break;

        case "Seleccionar":
            $accionAgregar="disabled";
            $accionModificar=$accionEliminar=$accionCancelar="";
            $mostrarModal=true;

            $sentencia= $pdo->prepare("SELECT *FROM empleados WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $empleados=$sentencia->fetch(PDO::FETCH_LAZY);

            $cedula_emp=$empleados['cedula_emp'];
            $rif_emp=$empleados['rif_emp'];
            $nombres_emp=$empleados['nombres_emp'];
            $sexo_emp=$empleados['sexo_emp'];
            $codigo_emp=$empleados['codigo_emp'];
            $sede_emp=$empleados['sede_emp'];
            $cargo_emp=$empleados['cargo_emp'];
            $puesto_emp=$empleados['puesto_emp'];
            $condicion_emp=$empleados['condicion_emp'];
            $estatus_emp=$empleados['estatus_emp'];
            $fechaNAC_emp=$empleados['fechaNAC_emp'];
            $fechaING_emp=$empleados['fechaING_emp'];
            $nacimientoDIA_emp=$empleados['nacimientoDIA_emp'];
            $nacimientoMES_emp=$empleados['nacimientoMES_emp'];
            $nacimientoANIO_emp=$empleados['nacimientoANIO_emp'];
            $edad_emp=$empleados['edad_emp'];
            $ingresoDIA_emp=$empleados['ingresoDIA_emp'];
            $ingresoMES_emp=$empleados['ingresoMES_emp'];
            $ingresoANIO_emp=$empleados['ingresoANIO_emp'];
            $tiempoSERV_emp=$empleados['tiempoSERV_emp'];     
            $correo_emp=$empleados['correo_emp'];         
            $telefono_emp=$empleados['telefono_emp'];
            $direccion_emp=$empleados['direccion_emp'];   
            $conyuge_emp=$empleados['conyuge_emp'];        
            $foto_emp=$empleados['foto_emp'];
           

        break;

    }

        $sentencia= $pdo-> prepare("SELECT `id`,
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
                                        FROM `empleados` WHERE 1 ");
        $sentencia->execute();
        $listarEmpleados= $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
