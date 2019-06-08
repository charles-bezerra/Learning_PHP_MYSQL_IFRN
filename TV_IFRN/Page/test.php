<?php
	$con = mysqli_connect('127.0.0.1','root','','sistv') or die('Não foi possível conectar ao banco');
	$sql = 'select * FROM Pessoa';
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($result)){
		echo '<p>Nome: ' . $row['nome'] . '</p>';
		echo '<p>Senha: ' . $row['senha'] . '</p>';
		echo '<p>Matricula: ' . $row['matricula'] . '</p>';
		echo '<p>Email: ' . $row['email'] . '</p>';
		echo '<hr/>';
	}
?>
