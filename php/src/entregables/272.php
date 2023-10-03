<?php
include "./functions.php";
$records = include "./atletes.php";

$recordMasAntiguo = vell($records);

echo "El record más antiguo es " . $recordMasAntiguo . "<br>";
echo "El record más antiguo en formato inglés es " . fecha_anglesa($recordMasAntiguo);