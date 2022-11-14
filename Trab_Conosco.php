<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trabalhe Conosco</title>
	<link rel="stylesheet" type="text/css" href="Trab_Conosco.css">
	<link rel="stylesheet" type="text/css" href="copiaecola.css">
</head>
<body>
	<div class="topo">
        <img class="logopizza" src="imagens/logopizza.png" alt="Logo da Pizzaria">
        <nav>
            <a href="sobre.php">Sobre</a>
            <a href="cardapioler.php">Cardápio</a>
            <a href="horario.php">Horário</a>
            <a href="areadeentrega.php">Área de Entrega</a>
            <a href="Form_Cardapio.php">Faça Seu Pedido</a>
            <img class="rede" src="imagens/instalogo.png" alt="Logo do Instagram">
            <img class="rede" src="imagens/facelogo.png" alt="Logo do Facebook">
        </nav>
    </div>
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
	
	<div>
		<footer class="rodapé">
			<ul>
				<li class="mapimg">Rua Da Alegria, 1234</li>
				<li class="emailimg">pizzariaads@senac.com.br</li>
				<li class="teleimg">(51) 3221-1223</li>
			</ul>
			<a href="https://web.whatsapp.com/send?phone=555192985520" target="_blank"><img src='imagens/whatsapp.png' width="34px"> Fale Conosco</a>
		</footer>
	</div>
</body>

</html>