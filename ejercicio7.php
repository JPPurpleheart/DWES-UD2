<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERADOR AND</h1>
    <p>
        <?php
            $num1 = 25;
            $num2 = 30;
            $res = $num1 & $num2;
            printf("El valor en binario de num1 es %b", $num1);
            printf("El valor en binario de num2 es %b", $num2);
            printf("El reultado de la operación de comparación bit a bit AND es %b", $res);
        ?>
    </p>
    <h1>OPERADOR NOT</h1>
    <p>
        <?php
            $num1 = 25;
            $num2 = 30;
            $res1 = ~$num1;
            $res2 = ~$num2;
            printf("El valor en binario de num1 es %b", $num1);
            printf("El valor en binario de num2 es %b", $num2);
            printf("El reultado de la operación de comparación bit a bit NOT de num1 es %b", $res1);
            printf("El reultado de la operación de comparación bit a bit NOT de num2 es %b", $res2);
        ?>
    </p>
    <h1>OPERADOR OR</h1>
    <p>
        <?php
            $num1 = 25;
            $num2 = 30;
            $res = $num1 | $num2;
            printf("El valor en binario de num1 es %b", $num1);
            printf("El valor en binario de num2 es %b", $num2);
            printf("El reultado de la operación de comparación bit a bit OR es %b", $res);
        ?>
    </p>
    <h1>OPERADOR XOR</h1>
    <p>
        <?php
            $num1 = 25;
            $num2 = 30;
            $res = $num1 ^ $num2;
            printf("El valor en binario de num1 es %b", $num1);
            printf("El valor en binario de num2 es %b", $num2);
            printf("El reultado de la operación de comparación bit a bit XOR es %b", $res);
        ?>
    </p>    
</body>
</html>