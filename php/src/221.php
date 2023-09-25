<?php

$sumatorio = 0;

for ($i = 1; $i < 11; $i++) { 
    $sumatorio += $i;
    echo $i;
    echo ($i == 10)?"=" . $sumatorio:"+";
}