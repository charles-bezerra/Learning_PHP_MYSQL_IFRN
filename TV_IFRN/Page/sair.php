<?php
    session_start();

    if(!isset($_SESSION['acesso']) || ($_SESSION['acesso'] != "OK") ) {
    	$_SESSION["acesso"] = "Você deve se autenticar!";
    	header("Location:entrar.php");
    }
    else{
      $_SESSION["acesso"] = '';
      session_destroy();
    	echo "Você saiu do sistema! <br/>";
    	header('location:index.php');

    }
?>
