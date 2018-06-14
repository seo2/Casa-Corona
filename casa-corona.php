<?php $pagina = 'casa'; ?>
<?php include('head.php'); ?>
<body id="casa-corona">
	
	<?php include('header.php'); ?>
	
	<section id="slide">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="assets/img/slide01.jpg" alt="">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="assets/img/slide02.jpg" alt="">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<img src="assets/img/pincelazo.png" class="img-fluid" id="pincelazo">
	</section>

	<section id="casa-intro">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-10 offset-sm-1">
					<div class="row">
						<div class="col-sm-4 offset-sm-4">
					<img src="assets/img/tit-casa-corona.png" class="img-fluid" id="tit-casa" alt="Casa Corona">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 col-sm-2 offset-sm-5">
					<img src="assets/img/brush1.png" class="img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<p>RELÁJATE CON EL MEJOR ATARDECER DE FARELLONES<br>Y DISFRUTA GRANDES MOMENTOS ENTRE AMIGOS .</p>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 col-sm-2 offset-sm-5">
					<img src="assets/img/brush2.png" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<?php include('como-llegar.php'); ?>	
	<?php include('footer.php'); ?>
</body>
</html>