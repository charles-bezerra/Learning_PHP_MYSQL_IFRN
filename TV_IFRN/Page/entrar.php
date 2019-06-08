<?php
	session_start();
	// recupera os dados do formul�rio
	$login = isset($_SESSION["acesso"]) ? $_SESSION["acesso"] :'';
	if($login == 'OK'){
		 header('location: home.php');
	}
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Entrar</title>
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Compiled and minified CSS -->
 	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	 	<!-- Compiled and minified JavaScript -->

 	 	<link rel="stylesheet" type="text/css" href="stilo.css">
 	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	</head>


<div class="body" style="margin: 0; padding:0; height: 100%; width: 100%; background-image: url('icons/tv.jpeg');
background-size: 100% 100%;
background-repeat: no-repeat;">

		<div class="navbar-fixed">
			<nav class="z-depth-1">
						<div class="nav-wrapper" style="background-color:#8bc34a">
								<a href="index.php" class="brand-logo center">Interação.TV - CCSL</a>
								<ul id="nav-mobile" class="right hide-on-med-and-down">
										<li><a href="cadast.php">Cadastrar</a></li>
								</ul>
						</div>
			</nav>
		</div>

		<form class='form' align='center' action="validar.php" method="get" style="margin-bottom: 8%; margin-top:5%; padding:0;">
				<div class="form z-depth-3 white" style="width: 35%; padding: 50px; border-radius:23px; margin-left:32.5%">
							<i class="medium material-icons">account_circle</i>
							<div class="row">
				        		<div class="input-field col s12">
					          			<input id="matricula" type="number" class="validate" name="matricula" required="required">
					          			<label for="matricula" data-error="Por favor, forneça os numeros da sua matricula!">Matricula</label>
				        		</div>
				      </div>
							<div class="row">
							   		<div class="input-field col s12">
							      			<input id="password" type="password" class="validate" name="senha" required="required"/>
							       			<label data-error="Por favor, forneça sua senha!" for="password">Senha</label>
							   		</div>
							 </div>

							 <div align='center'>
											 <div  align="center" style=" width: 70%;background-color: red; color: white; opacity: 0.4; font-size: 15px">
												 <?php
															if(isset($_SESSION['acesso'])){
																		 echo $_SESSION['acesso'];
															};
												 ?>
											 </div>
							 </div>

							 <div class="row">
								 		<div class="col s12">
								 					<input class='waves-effect waves-light btn pulse' type="submit" value="Avançar" style="background-color:#8bc34a; margin-top: 15px">
										</div>
							 </div>
				</div>
		</form>


		<div class="footer" style="	background-color: rgba(0, 0, 0, 0);">
      		<div align="center">© Copyright 2017 by Charles Bezerra de Oliveira Júnior. All Rights Reserved.</div>
    </div>
</div>

</html>
