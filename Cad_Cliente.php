<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do Cliente</title>
	<link rel="stylesheet" type="text/css" href="Cad_Cliente.css">
</head>
<body>
	<?php require "copiaecola.php";?>
	<div class="cadupper">
		<h1>Cadastro do Cliente</h1>
	</div>
	<main>
		<form class="form">
			<div>
				<label>Nome Completo:</label>
				<input required id="nome" maxlength="15" minlength="4" type="text" name="nome" placeholder="Nome Completo">
			</div>
			<div>
				<label>Senha:</label>
				<input type="password" name="senha" required>
			</div>
			<div class="genero">
				<label>Gênero:</label>
				<label>Feminino
					<input type="radio" name="genero" value="Feminino" class="checagem">
				</label>
				<label>Masculino
					<input type="radio" name="genero" value="Masculino" class="checagem">
				</label>
				<label>Não-Binário
					<input type="radio" name="genero" value="Não Binário" class="checagem">
				</label>
				<label>Prefiro não responder
					<input type="radio" name="genero" value="Prefiro não responder" class="checagem">
				</label>
			</div>
			<div>
				<label>CPF:</label>
					<input required type="text" name="cpf" placeholder="Apenas números">
			</div>
			<div>
				<label>Data de nascimento:</label>
				<input type="date" name="data">
			</div>
			<div>
				<label>CEP:</label>
				<input required type="text">
			</div>
			<div>
				<label>Complemento:</label>
				<input type="text" name="complemento">
			</div>	
			<div>
				<label>Número de contato:</label>
				<input type="tel" name="celular" placeholder="Apenas números" maxlength="11">
			</div>
			<div>
				<label>E-mail:</label>
				<input required type="email" name="email" placeholder="exemplo@exemplo.com">
			</div>
			<div>
				<label>Observações/Comentários:</label>
				<div>
				<textarea id="mensagem" name="campo_observacao" placeholder="Limite de 100 caracteres" maxlength="100"></textarea>
				</div>
			</div>
			<input type="reset" name="limpar" value="Limpar" class="limpar">
			<input type="submit" name="enviar" value="Cadastrar" class="cadastrar">
		</form>
	</main>
	<?php require "copiaecolafooter.php";?>
</body>
</html>