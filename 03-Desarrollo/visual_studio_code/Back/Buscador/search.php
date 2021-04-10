<htlm> 
    <head>Buscador</title>
    </head>
<body>

<?php
require_once ("../conexion/conexion.php");

if (isset ($_POST['buscarprod']))
{
    $idProducto = ['idProducto'];
    $nombreProducto = ['nombreProducto'];
    $cantidad = ['cantidad'];
    $estado = ['estado'];
    $descripcion = ['descripcion'];
    $valor =  ['valor'];
    $imagen = ['imagen'];
    $disponible	 = ['disponible'];
    $Fk_idCategoria = ['Fk_idCategoria'];

    $link-> query("SELECT * FROM tbl_producto WHERE nombreProducto like 'Blueberries'");
    if(!empty($_post['buscarprod'])){
        
        echo "$descripcion";
    }
    
    
}   

?>

</body>
</html>