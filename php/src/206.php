<?php
$numero = $_GET["numero"];
$resultado = "El número " . $numero . " es: ";
if ($numero == 0) {
    $resultado = $resultado . " el número 0";
} elseif($numero > 0 ) {
    $resultado = $resultado . " positivo";
} else {
    $resultado = $resultado . " negativo";
}

echo $resultado;