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
 
<form action="{{route('producto.store')}}" method="post" enctype="multipart/form-data">

@csrf

<label for="NombreProducto">NombreProducto</label>
<input type="text" name="NombreProducto" id="" required>

<label for="cantidad">cantidad</label>
<input type="number" name="cantidad" id="" required>

<label for="estado">estado</label>
<input type="text" name="estado" id="" required>

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" id="" required>

<label for="valor">valor</label>
<input type="number" name="valor" id="" required>

<label for="imagen">imagen</label>
<input type="file" name="imagen" id="" required>

<label for="disponible">disponible</label>
<select name="disponible" id="" required>
    <option value="si">Si</option>
    <option value="no">No</option>
</select>

<label for="categoria">categoria</label>
<select name="categoria_id" id="" required>
    @foreach($categorias as $categoria)
    <option value="{{$categoria->id}}">{{$categoria->NombreCategoria}}</option>
    @endforeach
</select>

<button type="submit" class="btn btn-success">Insertar Producto</button>

</form>
</body>
</html>