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

include 'includes/encabezado.php';
?>

<section>
  <form method="POST" action="agregarProducto.php">
    <table>
      <tr>
        <td>Descripción del Producto</td>
        <td><input type="text" name="txtDescripcion" value="<?= getDescripcion() ?>" required /></td>
      </tr>
      <tr>
        <td>Stock</td>
        <td><input type="number" name="txtStock" value="<?= getStock() ?>" required /></td>
      </tr>
      <tr>
        <td>Precio de producto</td>
        <td><input type="number" step="0.01" name="txtPrecio" value="<?= getPrecio() ?>" required /></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="btnRegistrar" value="Registrar producto">
          <input type="submit" name="btnListado" formaction="listadoProductos.php" value="Ver listado de productos">
        </td>
      </tr>
    </table>
  </form>
</section>

<?php include 'includes/pie.php'; ?>