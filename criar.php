<?php include "conexao.php"; ?>

<?php

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$genero = $_POST['genero'];
	$telefone = $_POST['telefone'];
	$cep = $_POST['cep'];
	$endereco = $_POST['endereco'];
	$n = $_POST['n'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$pais = $_POST['pais'];



	$query = "INSERT INTO usuario (email, senha, cpf, nome, genero, telefone, cep, endereco, n, complemento, bairro, cidade, pais) VALUES ('$email', '$senha', '$cpf', '$nome', '$genero', '$telefone', '$cep', '$endereco', '$n', '$complemento', '$bairro', '$cidade', '$pais')";

	$ok = mysqli_query($conn,$query);

	if($ok){
		echo 'Cadastrado com sucesso!!!';
	}else{
		echo("Error description: " . $conn -> error);
	}

mysqli_close($conn);
?>