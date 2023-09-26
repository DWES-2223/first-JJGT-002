<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Numeros aleatorios</p>
    <ul>
    <?php
    const MIN = 0;
    const MAX = 100;
    $numeros = array();

    for ($i = 0; $i < 33; $i++) { 
        $numeros[$i] = rand(MIN, MAX);
        echo "<li>" . $numeros[$i] . "</li>";
    }
    ?>   
    </ul>

    <?php
    $max = max($numeros);
    $min = min($numeros);
    $media = array_sum($numeros)/count($numeros);
    echo "Max = " . $max . "<br>";
    echo "Min = " . $min . "<br>";
    echo "Media = " . $media . "<br>";
    ?>
</body>
</html>