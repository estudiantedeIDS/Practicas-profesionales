<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de Guardamotores</title>    
    <link rel="stylesheet" href="css/estilos10.css">  


</head>
<body>    
              
        <!--Fomulario de codigo de dispositivo-->

       <div>
        <form action="php/borrar_guardamotor.php" method="POST">
        <center><br><br><br><br><br> 
              <h2>Eliminación de Guardamotores:</h2> <br><br>
              <label for="codigo_dispositivo">Ingrese código del Guardamotor</label>
              <input type="text" id="codigo_dispositivo" name= "codigo_dispositivo" required><br><br><br>                
              
              <input type="submit" value="Eliminar Guardamotor">                                       

        <center>
      </form>                
      </div>
      <a href="guardamotores.php"><br><br><br>
          <div class button></div>
          <center><br>
          <button type="button" a href>Regresar al menú anterior</button>
          <center>
        </a>
        <center><br><br><br>
        <img src="Imagenes/guardamotor.jpg" width="250" />
      </center>
</body>
</html>