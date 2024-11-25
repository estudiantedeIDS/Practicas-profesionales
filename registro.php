<?php   // Registro, almacenando datos en la base de Datos.

include 'conexion.php';   /* acceso al arcchivo conexion.php */

$nombre_completo = $_POST['nombre_completo']; //Variables para almacenar los datos
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
// Encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);



//Verificación que los campos no esten vacíos
if(!empty($nombre_completo) && !empty($correo) && !empty($usuario) && !empty($contrasena)){

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) /*Variable llamada query */
          VALUES('$nombre_completo','$correo','$usuario','$contrasena')"; /*Insertando valores */

//Verificando que el usuario  no se repita en la base de Datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if(mysqli_num_rows($verificar_usuario) >0){
    echo'
      <script>
          alert ("Este usuario ya esta registrado, intenta con otro diferente");
          window.location = "../index.php";
      </script>

    ';
    exit();
    
}
//Verificando que el correo  no se repita en la base de Datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo) >0){
    echo'
      <script>
          alert ("Este correo ya esta registrado, intenta con otro diferente");
          window.location = "../index.php";
      </script>

    ';
    exit();
    
}


$ejecutar = mysqli_query($conexion, $query); /* Ejecutando la variable query creada */

if($ejecutar){ /*window.location(funcion de javascript) nos lleva a index.php despues de mostrar la alerta */
    echo'
         <script>
         alert("Usuario almacenado exitosamente");
         window.location = "../index.php";
         </script>
    ';

}else{ 
    echo'
    <script>
    alert("Inténtelo de nuevo, usuario no almacenado.");  
    window.location = "../index.php";
    </script>
    ';
}
}else{
    echo'
    <script>
    alert("Por favor complete todos los campos.");  
    window.location = "../index.php";
    </script>
    ';
}
// Cerrando la conexión a la base de datos   

mysqli_close($conexion);

?>
