<?php
require_once("admin/_lib/config.php");
require_once("admin/_lib/MysqliDb.php");
date_default_timezone_set('America/Santiago');

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/corona.css" >
	<link rel="stylesheet" href="assets/css/animate.css" >
    <title>Casa Corona</title>
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />


      
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@cerveza_corona">
	<meta name="twitter:title" content="Súmate a los voluntarios por el océano y limpiemos las playas de Chile.">
	<meta name="twitter:description" content="Súmate a los voluntarios por el océano y limpiemos las playas de Chile.">
	<meta name="twitter:image" content="http://casacoronachile.cl/assets/img/IMAGEN_COMPARTIR-VXOWEB.jpg">      

	<meta property="og:type" content="article">
	<meta property="og:title" content="Corona: Voluntarios por el Océano">
	<meta property="og:site_name" content="Corona: Voluntarios por el Océano">
	<meta property="og:url" content="http://casacoronachile.cl/">
	<meta property="og:image" content="http://voluntariosporeloceano.cl/assets/img/IMAGEN_COMPARTIR-VXOWEB.jpg">
	<meta property="article:published_time" content="2017-10-23">
	<meta property="article:author" content="http://casacoronachile.cl"> 

	<script src="assets/js/js.cookie.js"></script>
    		<script>
			console.log(Cookies.get('oldenough'));
			if(Cookies.get('oldenough')!='1'){
				window.location.href = "agegate.php";
			}
			
		</script>
		

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;
n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '619802835045126'); 
fbq('track', 'PageView');
</script>
<noscript>
	<img height="1" width="1" src="https://www.facebook.com/tr?id=619802835045126&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120811548-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120811548-1');
</script>

		
</head>
<body id="landing">
	<section id="landing-top">
		<div class="container h80">
			<div class="row h100 align-items-center">
				<div class="col-6 offset-3 col-sm-4 offset-sm-4">
					<img src="assets/img/logo-casa_corona.png" class="img-fluid animated bounceInDown" alt="Casa Corona" id="logo-casa_corona">
				</div>
			</div>
		</div>
		<a href="javascript:void(0)" class="baja" id="baja1"><img src="assets/img/flecha-baja.png" class="img-fluid" ></a>
		<img src="assets/img/pincelazo.png" class="img-fluid" id="pincelazo">
	</section>
	<section id="landing-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>inscríbete y vive con nosotros<br>el mejor atardecer</h1>
				</div>
			</div>
			<div class="separadorhor1"></div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>Selecciona la fecha a la que quieres asistir:</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<?php
						$db->where ("ccFecha", '2018-06-16');
						$count = $db->getValue ("casacorona", "count(*)");
						$class = 'on';
						if($count>=20){
							$class = 'off';
						}
					?>
					<a href="javascript:void(0);" class="btn-fecha <?php echo $class; ?>" data-fecha="2018-06-16">
						<span class="fecha">SÁBADO 16 DE JUNIO - 17:00 HRS</span>
						<span class="cupos">Límite de cupos alcanzado</span>
					</a>
				</div>
			</div>
<!--
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<?php
						$db->where ("ccFecha", '2018-06-17');
						$count = $db->getValue ("casacorona", "count(*)");
						$class = 'on';
						if($count>=30){
							$class = 'off';
						}
					?>
					<a href="javascript:void(0);" class="btn-fecha <?php echo $class; ?>" data-fecha="2018-06-17">
						<span class="fecha">DOMINGO 17 DE JUNIO - 17:00 HRS</span>
						<span class="cupos">Límite de cupos alcanzado</span>
					</a>
				</div>
			</div>
-->
		</div>
	</section>
	<section id="landing-form">
		<div class="container text-center">
			<div class="row">
				<div class="col-6 offset-3 col-sm-2 offset-sm-5">
					<img src="assets/img/brush1.png" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<h2>TOMAR EN CUENTA: </h2>
				</div>
			</div>
			<div class="separadorhor1"></div>
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<ul>
						<li>- PUEDES IR CON UN ACOMPAÑANTE +18</li>
						<li>- Cupos limitados</li>
						<li>- La movilización es por tus propios medios</li>
						<li>- Te recomendamos planificar tu trayecto de ida antes de las 14:00hrs por cierre del paso a Farellones</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 col-sm-2 offset-sm-5">
					<img src="assets/img/brush2.png" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10 offset-sm-1">
					<form action="ajax/registrar.php" method="post" id="formulario" class="d-none">
						<div class="row">
							<div class="form-group col-sm-6">
								<label for="exampleInputEmail1">Nombre y Apellido</label>
								<input type="text" class="form-control" title="Ingresa tu nombre" required name="nombre">
								<input type="hidden" class="form-control" name="fecha" id="fecha">
							</div>
							<div class="form-group  col-sm-6">
								<label for="exampleInputPassword1">RUT</label>
								<input type="text" class="form-control rut" title="Ingresa tu RUT" required name="rut" maxlength="12">
							</div>
						</div>
						<div class="row">
							<div class="form-group  col-sm-6">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" title="ingresa un correo válido" required name="email">
							</div>
							<div class="form-group  col-sm-6">
								<label for="exampleInputPassword1">Teléfono</label>
								<input type="text" class="form-control" title="Ingresa tu Teléfono" required name="fono" maxlength="9">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="alert alert-dismissible fade show" role="alert" style="display: none;">
									<span id="alerta"></span>
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
								</div>
							</div>
							<div class="col-sm-4 offset-sm-4">
								<button type="submit" class="btn btn-primary" id="enviar"><img src="assets/img/btn-inscribirme.png" class="img-fluid"></button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<a href="javascript:void(0)" class="baja" id="baja2"><img src="assets/img/flecha-baja.png" class="img-fluid" ></a>
							</div>
						</div>
					</form>					
				</div>
			</div>
		</div>
	</section>
	<section id="como-llegar">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 offset-sm-4">
					<img src="assets/img/tit-como-llegar.png" class="img-fluid" alt="Cómo llegar">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 offset-sm-2">
					<div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.600056866766!2d-70.31989638486017!3d-33.35539698080129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967d3149365a67ff%3A0xbcc5f3734fe1e188!2sCasa+Corona!5e0!3m2!1ses!2scl!4v1528668657207' width='600' height='450' frameborder='0' allowfullscreen></iframe></div>
				</div>
			</div>
		</div>
	</section>	
	<footer id="footer">
		<div class="container text-center">
			<div class="row">
				<div class="col-6 offset-3 col-sm-8 offset-sm-2">
					<div class="row">
						<div class="col-sm-4 offset-sm-4">
							<img src="assets/img/logo-corona.png" class="img-fluid" id="logofooter">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">		
					<p><a href="#" target="_blank">BASES LEGALES</a> - <a href="#" target="_blank">TÉRMINOS Y CONDICIONES</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a href="https://www.facebook.com/cervezacoronachileoficial" class="rrss" target="_blank"><img src="assets/img/ico-fb.png" class="img-fluid"></a> <a href="https://www.instagram.com/cerveza_corona/" class="rrss" target="_blank"><img src="assets/img/ico-ig.png" class="img-fluid"></a>
				</div>
			</div>	
			<div class="row">
				<div class="col">	
					<p>Cupos limitados</br>
						BEBER CON MODERACIÓN. PROHIBIDA SU VENTA A MENORES DE 18 AÑOS. FAVOR NO COMPARTIR CONTENIDO CON MENORES DE EDAD.</p>
					<p><a href="http://cervezacorona.cl/" target="_blank">CERVEZA CORONA</a> 2018</p>					
				</div>
			</div>
		</div>
	</footer>
		 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/jquery.form.min.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script> 
    <script src="assets/js/jquery.rut.min.js"></script>	
    <script src="assets/js/corona.js"></script>
</body>
</html>