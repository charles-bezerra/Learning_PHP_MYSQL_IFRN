<?php
	$codigo = $_POST['codigo'];
	$nome   = $_POST['nome'];
	
	$con = mysqli_connect("localhost","root","","sissala");

	$insert = "insert into sala values ('$codigo', '$nome')";

	
	$result = mysqli_query($con, $insert);

	if ($result){
		echo "<h2>Cadastro realizado com sucesso</h2>";
		echo "<a href='listasala.php'> Listar Sala </a> ";
	}
	else
		echo "<h2>erro ao cadastrar a sala</h2>";

	
	mysqli_close($con);


?>