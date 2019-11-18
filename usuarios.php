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
        $users=$_REQUEST["user"];
        $pass = $_POST['passwd'];
        $correcto = false;
        $archivo = "datos.txt";
        $ha fopen($archivo,"r") or die ("No existe archivo");
        $contenido = fread($ha,filesize($archivo));
        $lineas = explode("\n",$contenido);
        for ($i=0;$i<count($lineas);$i++){
            $posTab = strpos($lineas[$i],"\t");
            $users[] = srtpor($lineas[$i],0,$posTab);
            $passwords[] = substr($lineas[$i],$posTab,strlen($lineas[$i]));
            if (($user == $users[$i]) && (pass == trim($passwords[$i]))){
                $correcto = true;
            }
        }
        if ($correcto == true){
            echo "El usuario esta registrado"
        }  else {"Usuario no registrado"};
    
    ?>
</body>
</html>