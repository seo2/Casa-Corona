
	<header>
		<div class="row">
			<div class="col-sm-10 offset-1">
				<nav class="navbar navbar-expand-md navbar-light bg-faded">
				    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    
				    <div class="collapse navbar-collapse col-5">
				      <ul class="nav navbar-nav w100">
				          <li class="nav-item col <?php if($pagina=='home'){ ?>active<?php } ?>">
				              <a class="nav-link" href="index2.php"><span>Inicio</span></a>
				          </li>
				          <li class="nav-item col <?php if($pagina=='casa'){ ?>active<?php } ?>">
				              <a class="nav-link" href="casa-corona.php"><span>Casa corona</span></a>
				          </li>
				      </ul>
				    </div>
				    
				    <a class="navbar-brand mx-auto col-2" href="#"><div id="logo"><img src="assets/img/logo-casa_corona.png" class="img-fluid" alt="Casa Corona" id="logo-casa_corona"></div></a>
				    
				    <div class="collapse navbar-collapse col-5">
				      <ul class="nav navbar-nav  w100">
				          <li class="nav-item col <?php if($pagina=='quiero'){ ?>active<?php } ?>">
				              <a class="nav-link" href="quiero.php"><span>Quiero subir</span></a>
				          </li>
				        <li class="nav-item col" <?php if($pagina=='como'){ ?>active<?php } ?>>
				              <a class="nav-link" href="#"><span>Cómo llegar</span></a>
				        </li>
				      </ul>
				    </div>
				  
				    <!-- Mobile -->
				    <div class="collapse" id="navbarMobile">
				        <ul class="nav navbar-nav">
				          <li class="nav-item">
				              <a class="nav-link" href="#">Inicio</a>
				          </li>
				          <li class="nav-item">
				                <a class="nav-link" href="#">Casa corona</a>
				          </li>
				          <li class="nav-item">
				              <a class="nav-link" href="#">Quiero subir</a>
				          </li>
				          <li class="nav-item">
				              <a class="nav-link" href="#">Cómo llegar</a>
				          </li>
				        </ul>
				    </div>
				</nav>
			</div>
		</div>
	</header>