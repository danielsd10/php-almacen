<?php
	$f = fopen("data/productos.csv", "r");
	$productos = explode("\n",trim(fread($f, filesize("data/productos.csv")),"\n"));
	fclose($f);
?>
<div class="form-box">
    <h2><?=$title?></h2>
    
    <div class="row">
    	<div class="col-md-4">
    		<a class="btn btn-primary" href="index.php?route=productos/registrar"><span class="glyphicon glyphicon-plus"></span> Nuevo producto</a>
    	</div>
    </div>
    <br><br>
    <table class="table table-bordered">
    	<thead>
	        <tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Categoría</th>
				<th>Unidad</th>
	            <th></th>
	        </tr>
        </thead>
        <tbody>
			<?php foreach($productos as $row) {
				$producto = explode(",", $row);
			?>
	        <tr>
		        <td><?=$producto[0]?></td>
				<td><?=$producto[1]?></td>
				<td><?=$producto[2]?></td>
				<td><?=$producto[3]?></td>
				<td><?=$producto[4]?></td>
		        <td class="cell-actions">
		            <div class="btn-group">
		                <a class="btn btn-xs btn-warning" href="#"><span class="glyphicon glyphicon-pencil"></span></a>
		                <a class="btn btn-xs btn-danger" href="#"><span class="glyphicon glyphicon-trash"></span></a>
		            </div>
		        </td>
		    </tr>
			<?php } ?>
        </tbody>
    </table>
</div>
<script>
	

</script>