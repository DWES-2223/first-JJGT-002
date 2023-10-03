<?php
function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        else if ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}

function vell(array $records): mixed {
    $fechaActual = "3/10/2023";
    $recordsActual = new DateTime($fechaActual);

    foreach ($records as $record) {
        $fecha = new DateTime($record["data"]);
        if($recordsActual > $fecha) {
            $recordsActual = $fecha;
        }
    }
    return $recordsActual->format("d.m.Y");
}

function fecha_anglesa(string $text): string {
    $fecha = new DateTime($text);
    return $fecha->format('Y/m/d');
}