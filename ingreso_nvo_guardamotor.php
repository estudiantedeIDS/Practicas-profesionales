<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso nuevo Guardamotor</title>    
    <link rel="stylesheet" href="css/estilos9.css">  


</head>
<body>    
              
        <!--Fomulario de codigo de dispositivo-->

       <div>
        <form action="php/captura_nvo_guardamotor.php" method="POST">
        <center><br><br><br><br><br> 
              <h2>Ingreso nuevo Guardamotor:</h2> <br><br>
              <label for="codigo_dispositivo">Ingrese nuevo código</label>
              <input type="text" id="codigo_dispositivo" name= "codigo_dispositivo" required><br><br><br>                
              <label for="area">Ingrese el Area del Guardamotor</label>
              <input type="text" id="area" name= "area" required><br><br><br>                              
              <label for="fecha_compra">Ingrese la fecha de compra</label>
              <input type="text" id="fecha_compra" name= "fecha_compra" required><br><br><br>                              
              <label for="fecha_mantto">Ingrese fecha de mantenimiento</label>
              <input type="text" id="fecha_mantto" name= "fecha_mantto" required><br><br><br>                
              
              <input type="submit" value="Guardar">                                       

        <center>
      </form>                
      </div>
      <a href="guardamotores.php"><br><br><br>
          <div class button></div>
          <center><br>
          <button type="button" a href>Regresar al menú anterior</button>
          <center>
        </a>
       
</body>
</html>
