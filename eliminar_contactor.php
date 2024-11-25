<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de Contactor</title>    
    <link rel="stylesheet" href="css/estilos10.css">  


</head>
<body>    
              
        <!--Fomulario de codigo de dispositivo-->

       <div>
        <form action="php/borrar_contactor.php" method="POST">
        <center><br><br><br><br><br> 
              <h2>Eliminación de Contactores:</h2> <br><br>
              <label for="codigo_dispositivo">Ingrese código del Contactor</label>
              <input type="text" id="codigo_dispositivo" name= "codigo_dispositivo" required><br><br><br>                
              
              <input type="submit" value="Eliminar Contactor">                                       

        <center>
      </form>                
      </div>
      <a href="contactores.php"><br><br><br>
          <div class button></div>
          <center><br>
          <button type="button" a href>Regresar al menú anterior</button>
          <center>
        </a>
        <center><br><br><br>
        <img src="Imagenes/contactor.jpg" width="250" />
      </center>
</body>
</html>