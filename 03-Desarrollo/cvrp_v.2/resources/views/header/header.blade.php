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
    <a class="brand" href="{{route ('home')}}"><img src="themes/images/logo_cvrp2.webp" alt="Bootsshop"/></a>
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
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">ingresar</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Recordar
				</label>
			  </div>
			</form>		
			<button type="submit" class="btn btn-success">iniciar Sesión</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>