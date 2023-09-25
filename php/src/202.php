<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$nom = "Jorge";
$primerCognom = "Gregori";
$segonCognom = "Tandazo";
$email = "Email";
$anyNaixement = 2003;
$telefon = "Telèfon"
?>
<table>
    <tr>
        <th>Nom</th>
        <td><?=$nom?></td>
    </tr>
    <tr>
        <th>Cognoms</th>
        <td><?=$primerCognom . " " . $segonCognom?>
    </tr>
</table>
</body>
</html>