<?php

echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario enviar correo</title>
</head>
<body>
    
    <form method="post" action="enviaCorreo.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br>
        
        <input type="submit" value="Ojala">
    </form>

</body>
</html>

';
?>