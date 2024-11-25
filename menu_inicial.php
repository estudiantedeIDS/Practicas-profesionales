<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
      <script>
           alert("Por favor, debes iniciar sesión...");
           window.location = "index.php";
       </script>
    ';
    
    session_destroy();
    die();
}

?>


<!DOCTYPE html>   <!-- Asi se hace un comentario -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Mantenimiento preventivo</title>
    <link rel="stylesheet" href="css/estilos.css">  
      
    
<!-- <script src="main.js"></script> -->

</head>
<body>  
    
    <div class="fondo"></div>   <!-- Inicio primer Menú -->
   <header>    
    <div class="ancho">
        <div class="logo">
            <p><a href="">MANTENIMIENTO PREVENTIVO ELÉCTRICO</a></p>
        </div>
        <nav>         

            <ul>
            <li><a href="menu2.php">CONSULTAR DISPOSITIVO</a></li>  <!-- Menú de Inicio -->
            <li><a href="servicios.php">SERVICIOS</a></li>           
            <li><a href="acercade.php">ACERCA DE NOSOTROS</a></li>            
            <li><a href="contacto.php">CONTACTO</a></li>        
            </ul>
        </nav>
        
        <a href ="index.php">
        
        <div class button>                    
            <center>
            <button type="button" a href>Regresar a Inicio de sesión</button>                     
            <center>
         </a>           
    </div>

    <center>
        <img src="Imagenes/mantenimiento.jpg" width="1875">
    </center>
    
      
   </body>          
</html>
