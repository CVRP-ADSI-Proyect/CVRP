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
@include ('header.header')
<!-- Header End====================================================================== -->
<div class="container">
    <div class="row">
        <div class="ml-5">
            <h2 class="h2 my-3">Crear Producto</h2>
            <form action="{{route('producto.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-3 mx-3">
                        <label for="NombreProducto">Nombre Producto</label>
                        <input type="text" class="form-control" name="NombreProducto" id="" required>
                    </div>
                    <div class="col-3 mx-3">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" class="form-control" name="cantidad" id="cantidad"
                               onkeyup="formatoMilesimas(cantidad)" onchange="formatoMilesimas(cantidad)" required>
                    </div>
                    <div class="col-3 mx-3">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" class="form-control" required>
                            <option value="" selected>--Selecionar--</option>
                            <option value="Nuevo">Nuevo</option>
                            <option value="Usado">Usado</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3 mx-3">
                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" name="valor" id="valor"
                               onkeyup="formatoMilesimas(valor)" onchange="formatoMilesimas(valor)" required>
                    </div>
                    <div class="col-3 mx-3">
                        <label for="disponible">Disponible</label>
                        <select class="form-control" name="disponible" id="disponible" required>
                            <option value="" selected>--Selecionar--</option>
                            <option value="SI">Si</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                    <div class="col-3 mx-3">
                        <label for="imagen">Imagen</label>
                        <input type="file" class="form-control-file" name="imagen" id="imagen" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3 mx-3">
                        <label for="categoria">Categoria</label>
                        <select class="form-control" name="categoria_id" id="categoria_id" required>
                            <option value="" selected>--Selecionar--</option>
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->NombreCategoria}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-10 mx-3">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control " name="descripcion" id="descripcion" rows="3"
                                  required></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-info mx-3">Insertar Producto</button>
            </form>
        </div>
    </div>
</div>
<!-- Footer ================================================================== -->
@include ('footer.footer')
<!-- END FOOTER ==========================================================================================-->
</body>
</html>
