<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Introducció de Record</title>
    <link rel="stylesheet" href="Introducci%C3%B3%20de%20Record_files/bootstrap.min.css">
    <link rel="stylesheet" href="Introducci%C3%B3%20de%20Record_files/font-awesome.min.css">
</head>
<body>

<form method="post" action="./271.php">
    <div class="form-group row">
        <label for="prova" class="col-4 col-form-label">Prova</label>
        <div class="col-8">
            <div class="input-group">
                <input id="prova" name="prova" placeholder="Escriu la prova" type="text" required="required" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="marca" class="col-4 col-form-label">Marca</label>
        <div class="col-8">
            <div class="input-group">
                <input id="marca" name="marca" placeholder="Marca" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="atleta" class="col-4 col-form-label">Atleta</label>
        <div class="col-8">
            <div class="input-group">
                <input id="atleta" name="atleta" placeholder="Nom de l'atleta" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="any" class="col-4 col-form-label">Any de naixement</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-birthday-cake"></i>
                    </div>
                </div>
                <input id="natalici" name="natalici" placeholder="Any de naixement" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="club" class="col-4 col-form-label">club</label>
        <div class="col-8">
            <div class="input-group">
                <input id="club" name="club" placeholder="club Atleta" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="data" class="col-4 col-form-label">Data</label>
        <div class="col-8">
            <div class="input-group">
                <input id="data" name="data" placeholder="Data prova" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="lloc" class="col-4 col-form-label">Lloc</label>
        <div class="col-8">
            <div class="input-group">
                <input id="lloc" name="lloc" placeholder="Lloc prova" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php
if(isset($_POST["prova"]) && isset($_POST["marca"]) && isset($_POST["atleta"]) 
&& isset($_POST["natalici"]) && isset($_POST["club"]) 
&& isset($_POST["data"]) && isset($_POST["lloc"])) 
{
    $records = include "./atletes.php";
    $record = array($_POST["prova"] => array("marca" => $_POST["marca"], 
        "atleta" => $_POST["atleta"], "natalici" => $_POST["natalici"], 
        "club" => $_POST["club"], "data" => $_POST["data"], "lloc" => $_POST["lloc"]));
    
    $indiceProva = array_search($_POST["prova"], $records);
    $existePrueba = false;
    foreach ($records as $nombreProva => $nombre) {
        if ($nombreProva == $_POST["prova"]) {
            $existePrueba = true;
            $nombre = $record;
            var_dump($nombre);
            include "./270a.php";
            break;
        }
    }

    if(!$existePrueba) {
        ?>
        <p>La prova <?=$_POST["prova"]?> no existeix en la llista de records oficials de la FEA</p>
        <?php
    }
}
?>

</body>
</html>