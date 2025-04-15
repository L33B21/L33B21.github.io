<?php
    function getProducto(){
        return $_POST['selProducto'] ?? '';
    }

    function getCantidad(){
        return $_POST['txtCantidad'] ?? 1;
    }
?>