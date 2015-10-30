<?php
    include_once("data/unidades.php");
    $unidades = readUnidades();
?>
<div class="form-box">
    <h2><?=$title?></h2>
    
    <a class="btn btn-primary" href="index.php?route=unidades/registrar"><span class="glyphicon glyphicon-plus"></span> Nueva unidad</a>
    <br><br>
    <table class="table table-bordered">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th></th>
        </tr>
        <?php foreach($unidades as $unidad) { ?>
        <tr>
            <td><?=$unidad["id"]?></td>
            <td><?=$unidad["nombre"]?></td>
            <td class="cell-actions">
                <div class="btn-group">
                    <a class="btn btn-xs btn-warning" href="index.php?route=unidades/editar&id=<?=$unidad["id"]?>"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btn btn-xs btn-danger" href="index.php?route=unidades/eliminar&id=<?=$unidad["id"]?>"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
