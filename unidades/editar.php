<?php
    include_once("data/unidades.php");
    if(isset($id)) {
        $unidad = readUnidad($id);
    }
?>
<form action="index.php?route=unidades/guardar<?= isset($id) ? "&id=".$id : "" ?>" method="post" class="form-box" role="form">
    <h2 class="form-signin-heading"><?=$title?></h2>
    
    <label>Código</label>
    <input type="text" name="id" class="form-control" placeholder="kg, und" <?= isset($unidad) ? 'value="'.$unidad["id"].'" disabled' : "" ?>>
    
    <br>
    
    <label>Nombre o descripción</label>
    <input type="text" name="nombre" class="form-control" <?= isset($unidad) ? 'value="'.$unidad["nombre"].'"' : "" ?>>
    
    <br>
    
    <div class="row">
        <div class="col-md-8">
            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Guardar">        
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-default btn-block" href="index.php?route=unidades">Cancelar</a>
        </div>
    </div>
</form>