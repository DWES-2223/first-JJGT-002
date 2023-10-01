<!DOCTYPE html>
<html lang="en">
    <?php
    extract ($_GET);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="./244b.php">
    <?php
    if (isset($_GET["cantidad"])) {
        for ($i = 0; $i < $cantidad ; $i++) { 
            ?>
            <label for="nombreProducto">Nombre producto</label><br>
            <input name="nombreProducto[]" id="nombreProducto"><br>
            
            <label for="precioProducto">Precio producto</label><br>
            <input name="precioProducto[]" id="precioProducto"><br><br>
            <?php
        }
        ?>
        <button name="submit" type=submit>Enviar</button>
        <?php
    }
    ?>
    </form>
</body>
</html>