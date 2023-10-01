<?php
//240
function esParell(int $num) : bool {
    return $num%2 === 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $nuevoArray = array($tam);
    for ($i=0; $i < $tam; $i++) {
        $numAleatorio = rand($min, $max);
        $nuevoArray[$i] = $numAleatorio;
    }
    return $nuevoArray;
}

function countParells(array &$array) : int {
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

    return join(" " , $paraules);
}

//242
function digits(int $num) : int {
    return ($num > 0)? strlen($num):(strlen($num) - 1);
}

function digitsN(int $num, int $post): int {
    $stringNum = (string)$num;
    return (int) substr($stringNum,$post-1,1);
}

function llevarDarrere(int $num, int $cant): int {
    if($cant > strlen($stringNum)){
        return 0;
    }
    return (int) substr($stringNum,0,strlen($stringNum) - $cant);
}

function llevaDavant(int $num, int $cant): int {
    $stringNum = (string)$num;
    if($cant > strlen($stringNum)){
        return 0;
    }
    return (int) substr($stringNum,$cant,strlen($stringNum) - $cant);
}

// 243
function peseta2euros(float $eur, float )