<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo de Arrancador</title>    
    <link rel="stylesheet" href="css/estilos4.css">  


</head>
<body>    
              
        <!--Fomulario de codigo de dispositivo-->

       <div>
        <form action="mostrar_arrancador.php" method="GET">
        <center><br><br><br><br><br> 
             <h2>Consulta de Arrancadores:</h2> <br>
              <label for="codigo_dispositivo">Ingrese código</label>
              <input type="text" id="codigo_dispositivo" name= "codigo_dispositivo" required>                
              <input type="submit" value="Consultar">                                       
        <center>
      </form>                
      </div>
      <a href="arrancadores.php"><br><br><br>
          <div class button></div>
          <center>
          <button type="button" a href>Regresar al menú anterior</button>
          <center>
        </a> <br><br>
        <center>
        <img src="Imagenes/arrancador.jpg" width="250" />
      </center>

</body>
</html>
