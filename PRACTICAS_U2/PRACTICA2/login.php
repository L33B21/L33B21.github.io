<?php
    session_start();
   
    if ($_POST['txtUsuario']=='AÑOÑA' and $_POST['txtClave']=='777')
        $_SESSION['admin']=$_POST['txtUsuario'];
    else
        $_SESSION['error']='Usuario incorrecto';
   
    header('location:index.php');
?>