<?php

$inc = include("conexion_arrancadores.php");
if($inc){
    $consulta ="SELECT * FROM dispositivos";
    $resultado =mysqli_query($conexion,$consulta);
    if($resultado){
        while ($row = $resultado->fetch_array()){
            $id =$row['id'];
            $codigo_dispositivo =$row['codigo_dispositivo'];
            $area =$row['area']; 
            $fecha_compra =$row['fecha_compra']; 
            $fecha_mantto =$row['fecha_mantto']; 
     ?>            
    <div>
        <h2><?php echo $codigo_dispositivo; ?></h2>        
    </div>
    <p>
       <b>Id: </b> <?php echo $id;?><br>
       <b>Codigo_dispositivo: </b> <?php echo $codigo_dispositivo;?><br>
       <b> Área: </b> <?php echo $area;?><br>
       <b> Fecha de Compra </b> <?php echo $fecha_compra;?><br>
       <b> Fecha de Mantenimiento: </b> <?php echo $fecha_mantto;?><br>
    </p>
    </div>
</div>
    
    <?php
   }
 }
}
?>