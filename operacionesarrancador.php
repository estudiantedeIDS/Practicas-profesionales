<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OperacionesInterruptores</title>    
    <link rel="stylesheet" href="css/estilos6.css">  


</head>
<body>    
              
        <!--Fomulario de codigo de dispositivo-->

       <div>
        <form action="php/login_operaciones_arrancador.php" method="POST">
         <center><br><br><br><br><br>
              <h2>Para ingresar a este Menú, se requiere permiso de Administrador:</h2> <br>
              <label for="text">Usuario:</label>
              <input type="text" id="usuario" name= "usuario" required>                                       
              <label for="contrasena">Contraseña:</label>
              <input type="password" id="contrasena" name= "contrasena" required>                
              <input type="submit" value="Ingresar">               
         <center>
        </form>         
       
      </div>
      <a href="arrancadores.php"><br><br><br>
          <div class button></div>
          <center>
          <button type="button" a href>Regresar al menú anterior</button>
          <center>
        </a>
</body>
</html>
