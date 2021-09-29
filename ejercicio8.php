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
        echo $var1, "</br>";
        echo is_float($var1), "</br>";
        echo is_bool($var1), "</br>";
        echo is_integer($var1), "</br>";
        $var1 = 5.72;
        echo is_float($var1), "</br>";
        echo is_bool($var1), "</br>";
        echo is_integer($var1), "</br>";
        echo (integer) $var1, "</br>";
        $var2 = "6tres";
        echo $var2, "</br>";
        echo (integer) $var2, "</br>";
    ?>
</body>
</html>