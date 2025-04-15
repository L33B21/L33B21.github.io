<?php
session_start();

// Contabilizar votos
if (isset($_POST['btnBoton1'])) $_SESSION['villano1'] += 1;
if (isset($_POST['btnBoton2'])) $_SESSION['villano2'] += 1;
if (isset($_POST['btnBoton3'])) $_SESSION['villano3'] += 1;
if (isset($_POST['btnBoton4'])) $_SESSION['villano4'] += 1;

// Actualizar total de votantes
$_SESSION['total'] = $_SESSION['villano1'] + $_SESSION['villano2'] + $_SESSION['villano3'] + $_SESSION['villano4'];

// Redirigir a la página principal
header('Location: index.php');
exit;
?>