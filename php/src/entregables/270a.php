<?php
$records = include "./atletes.php";
?>
<table>
    <tr>
        <th>Prova</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th>
    </tr>
    <?php
    foreach ($records as $nombreRecord => $record) {
        ?>
        <tr>
            <td><?=$nombreRecord?></td>
            <?php
            foreach ($record as $especificacion) {
                ?>
                <td><?=$especificacion?></td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>