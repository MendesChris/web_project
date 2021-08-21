<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jofruits";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE jofruits";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}


// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// sql to create table
$sql = "CREATE TABLE usuario (
email VARCHAR(50) PRIMARY KEY,
cpf VARCHAR(50) NOT NULL,
nome VARCHAR(50) NOT NULL,
genero VARCHAR(50) NOT NULL,
telefone VARCHAR(50) NOT NULL,
cep VARCHAR(50) NOT NULL,
endereco VARCHAR(50) NOT NULL,
n VARCHAR(50) NOT NULL,
complemento VARCHAR(50) NOT NULL,
bairro VARCHAR(50) NOT NULL,
cidade VARCHAR(50) NOT NULL,
pais VARCHAR(50) NOT NULL,
senha VARCHAR(30) NOT NULL
)";

if ($conn2->query($sql) === TRUE) {
  echo "\nTable usuario criada com sucesso";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
