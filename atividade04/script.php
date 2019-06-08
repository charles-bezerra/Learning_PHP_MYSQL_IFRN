<?php
	$nome = $_POST['nome'];
	$cod = $_POST['cod'];
	$fornec = $_POST['fornec'];
	$data_ = $_POST['data_'];
	$preco = $_POST['preco'];
	$quant = $_POST['quant'];
	$con = mysqli_connect('127.0.0.1','root','','revisao');
	if(!$con){
		echo "Error ao connectar com o Banco de dados";
		echo $conn->connect_error;
		exit;
	}
	$insert = "insert into Pessoa(nome,cod,fornec,data_,preco,quant) VALUES('$nome',$cod,'$fornec','$data_',$preco,$quant)";
	if(mysqli_query($con, $insert) === True) {
    	echo "Sucesso";
	}else {
    	echo "Error: " . $insert . "<br>";
	}
	$sql = "SELECT * FROM Pessoa";
	$result = mysqli_query($con, $sql);
	echo "<h1 align='center'> Pessoa </h1>";
	while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<h2><td>" . $row['nome'] . "</td></h2><br/>";
                echo "<td>" . "Código: ". $row['cod'] . "</td><br/>";
                echo "<td>" . "Fornencedor: " . $row['fornec'] . "</td><br/>";
                echo "<td>" . "Data de Compra: " . $row['data_'] . "</td><br/>";
                echo "<td>" . "Preço: " . $row['preco'] . "</td><br/>";
                echo "<td>" . "Quantidade: " . $row['quant'] . "</td><br/>";
            echo "</tr>";
     }

	mysqli_close($con);
?>