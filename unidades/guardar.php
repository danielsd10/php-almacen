<?php

// si no proviene del formulario, redireccionar
if (sizeof($_POST) == 0) {
    header('Location: index.php?route=unidades');
}

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];

$f = fopen("data/unidades.csv", "a");
fwrite($f, $codigo . ", " . $nombre . "\n");
fclose($f);

header('Location: index.php?route=unidades');