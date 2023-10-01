<!DOCTYPE html>
<html lang="en">
    <?php
    extract ($_POST);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        <?php
        for ($i = 0; $i < count($nombreProducto); $i++) { 
            ?>
            <tr>
                <td><?=$nombreProducto[$i]?></td>
                <td><?=$precioProducto[$i]?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>