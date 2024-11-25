<?php   // Captura nuevo Arrancador, almacenando datos en la base de Datos.

include 'conexion_relevadores.php';   /* acceso al archivo conexion.php */

$codigo_dispositivo = $_POST['codigo_dispositivo']; //Variables para almacenar los datos


//Verificación que los campos no esten vacíos
if(!empty($codigo_dispositivo) ){
    
    $stmt = $conexion->prepare("DELETE FROM dispositivos WHERE codigo_dispositivo = ?");
    $stmt->bind_param("s", $codigo_dispositivo);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {

    echo'
         <script>
         alert("Relevador eliminado exitosamente");
         window.location = "../menu_op_relevador.php";
         </script>
    ';

}else {
    echo '
        <script>
        alert("Relevador no existe en la base de datos.");
        window.location = "../menu_op_relevador.php";
        </script>
    ';
   }    
}else{ 
    echo'
    <script>
    alert("Error: inténtelo de nuevo,Relevador no eliminado.");  
    window.location = "../menu_op_relevador.php";
    </script>
    ';
}
}else{
    echo'
    <script>
    alert("Por favor complete todos los campos.");  
    window.location = "../menu_op_relevador.php";
    </script>
    ';
}
// Cerrando la conexión a la base de datos   

mysqli_close($conexion);

?>