<?php
session_start();
if (isset($_SESSION['ativa'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página do Usuário</title>
	<link rel="stylesheet" type="text/css" href="usuario.css">
</head>
<body>
	<?php require "copiaecola.php";?>
	<div class="userupper">
		<h1>Bem vindo, <?php echo $_SESSION['user']; ?></h1>
	</div>
	<main>
		<div class="infoprinc">
			<div class="esquerda">
				<!--<p class="text">Nome: </p>-->
				<p class="text">E-mail: <?php echo $_SESSION['email']; ?></p>
				<p class="text">CPF: <?php echo $_SESSION['cpf']; ?></p>
				<p class="text">Número para contato: <?php echo $_SESSION['contato']; ?></p>
			</div>
			<div class="direita">
				<div class="foto">
					<p class="fototexto">Sua foto fica aqui</p>
				</div>
			</div>
		</div>
		<div class="infosec">
			<p class="text2">CEP: <?php echo $_SESSION['cep'];?></p>
			<p class="text2">Complemento: <?php echo $_SESSION['comp']; ?></p>
			<p class="text2">Observações: <?php echo $_SESSION['obs']; ?></p>
		</div>
		<div class="botao1">
			<a href="" class="editar">Editar perfil</a>
		</div>
		<div class="botao2">
			<a href="logoutUSER.php" class="sair">Sair</a>
		</div>
	</main>
	<?php require "copiaecolafooter.php";?>
</body>
</html>
<?php
} else{
	header("location: login.php");
}?>