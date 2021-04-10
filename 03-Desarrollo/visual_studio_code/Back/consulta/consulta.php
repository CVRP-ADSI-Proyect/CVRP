<?php
    include '../conexion.php';
    $consulta = $link->query("SELECT * FROM tbl_producto;");
    $productos = $consulta->fetchAll(PDO::FETCH_OBJ);
?>