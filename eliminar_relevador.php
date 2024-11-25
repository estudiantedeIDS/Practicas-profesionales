<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de Relevadores</title>    
    <link rel="stylesheet" href="css/estilos10.css">  


</head>
<body>    
              
        <!--Fomulario de codigo de dispositivo-->

       <div>
        <form action="php/borrar_relevador.php" method="POST">
        <center><br><br><br><br><br> 
              <h2>Eliminación de Relevadores:</h2> <br><br>
              <label for="codigo_dispositivo">Ingrese código del Relevador</label>
              <input type="text" id="codigo_dispositivo" name= "codigo_dispositivo" required><br><br><br>                
              
              <input type="submit" value="Eliminar Relevador">                                       

        <center>
      </form>                
      </div>
      <a href="relevadores.php"><br><br><br>
          <div class button></div>
          <center><br>
          <button type="button" a href>Regresar al menú anterior</button>
          <center>
        </a>
        <center><br><br><br>
        <img src="Imagenes/relevador.jpg" width="250" />
      </center>
</body>
</html>