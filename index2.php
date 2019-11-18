<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
            $ar=fopen("datos.txt","a") or die ("Error al crear archivo");
            fputs($ar,$_REQUEST['nombre']);
            fputs($ar,"\n");
            fputs($ar,$_REQUEST['comentarios']);
            fputs($ar,"\n");

            fputs($ar,"-----------");
            fputs($ar,"\n");
            fclose($ar);
            echo "Datos agregados correctamente";

    ?>

</body>
</html>