<?php
//240
function esParell(int $num) : bool {
    return $num%2 === 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $nuevoArray = array();
    for ($i=0; $i < $tam; $i++) {
        $numAleatorio = rand($min, $max);
        $nuevoArray[i] = $numAleatorio;
    }
    return $nuevoArray;
}

function countParells(array $array) : int {
    $pares = 0;
    foreach ($array as $numero) {
        if ($numero % 2 === 0) {
            $pares++;
        }
    }
    return $pares;
}

//241
function major(...$numeros) : int {
    $mayor = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numeros[$numero] > $mayor) {
            $mayor = $numeros[$numero];
        }
    }
    return $mayor;
}

function concatenar(...$paraules) : string {
    $frase = "";
    foreach ($paraules as $paraula) {
        $frase = $frase . $paraula . " "; 
    }
    return $frase;
}
//242
function digits(int $num) : int {
    return strlen($num);
}

echo digits(1102145);