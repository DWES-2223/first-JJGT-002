<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   extract($_POST);
?>
<table>
    <tr>
        <th>Nom</th>
        <td><?=$nom?></td>
    </tr>
    <tr>
        <th>Cognoms</th>
        <td><?=$cognom1 . " " . $cognom2?>
    </tr>
    <tr>
        <th>Email</th>
        <td><?=$email?>
    </tr>
    <tr>
        <th>Any</th>
        <td><?=$any?>
    </tr>
    <tr>
        <th>Telefón</th>
        <td><?=$telefon?></d>
    </tr>
</table>
</body>
</html>