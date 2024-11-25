<?php

session_start();

include 'conexion.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
// Encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);


$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $usuario;
    header("location: ../menu_inicial.php");  
    exit; 
} else{
    echo'
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
        </script>
    ';
    exit;
}

?>
