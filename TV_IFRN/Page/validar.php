<?php
    session_start();
    $matricula = isset($_GET['matricula']) ? trim($_GET['matricula']) : FALSE;
    $senha = isset($_GET['senha']) ? trim($_GET['senha']) : FALSE;

    $con = mysqli_connect('127.0.0.1','root','','sistv') or die('Falha ao conectar com o Banco');
    $select = "select * from pessoa p where p.senha = '$senha' and p.matricula = $matricula";

    $tabela = mysqli_query($con,$select);
    if(mysqli_num_rows($tabela)>0){
        $row = mysqli_fetch_array($tabela);
        $_SESSION["acesso"] = "OK";
        $_SESSION["nome"] = $row['nome'];
        $_SESSION["matricula"] = $row['matricula'];
        $_SESSION["senha"] = $row['senha'];
        $_SESSION["email"] = $row['email'];
        header('location:home.php');
    }else{
        $_SESSION["acesso"] = "A matricula ou senha não confere";
        header('location:entrar.php');
    }
    mysqli_close($con);
?>
