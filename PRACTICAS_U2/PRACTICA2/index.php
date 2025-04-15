<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="estilo_index.css" rel="stylesheet">
    </head>
    <body>
        <section>
        <?php
          error_reporting(0);
          session_start();
               
          if (!isset($_SESSION['admin'])){
        ?>
            <form name="frmLogin" method="POST" action="login.php">
            <table  cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="3">
                    <p id="titulo">Acesso<p>
                </td>
            </tr>
            <tr>
                <td id="derecha" width="150">Usuario</td>
                <td><input type="text" name="txtUsuario"
                           value="" /></td>
                <td rowspan="4">
                    <img src="usuario.jpg"200" height="200" />
                </td>
            </tr>
            <tr>
                <td id="derecha">Clave</td>
                <td>
                    <input type="password" name="txtClave" maxlength="4" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="checkbox" name="" value="ON" />
                           Recordar la clave
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input id="boton" type="submit"
                           name="btnLogin" value=" LOGIN " />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                 <?php
                    }else{
                        header('location:principal.php');
                    }
                    if (isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                 ?>                
                </td>
            </tr>
            </table>
          </form>    
        </section>
    </body>
</html>