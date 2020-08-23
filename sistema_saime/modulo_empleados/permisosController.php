<?php
    error_reporting(0);


    $id=(isset($_POST['id'])) ? $_POST['id']:"";
    $cedula_per=(isset($_POST['cedula_per'])) ? $_POST['cedula_per']:"";
    $nombres_per=(isset($_POST['nombres_per'])) ? $_POST['nombres_per']:"";
    $oficina_per=(isset($_POST['oficina_per'])) ? $_POST['oficina_per']:"";
    $fecha_per=(isset($_POST['fecha_per'])) ? $_POST['fecha_per']:"";
    $tipo_per=(isset($_POST['tipo_per'])) ? $_POST['tipo_per']:"";
    $permisoObligatorio=(isset($_POST['permisoObligatorio'])) ? $_POST['permisoObligatorio']:"";
    $permisoPotestativo=(isset($_POST['permisoPotestativo'])) ? $_POST['permisoPotestativo']:"";
    $diagnostico_per=(isset($_POST['diagnostico_per'])) ? $_POST['diagnostico_per']:"";
    $fechaInicio_per=(isset($_POST['fechaInicio_per'])) ? $_POST['fechaInicio_per']:"";
    $fechaFin_per=(isset($_POST['fechaFin_per'])) ? $_POST['fechaFin_per']:"";
    $horario_per=(isset($_POST['horario_per'])) ? $_POST['horario_per']:"";
    $totalDias_per=(isset($_POST['totalDias_per'])) ? $_POST['totalDias_per']:"";
    $totalHoras_per=(isset($_POST['totalHoras_per'])) ? $_POST['totalHoras_per']:"";
    $institucion_per=(isset($_POST['institucion_per'])) ? $_POST['institucion_per']:"";
    $mes_per=(isset($_POST['mes_per'])) ? $_POST['mes_per']:"";
    $ano_per=(isset($_POST['ano_per'])) ? $_POST['ano_per']:"";
    $foto_per=(isset($_FILES['foto_per']['name'])) ? $_FILES['foto_per']['name']:"";

    $accion=(isset($_POST['accion'])) ? $_POST['accion']:"";

    $error = array();

    $accionAgregar="";
    $accionModificar=$accionEliminar=$accionCancelar="disabled";
    $mostrarModal = false;

        include ("baseDatos/conexion.php");
    
    switch($accion){

        case "btnAgregar":

                if($cedula_per==""){
                    $error['cedula_per']= "Debe escribir el número de la  cédula";
                }
                    
                if($nombres_per==""){
                    $error['nombres_per']= "Debe escribir los Nombres del Funcionario";
                }
                                        
                if($oficina_per==""){
                    $error['oficina_per']= "Debe seleccionar la sede del Funcionario";
                }                            
                
                if($fecha_per==""){
                    $error['fecha_per']= "Ingrese la fecha";
                }
                if($tipo_per==""){
                    $error['tipo_per']= "Ingrese la fecha";
                }
                if($permisoObligatorio==""){
                    $error['permisoObligatorio']= "Seleccione el permiso obligatorio";
                }
                if($permisoPotestativo==""){
                    $error['permisoPotestativo']= "Seleccione el permiso potestativo";
                }
                if($diagnostico_per==""){
                    $error['diagnostico_per']= "Ingrese la fecha";
                }
                if($fechaInicio_per==""){
                    $error['fechaInicio_per']= "Ingrese la fecha de inicio del permiso";
                }
                if($fechaFin_per==""){
                    $error['fechaFin_per']= "Ingrese la fecha que termina el permiso";
                }
                if($horario_per==""){
                    $error['horario_per']= "Seleccione el horario del permiso ";
                }
                if($totalDias_per==""){
                    $error['totalDias_per']= "Ingrese la cantidad de dias";
                }
                if($totalHoras_per==""){
                    $error['totalHoras_per']= "Ingrese la cantidad de horas";
                }
                if($institucion_per==""){
                    $error['institucion_per']= "Ingrese la cantidad de horas";
                }
                if($mes_per==""){
                    $error['mes_per']= "Seleccione el mes";
                }
                if($ano_per==""){
                    $error['ano_per']= "Seleccione el año";
                }
                              
                if(count($error)>0 ){
                    $mostrarModal=true;
                    break;
                }
           
                $sentencia= $pdo->prepare("INSERT INTO permisos (cedula_per, nombres_per, oficina_per, fecha_per, tipo_per, permisoObligatorio, permisoPotestativo, diagnostico_per, fechaInicio_per, fechaFin_per, horario_per, totalDias_per, totalHoras_per, institucion_per, mes_per, ano_per, foto_per)
                                            VALUES (:cedula_per, :nombres_per, :oficina_per, :fecha_per, :tipo_per, :permisoObligatorio, :permisoPotestativo, :diagnostico_per, :fechaInicio_per, :fechaFin_per, :horario_per, :totalDias_per, :totalHoras_per, :institucion_per, :mes_per, :ano_per, :foto_per)");

                    $sentencia->bindParam(':cedula_per', $cedula_per);
                    $sentencia->bindParam(':nombres_per', $nombres_per);
                    $sentencia->bindParam(':oficina_per', $oficina_per);
                    $sentencia->bindParam(':fecha_per', $fecha_per);
                    $sentencia->bindParam(':tipo_per', $tipo_per);
                    $sentencia->bindParam(':permisoObligatorio', $permisoObligatorio);
                    $sentencia->bindParam(':permisoPotestativo', $permisoPotestativo);
                    $sentencia->bindParam(':diagnostico_per', $diagnostico_per);
                    $sentencia->bindParam(':fechaInicio_per', $fechaInicio_per);
                    $sentencia->bindParam(':fechaFin_per', $fechaFin_per);
                    $sentencia->bindParam(':horario_per', $horario_per);
                    $sentencia->bindParam(':totalDias_per', $totalDias_per);
                    $sentencia->bindParam(':totalHoras_per', $totalHoras_per);
                    $sentencia->bindParam(':institucion_per', $institucion_per);
                    $sentencia->bindParam(':mes_per', $mes_per);
                    $sentencia->bindParam(':ano_per', $ano_per);
                             
                    $fecha= new DateTime();
                    $nombreArchivo= ($foto_per!="")? $fecha->getTimestamp()."_".$_FILES['foto_per']['name']:"imagen.jpg";
                    $tempFoto= $_FILES['foto_per']['tmp_name'];

                    if($tempFoto!=""){
                        move_uploaded_file($tempFoto,"imagenes/imagenesPermisos/".$nombreArchivo);
                    }
                    
                    $sentencia->bindParam(':foto_per', $nombreArchivo);

                    $sentencia->execute();
                              
                    header ("location:permisosEmpleados.php");  
        break;

        case "btnModificar":

            $sentencia= $pdo->prepare("UPDATE  permisos  SET
             cedula_per= :cedula_per,
             nombres_per= :nombres_per,
             oficina_per= :oficina_per,
             fecha_per= :fecha_per,
             tipo_per= :tipo_per,
             permisoObligatorio= :permisoObligatorio,
             permisoPotestativo= :permisoPotestativo,
             diagnostico_per= :diagnostico_per,
             fechaInicio_per= :fechaInicio_per,
             fechaFin_per= :fechaFin_per,
             horario_per= :horario_per,
             totalDias_per= :totalDias_per,
             totalHoras_per= :totalHoras_per,
             institucion_per= :institucion_per,
             mes_per= :mes_per,
             ano_per= :ano_per  WHERE id=:id  ");
             
             

             $sentencia->bindParam(':cedula_per', $cedula_per);
             $sentencia->bindParam(':nombres_per', $nombres_per);
             $sentencia->bindParam(':oficina_per', $oficina_per);
             $sentencia->bindParam(':fecha_per', $fecha_per);
             $sentencia->bindParam(':tipo_per', $tipo_per);
             $sentencia->bindParam(':permisoObligatorio', $permisoObligatorio);
             $sentencia->bindParam(':permisoPotestativo', $permisoPotestativo);
             $sentencia->bindParam(':diagnostico_per', $diagnostico_per);
             $sentencia->bindParam(':fechaInicio_per', $fechaInicio_per);
             $sentencia->bindParam(':fechaFin_per', $fechaFin_per);
             $sentencia->bindParam(':horario_per', $horario_per);
             $sentencia->bindParam(':totalDias_per', $totalDias_per);
             $sentencia->bindParam(':totalHoras_per', $totalHoras_per);
             $sentencia->bindParam(':institucion_per', $institucion_per);
             $sentencia->bindParam(':mes_per', $mes_per);
             $sentencia->bindParam(':ano_per', $ano_per);
            
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            $fecha= new DateTime();
                $nombreArchivo= ($foto_per!="")? $fecha->getTimestamp()."_".$_FILES['foto_per']['name']:"imagen.jpg";
                $tempFoto= $_FILES['foto_per']['tmp_name'];

                if($tempFoto!=""){
                    move_uploaded_file($tempFoto,"imagenes/imagenesPermisos/".$nombreArchivo);

                    $sentencia= $pdo->prepare("SELECT foto_per FROM permisos WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $permisos=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($permisos['foto_per'])){
                    if(file_exists("imagenes/imagenesPermisos/".$permisos['foto_per'])){

                        if($permisos['foto_per']!="imagen.jpg") {  
                            unlink("imagenes/imagenesPermisos/".$permisos['foto_per']);
                        }
                    }
            }

            $sentencia= $pdo->prepare("UPDATE  permisos  SET
            foto_per=:foto_per WHERE id=:id");
            
            $sentencia->bindParam(':foto_per', $nombreArchivo);
            $sentencia->bindParam(':id', $id); 
            $sentencia->execute();
                }
            header ("location:permisosEmpleados.php");
           
        break;

        case "btnEliminar":

            $sentencia= $pdo->prepare("SELECT foto_per  FROM permisos WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $permisos=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($permisos['foto_per'])&&($permisos['foto_per']!="imagen.jpg")){
                    if(file_exists("imagenes/imagenesPermisos/".$permisos['foto_per'])){
                         
                         unlink("imagenes/imagenesPermisos/".$permisos['foto_per']);
                        
                    }
            }
            $sentencia= $pdo->prepare("DELETE FROM permisos WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            header ("location: permisosEmpleados.php");
                  
        break;

        case "btnCancelar":
            header ("location: permisosEmpleados.php");
        break;

        case "Seleccionar":
            $accionAgregar="disabled";
            $accionModificar=$accionEliminar=$accionCancelar="";
            $mostrarModal=true;

            $sentencia= $pdo->prepare("SELECT *FROM permisos WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $permisos=$sentencia->fetch(PDO::FETCH_LAZY);

            $cedula_per=$permisos['cedula_per'];
            $nombres_per=$permisos['nombres_per'];
            $oficina_per=$permisos['oficina_per'];
            $fecha_per=$permisos['fecha_per'];
            $tipo_per=$permisos['tipo_per'];
            $permisoObligatorio=$permisos['permisoObligatorio'];
            $permisoPotestativo=$permisos['permisoPotestativo'];
            $diagnostico_per=$permisos['diagnostico_per'];
            $fechaInicio_per=$permisos['fechaInicio_per'];
            $fechaFin_per=$permisos['fechaFin_per'];
            $horario_per=$permisos['horario_per'];
            $totalDias_per=$permisos['totalDias_per'];
            $totalHoras_per=$permisos['totalHoras_per'];
            $institucion_per=$permisos['institucion_per'];
            $mes_per=$permisos['mes_per'];
            $ano_per=$permisos['ano_per'];     
            $foto_per=$permisos['foto_per'];
           

        break;

    }

        $sentencia= $pdo-> prepare("SELECT `id`,`cedula_per`,`nombres_per`,`oficina_per`,`fecha_per`, `tipo_per`, `permisoObligatorio`, `permisoPotestativo`, `diagnostico_per`, `fechaInicio_per`, `fechaFin_per`, `horario_per`, `totalDias_per`, `totalHoras_per`, `institucion_per`, `mes_per`, `ano_per`, `foto_per`  FROM  `permisos` WHERE 1 ");
        $sentencia->execute();
        $listarPermisos= $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
