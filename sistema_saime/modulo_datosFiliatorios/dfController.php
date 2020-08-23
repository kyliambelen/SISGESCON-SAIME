<?php
    error_reporting(0);


    $id=(isset($_POST['id'])) ? $_POST['id']:"";
    $fecha_actual=(isset($_POST['fecha_actual'])) ? $_POST['fecha_actual']:"";
    $cedula_df=(isset($_POST['cedula_df'])) ? $_POST['cedula_df']:"";
    $fechaExpedicion=(isset($_POST['fechaExpedicion'])) ? $_POST['fechaExpedicion']:"";
    $fechaNac_df=(isset($_POST['fechaNac_df'])) ? $_POST['fechaNac_df']:"";
    $nombres_df=(isset($_POST['nombres_df'])) ? $_POST['nombres_df']:"";
    $apellidos_df=(isset($_POST['apellidos_df'])) ? $_POST['apellidos_df']:"";
    $estadoCivil_df=(isset($_POST['estadoCivil_df'])) ? $_POST['estadoCivil_df']:"";
    $nacionalidad_df=(isset($_POST['nacionalidad_df'])) ? $_POST['nacionalidad_df']:"";
    $madre_df=(isset($_POST['madre_df'])) ? $_POST['madre_df']:"";
    $padre_df=(isset($_POST['padre_df'])) ? $_POST['padre_df']:"";
    $lugarNac_df=(isset($_POST['lugarNac_df'])) ? $_POST['lugarNac_df']:"";
    $documentos1_df=(isset($_POST['documentos1_df'])) ? $_POST['documentos1_df']:"";
    $documentos2_df=(isset($_POST['documentos2_df'])) ? $_POST['documentos2_df']:"";
    $documentos3_df=(isset($_POST['documentos3_df'])) ? $_POST['documentos3_df']:"";
    $documentos4_df=(isset($_POST['documentos4_df'])) ? $_POST['documentos4_df']:"";
    $documentos5_df=(isset($_POST['documentos5_df'])) ? $_POST['documentos5_df']:"";
    $documentos6_df=(isset($_POST['documentos6_df'])) ? $_POST['documentos6_df']:"";
    
    $jefeOficina=(isset($_POST['jefeOficina'])) ? $_POST['jefeOficina']:"";
    $bancos_df=(isset($_POST['bancos_df'])) ? $_POST['bancos_df']:"";

    $accion=(isset($_POST['accion'])) ? $_POST['accion']:"";
    $error = array();

   
    $accionAgregar="";
    $accionModificar=$accionEliminar=$accionCancelar="disabled";
    $mostrarModal = false;
    $mostrarModal2= false;

        include ("../modulo_empleados/baseDatos/conexion.php");
    
    switch($accion){

        case "btnAgregar":

                if($fecha_actual==""){
                    $error['fecha_actual']= "Debe escribir la fecha de hoy";
                }
                    
                if($cedula_df==""){
                    $error['cedula_df']= "Debe escribir el numero de la cedula";
                }
                                        
                if($fechaExpedicion==""){
                    $error['fechaExpedicion']= "coloque la fecha de expedicion de la cedula";
                } 
                if($fechaNac_df==""){
                    $error['fechaNac_df']= "coloque la fecha de Nacimiento";
                }                              
                
                if($nombres_df==""){
                    $error['nombres_df']= "Ingrese los nombres";
                }
                if($apellidos_df==""){
                    $error['apellidos_df']= "Ingrese los apellidos";
                }
                if($estadoCivil_df==""){
                    $error['estadoCivil_df']= "Coloque el estado civil";
                }
                if($nacionalidad_df==""){
                    $error['nacionalidad_df']= "Ingrese la nacionalidad";
                }
                if($madre_df==""){
                    $error['madre_df']= "Ingrese el nombre de la madre";
                }
                if($padre_df==""){
                    $error['padre_df']= "Ingrese el nombre del padre ";
                }
                if($lugarNac_df==""){
                    $error['lugarNac_df']= "Coloque el lugar de nacimiento";
                }
                
                if($jefeOficina==""){
                    $error['jefeOficina']= "Ingrese el nombre del jefe de la oficina";
                }
                if($bancos_df==""){
                    $error['bancos_df']= "Seleccione el banco donde se deposito el impuesto";
                }
                
                if(count($error)>0 ){
                    $mostrarModal=true;
                    break;
                }
           
                $sentencia= $pdo->prepare("INSERT INTO datos_filiatorios(fecha_actual, cedula_df, fechaExpedicion, fechaNac_df, nombres_df, apellidos_df, estadoCivil_df, nacionalidad_df, madre_df, padre_df, lugarNac_df, documentos1_df, documentos2_df, documentos3_df, documentos4_df, documentos5_df, documentos6_df, jefeOficina, bancos_df)
                                            VALUES (:fecha_actual, :cedula_df, :fechaExpedicion, :fechaNac_df, :nombres_df, :apellidos_df, :estadoCivil_df, :nacionalidad_df, :madre_df, :padre_df, :lugarNac_df, :documentos1_df, :documentos2_df, :documentos3_df, :documentos4_df, :documentos5_df, :documentos6_df, :jefeOficina, :bancos_df)");

                    $sentencia->bindParam(':fecha_actual', $fecha_actual);
                    $sentencia->bindParam(':cedula_df', $cedula_df);
                    $sentencia->bindParam(':fechaExpedicion', $fechaExpedicion);
                    $sentencia->bindParam(':fechaNac_df', $fechaNac_df);
                    $sentencia->bindParam(':nombres_df', $nombres_df);
                    $sentencia->bindParam(':apellidos_df', $apellidos_df);
                    $sentencia->bindParam(':estadoCivil_df', $estadoCivil_df);
                    $sentencia->bindParam(':nacionalidad_df', $nacionalidad_df);
                    $sentencia->bindParam(':madre_df', $madre_df);
                    $sentencia->bindParam(':padre_df', $padre_df);
                    $sentencia->bindParam(':lugarNac_df', $lugarNac_df);
                    $sentencia->bindParam(':documentos1_df', $documentos1_df);
                    $sentencia->bindParam(':documentos2_df', $documentos2_df);
                    $sentencia->bindParam(':documentos3_df', $documentos3_df);
                    $sentencia->bindParam(':documentos4_df', $documentos4_df);
                    $sentencia->bindParam(':documentos5_df', $documentos5_df);
                    $sentencia->bindParam(':documentos6_df', $documentos6_df);
                    $sentencia->bindParam(':jefeOficina', $jefeOficina);
                    $sentencia->bindParam(':bancos_df', $bancos_df);                                   

                    $sentencia->execute();
                              
                    header ("location:tabladatosFiliatorios.php");  
        break;

        case "btnModificar":

            $sentencia= $pdo->prepare("UPDATE datos_filiatorios SET
             fecha_actual= :fecha_actual,
             cedula_df= :cedula_df,
             fechaExpedicion= :fechaExpedicion,
             fechaNac_df= :fechaNac_df,
             nombres_df= :nombres_df,
             apellidos_df= :apellidos_df,
             estadoCivil_df= :estadoCivil_df,
             nacionalidad_df= :nacionalidad_df,
             madre_df= :madre_df,
             padre_df= :padre_df,
             lugarNac_df= :lugarNac_df,
             documentos1_df= :documentos1_df,
             documentos2_df= :documentos2_df,
             documentos3_df= :documentos3_df,
             documentos4_df= :documentos4_df,
             documentos5_df= :documentos5_df,
             documentos6_df= :documentos6_df,
             jefeOficina= :jefeOficina,
             bancos_df= :bancos_df  WHERE id=:id  ");
                        
             $sentencia->bindParam(':fecha_actual', $fecha_actual);
             $sentencia->bindParam(':cedula_df', $cedula_df);
             $sentencia->bindParam(':fechaExpedicion', $fechaExpedicion);
             $sentencia->bindParam(':fechaNac_df', $fechaNac_df);
             $sentencia->bindParam(':nombres_df', $nombres_df);
             $sentencia->bindParam(':apellidos_df', $apellidos_df);
             $sentencia->bindParam(':estadoCivil_df', $estadoCivil_df);
             $sentencia->bindParam(':nacionalidad_df', $nacionalidad_df);
             $sentencia->bindParam(':madre_df', $madre_df);
             $sentencia->bindParam(':padre_df', $padre_df);
             $sentencia->bindParam(':lugarNac_df', $lugarNac_df);
             $sentencia->bindParam(':documentos1_df', $documentos1_df);
             $sentencia->bindParam(':documentos2_df', $documentos2_df);
             $sentencia->bindParam(':documentos3_df', $documentos3_df);
             $sentencia->bindParam(':documentos4_df', $documentos4_df);
             $sentencia->bindParam(':documentos5_df', $documentos5_df);
             $sentencia->bindParam(':documentos6_df', $documentos6_df);
             $sentencia->bindParam(':jefeOficina', $jefeOficina);
             $sentencia->bindParam(':bancos_df', $bancos_df);
           
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            header ("location:tabladatosFiliatorios.php");
           
        break;

        case "btnEliminar":

            $sentencia= $pdo->prepare("DELETE FROM datos_filiatorios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();

            header ("location:tabladatosFiliatorios.php");
                  
        break;

        case "btnCancelar":
            header ("location:tabladatosFiliatorios.php");
        break;

        case "Seleccionar":
            $accionAgregar="disabled";
            $accionModificar=$accionEliminar=$accionCancelar="";
            $mostrarModal=true;

            $sentencia= $pdo->prepare("SELECT *FROM datos_filiatorios WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $df=$sentencia->fetch(PDO::FETCH_LAZY);

            $fecha_actual=$df['fecha_actual'];
            $cedula_df=$df['cedula_df'];
            $fechaExpedicion=$df['fechaExpedicion'];
            $fechaNac_df=$df['fechaNac_df'];
            $nombres_df=$df['nombres_df'];
            $apellidos_df=$df['apellidos_df'];
            $estadoCivil_df=$df['estadoCivil_df'];
            $nacionalidad_df=$df['nacionalidad_df'];
            $madre_df=$df['madre_df'];
            $padre_df=$df['padre_df'];
            $lugarNac_df=$df['lugarNac_df'];
            $documentos1_df=$df['documentos1_df'];
            $documentos2_df=$df['documentos2_df'];
            $documentos3_df=$df['documentos3_df'];
            $documentos4_df=$df['documentos4_df'];
            $documentos5_df=$df['documentos5_df'];
            $documentos6_df=$df['documentos6_df'];
            $jefeOficina=$df['jefeOficina'];
            $bancos_df=$df['bancos_df'];
            
        break;

       

    }

        $sentencia= $pdo-> prepare("SELECT `id`,`fecha_actual`,`cedula_df`,`fechaExpedicion`, `fechaNac_df`, `nombres_df`, `apellidos_df`, `estadoCivil_df`, `nacionalidad_df`,`madre_df`, `padre_df`, `lugarNac_df`, `documentos1_df`, `documentos2_df`, `documentos3_df`, `documentos4_df`, `documentos5_df`, `documentos6_df`, `jefeOficina`, `bancos_df`  FROM  `datos_filiatorios` WHERE 1 ");
        $sentencia->execute();
        $listarDF= $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
