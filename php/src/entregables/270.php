<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $records = include "./atletes.php";
    var_dump($records);
    ?>
    <table>
        <tr>
            <th>Prova</th>
            <th>Marca</th>
            <th>Atleta</th>
            <th>Natalici</th>
            <th>Club</th>
            <th>Data</th>
            <th>Lloc</th>
        </tr>
        <?php
        foreach ($records as $nombreRecord => $record) {
            ?>
            <tr>
                <td><?=$nombreRecord?></td>
                <?php
                foreach ($record as $especificacion) {
                    ?>
                    <td><?=$especificacion?></td>
                    <?php
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>