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
        $var1 = "Hola Mundo";
        echo $var1;
        echo is_float($var1);
        echo is_bool($var1);
        echo is_integer($var1);
        $var1 = 5.72;
        echo is_float($var1);
        echo is_bool($var1);
        echo is_integer($var1);
        echo (integer) $var1;
        $var2 = "6tres";
        echo $var2;
        echo (integer) $var2;
    ?>
</body>
</html>