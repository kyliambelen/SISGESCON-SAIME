<?php
    error_reporting(0);


    $id=(isset($_POST['id'])) ? $_POST['id']:"";
    $cedula_bene=(isset($_POST['cedula_bene'])) ? $_POST['cedula_bene']:"";
    $nombres_bene=(isset($_POST['nombres_bene'])) ? $_POST['nombres_bene']:"";   
    $talla0=(isset($_POST['talla0'])) ? $_POST['talla0']:"";
    $pantalon0=(isset($_POST['pantalon0'])) ? $_POST['pantalon0']:"";
    $calzado0=(isset($_POST['calzado0'])) ? $_POST['calzado0']:"";
    $nroHijos=(isset($_POST['nroHijos'])) ? $_POST['nroHijos']:"";
    $Hijo1=(isset($_POST['Hijo1'])) ? $_POST['Hijo1']:"";
    $cedula1=(isset($_POST['cedula1'])) ? $_POST['cedula1']:"";
    $fechaNac1=(isset($_POST['fechaNac1'])) ? $_POST['fechaNac1']:"";
    $edad1=(isset($_POST['edad1'])) ? $_POST['edad1']:"";
    $estudios1=(isset($_POST['estudios1'])) ? $_POST['estudios1']:"";
    $tipo1=(isset($_POST['tipo1'])) ? $_POST['tipo1']:""; 
    $nombreInstitucion1=(isset($_POST['nombreInstitucion1'])) ? $_POST['nombreInstitucion1']:""; 
    $rif_institucion1=(isset($_POST['rif_institucion1'])) ? $_POST['rif_institucion1']:""; 
    $nivelEstudios1=(isset($_POST['nivelEstudios1'])) ? $_POST['nivelEstudios1']:""; 
    $talla1=(isset($_POST['talla1'])) ? $_POST['talla1']:""; 
    $pantalon1=(isset($_POST['pantalon1'])) ? $_POST['pantalon1']:""; 
    $calzado1=(isset($_POST['calzado1'])) ? $_POST['calzado1']:"";
    $Hijo2=(isset($_POST['Hijo2'])) ? $_POST['Hijo2']:"";
    $cedula2=(isset($_POST['cedula2'])) ? $_POST['cedula2']:"";
    $fechaNac2=(isset($_POST['fechaNac2'])) ? $_POST['fechaNac2']:"";
    $edad2=(isset($_POST['edad2'])) ? $_POST['edad2']:"";
    $estudios2=(isset($_POST['estudios2'])) ? $_POST['estudios2']:"";
    $tipo2=(isset($_POST['tipo2'])) ? $_POST['tipo2']:""; 
    $nombreInstitucion2=(isset($_POST['nombreInstitucion2'])) ? $_POST['nombreInstitucion2']:""; 
    $rif_institucion2=(isset($_POST['rif_institucion2'])) ? $_POST['rif_institucion2']:""; 
    $nivelEstudios2=(isset($_POST['nivelEstudios2'])) ? $_POST['nivelEstudios2']:""; 
    $talla2=(isset($_POST['talla2'])) ? $_POST['talla2']:""; 
    $pantalon2=(isset($_POST['pantalon2'])) ? $_POST['pantalon2']:""; 
    $calzado2=(isset($_POST['calzado2'])) ? $_POST['calzado2']:"";
    $Hijo3=(isset($_POST['Hijo3'])) ? $_POST['Hijo3']:"";
    $cedula3=(isset($_POST['cedula3'])) ? $_POST['cedula3']:"";
    $fechaNac3=(isset($_POST['fechaNac3'])) ? $_POST['fechaNac3']:"";
    $edad3=(isset($_POST['edad3'])) ? $_POST['edad3']:"";
    $estudios3=(isset($_POST['estudios3'])) ? $_POST['estudios3']:"";
    $tipo3=(isset($_POST['tipo3'])) ? $_POST['tipo3']:""; 
    $nombreInstitucion3=(isset($_POST['nombreInstitucion3'])) ? $_POST['nombreInstitucion3']:""; 
    $rif_institucion3=(isset($_POST['rif_institucion3'])) ? $_POST['rif_institucion3']:""; 
    $nivelEstudios3=(isset($_POST['nivelEstudios3'])) ? $_POST['nivelEstudios3']:""; 
    $talla3=(isset($_POST['talla3'])) ? $_POST['talla3']:""; 
    $pantalon3=(isset($_POST['pantalon3'])) ? $_POST['pantalon3']:""; 
    $calzado3=(isset($_POST['calzado3'])) ? $_POST['calzado3']:"";
    $Hijo4=(isset($_POST['Hijo4'])) ? $_POST['Hijo4']:"";
    $cedula4=(isset($_POST['cedula4'])) ? $_POST['cedula4']:"";
    $fechaNac4=(isset($_POST['fechaNac4'])) ? $_POST['fechaNac4']:"";
    $edad4=(isset($_POST['edad4'])) ? $_POST['edad4']:"";
    $estudios4=(isset($_POST['estudios4'])) ? $_POST['estudios4']:"";
    $tipo4=(isset($_POST['tipo4'])) ? $_POST['tipo4']:""; 
    $nombreInstitucion4=(isset($_POST['nombreInstitucion4'])) ? $_POST['nombreInstitucion4']:""; 
    $rif_institucion4=(isset($_POST['rif_institucion4'])) ? $_POST['rif_institucion4']:""; 
    $nivelEstudios4=(isset($_POST['nivelEstudios4'])) ? $_POST['nivelEstudios4']:""; 
    $talla4=(isset($_POST['talla4'])) ? $_POST['talla4']:""; 
    $pantalon4=(isset($_POST['pantalon4'])) ? $_POST['pantalon4']:""; 
    $calzado4=(isset($_POST['calzado4'])) ? $_POST['calzado4']:"";
    $Hijo5=(isset($_POST['Hijo5'])) ? $_POST['Hijo5']:"";
    $cedula5=(isset($_POST['cedula5'])) ? $_POST['cedula5']:"";
    $fechaNac5=(isset($_POST['fechaNac5'])) ? $_POST['fechaNac5']:"";
    $edad5=(isset($_POST['edad5'])) ? $_POST['edad5']:"";
    $estudios5=(isset($_POST['estudios5'])) ? $_POST['estudios5']:"";
    $tipo5=(isset($_POST['tipo5'])) ? $_POST['tipo5']:""; 
    $nombreInstitucion5=(isset($_POST['nombreInstitucion5'])) ? $_POST['nombreInstitucion5']:""; 
    $rif_institucion5=(isset($_POST['rif_institucion5'])) ? $_POST['rif_institucion5']:""; 
    $nivelEstudios5=(isset($_POST['nivelEstudios5'])) ? $_POST['nivelEstudios5']:""; 
    $talla5=(isset($_POST['talla5'])) ? $_POST['talla5']:""; 
    $pantalon5=(isset($_POST['pantalon5'])) ? $_POST['pantalon5']:""; 
    $calzado5=(isset($_POST['calzado5'])) ? $_POST['calzado5']:""; 
    $Hijo6=(isset($_POST['Hijo6'])) ? $_POST['Hijo6']:"";
    $cedula6=(isset($_POST['cedula6'])) ? $_POST['cedula6']:"";
    $fechaNac6=(isset($_POST['fechaNac6'])) ? $_POST['fechaNac6']:"";
    $edad6=(isset($_POST['edad6'])) ? $_POST['edad6']:"";
    $estudios6=(isset($_POST['estudios6'])) ? $_POST['estudios6']:"";
    $tipo6=(isset($_POST['tipo6'])) ? $_POST['tipo6']:""; 
    $nombreInstitucion6=(isset($_POST['nombreInstitucion6'])) ? $_POST['nombreInstitucion6']:""; 
    $rif_institucion6=(isset($_POST['rif_institucion6'])) ? $_POST['rif_institucion6']:""; 
    $nivelEstudios6=(isset($_POST['nivelEstudios6'])) ? $_POST['nivelEstudios6']:""; 
    $talla6=(isset($_POST['talla6'])) ? $_POST['talla6']:""; 
    $pantalon6=(isset($_POST['pantalon6'])) ? $_POST['pantalon6']:""; 
    $calzado6=(isset($_POST['calzado6'])) ? $_POST['calzado6']:"";
    
    $accion=(isset($_POST['accion'])) ? $_POST['accion']:"";

    $error = array();

    $accionAgregar="";
    $accionModificar=$accionEliminar=$accionCancelar="disabled";
    $mostrarModal = false;

        include ("baseDatos/conexion.php");
    
    switch($accion){

        case "btnAgregar":
           
                $sentencia= $pdo->prepare("INSERT INTO datos_anexos(cedula_bene, nombres_bene, talla0, pantalon0, calzado0, nroHijos, Hijo1, cedula1, fechaNac1, edad1, estudios1, tipo1, nombreInstitucion1, rif_institucion1, nivelEstudios1, talla1, pantalon1, calzado1, Hijo2, cedula2, fechaNac2, edad2, estudios2, tipo2, nombreInstitucion2, rif_institucion2, nivelEstudios2, talla2, pantalon2, calzado2, Hijo3, cedula3, fechaNac3, edad3, estudios3, tipo3, nombreInstitucion3, rif_institucion3, nivelEstudios3, talla3, pantalon3, calzado3, Hijo4, cedula4, fechaNac4, edad4, estudios4, tipo4, nombreInstitucion4, rif_institucion4, nivelEstudios4, talla4, pantalon4, calzado4, Hijo5, cedula5, fechaNac5, edad5, estudios5, tipo5, nombreInstitucion5, rif_institucion5, nivelEstudios5, talla5, pantalon5, calzado5, Hijo6, cedula6, fechaNac6, edad6, estudios6, tipo6, nombreInstitucion6, rif_institucion6, nivelEstudios6, talla6, pantalon6, calzado6)
                                            VALUES (:cedula_bene, :nombres_bene, :talla0, :pantalon0, :calzado0, :nroHijos, :Hijo1, :cedula1, :fechaNac1, :edad1, :estudios1, :tipo1, :nombreInstitucion1, :rif_institucion1, :nivelEstudios1, :talla1, :pantalon1, :calzado1, :Hijo2, :cedula2, :fechaNac2, :edad2, :estudios2, :tipo2, :nombreInstitucion2, :rif_institucion2, :nivelEstudios2, :talla2, :pantalon2, :calzado2, :Hijo3, :cedula3, :fechaNac3, :edad3, :estudios3, :tipo3, :nombreInstitucion3, :rif_institucion3, :nivelEstudios3, :talla3, :pantalon3, :calzado3, :Hijo4, :cedula4, :fechaNac4, :edad4, :estudios4, :tipo4, :nombreInstitucion4, :rif_institucion4, :nivelEstudios4, :talla4, :pantalon4, :calzado4, :Hijo5, :cedula5, :fechaNac5, :edad5, :estudios5, :tipo5, :nombreInstitucion5, :rif_institucion5, :nivelEstudios5, :talla5, :pantalon5, :calzado5, :Hijo6, :cedula6, :fechaNac6, :edad6, :estudios6, :tipo6, :nombreInstitucion6, :rif_institucion6, :nivelEstudios6, :talla6, :pantalon6, :calzado6)");

                    $sentencia->bindParam(':cedula_bene', $cedula_bene);
                    $sentencia->bindParam(':nombres_bene', $nombres_bene);                  
                    $sentencia->bindParam(':talla0', $talla0);
                    $sentencia->bindParam(':pantalon0', $pantalon0);
                    $sentencia->bindParam(':calzado0', $calzado0);                   
                    $sentencia->bindParam(':nroHijos', $nroHijos);
                    $sentencia->bindParam(':Hijo1', $Hijo1);
                    $sentencia->bindParam(':cedula1', $cedula1);
                    $sentencia->bindParam(':fechaNac1', $fechaNac1);
                    $sentencia->bindParam(':edad1', $edad1);
                    $sentencia->bindParam(':estudios1', $estudios1);
                    $sentencia->bindParam(':tipo1', $tipo1);
                    $sentencia->bindParam(':nombreInstitucion1', $nombreInstitucion1);
                    $sentencia->bindParam(':rif_institucion1', $rif_institucion1);
                    $sentencia->bindParam(':nivelEstudios1', $nivelEstudios1);
                    $sentencia->bindParam(':talla1', $talla1);
                    $sentencia->bindParam(':pantalon1', $pantalon1);
                    $sentencia->bindParam(':calzado1', $calzado1);
                    $sentencia->bindParam(':Hijo2', $Hijo2);
                    $sentencia->bindParam(':cedula2', $cedula2);
                    $sentencia->bindParam(':fechaNac2', $fechaNac2);
                    $sentencia->bindParam(':edad2', $edad2);
                    $sentencia->bindParam(':estudios2', $estudios2);
                    $sentencia->bindParam(':tipo2', $tipo2);
                    $sentencia->bindParam(':nombreInstitucion2', $nombreInstitucion2);
                    $sentencia->bindParam(':rif_institucion2', $rif_institucion2);
                    $sentencia->bindParam(':nivelEstudios2', $nivelEstudios2);
                    $sentencia->bindParam(':talla2', $talla2);
                    $sentencia->bindParam(':pantalon2', $pantalon2);
                    $sentencia->bindParam(':calzado2', $calzado2);
                    $sentencia->bindParam(':Hijo3', $Hijo3);
                    $sentencia->bindParam(':cedula3', $cedula3);
                    $sentencia->bindParam(':fechaNac3', $fechaNac3);
                    $sentencia->bindParam(':edad3', $edad3);
                    $sentencia->bindParam(':estudios3', $estudios3);
                    $sentencia->bindParam(':tipo3', $tipo3);
                    $sentencia->bindParam(':nombreInstitucion3', $nombreInstitucion3);
                    $sentencia->bindParam(':rif_institucion3', $rif_institucion3);
                    $sentencia->bindParam(':nivelEstudios3', $nivelEstudios3);
                    $sentencia->bindParam(':talla3', $talla3);
                    $sentencia->bindParam(':pantalon3', $pantalon3);
                    $sentencia->bindParam(':calzado3', $calzado3);
                    $sentencia->bindParam(':Hijo4', $Hijo4);
                    $sentencia->bindParam(':cedula4', $cedula4);
                    $sentencia->bindParam(':fechaNac4', $fechaNac4);
                    $sentencia->bindParam(':edad4', $edad4);
                    $sentencia->bindParam(':estudios4', $estudios4);
                    $sentencia->bindParam(':tipo4', $tipo4);
                    $sentencia->bindParam(':nombreInstitucion4', $nombreInstitucion4);
                    $sentencia->bindParam(':rif_institucion4', $rif_institucion4);
                    $sentencia->bindParam(':nivelEstudios4', $nivelEstudios4);
                    $sentencia->bindParam(':talla4', $talla4);
                    $sentencia->bindParam(':pantalon4', $pantalon4);
                    $sentencia->bindParam(':calzado4', $calzado4);
                    $sentencia->bindParam(':Hijo5', $Hijo5);
                    $sentencia->bindParam(':cedula5', $cedula5);
                    $sentencia->bindParam(':fechaNac5', $fechaNac5);
                    $sentencia->bindParam(':edad5', $edad5);
                    $sentencia->bindParam(':estudios5', $estudios5);
                    $sentencia->bindParam(':tipo5', $tipo5);
                    $sentencia->bindParam(':nombreInstitucion5', $nombreInstitucion5);
                    $sentencia->bindParam(':rif_institucion5', $rif_institucion5);
                    $sentencia->bindParam(':nivelEstudios5', $nivelEstudios5);
                    $sentencia->bindParam(':talla5', $talla5);
                    $sentencia->bindParam(':pantalon5', $pantalon5);
                    $sentencia->bindParam(':calzado5', $calzado5);
                    $sentencia->bindParam(':Hijo6', $Hijo6);
                    $sentencia->bindParam(':cedula6', $cedula6);
                    $sentencia->bindParam(':fechaNac6', $fechaNac6);
                    $sentencia->bindParam(':edad6', $edad6);
                    $sentencia->bindParam(':estudios6', $estudios6);
                    $sentencia->bindParam(':tipo6', $tipo6);
                    $sentencia->bindParam(':nombreInstitucion6', $nombreInstitucion6);
                    $sentencia->bindParam(':rif_institucion6', $rif_institucion6);
                    $sentencia->bindParam(':nivelEstudios6', $nivelEstudios6);
                    $sentencia->bindParam(':talla6', $talla6);
                    $sentencia->bindParam(':pantalon6', $pantalon6);
                    $sentencia->bindParam(':calzado6', $calzado6);
                    
                   
                    $sentencia->execute();
                              
                    header ("location:tabladatosAnexos.php");  
        break;

        case "btnModificar":

            $sentencia= $pdo->prepare("UPDATE datos_anexos SET
             cedula_bene= :cedula_bene,
             nombres_bene= :nombres_bene,           
             talla0= :talla0,
             pantalon0= :pantalon0,
             calzado0= :calzado0,           
             nroHijos= :nroHijos,
             Hijo1= :Hijo1,
             cedula1= :cedula1,
             fechaNac1= :fechaNac1,
             edad1= :edad1,
             estudios1= :estudios1,
             tipo1= :tipo1,
             nombreInstitucion1= :nombreInstitucion1,
             rif_institucion1= :rif_institucion1,
             nivelEstudios1= :nivelEstudios1,
             talla1= :talla1,
             pantalon1= :pantalon1,
             calzado1= :calzado1,
             Hijo2= :Hijo2,
             cedula2= :cedula2,
             fechaNac2= :fechaNac2,
             edad2= :edad2,
             estudios2= :estudios2,
             tipo2= :tipo2,
             nombreInstitucion2= :nombreInstitucion2,
             rif_institucion2= :rif_institucion2,
             nivelEstudios2= :nivelEstudios2,
             talla2= :talla2,
             pantalon2= :pantalon2,
             calzado2= :calzado2,
             Hijo3= :Hijo3,
             cedula3= :cedula3,
             fechaNac3= :fechaNac3,
             edad3= :edad3,
             estudios3= :estudios3,
             tipo3= :tipo3,
             nombreInstitucion3= :nombreInstitucion3,
             rif_institucion3= :rif_institucion3,
             nivelEstudios3= :nivelEstudios3,
             talla3= :talla3,
             pantalon3= :pantalon3,
             calzado3= :calzado3,
             Hijo4= :Hijo4,
             cedula4= :cedula4,
             fechaNac4= :fechaNac4,
             edad4= :edad4,
             estudios4= :estudios4,
             tipo4= :tipo4,
             nombreInstitucion4= :nombreInstitucion4,
             rif_institucion4= :rif_institucion4,
             nivelEstudios4= :nivelEstudios4,
             talla4= :talla4,
             pantalon4= :pantalon4,
             calzado4= :calzado4,
             Hijo5= :Hijo5,
             cedula5= :cedula5,
             fechaNac5= :fechaNac5,
             edad5= :edad5,
             estudios5= :estudios5,
             tipo5= :tipo5,
             nombreInstitucion5= :nombreInstitucion5,
             rif_institucion5= :rif_institucion5,
             nivelEstudios5= :nivelEstudios5,
             talla5= :talla5,
             pantalon5= :pantalon5,
             calzado5= :calzado5,
             Hijo6= :Hijo6,
             cedula6= :cedula6,
             fechaNac6= :fechaNac6,
             edad6= :edad6,
             estudios6= :estudios6,
             tipo6= :tipo6,
             nombreInstitucion6= :nombreInstitucion6,
             rif_institucion6= :rif_institucion6,
             nivelEstudios6= :nivelEstudios6,
             talla6= :talla6,
             pantalon6= :pantalon6,
             calzado6= :calzado6  WHERE id=:id  ");
             
             

             $sentencia->bindParam(':cedula_bene', $cedula_bene);
             $sentencia->bindParam(':nombres_bene', $nombres_bene);           
             $sentencia->bindParam(':talla0', $talla0);
             $sentencia->bindParam(':pantalon0', $pantalon0);
             $sentencia->bindParam(':calzado0', $calzado0);            
             $sentencia->bindParam(':nroHijos', $nroHijos);
             $sentencia->bindParam(':Hijo1', $Hijo1);
             $sentencia->bindParam(':cedula1', $cedula1);
             $sentencia->bindParam(':fechaNac1', $fechaNac1);
             $sentencia->bindParam(':edad1', $edad1);
             $sentencia->bindParam(':estudios1', $estudios1);
             $sentencia->bindParam(':tipo1', $tipo1);
             $sentencia->bindParam(':nombreInstitucion1', $nombreInstitucion1);
             $sentencia->bindParam(':rif_institucion1', $rif_institucion1);
             $sentencia->bindParam(':nivelEstudios1', $nivelEstudios1);
             $sentencia->bindParam(':talla1', $talla1);
             $sentencia->bindParam(':pantalon1', $pantalon1);
             $sentencia->bindParam(':calzado1', $calzado1);
             $sentencia->bindParam(':Hijo2', $Hijo2);
             $sentencia->bindParam(':cedula2', $cedula2);
             $sentencia->bindParam(':fechaNac2', $fechaNac2);
             $sentencia->bindParam(':edad2', $edad2);
             $sentencia->bindParam(':estudios2', $estudios2);
             $sentencia->bindParam(':tipo2', $tipo2);
             $sentencia->bindParam(':nombreInstitucion2', $nombreInstitucion2);
             $sentencia->bindParam(':rif_institucion2', $rif_institucion2);
             $sentencia->bindParam(':nivelEstudios2', $nivelEstudios2);
             $sentencia->bindParam(':talla2', $talla2);
             $sentencia->bindParam(':pantalon2', $pantalon2);
             $sentencia->bindParam(':calzado2', $calzado2);
             $sentencia->bindParam(':Hijo3', $Hijo3);
             $sentencia->bindParam(':cedula3', $cedula3);
             $sentencia->bindParam(':fechaNac3', $fechaNac3);
             $sentencia->bindParam(':edad3', $edad3);
             $sentencia->bindParam(':estudios3', $estudios3);
             $sentencia->bindParam(':tipo3', $tipo3);
             $sentencia->bindParam(':nombreInstitucion3', $nombreInstitucion3);
             $sentencia->bindParam(':rif_institucion3', $rif_institucion3);
             $sentencia->bindParam(':nivelEstudios3', $nivelEstudios3);
             $sentencia->bindParam(':talla3', $talla3);
             $sentencia->bindParam(':pantalon3', $pantalon3);
             $sentencia->bindParam(':calzado3', $calzado3);
             $sentencia->bindParam(':Hijo4', $Hijo4);
             $sentencia->bindParam(':cedula4', $cedula4);
             $sentencia->bindParam(':fechaNac4', $fechaNac4);
             $sentencia->bindParam(':edad4', $edad4);
             $sentencia->bindParam(':estudios4', $estudios4);
             $sentencia->bindParam(':tipo4', $tipo4);
             $sentencia->bindParam(':nombreInstitucion4', $nombreInstitucion4);
             $sentencia->bindParam(':rif_institucion4', $rif_institucion4);
             $sentencia->bindParam(':nivelEstudios4', $nivelEstudios4);
             $sentencia->bindParam(':talla4', $talla4);
             $sentencia->bindParam(':pantalon4', $pantalon4);
             $sentencia->bindParam(':calzado4', $calzado4);
             $sentencia->bindParam(':Hijo5', $Hijo5);
             $sentencia->bindParam(':cedula5', $cedula5);
             $sentencia->bindParam(':fechaNac5', $fechaNac5);
             $sentencia->bindParam(':edad5', $edad5);
             $sentencia->bindParam(':estudios5', $estudios5);
             $sentencia->bindParam(':tipo5', $tipo5);
             $sentencia->bindParam(':nombreInstitucion5', $nombreInstitucion5);
             $sentencia->bindParam(':rif_institucion5', $rif_institucion5);
             $sentencia->bindParam(':nivelEstudios5', $nivelEstudios5);
             $sentencia->bindParam(':talla5', $talla5);
             $sentencia->bindParam(':pantalon5', $pantalon5);
             $sentencia->bindParam(':calzado5', $calzado5);
             $sentencia->bindParam(':Hijo6', $Hijo6);
             $sentencia->bindParam(':cedula6', $cedula6);
             $sentencia->bindParam(':fechaNac6', $fechaNac6);
             $sentencia->bindParam(':edad6', $edad6);
             $sentencia->bindParam(':estudios6', $estudios6);
             $sentencia->bindParam(':tipo6', $tipo6);
             $sentencia->bindParam(':nombreInstitucion6', $nombreInstitucion6);
             $sentencia->bindParam(':rif_institucion6', $rif_institucion6);
             $sentencia->bindParam(':nivelEstudios6', $nivelEstudios6);
             $sentencia->bindParam(':talla6', $talla6);
             $sentencia->bindParam(':pantalon6', $pantalon6);
             $sentencia->bindParam(':calzado6', $calzado6);
           
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $Danexos=$sentencia->fetch(PDO::FETCH_LAZY);
           
            header ("location:tabladatosAnexos.php");
           
        break;

        case "btnEliminar":

            $sentencia= $pdo->prepare("DELETE FROM datos_anexos WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $Danexos=$sentencia->fetch(PDO::FETCH_LAZY);

            header ("location:tabladatosAnexos.php");
                  
        break;

        case "btnCancelar":
            header ("location:tabladatosAnexos.php");
        break;

        case "Seleccionar":
            $accionAgregar="disabled";
            $accionModificar=$accionEliminar=$accionCancelar="";
            $mostrarModal=true;

            $sentencia= $pdo->prepare("SELECT *FROM datos_anexos WHERE id=:id");
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $Danexos=$sentencia->fetch(PDO::FETCH_LAZY);

            $cedula_bene=$Danexos['cedula_bene'];
            $nombres_bene=$Danexos['nombres_bene'];            
            $talla0=$Danexos['talla0'];
            $pantalon0=$Danexos['pantalon0'];
            $calzado0=$Danexos['calzado0'];          
            $nroHijos=$Danexos['nroHijos'];
            $Hijo1=$Danexos['Hijo1'];
            $cedula1=$Danexos['cedula1'];
            $fechaNac1=$Danexos['fechaNac1'];
            $edad1=$Danexos['edad1'];
            $estudios1=$Danexos['estudios1'];
            $tipo1=$Danexos['tipo1'];        
            $nombreInstitucion1=$Danexos['nombreInstitucion1'];
            $rif_institucion1=$Danexos['rif_institucion1'];
            $nivelEstudios1=$Danexos['nivelEstudios1'];
            $talla1=$Danexos['talla1'];
            $pantalon1=$Danexos['pantalon1'];
            $calzado1=$Danexos['calzado1'];
            $Hijo2=$Danexos['Hijo2'];
            $cedula2=$Danexos['cedula2'];
            $fechaNac2=$Danexos['fechaNac2'];
            $edad2=$Danexos['edad2'];
            $estudios2=$Danexos['estudios2'];
            $tipo2=$Danexos['tipo2'];        
            $nombreInstitucion2=$Danexos['nombreInstitucion2'];
            $rif_institucion2=$Danexos['rif_institucion2'];
            $nivelEstudios2=$Danexos['nivelEstudios2'];
            $talla2=$Danexos['talla2'];
            $pantalon2=$Danexos['pantalon2'];
            $calzado2=$Danexos['calzado2'];
            $Hijo3=$Danexos['Hijo3'];
            $cedula3=$Danexos['cedula3'];
            $fechaNac3=$Danexos['fechaNac3'];
            $edad3=$Danexos['edad3'];
            $estudios3=$Danexos['estudios3'];
            $tipo3=$Danexos['tipo3'];        
            $nombreInstitucion3=$Danexos['nombreInstitucion3'];
            $rif_institucion3=$Danexos['rif_institucion3'];
            $nivelEstudios3=$Danexos['nivelEstudios3'];
            $talla3=$Danexos['talla3'];
            $pantalon3=$Danexos['pantalon3'];
            $calzado3=$Danexos['calzado3'];
            $Hijo4=$Danexos['Hijo4'];
            $cedula4=$Danexos['cedula4'];
            $fechaNac4=$Danexos['fechaNac4'];
            $edad4=$Danexos['edad4'];
            $estudios4=$Danexos['estudios4'];
            $tipo4=$Danexos['tipo4'];        
            $nombreInstitucion4=$Danexos['nombreInstitucion4'];
            $rif_institucion4=$Danexos['rif_institucion4'];
            $nivelEstudios4=$Danexos['nivelEstudios4'];
            $talla4=$Danexos['talla4'];
            $pantalon4=$Danexos['pantalon4'];
            $calzado4=$Danexos['calzado4'];
            $Hijo5=$Danexos['Hijo5'];
            $cedula5=$Danexos['cedula5'];
            $fechaNac5=$Danexos['fechaNac5'];
            $edad5=$Danexos['edad5'];
            $estudios5=$Danexos['estudios5'];
            $tipo5=$Danexos['tipo5'];        
            $nombreInstitucion5=$Danexos['nombreInstitucion5'];
            $rif_institucion5=$Danexos['rif_institucion5'];
            $nivelEstudios5=$Danexos['nivelEstudios5'];
            $talla5=$Danexos['talla5'];
            $pantalon5=$Danexos['pantalon5'];
            $calzado5=$Danexos['calzado5'];
            $Hijo6=$Danexos['Hijo6'];
            $cedula6=$Danexos['cedula6'];
            $fechaNac6=$Danexos['fechaNac6'];
            $edad6=$Danexos['edad6'];
            $estudios6=$Danexos['estudios6'];
            $tipo6=$Danexos['tipo6'];        
            $nombreInstitucion6=$Danexos['nombreInstitucion6'];
            $rif_institucion6=$Danexos['rif_institucion6'];
            $nivelEstudios6=$Danexos['nivelEstudios6'];
            $talla6=$Danexos['talla6'];
            $pantalon6=$Danexos['pantalon6'];
            $calzado6=$Danexos['calzado6'];       

        break;

    }

        $sentencia= $pdo-> prepare("SELECT `id`,`cedula_bene`,`nombres_bene`, `talla0`, `pantalon0`, `calzado0`, `nroHijos`,  `Hijo1`, `cedula1`, `fechaNac1`, `edad1`, `estudios1`, `tipo1`, `nombreInstitucion1`,  `rif_institucion1`,  `nivelEstudios1`,  `talla1`,  `pantalon1`,  `calzado1`,  `Hijo2`, `cedula2`, `fechaNac2`, `edad2`, `estudios2`, `tipo2`, `nombreInstitucion2`,  `rif_institucion2`,  `nivelEstudios2`,  `talla2`,  `pantalon2`,  `calzado2`,  `Hijo3`, `cedula3`, `fechaNac3`, `edad3`, `estudios3`, `tipo3`, `nombreInstitucion3`,  `rif_institucion3`,  `nivelEstudios3`,  `talla3`,  `pantalon3`,  `calzado3`,  `Hijo4`, `cedula4`, `fechaNac4`, `edad4`, `estudios4`, `tipo4`, `nombreInstitucion4`,  `rif_institucion4`,  `nivelEstudios4`,  `talla4`,  `pantalon4`,  `calzado4`,  `Hijo5`, `cedula5`, `fechaNac5`, `edad5`, `estudios5`, `tipo5`, `nombreInstitucion5`,  `rif_institucion5`,  `nivelEstudios5`,  `talla5`,  `pantalon5`,  `calzado5`,  `Hijo6`, `cedula6`, `fechaNac6`, `edad6`, `estudios6`, `tipo6`, `nombreInstitucion6`,  `rif_institucion6`,  `nivelEstudios6`,  `talla6`,  `pantalon6`,  `calzado6`  FROM  `datos_anexos` WHERE 1 ");
        $sentencia->execute();
        $listardatosanexos= $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
