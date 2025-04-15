<?php
session_start();
include 'includes/encabezado.php';
?>
<section>
  <table>
    <tr>
      <th>DESCRIPCIÓN</th>
      <th>STOCK</th>
      <th>PRECIO</th>
    </tr>
    <?php if (!empty($_SESSION['misProductos'])): ?>
      <?php foreach ($_SESSION['misProductos'] as $producto): ?>
        <tr>
          <td><?= htmlspecialchars($producto['descripción']) ?></td>
          <td><?= htmlspecialchars($producto['stock']) ?></td>
          <td>$<?= number_format($producto['precio'], 2) ?></td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr><td colspan="3" style="text-align: center;">No hay productos registrados.</td></tr>
    <?php endif; ?>
  </table>
</section>
<footer>
  <p style="text-align:center">
    <a href="index.php">Seguir registrando</a> |
    <a href="destruir.php">Cerrar sesión</a>
  </p>
  <?php include 'includes/pie.php'; ?>
</footer>