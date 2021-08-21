<?php
session_start();
if((!isset($_SESSION['login']) == true ) and (!isset($_SESSION['senha']) == true)){
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	$_SESSION['msg'] = "Faça o login para acessar essa página!";
	header('location:login.php');
}else{
$_SESSION['msg'] = "Você já está logado";
$logado = $_SESSION['login'];

echo "Bem vindo $logado";
}
?>	