<?php
    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
 
    $con = mysqli_connect('localhost:3306','root','') or die ("Falha na conexão!!!");
    mysqli_select_db($con,'jofruits') or die ("Sem acesso ao DB, entre em contato com o ADM, caique@uni9.pro.br");
 
    $result = mysqli_query($con,"SELECT * FROM `usuario` WHERE `email` = '$login' AND `senha` = '$senha'");

	if(mysqli_num_rows($result) > 0){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['msg'] = $login;
		//echo "Login realizado com sucesso.";
		header('location:index.php');
	}else{
		$_SESSION['msg'] = "Login/Senha inválidos!";
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		//echo "Senha ou Usuario invalido!";
		header('location:login.php');
	}

?>