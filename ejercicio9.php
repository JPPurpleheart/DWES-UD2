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
        echo $_SERVER['PHP_SELF'], "</br>";
        echo "El nombre del archivo de script ejecutándose actualmente, relativa al directorio raíz de documentos del servidor. Por ejemplo, el valor de PHP_SELF en un script ejecutado en la dirección http://example.com/foo/bar.php será /foo/bar.php. La constante __FILE__ contiene la ruta completa del fichero actual, incluyendo el nombre del archivo. Si PHP se está ejecutando como un proceso de línea de comando, esta variable es el nombre del script desde PHP 4.3.0. En anteriores versiones no estaba disponible.", "</br>";
        echo $_SERVER['SERVER_ADDR'], "</br>";
        echo "La dirección IP del servidor donde se está ejecutando actualmente el script.", "</br>";
        echo $_SERVER['SERVER_NAME'], "</br>";
        echo "El nombre del host del servidor donde se está ejecutando actualmente el script. Si el script se ejecuta en un host virtual se obtendrá el valor del nombre definido para dicho host virtual.", "</br>";
        echo $_SERVER['REQUEST_METHOD'], "</br>";
        echo "Método de petición empleado para acceder a la página, por ejemplo 'GET', 'HEAD', 'POST', 'PUT'.", "</br>";
        echo $_SERVER['DOCUMENT_ROOT'], "</br>";
        echo "El directorio raíz de documentos del servidor en el cual se está ejecutando el script actual, según está definida en el archivo de configuración del servidor.", "</br>";
        echo $_SERVER['REMOTE_ADDR'], "</br>";
        echo "La dirección IP desde la cual está viendo la página actual el usuario.", "</br>";
        GLOBAL $res;
        function suma($num1)
        {
            STATIC $var1 = 3;
            $var2 = 5;
            $res = $var1 + $var2;
        }
        echo $res, "</br>";
        echo $var1, "</br>";
        echo $var2, "</br>";
    ?>
</body>
</html>
