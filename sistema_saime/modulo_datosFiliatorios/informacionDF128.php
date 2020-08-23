<?php

    $cedulaID=(isset($_POST['cedulaID'])) ? $_POST['cedulaID']:"";


		        
    include ("../modulo_empleados/baseDatos/conexion.php");
   	

        $sentencia= $pdo-> prepare(" SELECT 
                                            `fecha_actual`,
                                            `cedula_df`,
                                            `fechaExpedicion`,
                                            `nombres_df`, 
                                            `apellidos_df`, 
                                            `estadoCivil_df`,                                     
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
                                        FROM  `datos_filiatorios` 
                                        WHERE cedula_df = $cedulaID");
        $sentencia->execute();
        $buscarDF= $sentencia->fetchAll(PDO::FETCH_ASSOC);

  ?>

    <?php foreach($buscarDF AS $df){?>

 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INFORMACION DF</title>
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
                <th width="2%" scope="col"><a href="#"><img width="60px" src="imgReport/logoDF.jpg"></a></th>
                <th width="98%" scope="col"style="font-size:14px;"> <span align="center">REPÚBLICA BOLIVARIANA DE VENEZUELA</p>
                <span align="center">MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES JUSTICIA Y PAZ </p>   
                <span align="center">SERVICIO ADMINISTRATIVO DE IDENTIFICACIÓN MIGRACIÓN Y EXTRANJERÍA</p>
                <span align="center">CARÚPANO ESTADO SUCRE</p></th>   
                <th width="2%" scope="col"><a href="#"><img width="80px" src="imgReport/logo2DF.png"></a></th>
            </tr>
        
        </table>
        <br>
            <div class="df1">
                <p align="justify" style="font-size:16px;"> DOCUMENTO OTORGADO  EN CARÚPANO,  EL DIA: <?php echo $df['fecha_actual'];?>.</P> 
                <br>
                <br>

                <p align="justify" style="font-size:16px;"> FECHA DE CEDULACION INICIAL: <?php echo $df['fechaExpedicion'];?>.</p>
                <br>
                <br>

                <p align="justify" style="font-size:16px;"> V.- <?php echo $df['cedula_df'];?>&nbsp &nbsp <?php echo $df['nombres_df'];?> <?php echo $df['apellidos_df'];?>&nbsp &nbsp <?php echo $df['estadoCivil_df'];?>&nbsp &nbsp F.N:<?php echo $df['fechaNac_df'];?> </p>
                <br>
                <br>

                <p align="justify" style="font-size:16px;"> PADRES:</p><br>
                <p align="justify" style="font-size:16px;">&nbsp &nbsp <?php echo $df['madre_df'];?></p>
                <p align="justify" style="font-size:16px;">&nbsp &nbsp <?php echo $df['padre_df'];?></p>
                <br>
                <br>

                <p align="justify" style="font-size:16px;">NACIÓ EN: <?php echo $df['lugarNac_df'];?></p>
                <br>
                <br>

                <p style="text-align:left;"><b><u>DOCUMENTOS PRESENTADOS:</u></b></p>
                <p align="justify" style="font-size:14px;"><?php echo $df['documentos1_df'];?></p>
                <p align="justify" style="font-size:14px;"><?php echo $df['documentos2_df'];?></p>
                <p align="justify" style="font-size:14px;"><?php echo $df['documentos3_df'];?></p>
                <p align="justify" style="font-size:14px;"><?php echo $df['documentos4_df'];?></p>
                <p align="justify" style="font-size:14px;"><?php echo $df['documentos5_df'];?></p>
                <p align="justify" style="font-size:14px;"><?php echo $df['documentos6_df'];?></p>
                        
               
            </div>
               
            <div class="pieBanner"> 
                <p align= "center";> <img  src="imgReport/DF9.png"></p>
            </div>

        <?php } ?>

      
    </body>
</html>