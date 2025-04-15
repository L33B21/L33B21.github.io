<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Votación de Villanos</title>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h3 id="centrado">VOTACIÓN DE VILLANOS</h3>
            <h2 id="titulo">¡El villano más desagradable!</h2>
        </header>
        <section>
            <?php
                session_start();  

                // Verificar si las variables de sesión existen, de lo contrario inicializarlas en 0
                $_SESSION['villano1'] = $_SESSION['villano1'] ?? 0;
                $_SESSION['villano2'] = $_SESSION['villano2'] ?? 0;
                $_SESSION['villano3'] = $_SESSION['villano3'] ?? 0;
                $_SESSION['villano4'] = $_SESSION['villano4'] ?? 0;

                // Definir los villanos y los votos
                $villanos = [
                    'Victor Von Doom' => ['votos' => $_SESSION['villano1'], 'porcentaje' => 0],
                    'Magneto' => ['votos' => $_SESSION['villano2'], 'porcentaje' => 0],
                    'El Guasón' => ['votos' => $_SESSION['villano3'], 'porcentaje' => 0],
                    'Reverse Flash' => ['votos' => $_SESSION['villano4'], 'porcentaje' => 0]
                ];

                // Total de votos
                $total = array_sum(array_column($villanos, 'votos'));

                // Calcular porcentaje solo si hay votos
                if ($total > 0) {
                    foreach ($villanos as $villano => $data) {
                        $villanos[$villano]['porcentaje'] = ($data['votos'] * 100) / $total;
                    }
                }
            ?>
            <form name="frmVotacion" method="POST" action="conteo.php">
                <table border="1" width="600" cellspacing="10" cellpadding="1">
                    <tr>
                        <td id="centrado">
                            <img src="villano1.JPG" alt="Victor Von Doom" />
                            <p>Victor Von Doom</p>
                            <input type="submit" value="Votar" name="btnBoton1" /><br>
                            TOTAL DE VOTOS: <?php echo $villanos['Victor Von Doom']['votos']; ?><br>
                            PORCENTAJE DE VOTOS: <?php echo round($villanos['Victor Von Doom']['porcentaje'], 2); ?>%
                        </td>
                        <td id="centrado">
                            <img src="villano2.JPG" alt="Magneto" />
                            <p>Magneto</p>
                            <input type="submit" value="Votar" name="btnBoton2" /><br>
                            TOTAL DE VOTOS: <?php echo $villanos['Magneto']['votos']; ?><br>
                            PORCENTAJE DE VOTOS: <?php echo round($villanos['Magneto']['porcentaje'], 2); ?>%
                        </td>
                    </tr>
                    <tr>
                        <td id="centrado">
                            <img src="villano3.JPG" alt="El Guasón" />
                            <p>El Guasón</p>
                            <input type="submit" value="Votar" name="btnBoton3" /><br>
                            TOTAL DE VOTOS: <?php echo $villanos['El Guasón']['votos']; ?><br>
                            PORCENTAJE DE VOTOS: <?php echo round($villanos['El Guasón']['porcentaje'], 2); ?>%
                        </td>
                        <td id="centrado">
                            <img src="villano4.JPG" alt="Reverse Flash" />
                            <p>Reverse Flash</p>
                            <input type="submit" value="Votar" name="btnBoton4" /><br>
                            TOTAL DE VOTOS: <?php echo $villanos['Reverse Flash']['votos']; ?><br>
                            PORCENTAJE DE VOTOS: <?php echo round($villanos['Reverse Flash']['porcentaje'], 2); ?>%
                        </td>
                    </tr>
                </table>
            </form>

            <table border="1" width="600" cellspacing="10" cellpadding="1">
                <tr>
                    <td id="ganadora">TOTAL DE VOTANTES: <?php echo $total; ?></td>
                </tr>
                <tr>
                    <td id="ganadora">
                        GANADOR: 
                        <?php
                            // Ordenar los villanos por el mayor número de votos
                            arsort($villanos);
                            reset($villanos);
                            $villano_ganador = key($villanos); // Obtiene la clave (nombre del villano)
                            echo $villano_ganador;
                        ?>
                    </td>
                </tr>
            </table>
        </section>
        <footer>
            <h5 id="centrado">Todos los derechos reservados @2025 - Diseñado por M@nuel Torres</h5>
        </footer>
    </body>
</html>