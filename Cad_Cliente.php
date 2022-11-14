<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do Cliente</title>
	<link rel="stylesheet" type="text/css" href="Cad_Cliente.css">
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
		<h1>Cadastro do Cliente</h1>
	</div>
	
	<form>
		<div>
			<label>Nome Completo<span>*</span></label>
			<input required id="nome" maxlength="15" minlength="4" type="text" name="nome" placeholder="Nome Completo">
		</div>
		<div class="genero">
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
			<label>CPF</label>
				<input required type="text" name="cpf" placeholder="Apenas números">
		</div>
		<div>
			<label>Idade</label>
			<input type="number" name="numero">
		</div>
		<div>
			<label>Data de Aniversário</label>
			<input type="date" name="data">
		</div>
		<div>
			<label>CEP</label>
				<input required type="text">
			<label>Logradouro</label>
				<input  type="text" name="logradouro">
			<label>Número</label>
				<input type="number" name="numero">
			<label >Complemento</label>
				<input type="text" name="complemento">
			<label for="bairro">Bairro</label>
				<input required id="bairro" type="text" name="bairro">
			</div>
			<div>
				<label class="estado" for="uf">Estado</label>
					<select id="uf">
						<option>--Selecione aqui--</option>
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AP">Amapá</option>
						<option value="AM">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espírito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MT">Mato Grosso</option>
						<option value="MTS">Mato Grosso do Sul</option>
						<option value="MG">Minas Gerais</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PR">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="SC">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantis</option>
					</select>
		</div>
		
		<div>
			<label>Celular</label>
			<input type="tel" name="celular" placeholder="Apenas números" maxlength="11">
		</div>
		
		<div>	
			<label>Telefone fixo (opcional</label>
			<input type="tel" name="telefone" placeholder="Apenas números" maxlength="11">
		</div>
		
		<div>
			<label>E-mail</label>
			<input required type="email" name="email" placeholder="exemplo@exemplo.com">
		</div>
		
		<div>
			<select name="canais">
				<option>--Como conheceu a empresa--</option>
				<option>Revistas</option>
				<option>Jornais</option>
				<option>Televisão</option>
				<option>Instagram</option>
				<option>Twitter</option>
			</select>
		</div>
		
		<div>
			<label>Observações/Comentários</label>
			<div>
			<textarea id="mensagem" name="campo_observacao" placeholder="Sua Mensagem - Limite de 100 caracteres" maxlength="100"></textarea>
			</div>
		</div>
		<div>
			<label>Data de Inclusão no Cadastro</label>
			<input type="date" name="data">
		</div>
		<input type="reset" name="limpar" value="Limpar">
		<button name="cadastrar">Cadastrar</button>
	</form>
	<footer class="rodapé">
        <ul>
            <li class="mapimg">Rua Da Alegria, 1234</li>
            <li class="emailimg">pizzariaads@senac.com.br</li>
            <li class="teleimg">(51) 3221-1223</li>
        </ul>
        <a href="https://web.whatsapp.com/send?phone=555192985520" target="_blank"><img src='imagens/whatsapp.png' width="34px"> Fale Conosco</a>
    </footer>
</body>
</html>