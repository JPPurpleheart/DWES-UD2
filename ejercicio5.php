<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERACIÓN AND</h1>
    <table border="1">
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <?php
            $boolean1 = false;
            $boolean2 = false;
            $boolean3 = false;
            $resultadoand = $boolean1 && $boolean2 && $boolean3;
        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = false;
            $boolean2 = false;
            $boolean3 = true;
            $resultadoand = $boolean1 && $boolean2 && $boolean3;
        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = false;
            $boolean2 = true;
            $boolean3 = false;
            $resultadoand = $boolean1 && $boolean2 && $boolean3;
        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = true;
            $boolean2 = false;
            $boolean3 = false;
            $resultadoand = $boolean1 && $boolean2 && $boolean3;
        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = false;
            $boolean2 = true;
            $boolean3 = true;
            $resultadoand = $boolean1 && $boolean2 && $boolean3;
        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = true;
            $boolean2 = false;
            $boolean3 = true;
            $resultadoand = $boolean1 && $boolean2 && $boolean3;
        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = true;
            $boolean2 = true;
            $boolean3 = false;
            $resultadoand = $boolean1 && $boolean2 && $boolean3;
        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = true;
            $boolean2 = true;
            $boolean3 = true;
            $resultadoand = $boolean1 && $boolean2 && $boolean3;
        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
    </table>
    <h1>OPERACIÓN OR</h1>
    <table border="1">
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <?php
            $boolean1 = false;
            $boolean2 = false;
            $boolean3 = false;
            $resultadoor = $boolean1 || $boolean2 || $boolean3;        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = false;
            $boolean2 = false;
            $boolean3 = true;
            $resultadoor = $boolean1 || $boolean2 || $boolean3;        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = false;
            $boolean2 = true;
            $boolean3 = false;
            $resultadoor = $boolean1 || $boolean2 || $boolean3;        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = true;
            $boolean2 = false;
            $boolean3 = false;
            $resultadoor = $boolean1 || $boolean2 || $boolean3;        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = false;
            $boolean2 = true;
            $boolean3 = true;
            $resultadoor = $boolean1 || $boolean2 || $boolean3;        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = true;
            $boolean2 = false;
            $boolean3 = true;
            $resultadoor = $boolean1 || $boolean2 || $boolean3;        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = true;
            $boolean2 = true;
            $boolean3 = false;
            $resultadoor = $boolean1 || $boolean2 || $boolean3;        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
        <?php
            $boolean1 = true;
            $boolean2 = true;
            $boolean3 = true;
            $resultadoor = $boolean1 || $boolean2 || $boolean3;        ?>
        <tr>
            <td><?php var_export($boolean1)?></td>
            <td><?php var_export($boolean2)?></td>
            <td><?php var_export($boolean3)?></td>
            <td><?php var_export($resultado)?></td>
        </tr>
    </table>
</body>
</html>