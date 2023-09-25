<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>a</th>
            <th>*</th>
            <th>b</th>
            <th>=</th>
            <th>a*b</th>
        </tr>
        </thead>
    <?php
        $numero = $_GET["numero"];
        for ($i = 0; $i < 11; $i++) {
            ?>
            <tr>

            <td><?=$numero?></td>
            <td>*</td>
            <td><?=$i?></td>
            <td>=</td>
            <td><?=$numero * $i?></td>
            </tr>
            <?php
        }
    ?>
    </table>
</body>
</html>