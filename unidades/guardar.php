<?php

// si no proviene del formulario, redireccionar
if (sizeof($_POST) == 0) {
    header('Location: index.php?route=unidades');
}

include_once("data/unidades.php");

if(!isset($_GET['id'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    createUnidad($id, $nombre);
} else {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    updateUnidad($id, $nombre);
}

header('Location: index.php?route=unidades');