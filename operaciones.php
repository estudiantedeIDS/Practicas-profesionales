<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>    
    <link rel="stylesheet" href="css/estilos4.css">  


</head>
<body>    
              
        <!--Fomulario de codigo de dispositivo-->

       <div>
        <form action="php/login_operaciones_relevadores.php" method="POST">
             <h2>Se requiere permiso de Administrador.</h2> 
              <label for="text">Usuario:</label>
              <input type="text" id="usuario" name= "usuario" required>                                       
              <label for="contrasena">Contraseña:</label>
              <input type="password" id="contrasena" name= "contrasena" required>                
              <input type="submit" value="Ingresar">               
        </form>         
       
      </div>
</body>
</html>
