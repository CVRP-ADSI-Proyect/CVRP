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
        <div class="ml-5">
            <h2 class="h2 my-3">Editar Producto</h2>
            <form action="{{route('producto.update',$producto->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-3 mx-3">
                        <label for="NombreProducto">Nombre Producto</label>
                        <input type="text" class="form-control" name="NombreProducto" id="NombreProducto"
                               value="{{$producto->NombreProducto}}" required>
                    </div>
                    <div class="col-3 mx-3">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" class="form-control" name="cantidad" id="cantidad"
                               onkeyup="formatoMilesimas(cantidad)" onchange="formatoMilesimas(cantidad)"
                               value="{{$producto->cantidad}}" required>
                    </div>
                    <div class="col-3 mx-3">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" class="form-control" required>
                            @if($producto->estado=="Nuevo")
                                <option value="">--Selecionar--</option>
                                <option value="Nuevo" selected>Nuevo</option>
                                <option value="Usado">Usado</option>
                            @elseif($producto->estado=="Usado")
                                <option value="">--Selecionar--</option>
                                <option value="Nuevo">Nuevo</option>
                                <option value="Usado" selected>Usado</option>
                            @else
                                <option value="" selected>--Selecionar--</option>
                                <option value="Nuevo">Nuevo</option>
                                <option value="Usado">Usado</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3 mx-3">
                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" name="valor" id="valor"
                               onkeyup="formatoMilesimas(valor)" onchange="formatoMilesimas(valor)"
                               value="{{$producto->valor}}" required>
                    </div>
                    <div class="col-3 mx-3">
                        <label for="disponible">Disponible</label>
                        <select class="form-control" name="disponible" id="disponible" required>
                            @if($producto->disponible == "SI")
                                <option value="">--Selecionar--</option>
                                <option value="SI" selected>Si</option>
                                <option value="NO">No</option>
                            @elseif($producto->disponible == "NO")
                                <option value="">--Selecionar--</option>
                                <option value="SI">Si</option>
                                <option value="NO" selected>No</option>
                            @else
                                <option value="" selected>--Selecionar--</option>
                                <option value="SI">Si</option>
                                <option value="NO">No</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-3 mx-3">
                        <label for="categoria">categoria</label>
                        <select class="form-control" name="categoria_id" id="categoria_id">
                            <option
                            @foreach($categorias as $categoria)
                                @if($producto->categoria_id==$categoria->id)
                                    <option value="{{$categoria->id}}" selected>{{$categoria->NombreCategoria}}</option>
                                @else
                                    <option value="{{$categoria->id}}">{{$categoria->NombreCategoria}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3 mx-3">
                        <label for="imagen">Imagen</label>
                        <img src="{{Storage::url($producto->imagen)}}" alt="{{$producto->NombreProducto}}" width="100">
                        <input type="file" class="form-control-file" name="imagen" id="imagen">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-10 mx-3">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control " name="descripcion" id="descripcion"
                                  rows="3">{{$producto->descripcion}}</textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success mx-3">Actualizar Producto</button>
                <a href="{{route('producto.index')}}" class="btn btn-info mx-3">Volver</a>
            </form>
        </div>
    </div>
</div>
<!-- Footer ================================================================== -->
@include ('footer.footer')
<!-- END FOOTER ==========================================================================================-->
</body>
</html>
