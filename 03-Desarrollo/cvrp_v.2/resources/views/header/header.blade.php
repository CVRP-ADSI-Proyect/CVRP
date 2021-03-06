<!-- Bootstrap style -->
<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/logo_cvrp.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>

<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Bienvenido!<strong> #</strong></div>
	<div class="span6">
	<div class="pull-right">
		<!-- <a href="product_summary.html"><span class="">Fr</span></a> -->
		<a href="product_summary.html"><span class="">Es</span></a>
		<!-- <span class="btn btn-mini">En</span> -->
		<!-- <a href="product_summary.html"><span>&pound;</span></a> -->
		<span class="btn btn-mini">$155.00</span>
		<!-- <a href="product_summary.html"><span class="">$</span></a> -->
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ # ] Productos en el carrito </span> </a>
	</div>
	</div>
</div>
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="{{route ('main')}}"><img src="themes/images/logo_cvrp2.webp" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="get" action="{{route ('products.list')}}" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>Todo</option>
			<option>Herramientas </option>
			<option>Video juegos </option>
			<option>Joyeria </option>
			<option>Deporte </option>
			<option>Electrodomesticos </option>
		</select>
		  <button type="submit" id="submitButton" class="btn btn-primary">Ir</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="{{ url('/offer')}}">Ofertas especiales</a></li>
	 <li class=""><a href="normal.html">Test</a></li>
	 <li class=""><a href="{{url('/contact')}}">Contactanos</a></li>
	 <li class="">
	 <a type="submit" href="{{ route ('sesion')}}" role="button"><span class="btn btn-large btn-success">ingresar</span></a>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
