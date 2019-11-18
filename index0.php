<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
    <center><h1>MANEJO DE ARCHIVOS</h1></center>
    <P>
    <form action="index2.php" method="post">
    <p>
        <label>Ingresa tu nombre:</label>
        <input type="text" name="nombre">
        <br>
    </p>
    <p>
        <label>Comentarios:</label>
        <br>
        <textarea name="comentarios" cols="30" rows="10"></textarea>
    </p>
    <p>
        <input type="submit" name="enviar" value="Registrar">
    </p>
    </form>

        <form action="index3.php" method="post">
        <p>
            <input type="submit" name="enviar2" value="Leer archivo">
        </p>
        
        
        </form>
    <?php

    ?>

</body>
</html>