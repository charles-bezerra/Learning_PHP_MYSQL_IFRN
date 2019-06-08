<?php
		session_start();
		isset($_SESSION['acesso']) ? $_SESSION['acesso'] : '';
		if($_SESSION['nome'] == '' or $_SESSION['acesso'] != 'OK'){
			$_SESSION['acesso'] = 'Você deve se autenticar!';
			header('location: entrar.php');
		}
?>

<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Interação.TV - CCSL</title>
		<!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<!-- Compiled and minified CSS -->
 	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
 	 	<!-- Compiled and minified JavaScript -->

 	 	<link rel="stylesheet" type="text/css" href="stilo.css">
 	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

	<div class="navbar-fixed">
		<nav class="z-depth-2">
		    <div class="nav-wrapper">
		      <a href="index.php" class="brand-logo center">Interação.TV - CCSL</a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
								<li>
										<a class='dropdown-button btn' style="background-color: rgba(0,0,0,0); box-shadow: 0 0 0 " href='#' data-activates='dropdown1'> <?php echo $_SESSION['nome'];?></a>
										<ul id='dropdown1' class='dropdown-content'>
										  	<li><a href="#!">Perfil</a></li>
										   	<li><a href="#!">Configurações</a></li>
												<li><a href="sair.php">Sair</a></li>
										</ul>
								</li>
		      </ul>
		    </div>
		</nav>
	</div>

	<div class="ifrnTV" style="width: 100%; height: 90%;"></div>


<script>
		$(document).ready(function(){$('.ifrnTV').load("http://interacao.ifrn.edu.br/messages/load_messages?campi_id=2");
	});
</script>
			<script src="demo.js"></script>
</html>
