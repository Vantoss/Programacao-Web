<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trabalhe Conosco</title>
	<link rel="stylesheet" type="text/css" href="Trab_Conosco.css">
</head>
<body>
	<?php require "copiaecola.php";?>
	<div class="trabupper"> 
		<h1>Trabalhe Conosco</h1>
	</div>
	<main>
		<form class="form">
			<div>
				<label>Nome Completo:</label>
				<input id="nome" maxlength="10" minlength="4" required type="text" name="name">
			</div>

			<div>
				<label>CPF:</label>
				<input required type="text" placeholder="Apenas números">
			</div>

			<div>
				<label>E-mail:</label>
				<input required type="email" name="email" placeholder="exemplo@exemplo.com">
			</div>

			<div>
				<label>Telefone:</label>
				<input type="tel" name="telefone" placeholder="Apenas números" maxlength="11" required>
			</div>

			<div>
				<label for="mensagem">Mensagem:</label>
				<textarea id="mensagem" name="campo_observacao" placeholder="Faça uma breve descrição de si mesmo e de suas competências" maxlength="400" required></textarea>
			</div>

			<div>
				<label>Anexar Currículo:</label>
				<input type="file" name="arquivo" class="arquivo">
			</div>

			<input type="reset" name="limpar" value="Limpar" class="limpar">
			<input type="submit" name="enviar" value="Cadastrar" class="cadastrar">
			<!--<button name="enviar">Enviar</button>-->	
		</form>
	</main>
	<?php require "copiaecolafooter.php";?>
</body>

</html>