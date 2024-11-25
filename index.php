<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
       
    <main>
      <div class="contenedor">
        <div class="caja_trasera">
            <div class ="caja_trasera_login">                
                <h1>¡Bienvenido!</h1><br><br>
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar a la página</p>
                <button id="btn_inicio_sesion">Iniciar Sesión</button>
            </div>
            <div class="caja_trasera_registro"><br><br><br>
            <br>
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Registrate para que puedas iniciar sesión</p>
                <button id="btn_registro">Registrarse</button>
            </div>
        </div>

        <!--Fomularios de Login y Registro-->

       <div class="contenedor_login-registro">
        <!--Login -->
        <form action="php/login.php" method="POST" class="formulario_login">
              <h2>Iniciar sesión</h2>
              <input type="text" placeholder="Usuario" name="usuario">
              <input type="password" placeholder="Contraseña" name="contrasena"> 
              <button>Entrar</button>           
        </form>
        <!--Registro -->
        <form action="php/registro.php" method="POST" class="formulario_registro">
            <h2>Registro</h2>
            <input type="text" placeholder="Nombre completo" name="nombre_completo">
            <input type="text" placeholder="Correo Electrónico" name="correo">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña" name="contrasena">
            <button>Registrarse</button>
        </form>       
       </div>
      </div>
    </main>   
    <script src="js/script.js"></script>

</body>
</html>
