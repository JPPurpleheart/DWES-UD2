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
        $preciop = 29.99;
        $cantp = 3;
        $precioc = 25.99;
        $cantc = 2;
        define("DESC", 8);
        $total = ($preciop * $cantp) + ($precioc * $cantc);
        $totald = $total - ($total * (DESC / 100));
        echo "El precio de un pantalón es de $preciop";
        echo "El precio de una camisa es de $precioc";
        printf("El total sin descuento es de %0.2f", $total);
        printf("El total con descuento es de %0.2f", $totald);
    ?>
</body>
</html>