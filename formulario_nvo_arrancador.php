<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario nuevo Arrancador</title>
</head>
<body>
            <h2>Ingreso nuevo Arrancador</h2>
            <form action="ingreso_nvo_arrancador.php" method="POST">
            
            <label for="Id_dispositivo">Identificación del dispositivo:</label><br>
            <input type="text" id="Id_dispositivo" name="Id_dispositivo required><br><br>

            <label for="Area">Área:</label><br><br>
            <input type="text" id="Area" name="Area" required><br><
            
            <label for="Fecha_compra">Fecha de compra:</label><br><br>
            <input type="text" id="Fecha_compra" name="Fecha_compra required><br>

            <label for="Fecha_Mantto">Fecha de Mantenimiento:</label><br><br>
            <input type="text" id="Fecha_Mantto" name="Fecha_Mantto required><br>
            
            <button type="submit">Guardar</button>
        </form>         
</body>
</html>