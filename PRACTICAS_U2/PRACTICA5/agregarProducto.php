<?php
session_start();

function getDescripcion() {
  return filter_input(INPUT_POST, 'txtDescripcion', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';
}
function getStock() {
  return filter_input(INPUT_POST, 'txtStock', FILTER_SANITIZE_NUMBER_INT) ?? '';
}
function getPrecio() {
  return filter_input(INPUT_POST, 'txtPrecio', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) ?? '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $descripcion = getDescripcion();
  $stock = getStock();
  $precio = getPrecio();

  if (!isset($_SESSION['misProductos'])) {
    $_SESSION['misProductos'] = [];
  }

  $_SESSION['misProductos'][$descripcion] = [
    'descripción' => $descripcion,
    'stock' => $stock,
    'precio' => $precio
  ];
}

header('Location: listadoProductos.php');
exit;
?>