<?php
		$nome_h = $_GET['nome-h'];
		$idade_h = $_GET['idade-h'];
		$codHm = $_GET['codHm'];

		$nome_m = $_GET['nome-m'];
		$idade_m = $_GET['idade-m'];
		$codMl = $_GET['codMl'];

		$data_ = $_GET['data_'];

		$nome_f = $_GET['nome-f'];
		$sexo = $_GET['sexo'];
		$codFl = $_GET['codFl'];
		$con = mysqli_connect('localhost', 'root','', 'esquema02')
		or die('Error ao conectar ao banco de dados');
		$sql = "INSERT INTO homem('nome', 'idade', codHm) VALUES('$nome_h', '$idade_h', $codHm)" or die('Error ao guardar os dados');
		$result = mysqli_query($con,$sql);
		if($result){
				echo 'Procedimento feito com Sucesso';
		}else{
				echo '<h1> Falhou chaves ja existentes </h1>';
		}
		$insert = "SELECT * FROM homem";
		$result = mysqli_query($con,$insert);
		while($row = mysqli_fetch_array($result)){
			echo "<h1>".$row['nome']."</h1>";
			echo "<table>";
			echo "<tr> Idade: " . $row['idade'] . "<br/> </tr>";
			echo "<tr> Código: " . $row['codHm'] . "<br/> </tr>";
			echo "</table>";
		}
		mysqli_close($con);
?>
