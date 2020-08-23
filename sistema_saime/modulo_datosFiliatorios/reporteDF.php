<?php

$cedula=(isset($_POST['cedula'])) ? $_POST['cedula']:"";


		        
include ("../modulo_empleados/baseDatos/conexion.php");
   	

  $sentencia= $pdo-> prepare(" SELECT 
                                     `fecha_actual`,
                                     `cedula_df`,
                                     `fechaExpedicion`,
                                     `nombres_df`, 
                                     `apellidos_df`, 
                                     `estadoCivil_df`, 
                                     `nacionalidad_df`, 
                                     `fechaNac_df`, 
                                     `madre_df`, 
                                     `padre_df`, 
                                     `lugarNac_df`, 
                                     `documentos1_df`,
                                     `documentos2_df`,
                                     `documentos3_df`,
                                     `documentos4_df`,
                                     `documentos5_df`,
                                     `documentos6_df`, 
                                     `jefeOficina`, 
                                     `bancos_df`  
                                FROM `datos_filiatorios` 
                                WHERE cedula_df = $cedula ");
  $sentencia->execute();
  $listarDF= $sentencia->fetchAll(PDO::FETCH_ASSOC);
 
  ?>

<?php foreach($listarDF AS $df){?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OF.29 CARUPANO-SUCRE</title>
  <style>
        .df1{
          width: 800px;
        }
        .pieBanner{
          position: fixed;
          
          bottom: 0;
          width: 100%;
        }
  </style>
 </head>
 <body>
   
  <table width="100%">
  <tr>
    
    <th width="2%" scope="col"><a href="javascript:print()"><img width="60px" src="imgReport/logoDF.jpg"></a></th>
    <th width="98%" scope="col"style="font-size:14px;"> <span align="center">REPÚBLICA BOLIVARIANA DE VENEZUELA</p>
    <span align="center">MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES JUSTICIA Y PAZ </p>   
    <span align="center">SERVICIO ADMINISTRATIVO DE IDENTIFICACIÓN MIGRACIÓN Y EXTRANJERÍA</p>
    <span align="center">CARÚPANO ESTADO SUCRE</p></th>   
    <th width="2%" scope="col"><a href="tablaDatosFiliatorios.php"><img width="80px" src="imgReport/logo2DF.png"></a></th>
  </tr>
  
</table><br>
<div class="df1">
    <p align="justify" style="font-size:16px;">En Carúpano, <?php echo $df['fecha_actual'];?>, el suscrito jefe de oficina SAIME Carúpano estado Sucre,  de  conformidad con la ley de
      Administración Central,  hace constar que en los archivos está resguardada una  Tarjeta  Alfabética   producto   del 
      otorgamiento de la Cédula de Identidad Nro. <?php echo $df['cedula_df'];?>, expedida el <?php echo $df['fechaExpedicion'];?> y sus Datos Filiatorios son los
      siguientes:</p>
      <br>

        <p style="text-align:left; font-size:14px;"><b><u>NOMBRES:</b></u>&nbsp <?php echo $df['nombres_df'];?></p>
    
        <p style="text-align:left; font-size:14px;"><b><u>APELLIDOS:</b></u>&nbsp <?php echo $df['apellidos_df'];?> 
      
        <p style="text-align:left; font-size:14px;"><b><u> ESTADO CIVIL:</b></u>&nbsp <?php echo $df['estadoCivil_df'];?> 
    
        <p style="text-align:left; font-size:14px;"><b><u>NACIONALIDAD:</b></u>&nbsp  <?php echo $df['nacionalidad_df'];?>
      
        <p style="text-align:left;font-size:14px;"><b><u>FECHA NACIMIENTO:</b></u>&nbsp  <?php echo $df['fechaNac_df'];?>
      
        <p style="text-align:left;font-size:14px;"><b><u>MADRE:</b></u>&nbsp  <?php echo $df['madre_df'];?>
      
        <p style="text-align:left;font-size:14px;"><b><u>PADRE:</b></u>&nbsp <?php echo $df['padre_df'];?>
        
        <b><u><p  style="text-align:left;">LUGAR DE NACIMIENTO:</p></u></b>
        <p  style="font-size:14px;"><?php echo $df['lugarNac_df'];?></p>
      
        <p style="text-align:left;"><b><u>DOCUMENTOS PRESENTADOS:</u></b></p>
      
        <p align="justify" style="font-size:14px;"><?php echo $df['documentos1_df'];?></p>
        <p align="justify" style="font-size:14px;"><?php echo $df['documentos2_df'];?></p>
        <p align="justify" style="font-size:14px;"><?php echo $df['documentos3_df'];?></p>
        <p align="justify" style="font-size:14px;"><?php echo $df['documentos4_df'];?></p>
        <p align="justify" style="font-size:14px;"><?php echo $df['documentos5_df'];?></p>
        <p align="justify" style="font-size:14px;"><?php echo $df['documentos6_df'];?></p>
</div>


<div class="pieBanner">

  <p style="text-align:center;">Bolivarianamente,</p>
  <p style="text-align:center;font-size:14px;"><?php echo $df['jefeOficina'];?> </p> 
  <p style="text-align:center;font-size:14px;">JEFE DE OFICINA SAIME CARÚPANO</p>
 
  <p style="text-align:center; font-size:12px;">" Capacidad, eficiencia y eficacia, orientadas a la satisfacción de las necesidades de nuestro pueblo,</p>  
  <p style="text-align:center; font-size:12px;">son los objetivos supremos de nuestra Revolución "</p>
  <p style="text-align:center; font-size:12px;"> Hugo Chavez </p>
  
  
   
    <p style="text-align:center;font-size:14px;"><?php echo $df['bancos_df'];?> </p>
  
      <p align= "center";> <img  src="imgReport/DF9.png"></p>
  </div>
  
  <?php } ?>

</body>


</html>