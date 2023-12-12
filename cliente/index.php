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
        <label for="asunto">Asunto</label>
        <input type="text" name="asunto"><br>

        <label for="cuerpo">Cuerpo</label>
        <input type="text" name="cuerpo"><br>

        <label for="destinatario">Destinatario</label>
        <input type="text" name="destinatario"><br>
        
        <input type="submit" value="Mandar correo">
    </form>

</body>
</html>

';
?>