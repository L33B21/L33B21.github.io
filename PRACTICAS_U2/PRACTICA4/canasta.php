<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link href="estilo.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <?php include 'encabezado.php'; ?>
    </header>
    <section>
      <table width="550" cellspacing="10" cellpadding="0">
        <tr>
          <td><img src="carritoCompras.jpg" width="80" height="80" /></td>
        </tr>
        <tr>
           <th>Codigo</th>
           <th>Descripcion</th>
           <th>Precio</th>
           <th>Cantidad</th>
           <th>Subtotal</th>
        </tr>
        <?php
          error_reporting(0);
          session_start();
          include 'capturaDatos.php';
          include 'asignaciones.php';

          $codigo = getProducto();
          $cantidad = getCantidad();
          if (!isset($_SESSION['productos'])) {
              $_SESSION['productos'] = [];
          }

          if (!isset($_SESSION['productos'][$codigo])) {
              $_SESSION['productos'][$codigo] = $cantidad;
          } else {
              $_SESSION['productos'][$codigo] += $cantidad;
          }

          $tSubtotal = 0;
          foreach ($_SESSION['productos'] as $cod => $cant) {
              $subtotal = $cant * asignaPrecio($cod);
              $tSubtotal += $subtotal;
        ?>
        <tr>
          <td id="centrado"><?php echo $cod; ?></td>
          <td><?php echo muestraDescripcion($cod); ?></td>
          <td id="derecha"><?php echo '$' . number_format(asignaPrecio($cod), 2); ?></td>
          <td id="centrado"><?php echo $cant; ?></td>
          <td id="derecha"><?php echo '$' . number_format($subtotal, 2); ?></td>
        </tr>
        <?php } ?>
        <tr>
          <td id="resaltado">Total a Pagar</td>
          <td></td>
          <td></td>
          <td></td>
          <td id="totales"><?php echo '$' . number_format($tSubtotal, 2); ?></td>
        </tr>
        <tr>
          <td colspan="4"><?php echo '<a href="index.php">Seguir comprando..</a>'; ?></td>
          <td colspan="4"><?php echo '<a href="destruir.php">Finalizar la compra</a>'; ?></td>
        </tr>
      </table>
    </section>
    <footer>
      <?php include 'pie.php'; ?>
    </footer>
  </body>
</html>