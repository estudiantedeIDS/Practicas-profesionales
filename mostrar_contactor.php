<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname="contactores";

//Conexion
$conexion= new mysqli("localhost","root","","contactores");

//Verificar conexion
if($conexion->connect_error){
   die("Conexion fallida: " .$conexion->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando Contactores</title>     
    <link rel="stylesheet" href="css/estilos7.css">     
</head>

<body> 
<center><br><br><br><br><br><br>
<h2>Información general del Contactor:</h2> 
<center>
<br>
<table border=1>
<center>
  <tr>
    <th>Id</th>
    <th>Código del Dispositivo</th>
    <th>Área</th>
    <th>Fecha de compra</th>
    <th>Fecha de Mantenimiento</th>
  </tr>
  <center>
  <?php
//Recoger dato el formulario
$codigo_dispositivo = $_GET['codigo_dispositivo'];

//  Consulta SQL
$sql = "SELECT * FROM dispositivos WHERE codigo_dispositivo ='$codigo_dispositivo'";
$result = $conexion->query($sql);

if($result->num_rows >0){
  //Mostrar datos de cada fila
  while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" .$row['id'] . "</td>";
    echo "<td>" .$row['codigo_dispositivo'] . "</td>";
    echo "<td>" .$row['area'] . "</td>";
    echo "<td>" .$row['fecha_compra'] . "</td>";
    echo "<td>" .$row['fecha_mantto'] . "</td>";
    echo "</tr>";  
  }

}else{
  echo'
        <script>
            alert("Error : Contactor no existe, por favor verifique los datos introducidos..");
            window.location = "ingreso_cod_contactor.php";
        </script>
    ';
    exit;
}
//Cerrando conexión
$conexion->close();

?>
 </table>    
 <center>
<a href="ingreso_cod_contactor.php"><br><br>        
<button type="button" a href>Consultar otro Contactor</button>
</a>
</body>
</html>

<a href="contactores.php"><br><br>        
<button type="button" a href>Regresar a menu anterior</button>
</a>
<center>
<br><br><br>
        <center>
        <img src="Imagenes/contactor.jpg" width="250" >
      </center>

</body>
</html>