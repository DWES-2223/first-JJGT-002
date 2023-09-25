<?php

$edad = $_GET["edad"];
$resultado;

if ($edad >=67) {
    $resultado = "jubilado";
} elseif ($edad >= 18) {
    $resultado = "adulto";
} elseif ($edad >= 3) {
    $resultado = "xiquet";
} else $resultado = "bebe";

echo $resultado;