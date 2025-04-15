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
      <?php
        error_reporting(0);
        session_start();
        include 'capturaDatos.php';

        // Obtener producto seleccionado (si existe)
        $producto = isset($_POST['selProducto']) ? $_POST['selProducto'] : 'p001';

        // Definir opciones marcadas como 'selected'
        $productos = [
          'p001' => '',
          'p002' => '',
          'p003' => '',
          'p004' => '',
          'p005' => '',
          'p006' => '',
          'p007' => '',
          'p008' => '',
          'p009' => '',
          'p010' => '',
        ];

        if (array_key_exists($producto, $productos)) {
          $productos[$producto] = 'selected';
        }
      ?>

      <form name="frmSeleccion" method="POST" action="index.php">
        <table width="550" cellspacing="10" cellpadding="1">
          <tr>
            <td width="200">Seleccione un producto</td>
            <td width="300">
              <select name="selProducto" onchange="this.form.submit()">
                <option value="p001" <?= $productos['p001']; ?>>Gaseosa</option>
                <option value="p002" <?= $productos['p002']; ?>>Mayonesa en sobre</option>
                <option value="p003" <?= $productos['p003']; ?>>Chocolate para niños</option>
                <option value="p004" <?= $productos['p004']; ?>>Fideos</option>
                <option value="p005" <?= $productos['p005']; ?>>Conservas</option>
                <option value="p006" <?= $productos['p006']; ?>>Chocolate</option>
                <option value="p007" <?= $productos['p007']; ?>>Café 300mg</option>
                <option value="p008" <?= $productos['p008']; ?>>Mayonesa pote</option>
                <option value="p009" <?= $productos['p009']; ?>>Crema dental</option>
                <option value="p010" <?= $productos['p010']; ?>>Cubito de pollo</option>
              </select>
            </td>
            <td rowspan="3">
              <img src="fotosProductos/<?= $producto ?>.jpg" width="120" height="120" alt="Producto">
            </td>
          </tr>
          <tr>
            <td>Cantidad</td>
            <td><input type="text" name="txtCantidad" value="" /></td>
            <td></td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Comprar"
                onclick="this.form.action = 'canasta.php'"
                name="btnComprar" />
            </td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </form>
    </section>

    <footer>
      <?php include 'pie.php'; ?>
    </footer>
  </body>
</html>