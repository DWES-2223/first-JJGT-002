<?php
include_once "./Persona.php";
$persona = new Persona("Manuel", "Toronto Muñoz", 21);

echo $persona->getNombreCompleto();
echo "<br>";
echo "Es " . (($persona->estaJubilado())? "jubilado": "no jubilado");