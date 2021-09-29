<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numopd = "10";
        define("MAXOPD", 6);
        $numops = 20;
        define("MAXOPS", 30);
        echo "El valor de operaciones diarias es mayor o igual que el máximo.", var_export($numopd >= MAXOPD);
        echo "El valor de operaciones diarias es idéntico igual al máximo: ", var_export($numopd === MAXOPD);
        echo "El valor de operaciones semanales es mayor o igual que el máximo.", var_export($numops >= MAXOPS);
        echo "El valor de operaciones diarias es distinto al de operaciones semanales.", var_export($numopd != $numops);
        /*
        NO SE PUEDEN USAR ESTRUCTURAS DE CONTROL
        if($numopd >= MAXOPD)
        {
            if($numopd == MAXOPD)
            {
                echo("El valor de operaciones diarias es exactamente igual al máximo.");
            }
            else
            echo("El valor de operaciones diarias es mayor o igual que el máximo.");
        }
        if($numops >= MAXOPS)
        {
            echo("El valor de operaciones semanales es mayor o igual que el máximo.");
        }
        if($numopd != $numops)
        {
            echo("El valor de operaciones diarias es distinto al de operaciones semanales.");
        }*/
    ?>
</body>
</html>