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
	<div> 
		<h1>Trabalhe Conosco</h1>
	</div>
	
	<form>
		<div>
			<label>Nome Completo<span>*</span></label>
			<input id="nome" maxlength="10" minlength="4" required type="text" name="name">
		</div>

		<div>
			<label>CPF</label>
				<input required type="text" placeholder="Apenas números">
		</div>

		<div>
			<label>E-mail<span>*</span></label>
			<input required type="email" name="email" placeholder="exemplo@exemplo.com">
		</div>

		<div>
			<label>Telefone</label>
			<input type="tel" name="telefone" placeholder="Apenas números" maxlength="11">
		</div>

		<div>
			<label>Área de Interesse</label>
			<datalist id="áreas">
				<option>--Selecione--</option>
				<option>Logística</option>
				<option>Financeiro</option>
				<option>Recursos Humanos</option>
				<option>Cozinha</option>
				<option>Limpeza</option>
				<option>Garçons</option>
			</datalist>
		</div>

		<div>
			<label for="mensagem">Mensagem</label>
		</div>

		<div>
			<textarea id="mensagem" name="campo_observacao" placeholder="Faça uma breve descrição de si mesmo e de suas competências" maxlength="400"></textarea>
		</div>

		<div>
			<label>Anexar Currículo</label>
			<input type="file" name="arquivo">
			
		</div>
		<input type="reset" name="limpar" value="Limpar">
		<button name="enviar">Enviar</button>		
	</form>
	
	<?php require "copiaecolafooter.php";?>
</body>

</html>