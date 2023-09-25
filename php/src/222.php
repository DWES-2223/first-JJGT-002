<?php
$base = $_GET["base"];
$exponente = $_GET["exponente"];
$potencia = 1;
for ($i = 0; $i < $exponente; $i++) { 
    $potencia *= $base;
}

echo "Base = " . $base . " Exponente = " . $exponente . " Potencia = " . $potencia;