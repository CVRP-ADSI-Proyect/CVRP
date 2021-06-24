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
  </head>
<body>

<!-- Navbar ================================================== -->
@include('header.header')
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Visitanos</h1>
	<hr class="soften"/>
	<div class="row">
		<div class="span4">
		<h4>Detalles de contacto</h4>
		<p>	Cra 7,<br/> #115-48, COL
			<br/><br/>
			cvrpinfo@nuevomilenio.com<br/>
			﻿Tel 320-806-9624<br/>
			Fax 123-456-5679<br/>
			web:cvrp.com
		</p>
		</div>

		<div class="span4">
		<h4>Horarios</h4>
			<h5> Lunes - Viernes</h5>
			<p>08:00 am - 10:00 pm<br/><br/></p>
			<h5>Sabados</h5>
			<p>08:00 am - 9:00 pm<br/><br/></p>
			<h5>Domingos</h5>
			<p>10:30 am - 05:00 pm<br/><br/></p>
		</div>
		<div class="span4">
		<h4>Contacto vía mail</h4>
		<form class="form-horizontal">
        <fieldset>
          <div class="control-group">

              <input type="text" placeholder="nombre" class="input-xlarge"/>

          </div>
		   <div class="control-group">

              <input type="text" placeholder="correo" class="input-xlarge"/>

          </div>
		   <div class="control-group">

              <input type="text" placeholder="dirección" class="input-xlarge"/>

          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>

          </div>

            <button class="btn btn-large" type="submit">Enviar mensaje</button>

        </fieldset>
      </form>
		</div>
	</div>
	<div class="row">
	<div class="span12">
	<iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1018799.7714481468!2d-75.84376182718817!3d4.084082052456872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f98cfc0539bd5%3A0x2867ea06e937e316!2sCOMPRA-VENTA%20NUEVO%20MILENIO%20DEL%20SUR!5e0!3m2!1ses-419!2sco!4v1623510645500!5m2!1ses-419!2sco"></iframe><br />
	<small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
	</div>
	</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
@include('footer.footer')
</body>
</html>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
