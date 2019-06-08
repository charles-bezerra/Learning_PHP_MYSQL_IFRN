<?php
  $con = mysqli_connect('localhost', 'root','', 'esquema02') or die('Error ao conectar ao banco de dados');
  $sql = "select * from homem";
  $result = mysqli_query($con,$sql);
  echo  "<br/> <h1> Listagem dos Cadastros no Sistema! </h1>";
  while ($row=mysqli_fetch_array($result)){
    echo "Nome: " . $row['nome'] . "<br/>";
    echo  "Idade: " . $row['idade'] . "<br/>";
    echo  "Codigo: " . $row['codHm'] . "<br/>";
    echo  "<br/> ";
  }
?>
