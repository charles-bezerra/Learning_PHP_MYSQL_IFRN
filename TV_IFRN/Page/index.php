<?php
		session_start();
		$acesso = isset($_SESSION["acesso"]) ? $_SESSION["acesso"] : '';
		if($acesso == 'OK'){
			 header('location: home.php');
		}else{
				$_SESSION['acesso'] = '';
		}
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Interação.TV - CCSL</title>
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Compiled and minified CSS -->
 	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
 	 	<!-- Compiled and minified JavaScript -->

 	 	<link rel="stylesheet" type="text/css" href="stilo.css">
 	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	</head>


<div class="home">
	<div class="navbar-fixed">
			<nav class="z-depth-1">
					<div class="nav-wrapper green">
						<a href="index.php" class="brand-logo center">Interação.TV - CCSL</a>
						<ul id="nav-mobile" class="right hide-on-med-and-down">
							<li><a href="entrar.php">Entrar</a></li>
							<li><a href="cadast.php">Cadastrar</a></li>
						</ul>
					</div>
			</nav>
	</div>
	<div class="parallax-container">
			<div class="carousel-fixed-item center" style="margin-top:25%">
						<a class="btn-large waves-effect" style="color: white;">Começar</a>
			</div>
      <div class="parallax"><img src="icons/tv1.jpeg"></div>
  </div>
	<div class="container">
		<div class="carousel carousel-slider center" data-indicators="true">
					<div class="carousel-item white-text" style="background-image: url('icons/1d.jpg'); background-repeat: no-repeat; background-size: 100%; opacity:0.7;"></div>
					<div class="carousel-item white-text" style="background-image: url('icons/1d.jpg'); background-repeat: no-repeat; background-size: 100%; opacity:0.7"></div>
					<div class="carousel-item white-text" style="background-image: url('icons/1d.jpg'); background-repeat: no-repeat; background-size: 100%"></div>
					<div class="carousel-item white-text" style="background-image: url('icons/1d.jpg'); background-repeat: no-repeat; background-size: 100%"></div>
		</div>
	</div>

	<div  class="background z-depth-2" style="width:100%;">
			<div style="padding-left: 10%; padding-right:10%">
					<div class="row">
							<div class='col s5'><img class='responsive-img z-depth-5' src='icons/captura.png'></div>
							<div class='col s6'>
									<h4>Projeto</h4>
									<p style="font-size: 18px; text-align: justify; text-indent: 50px">
										O projeto desenvolvido pelo <a href="https://ccsl.ifrn.edu.br/tiki-index.php">CCSL IFRN</a>, visa permitir que o sistema de comunicação institucional possa utilizar de mídias interativas para divulgar e interagir com alunos e servidores, além de realizar a divulgação
										dos acontecimentos dentro da instituição, como editais.
									</p>
							</div>
					</div>
			</div>
	</div>


	<div id="video">
			<div class='video' align="center">
					<video class="z-depth-2 responsive-video" width="742" height="418" controls>
								<source src="icons/video.mp4" type='video/mp4'>
					</video>
			</div>
	</div>

		<h5 align='center' style="margin-top:20px; color:#4F4F4F">Modelos</h5>
				<div class="carousel">
						<div class="carousel-item" id='layouts'><img class='responsive-img materialboxed z-depth-3' src="icons/1.png"></div>
						<div class="carousel-item" id='layouts'><img class='responsive-img materialboxed z-depth-3' src="icons/2.png"></div>
						<div class="carousel-item" id='layouts'><img class='responsive-img materialboxed z-depth-3' src="icons/3.png"></div>
						<div class="carousel-item" id='layouts'><img class='responsive-img materialboxed z-depth-3' src="icons/4.png"></div>
				</div>


	<div class="footer">
    	<div align="center">© Copyright 2017 by Charles Bezerra de Oliveira Júnior. All Rights Reserved.</div>
  </div>
</div>
	<script type="text/javascript">
		  $(document).ready(function(){
      		$('.slider').slider();
					$('.parallax').parallax();
					$(window).scroll(function(){

					});
					$('.carousel').carousel();
					$('.carousel.carousel-slider').carousel({fullWidth: true});
   		});
   		$(".flip").click(function(){
    			$(".painel").slideToggle();
			});
	</script>
</html>
