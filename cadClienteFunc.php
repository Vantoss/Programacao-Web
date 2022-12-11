<?php 

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pizzaria";

$conecta = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if (isset($_POST['enviar'])){
	$nome = mysqli_real_escape_string($conecta, $_POST['nome']);
	$senha = sha1($_POST['senha']);
	$genero = $_POST['genero'];
	$CPF = $_POST['cpf'];
	$nasc = $_POST['data'];
	$CEP = $_POST['CEP'];
	$comp = $_POST['complemento'];
	$contato = $_POST['celular'];
	$email = $_POST['email'];
	$obs = $_POST['campo_observacao'];

	$query = "INSERT INTO usuarios (nome, senha, genero, CPF, data_nasc, CEP, complemento, contato, email, observacoes, data_cadastro) VALUES ('$nome', '$senha', '$genero', '$CPF', '$nasc', '$CEP', '$comp', '$contato', '$email', '$obs', NOW())";
	$executar = mysqli_query($conecta, $query);
	if ($executar){
		header("location: login.php");
	};
};









?>