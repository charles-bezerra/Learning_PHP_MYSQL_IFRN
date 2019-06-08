<?php
	
	$con = mysqli_connect("localhost","root","","sissala");

	$select = "select nome, codigo  from sala";

	
	$result = mysqli_query($con, $select);


	while($linha = mysqli_fetch_array($result)){
		
		echo "Codigo da sala: " . $linha['codigo'] . " <br/>";
		echo "Nome da sala: " . $linha['nome'] . " <br/> <br/>";
		
		
	}
	
	echo "<a href='formsala.html'> Cadastrar outra sala? </a> ";

	
	mysqli_close($con);

?>