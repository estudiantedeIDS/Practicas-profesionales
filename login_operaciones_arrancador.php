<?php

session_start();

include 'conexion_administrador.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
// Encriptamiento de contraseña
//$contrasena = hash('sha512', $contrasena);


$validar_administrador = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'");

if(!$validar_administrador) {
    die("Error en la consulta: " . mysqli_error($conexion));
}



if(mysqli_num_rows($validar_administrador) > 0){
    $_SESSION['usuario'] = $usuario;
    header("location: ../menu_op_arrancador.php");  
    exit; 
} else{
    echo'
        <script>
            alert("Error: Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../operacionesarrancador.php";
        </script>
    ';
    exit;
}

?>