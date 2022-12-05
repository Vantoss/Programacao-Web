<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página do Usuário</title>
	<link rel="stylesheet" type="text/css" href="usuario.css">
</head>
<body>
	<?php require "copiaecola.php"?>
	<div class="userupper">
		<h1>Bem vindo, "usuario"</h1>
	</div>
	<main>
		<div class="infoprinc">
			<div class="esquerda">
				<p class="text">Nome: </p>
				<p class="text">E-mail: </p>
				<p class="text">CPF: </p>
				<p class="text">Número para contato:</p>
			</div>
			<div class="direita">
				<div class="foto">
					<p class="fototexto">Sua foto fica aqui</p>
				</div>
			</div>
		</div>
		<div class="infosec">
			<p class="text2">CEP: </p>
			<p class="text2">Complemento:</p>
			<p class="text2">Observações:</p>
		</div>
		<div class="botao">
			<a href="" class="editar">Editar perfil</a>
		</div>
	</main>
	<?php require "copiaecolafooter.php"?>
</body>
</html>