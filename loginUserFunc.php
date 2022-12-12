<?php 

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pizzaria";

$conecta = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if (isset($_POST['entrar'])){
	login($conecta, $_POST['email'], $_POST['senha']);
}

function login($conecta, $email, $senha){
	if ($_POST['entrar']){
		$senha = sha1($senha);
		$query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$executar = mysqli_query($conecta, $query);
		$resultado = mysqli_fetch_assoc($executar);
		if (!empty($resultado)){
			session_start();
			$_SESSION['ativa'] = TRUE;
			$_SESSION['user'] = $resultado['nome'];
			$_SESSION['email'] = $resultado['email'];
			$_SESSION['cpf'] = $resultado['CPF'];
			$_SESSION['contato'] = $resultado['contato'];
			$_SESSION['cep'] = $resultado['CEP'];
			$_SESSION['comp'] = $resultado['complemento'];
			$_SESSION['obs'] = $resultado['observacoes'];
			header("location: usuario.php");
		}
	}
}



?>