<?php
include "./Persona8.php";

$persona = new Persona8("Juan", "Fernandez Moltó");

echo $persona->getNombreCompleto();
echo "<br>";
echo "Edat " . $persona->getEdat();