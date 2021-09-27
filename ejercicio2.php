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
    define("PI", 3.14159);
    $areaTriangulo = (3*2)/2;
    echo "Área Triángulo: $areaTriangulo";
    echo "</br>";
    $areaCuadrado = (3*2);
    echo "Área Cuadrado: $areaCuadrado";
    echo "</br>";
    $areaRombo = (4*3)/2;
    echo "Área Rombo: $areaRombo";
    echo "</br>";
    $radio = 8.2;
    $areaCirculo = PI*$radio*$radio;
    printf("El círculo de radio %.2f tiene un área de %.2f", $radio, $areaCirculo);
    ?>
</body>
</html>