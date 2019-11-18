<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>LECTURA DEL ARCHIVO</h1></center>
    <?php
        $archivo=fopen("datos.txt","r") or die ("No existe el archivo");
        while(!feof($archivo)){
            $linea = fgets ($archivo);
            $saltolinea = nl2br($linea);
            echo $saltolinea;
        }
        fclose($archivo);
    ?>
</body>
</html>