<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $letras = array();
    for ($i=0; $i < 100; $i++) { 
        $letra = rand(0,1);
        $letras[$i] = ($letra == 1)? "M":"F";
    }
    print_r(array_count_values($letras));
    ?>
</body>
</html>