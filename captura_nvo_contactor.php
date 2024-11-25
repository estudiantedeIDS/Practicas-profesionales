<?php   // Captura nuevo Contactor, almacenando datos en la base de Datos.

include 'conexion_contactores.php';   /* acceso al archivo conexion */

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


$codigo_dispositivo = $_POST['codigo_dispositivo']; //Variables para almacenar los datos
$area = $_POST['area'];
$fecha_compra = $_POST['fecha_compra'];
$fecha_mantto = $_POST['fecha_mantto'];



//Verificación que los campos no esten vacíos
if(!empty($codigo_dispositivo) && !empty($area) && !empty($fecha_compra) && !empty($fecha_mantto)){

$query = "INSERT INTO dispositivos(codigo_dispositivo, area, fecha_compra, fecha_mantto) /*Variable llamada query */
          VALUES('$codigo_dispositivo','$area','$fecha_compra','$fecha_mantto')"; /*Insertando valores */

//Verificando que el dispositivo no se repita en la base de Datos
$verificar_dispositivo = mysqli_query($conexion, "SELECT * FROM dispositivos WHERE codigo_dispositivo='$codigo_dispositivo'");
if(mysqli_num_rows($verificar_dispositivo) >0){
    echo'
      <script>
          alert ("Este Contactor ya esta capturado, verifique los datos por favor...");
          window.location = "../ingreso_nvo_contactor.php";
      </script>

    ';
    exit();
    
}

$ejecutar = mysqli_query($conexion, $query); /* Ejecutando la variable query creada */

if($ejecutar){ /*window.location(funcion de javascript) nos lleva a index.php despues de mostrar la alerta */
    echo'
         <script>
         alert("contactor almacenado exitosamente");
         window.location = "../menu_op_contactor.php";
         </script>
    ';

}else{ 
    echo'
    <script>
    alert("Error: inténtelo de nuevo, Contactor no almacenado.");  
    window.location = "../menu_op_contactor";
    </script>
    ';
}
}else{
    echo'
    <script>
    alert("Por favor complete todos los campos.");  
    window.location = "../menu_op_contactor.php";
    </script>
    ';
}
// Cerrando la conexión a la base de datos   

mysqli_close($conexion);

?>