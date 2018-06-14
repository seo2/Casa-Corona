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
<body id="agegate">
	
	
	<section>
		<div class="container text-center">
			<div class="row">
				<div class="col-6 offset-3 col-sm-4 offset-sm-4">
					<div class="row">
						<div class="col-sm-8 offset-sm-2">
							<img src="assets/img/logo-casa_corona.png" class="img-fluid" alt="Casa Corona" id="logo-casa_corona">
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col">	
					<p>es necesario que seas mayor de edad<br> 
					para acceder al sitio</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 offset-sm-4">
					<form id="formAge">
					  <div class="form-group col-sm-10 offset-sm-1">
					    <label for="exampleInputEmail1">fecha de nacimiento</label>
					    <input type="date" class="form-control text-center" id="fecha" aria-describedby="emailHelp" placeholder="01/01/1992">
					  </div>
					  <div class="row">
					  	<div class="col-8 offset-2">
					  		<button type="submit" class="btn"><img src="assets/img/btn-entrarpng.png" class="img-fluid"></button>
					  	</div>
					  </div>
					</form>					
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container text-center">
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<!--     <script src="assets/js/corona.js"></script> -->
	<script src="assets/js/js.cookie.js"></script>
<script>
				function getAge(dateString) 
			{
			    var today = new Date();
			    var birthDate = new Date(dateString);
			    var age = today.getFullYear() - birthDate.getFullYear();
			    var m = today.getMonth() - birthDate.getMonth();
			    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
			    {
			        age--;
			    }
			    return age;
			}


			$('#formAge').on("submit", function(e) {
			  	e.preventDefault();
/*
				
			  	dd = $('#DD').val();
			  	mm = $('#MM').val();
			  	aa = $('#AAAA').val();
*/
			
			  	dateString = $('#fecha').val();
			  	console.log(dateString);
			  	edad = getAge(dateString);
			  	
			  	console.log(edad);
			  	
			  	if(edad>17){
				  	Cookies.set('oldenough', '1', { expires: 7, path: '' });
				  	window.location.href = "index.php";
			  	}else{
				  	alert('Lo sentimos, debes ser mayor de edad para acceder.');
			  	}
			  	
			});     
</script>
</body>
</html>