<div id="logoArea" class="navbar">
    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-inner">
        <a class="brand" href="{{url('index')}}"><img src="themes/images/Logo_cvrp_horizontal.png" alt="Logo_cvrp" style="height: 47px;"/></a>
        <form class="form-inline navbar-search" method="post" action="products.html" >
            <input id="srchFld" class="srchTxt" type="text" placeholder="Busqueda" style="text-align: center"/>
            <select class="srchTxt">
                <option>Todo</option>
                <option>Herramientas de contruccion </option>
                <option>Video juegos </option>
                <option>Salud y bienestar </option>
                <option>Deporte </option>
                <option>Libreria </option>
            </select>
            <button type="submit" id="submitButton" class="btn btn-primary">Ir</button>
        </form>
        <ul id="topMenu" class="nav pull-right">
            <li class=""><a href="special_offer.html">Ofertas especiales</a></li>
            <li class=""><a href="normal.html">Descuentos</a></li>
            <li class=""><a href="contact.html">Contacto</a></li>
            <li class="">
                <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Iniciar Sesión</span></a>
                <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3>Inicio</h3>
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
                        <button type="submit" class="btn btn-success">Registrarse</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
</div>