<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CVRP - Nuevo Milenio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
     <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
     -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->

    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet"/>

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/logo_cvrp.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
</head>
<body>
<!-- Navbar ================================================== -->
@include('header/header')
<!-- Header End====================================================================== -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
        @include('sidebar.sidebar')
        <!-- Sidebar end=============================================== -->

            <div id="myTab" class="pull-right">
                <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
                <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
            </div>
            <br class="clr"/>

            <form action="{{route('producto.index')}}" method="get">
                @csrf
                <input type="text" name="name_product" id="" placeholder="Escriba nombre de Producto: ">
                <button type="submit" class="btn btn-success">Filtrar</button>
            </form>

            <a class="btn btn-info mt-4 mx-4" href="{{route('producto.create')}}">Crear Producto</a>
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
                        <th><img width="200" height="200" src="{{asset('storage').'/'. $producto->imagen}}" alt="{{$producto->NombreProducto}}"></th>
                        <th>{{$producto->disponible}}</th>
                        <th>{{$producto->categoria->NombreCategoria}}</th>

                        <th>
                            <a class="btn btn-warning" href="{{route('producto.edit',$producto->id)}}">Editar</a>
                            <a class="btn btn-info" href="{{route('producto.show',$producto->id)}}">Mostrar</a>
                            <form action="{{route('producto.destroy',$producto->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
                <!-- MainBody End ============================= -->
                <!-- Footer ================================================================== -->
                @include('footer.footer')

                <!-- Themes switcher section ============================================================================================= -->
                <div id="secectionBox">
                    <link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
                    <script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
                    <div id="themeContainer">
                        <div id="hideme" class="themeTitle">Style Selector</div>
                        <div class="themeName">Oregional Skin</div>
                        <div class="images style">
                            <a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
                            <a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
                        </div>
                        <div class="themeName">Bootswatch Skins (11)</div>
                        <div class="images style">
                            <a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
                            <a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
                            <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
                        </div>
                        <div class="themeName">Background Patterns </div>
                        <div class="images patterns">
                            <a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
                            <a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

                            <a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

                            <a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
                            <a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

                        </div>
                    </div>
                </div>
                <span id="themesBtn"></span>
</body>
</html>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/google-code-prettify/prettify.js"></script>

<script src="js/bootshop.js"></script>
<script src="js/jquery.lightbox-0.5.js"></script>
