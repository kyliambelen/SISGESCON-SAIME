<?php
    error_reporting(0);


    $id=(isset($_POST['id'])) ? $_POST['id']:"";
    $cedula_vac=(isset($_POST['cedula_vac'])) ? $_POST['cedula_vac']:"";
    $nombres_vac=(isset($_POST['nombres_vac'])) ? $_POST['nombres_vac']:"";
    $codigo_vac=(isset($_POST['codigo_vac'])) ? $_POST['codigo_vac']:"";
    $oficina_vac=(isset($_POST['oficina_vac'])) ? $_POST['oficina_vac']:"";
    $fechaIngreso_vac=(isset($_POST['fechaIngreso_vac'])) ? $_POST['fechaIngreso_vac']:"";
    $tiempoServicios_vac=(isset($_POST['tiempoServicios_vac'])) ? $_POST['tiempoServicios_vac']:"";
    $periodo_vac=(isset($_POST['periodo_vac'])) ? $_POST['periodo_vac']:"";
    $fechaInicio_vac=(isset($_POST['fechaInicio_vac'])) ? $_POST['fechaInicio_vac']:"";
    $fechaFin_vac=(isset($_POST['fechaFin_vac'])) ? $_POST['fechaFin_vac']:"";
    $fechaReintegro_vac=(isset($_POST['fechaReintegro_vac'])) ? $_POST['fechaReintegro_vac']:"";
    $totalDias_vac=(isset($_POST['totalDias_vac'])) ? $_POST['totalDias_vac']:"";
    $correo_emp=(isset($_POST['correo_emp'])) ? $_POST['correo_emp']:"";
    $mes_vac=(isset($_POST['mes_vac'])) ? $_POST['mes_vac']:"";
    $mesEfectiva_vac=(isset($_POST['mesEfectiva_vac'])) ? $_POST['mesEfectiva_vac']:"";
    $ano_vac=(isset($_POST['ano_vac'])) ? $_POST['ano_vac']:""; 
    $foto_vac=(isset($_FILES['foto_vac']['name'])) ? $_FILES['foto_vac']['name']:"";

    $accion=(isset($_POST['accion'])) ? $_POST['accion']:"";

    $error = array();

    $accionAgregar="";
    $accionModificar=$accionEliminar=$accionCancelar="disabled";
    $mostrarModal = false;

        include ("baseDatos/conexion.php");
    
    switch($accion){

        case "btnAgregar":

                if($cedula_vac==""){
                    $error['cedula_vac']= "Debe escribir el número de la  cédula";
                }
                    
                if($nombres_vac==""){
                    $error['nombres_vac']= "Debe escribir los Nombres del Funcionario";
                }
                                        
                if($codigo_vac==""){
                    $error['codigo_vac']= "Debe escribir el codigo del Funcionario";
                }                            
                
                if($oficina_vac==""){
                    $error['oficina_vac']= "seleccione la oficina";
                }
                if($fechaIngreso_vac==""){
                    $error['fechaIngreso_vac']= "Coloque la fecha de ingreso al Saime";
                }
                if($tiempoServicios_vac==""){
                    $error['tiempoServicios_vac']= "Ingrese el tiempo de servicio";
                }
                if($periodo_vac==""){
                    $error['periodo_vac']= "Ingrese el periodo de las vacaciones";
                }
                if($fechaInicio_vac==""){
                    $error['fechaInicio_vac']= "Ingrese la fecha de inicio de las vacaciones";
                }
                if($fechaFin_vac==""){
                    $error['fechaFin_vac']= "Ingrese la fecha de finalizacion de las vacaciones ";
                }
                if($fechaReintegro_vac==""){
                    $error['fechaReintegro_vac']= "Ingrese la Fecha de regreso de las vacaaciones";
                }
                if($totalDias_vac==""){
                    $error['totalDias_vac']= "Ingrese el total de dias ";
                }
                if($mes_vac==""){
                    $error['mes_vac']= "Ingrese el mes correspondiente de las vacaciones";
                }
                if($mesEfectiva_vac==""){
                    $error['mesEfectiva_vac']= "Ingrese el mes que toma las vacaciones";
                }
                if($ano_vac==""){
                    $error['ano_vac']= "Ingrese el año de las vacciones";
                }
                               
                if(count($error)>0 ){
                    $mostrarModal=true;
                    break;
                }
           
                $sentencia= $pdo->prepare("INSERT INTO vacaciones(cedula_vac, nombres_vac, codigo_vac, oficina_vac, fechaIngreso_vac, tiempoServicios_vac, periodo_vac, fechaInicio_vac, fechaFin_vac, fechaReintegro_vac, totalDias_vac, mes_vac, mesEfectiva_vac, ano_vac, foto_vac)
                                            VALUES (:cedula_vac, :nombres_vac, :codigo_vac, :oficina_vac, :fechaIngreso_vac, :tiempoServicios_vac, :periodo_vac, :fechaInicio_vac, :fechaFin_vac, :fechaReintegro_vac, :totalDias_vac, :mes_vac, :mesEfectiva_vac, :ano_vac, :foto_vac)");

                    $sentencia->bindParam(':cedula_vac', $cedula_vac);
                    $sentencia->bindParam(':nombres_vac', $nombres_vac);
                    $sentencia->bindParam(':codigo_vac', $codigo_vac);
                    $sentencia->bindParam(':oficina_vac', $oficina_vac);
                    $sentencia->bindParam(':fechaIngreso_vac', $fechaIngreso_vac);
                    $sentencia->bindParam(':tiempoServicios_vac', $tiempoServicios_vac);
                    $sentencia->bindParam(':periodo_vac', $periodo_vac);
                    $sentencia->bindParam(':fechaInicio_vac', $fechaInicio_vac);
                    $sentencia->bindParam(':fechaFin_vac', $fechaFin_vac);
                    $sentencia->bindParam(':fechaReintegro_vac', $fechaReintegro_vac);
                    $sentencia->bindParam(':totalDias_vac', $totalDias_vac);
                    $sentencia->bindParam(':mes_vac', $mes_vac);
                    $sentencia->bindParam(':mesEfectiva_vac', $mesEfectiva_vac);
                    $sentencia->bindParam(':ano_vac', $ano_vac);
                   
                    $fecha= new DateTime();
                    $nombreArchivo= ($foto_vac!="")? $fecha->getTimestamp()."_".$_FILES['foto_vac']['name']:"imagen.jpg";
                    $tempFoto= $_FILES['foto_vac']['tmp_name'];

                    if($tempFoto!=""){
                        move_uploaded_file($tempFoto,"imagenes/imagenesVacaciones/".$nombreArchivo);
                    }
                    
                    $sentencia->bindParam(':foto_vac', $nombreArchivo);

                    $sentencia->execute();
                              
                    header ("location:vacacionesEmpleados.php");  
        break;

        case "btnModificar":

            $sentencia= $pdo->prepare("UPDATE vacaciones SET
             cedula_vac= :cedula_vac,
             nombres_vac= :nombres_vac,
             codigo_vac= :codigo_vac,
             oficina_vac= :oficina_vac,
             fechaIngreso_vac= :fechaIngreso_vac,
             tiempoServicios_vac= :tiempoServicios_vac,
             periodo_vac= :periodo_vac,
             fechaInicio_vac= :fechaInicio_vac,
             fechaFin_vac= :fechaFin_vac,
             fechaReintegro_vac= :fechaReintegro_vac,
             totalDias_vac= :totalDias_vac,
             mes_vac= :mes_vac,
             mesEfectiva_vac= :mesEfectiva_vac,
             ano_vac= :ano_vac  WHERE id=:id  ");
             
             

            $sentencia->bindParam(':cedula_vac', $cedula_vac);
            $sentencia->bindParam(':nombres_vac', $nombres_vac);
            $sentencia->bindParam(':codigo_vac', $codigo_vac);
            $sentencia->bindParam(':oficina_vac', $oficina_vac);
            $sentencia->bindParam(':fechaIngreso_vac', $fechaIngreso_vac);
            $sentencia->bindParam(':tiempoServicios_vac', $tiempoServicios_vac);
            $sentencia->bindParam(':periodo_vac', $periodo_vac);
            $sentencia->bindParam(':fechaInicio_vac', $fechaInicio_vac);
            $sentencia->bindParam(':fechaFin_vac', $fechaFin_vac);
            $sentencia->bindParam(':fechaReintegro_vac', $fechaReintegro_vac);
            $sentencia->bindParam(':totalDias_vac', $totalDias_vac);
            $sentencia->bindParam(':mes_vac', $mes_vac);
            $sentencia->bindParam(':mesEfectiva_vac', $mesEfectiva_vac);
            $sentencia->bindParam(':ano_vac', $ano_vac);
            
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();


            $fecha= new DateTime();
                $nombreArchivo= ($foto_vac!="")? $fecha->getTimestamp()."_".$_FILES['foto_vac']['name']:"imagen.jpg";
                $tempFoto= $_FILES['foto_vac']['tmp_name'];

                if($tempFoto!=""){
                    move_uploaded_file($tempFoto,"imagenes/imagenesVacaciones/".$nombreArchivo);

                    $sentencia= $pdo->prepare("SELECT foto_vac FROM vacaciones WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $vacaciones=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($vacaciones['foto_vac'])){
                    if(file_exists("imagenes/imagenesVacaciones/".$vacaciones['foto_vac'])){

                        if($vacaciones['foto_vac']!="imagen.jpg") {  
                            unlink("imagenes/imagenesVacaciones/".$vacaciones['foto_vac']);
                        }
                    }
            }

            $sentencia= $pdo->prepare("UPDATE vacaciones SET
            foto_vac=:foto_vac WHERE id=:id");
            
            $sentencia->bindParam(':foto_vac', $nombreArchivo);
            $sentencia->bindParam(':id', $id); 
            $sentencia->execute();
                }
            header ("location:vacacionesEmpleados.php");
           
        break;

        case "btnEliminar":

            $sentencia= $pdo->prepare("SELECT foto_vac FROM vacaciones WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $vacaciones=$sentencia->fetch(PDO::FETCH_LAZY);

            IF(isset($vacaciones['foto_vac'])&&($vacaciones['foto_vac']!="imagen.jpg")){
                    if(file_exists("imagenes/imagenesVacaciones/".$vacaciones['foto_vac'])){
                         
                         unlink("imagenes/imagenesVacaciones/".$vacaciones['foto_vac']);
                        
                    }
            }
            $sentencia= $pdo->prepare("DELETE FROM vacaciones WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            header ("location:vacacionesEmpleados.php");
                  
        break;

        case "btnCancelar":
            header ("location:vacacionesEmpleados.php");
        break;

        case "Seleccionar":
            $accionAgregar="disabled";
            $accionModificar=$accionEliminar=$accionCancelar="";
            $mostrarModal=true;

            $sentencia= $pdo->prepare("SELECT *FROM vacaciones WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $vacaciones=$sentencia->fetch(PDO::FETCH_LAZY);

            $cedula_vac=$vacaciones['cedula_vac'];
            $nombres_vac=$vacaciones['nombres_vac'];
            $codigo_vac=$vacaciones['codigo_vac'];
            $oficina_vac=$vacaciones['oficina_vac'];
            $fechaIngreso_vac=$vacaciones['fechaIngreso_vac'];
            $tiempoServicios_vac=$vacaciones['tiempoServicios_vac'];
            $periodo_vac=$vacaciones['periodo_vac'];
            $fechaInicio_vac=$vacaciones['fechaInicio_vac'];
            $fechaFin_vac=$vacaciones['fechaFin_vac'];
            $fechaReintegro_vac=$vacaciones['fechaReintegro_vac'];
            $totalDias_vac=$vacaciones['totalDias_vac'];
            $mes_vac=$vacaciones['mes_vac'];  
            $mesEfectiva_vac=$vacaciones['mesEfectiva_vac'];
            $ano_vac=$vacaciones['ano_vac'];        
            $foto_vac=$vacaciones['foto_vac'];
           

        break;

    }

        $sentencia= $pdo-> prepare("SELECT `id`,`cedula_vac`,`nombres_vac`,`codigo_vac`,`oficina_vac`, `fechaIngreso_vac`, `tiempoServicios_vac`, `periodo_vac`, `fechaInicio_vac`, `fechaFin_vac`, `fechaReintegro_vac`, `totalDias_vac`, `mes_vac`, `mesEfectiva_vac`, `ano_vac`, `foto_vac` FROM `vacaciones` WHERE 1 ");
        $sentencia->execute();
        $listarVacaciones= $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
