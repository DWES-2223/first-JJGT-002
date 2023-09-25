<?php

const EDAD_A_RESTAR = 10;
const EDAD_A_SUMAR = 10;
const EDAD_JUBILACION = 67;

$edad = $_GET["edat"]??null;
$anyoActual = date("Y");
$edadHace10anyos;
$edadDentro10anyos;
$tiempoRestanteJubilacion;
$anyJubilacion;

if (isset($edad)$edad > 10) {
    $edadHace10anyos = $edad - EDAD_A_RESTAR;
} else {
    $edadHace10anyos = "Todavía no habías nacido";
    echo "Posa la teu edat actual a la variable edat pel QueryString"
}

if ($edad >= 0) {
    $edadDentro10anyos = $edad + EDAD_A_SUMAR;
    $tiempoRestanteJubilacion = EDAD_JUBILACION - $edad;
    $anyJubilacion = $tiempoRestanteJubilacion + $anyoActual;
} else {
    $edadDentro10anyos = "Edad incorrecta";
    $anyJubilacion = "Edad incorrecta";
}

if ($edad >= 67) {
    $anyJubilacion = "Usted ya está jubilad@";
}

echo "Edad hace 10 años: " . $edadHace10anyos . "<br>";
echo "Edad dentro de 10 años " . $edadDentro10anyos . "<br>";
echo "Se jubilará en: " . $anyJubilacion;