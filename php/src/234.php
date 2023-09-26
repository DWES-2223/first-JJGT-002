<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="default">
        <tr>
            <th>Nomrbre</th>
            <th>Altura</th>
        </tr>
        <?php
            $personas = [
                "Karlos" => 1.82,
                "Alejandro" => 1.80,
                "Andreu" => 1.71,
                "Ruben" => 2.03,
                "Koke" => 1.76
            ];
            foreach ($personas as $nombre => $altura) {
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$altura</td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td>".array_sum($personas)/count($personas)."</td>";
            echo "</tr>";
            ?>
    </table>
</body>
</html>