<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$cedula = (isset($_POST['cedula'])) ? $_POST['cedula'] : '';
$nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : '';
$sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
$tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
$pasaporte = (isset($_POST['pasaporte'])) ? $_POST['pasaporte'] : '';
$ubicacion = (isset($_POST['ubicacion'])) ? $_POST['ubicacion'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$mes = (isset($_POST['mes'])) ? $_POST['mes'] : '';
$ano = (isset($_POST['ano'])) ? $_POST['ano'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$observacion = (isset($_POST['observacion'])) ? $_POST['observacion'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO pasaportes (cedula, nombres, sexo, tipo, pasaporte, ubicacion, fecha, mes, ano, usuario, observacion) VALUES('$cedula', '$nombres', '$sexo', '$tipo', '$pasaporte', '$ubicacion', '$fecha', '$mes', '$ano', '$usuario', '$observacion') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM pasaportes ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE pasaportes SET cedula='$cedula', nombres='$nombres', sexo='$sexo', tipo='$tipo', pasaporte='$pasaporte', ubicacion='$ubicacion', fecha='$fecha', mes='$mes', ano='$ano', usuario='$usuario', observacion='$observacion'   WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM pasaportes WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM pasaportes WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM pasaportes";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 5:    
        $consulta = "SELECT id, cedula, nombres, sexo, tipo, pasaporte, ubicacion, observacion FROM pasaportes";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;