<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <a class="btn btn-info mt-4 mx-4" href="#">Crear Producto</a>
    <table class="table table-bordered mx-4 my-4">
    <thead>
<tr>
<th>id</th>
<th>NombreProducto</th>
<th>cantidad</th>
<th>estado</th>
<th>descripcion</th>
<th>valor</th>
<th>imagen</th>
<th>disponible</th>
<th>categoria</th>
<th>Acciones</th>
</tr>
    </thead>
    <tbody>
@foreach($productos as $producto)
<tr>
    <th>{{$producto->id}}</th>
<th>{{$producto->NombreProducto}}</th>
<th>{{$producto->cantidad}}</th>
<th>{{$producto->estado}}</th>
<th>{{$producto->descripcion}}</th>
<th>{{$producto->valor}}</th>
<th><img src="{{asset('storage').'/'. $producto->imagen}}" alt="{{$producto->NombreProducto}}"></th>
<th>{{$producto->disponible}}</th>
<th>{{$producto->categoria->NombreCategoria}}</th>

<th>
<a href="#">Editar</a>
<a href="#">Mostrar</a>
<button type="submit">Eliminar</button>
</th>
</tr>
@endforeach
</tbody> 
    
    </table>
</body>
</html>