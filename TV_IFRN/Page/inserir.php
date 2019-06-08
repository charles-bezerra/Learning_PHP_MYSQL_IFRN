<?php

	session_start();

	$matricula = $_GET['matricula'];
	$nome = $_GET['nome'] . ' ' . $_GET['nome1'];
	$senha = $_GET['senha'];
	$senha_c = $_GET['senha-c'];
	$email = $_GET['email'];

	$con = mysqli_connect('127.0.0.1','root','','sistv') or die('Falha ao conectar com o Banco');

	$select = "select * from pessoa p where p.senha = '$senha' or p.matricula = '$matricula' or p.nome = '$nome'";
	$pesquisa = mysqli_query($con, $select);

	if ($senha != $senha_c){
			$_SESSION['acesso'] = 'As senhas fornecidas não conferem';
			header('location:cadast.php');
	}
	else if(mysqli_num_rows($pesquisa)>0){
			$_SESSION['acesso'] = 'Usuário já existente';
			header('location: cadast.php');
	}
	else{
				$sql = "insert into pessoa(matricula,nome,senha,email) values ('$matricula','$nome','$senha','$email')";
				$insert = mysqli_query($con,$sql);
				$_SESSION['acesso'] = 'OK';
				$_SESSION['nome'] = $nome;
				$_SESSION['senha'] = $senha;
				$_SESSION['email'] = $email;
				echo "Cadastro feito com sucesso!";
				header('location:home.php');
	}
	mysqli_close($con);
?>
