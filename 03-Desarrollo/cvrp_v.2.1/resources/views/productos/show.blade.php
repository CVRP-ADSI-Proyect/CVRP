<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CVRP - Nuevo Milenio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{URL::asset('themes/images/ico/logo_cvrp.ico')}}">
</head>
<body>
<!-- Header====================================================================== -->
@include ('header/header')
<!-- Header End====================================================================== -->
<div class="container">
    <div class="row">
        <table class="table table-bordered mx-4 my-4 table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Valor</th>
                <th>Imagen</th>
                <th>Disponible</th>
                <th>Categoría</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->NombreProducto}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->estado}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{"$ ".number_format($producto->valor,0)}}</td>
                <td><img width="100" src="{{Storage::url($producto->imagen)}}" alt="{{$producto->NombreProducto}}"></td>
                <td>{{$producto->disponible}}</td>
                <td>{{$producto->categoria->NombreCategoria}}</td>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-info mt-4 mx-4" href="{{route('producto.index')}}">Volver</a>
    </div>
</div>
<!-- Footer ================================================================== -->
@include ('footer.footer')
<!-- END FOOTER ==========================================================================================-->
</body>
</html>
