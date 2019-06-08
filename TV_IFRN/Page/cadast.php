<?php
	session_start();
	$acesso = isset($_SESSION["acesso"]) ? $_SESSION["acesso"] : '';
	if($acesso == 'OK'){
		 header('location: home.php');
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
	<div class='body' style="margin: 0; padding:0; height: 100%; width: 100%; background-image: url('icons/tv.jpeg');
	background-size: 100% 100%;
	background-repeat: no-repeat;">

			<div class="navbar-fixed">
				<nav class="z-depth-1">
							<div class="nav-wrapper">
									<a href="index.php" class="brand-logo center">Interação.TV - CCSL</a>
									<ul id="nav-mobile" class="right hide-on-med-and-down">
											<li><a href="cadast.php">Cadastrar</a></li>
									</ul>
							</div>
				</nav>
			</div>


			<h3>Crie sua conta</h3>
			<form class='form z-depth-4' align='center' action="inserir.php" method="get">
					<div class="container center-align">
								<div class="row">
											<div class="input-field col s6">
							          		<input id="first_name" type="text" class="validate" required="required" name="nome">
						          			<label for="first_name">Nome</label>
												</div>
												<div class="input-field col s6">
							         			<input id="first_name" type="text" class="validate" required="required" name="nome1">
						         				<label for="last_name">Sobrenome</label>
												</div>
								</div>
								<div class="row">
					        		<div class="input-field col s12">
					          			<input id="email" type="email" class="validate" required="required" name="email">
					          			<label for="email" data-error="Por favor, forneça emails do formato: exemlo@exemplo.com" data-success="right">Email</label>
					        		</div>
					      </div>
								<div class="row">
					        		<div class="input-field col s12">
					          			<input id="password" type="password" class="validate" required="required" name="senha">
					          			<label for="password">Senha</label>
					        		</div>
					      </div>

			      		<div class="row">
			        		<div class="input-field col s12">
			          			<input id="password" type="password" class="validate" required="required" name="senha-c">
			          			<label for="password">Confirme a senha</label>
			        		</div>
			      		</div>


				      	<div class="row">
			        		<div class="input-field col s12">
			          			<input id='number' type="number" class="validate" required="required" name="matricula">
			          			<label for="matricula">Matricula</label>
			        		</div>
			      		</div>

								<div style="margin-bottom: 2%;color: white; background-color:#ff8a80; border-radius: 13px; font-size: 15px">
										<?php
													if(isset($_SESSION['acesso'])){
														echo $_SESSION['acesso'];
													};
										?>
				     		</div>

								<input class='btn' type="submit" value="Submeter" align="center" />
				</div>
			</form>

			<div class="footer z-depth-4">
		      	<div align="center">© Copyright 2017 by Charles Bezerra de Oliveira Júnior. All Rights Reserved.</div>
		  </div>

</div>

</html>
