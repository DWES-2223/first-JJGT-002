<?php
include "./Persona7.php";

$persona = new Persona7("Juan", "Fernandez Moltó");

echo $persona->getNombreCompleto();
echo "<br>";
echo "Edat " . $persona->getEdat();