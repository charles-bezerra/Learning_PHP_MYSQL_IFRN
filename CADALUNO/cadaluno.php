<?php
	
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$data_nasc = $_POST['data_nasc'];
	$email =  $_POST['email'];
	
	
	// Passo 1: Conexão com o Banco de Dados
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$esquema="sisaluno"; // será preciso criar o banco de dados 
	$con = mysqli_connect($host, $usuario, $senha, $esquema) or die("Nao foi possivel conectar ao Banco de Dados: ");
	
	
	// Passo 2: Executar a instrução SQL
	$insert = "insert into aluno (nome, sexo, data_nasc, email) 
					values ('$nome', '$sexo', '$data_nasc', '$email') ";
	$result = mysqli_query($con,$insert);
	
	
	if ($result)	
		header('Location: alunoForm.html');
	else
		echo "Não foi possivel adicionar os dados";

	// Passo 3: Fechar a conexao com o banco
	mysqli_close($con);
	
	
?>