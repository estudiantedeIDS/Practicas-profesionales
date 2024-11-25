<?php
$conexion=mysqli_connect("localhost","root","","arrancadores");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando Arrancadores</title>    
    <link rel="stylesheet" href="css/estilos5.css">  
</head>

<body> <br><br><br><br>  
<center>
<h2>Inventario general de Arrancadores:</h2> 
<br>
<center>
<table border=1>
  <tr>
  <center>
    <td>Id</td>
    <td>Código del Dispositivo</td>
    <td>Área</td>
    <td>Fecha de compra</td>
    <td>Fecha de Mantenimiento</td>
  <center>
  </tr>
  <?php
     $sql ="SELECT *FROM dispositivos";
     $result = mysqli_query($conexion,$sql);
     while($mostrar=mysqli_fetch_array($result)){
     ?>
     <tr>
        <td><?php echo $mostrar['id']?></td>
        <td><?php echo $mostrar['codigo_dispositivo']?></td>
        <td><?php echo $mostrar['area']?></td>
        <td><?php echo $mostrar['fecha_compra']?></td>
        <td><?php echo $mostrar['fecha_mantto']?></td>
     </tr>
     <?php
     }
     ?>
</table>

<a href="arrancadores.php">
          <div class button></div><br><br>
          <button type="button" a href>Regresar a menú anterior</button>
        </a>
</body>
</html>

    