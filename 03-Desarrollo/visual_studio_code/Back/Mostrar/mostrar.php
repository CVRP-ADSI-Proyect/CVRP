<?php

require '../../back/conexion/conexion.php';

$result = $link-> query("SELECT * FROM tbl_producto ORDER BY idProducto ASC")

?>

<!DOCTYPE htlm>
<html lang="en">
    <head></title>
    </head>
<body>
             
            <button onclick="goBack()">Regresar</button>

            <script>
            function goBack() {
            window.history.back();
            }
            </script>
            <br><br>        

<table width = '100%' border=5; text-align= center>
    <tr bgcolor= '#CCCCCC'>
        <td style="text-align:center;"> ID del producto </td>
        <td style="text-align:center;"> Nombre del Producto </td>
        <td style="text-align:center;"> Cantidad </td>
        <td style="text-align:center;"> Estado </td>
        <td style="text-align:center;"> Descripcion </td>
        <td style="text-align:center;"> Valor </td>
        <td style="text-align:center;"> Disponible</td>
    </tr>

<?php 
while ($row=$result->fetch(PDO::FETCH_ASSOC)){
	echo "<tr>";
    echo "<td>".$row['idProducto']."</td>";
    echo "<td>".$row['nombreProducto']. "</td>";
    echo "<td>".$row['cantidad']. "</td>";
    echo "<td>".$row['estado']."</td>";
    echo "<td>".$row['descripcion']."</td>";
    echo "<td>".$row['valor']. "</td>";
    echo "<td>".$row['disponible']. "</td>";
	
/*     echo "<td> <a href=\"editar.php?id=$row[id]\"> Editar Producto</a> </td>";

    echo "<td> <a href=\"eliminar.php?id=$row[id]\" onclick=\"
    confirm('Esta Seguro de Eliminar este Producto?');\"> Eliminar Producto</a> </td>";

    echo "</tr>"; */
}
?>

</table>
</body>
</html>

<?php
/* if (isset ($_POST['buscarprod']))
{  
$idProducto = $_POST['idProducto'];
$nombreProducto = $_POST['nombreProducto'];
$cantidad = $_POST['cantidad'];
$estado = $_POST['estado'];
$descripcion = $_POST['descripcion'];
$valor =  $_POST['valor'];
$imagen = $_POST['imagen'];
$disponible	 = $_POST['disponible'];
} */
?>