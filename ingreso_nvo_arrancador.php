<?php   // Registro, almacenando datos en la base de Datos.

include 'conexion_Arrancadores.php';   /* acceso al arcchivo conexion_Arrancadores.php */

$Id_dispositivo = $_POST['Id_dispositivo']; //Variables para almacenar los datos
$Area = $_POST['Area'];
$Fecha_compra = $_POST['Fecha_compra'];
$Fecha_Mantto = $_POST['Fecha_Mantto'];

//Verificación que los campos no esten vacíos
If(!empty($Id_dispositivo) && !empty($Area) && !empty($Fecha_compra) && !empty($Fecha_Mantto)){

$query = "INSERT INTO dispositivos_arrancadores(Id_dispositivo, Area, Fecha_compra, Fecha_Mantto) /*Variable llamada query */
          VALUES('$Id_dispositivo','$Area','$Fecha_compra','$Fecha_Mantto')"; /*Insertando valores */

$ejecutar = mysqli_query($conexion, $query); /* Ejecutando la variable query creada */

if($ejecutar){ /*window.location(funcion de javascript) nos lleva a index.php despues de mostrar la alerta */
    echo'
         <script>
         alert("Arrancador almacenado exitosamente");
         window.location = "arrancadores.php";
         </script>
    ';

}else{ 
    echo'
    <script>
    alert("Inténtelo de nuevo, Arrancador no almacenado.");  
    window.location = "formulario_nvo_arrancador.php";
    </script>
    ';
}
}else{
    echo'
    <script>
    alert("Por favor complete todos los campos.");  
    window.location = "formulario_nvo_arrancador.php";
    </script>
    ';
}
// Cerrando la conexión a la base de datos   

mysqli_close($conexion);

?>
