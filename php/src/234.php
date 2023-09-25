<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $personas = [
        "Karlos" => 1.82,
        "Alejandro" => 1.80,
        "Andreu" => 1.71,
        "Ruben" => 2.03,
        "Koke" => 1.76];

    foreach ($personas as $nombre => $altura) {
        echo "$nombre : $altura <br>";
    }
    ?>
</body>
</html>