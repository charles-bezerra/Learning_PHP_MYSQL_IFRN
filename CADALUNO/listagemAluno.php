<?php

	// Passo 1: Conexão com o Banco de Dados
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$esquema="sisaluno"; // será preciso criar o banco de dados 
	$con = mysqli_connect($host, $usuario, $senha, $esquema) or die("Nao foi possivel conectar ao Banco de Dados: ");
	
	
	// Passo 2: Executar a instrução SQL
	
	$sql="select * from aluno";
	$result=mysqli_query($con,$sql);
	
	echo  "<br/> <h1> Listagem dos Cadastros no Sistema! </h1>";
	while ($row=mysqli_fetch_array($result)){
		
		echo " <b> Mat: " . $row['matricula'] . "</b> <br/>";
		echo "Nome: " . $row['nome'] . "<br/>";
		echo  "Sexo: " . $row['sexo'] . "<br/>";
		echo  "Data: " . $row['data_nasc'] . "<br/>";
		echo  "<br/> ";
	
	}
	
	
	
	echo "<br/>";
	echo "<a href='alunoform.html'>Cadastrar novo aluno</a>";

	// Passo 3: Fechar a conexao com o banco
	mysqli_close($con);
	
	
?>