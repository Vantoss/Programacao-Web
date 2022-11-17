<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faça o seu Pedido</title>
	<link rel="stylesheet" type="text/css" href="Form_Cardapio.css">
</head>
<body>
	<?php require "copiaecola.php";?>
	<h1>Faça o seu Pedido</h1>
	<img src="imagens/Nossos_tamanhos.png" alt="Desenho dos Tamanhos">
	<form>
		<div>
			<h2>Tamanho Pequeno</h2>
			<img src="imagens/pizza_pequena.png" alt="Desenho de pizza pequena">
		</div>
		<div class="texto">
		
				<p>
					Sabores:<br>
						Salgados:<br>
							-Calabresa:Mussarela, linguiça calabresa e cebola.<br>
							-Mussarela:Mussarela, rodelas de tomate e orégano.<br>
							-Portuguesa:Mussarela, ovos, palmito, pimentão, ervilha, presunto e cebola.<br>
							-Marguerita:Mussarela, rodelas de tomate e manjericão.<br>
							-Napolitana:Mussarela, rodelas de tomate, queijo parmesão e orégano.<br>
							-Palmito:Mussarela, palmito e orégano.<br>
							-Quatro Queijos:Mussarela, provolone, parmesão e catupiry.<br>
							-Basca:Bacon fatiado, tomates picados e requeijão.<br>
							-Atum:Mussarela, atum, cebola e orégano.<br>
							-Milho e Bacon:Mussarela, milho e bacon fatiado.<br>
							-Alho e Óleo:Mussarela, alho e queijo parmesão.<br>
							-Toscana:Linguiça calabresa, bacon e catupiry.<br>
							-Frango:Mussarela e frango fatiado.<br>
							-Espanhola:Mussarela, presunto, calabresa e cebola.<br>
							-Havaiana:Mussarela, lombo e abacaxi.<br>
						Doces:<br>
							-Chocolate:Chocolate preto ou branco.<br>
							-Prestígio:Chocolate, coco ralado e leite condensado.<br>
							-Romeu e Julieta:Mussarela e goiabada.<br>			
							-Beijinho:Chocolate branco, coco e leite condensado.<br>
							-M&M:Chocolate e M&Ms.<br>
							-Banofe:Banana e doce de leite.<br>
							-Banana com Canela:Banana caramelizada, leite condensado e canela.<br>
				</p>
		</div>
		
		<div>
			<select name="Sabores">
				<option>--Sabor 1: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Quatro Queijos</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>
		<div>
			<select name="Sabores">
				<option>--Sabor 2: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Quatro Queijos</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>

		<div>
			<h2>Tamanho Grande</h2>
			<img src="imagens/pizza_grande.png" alt="Desenho de pizza grande">
		<div class="texto">
		
				<p>
					Sabores:<br>
						Salgados:<br>
							-Calabresa:Mussarela, linguiça calabresa e cebola.<br>
							-Mussarela:Mussarela, rodelas de tomate e orégano.<br>
							-Portuguesa:Mussarela, ovos, palmito, pimentão, ervilha, presunto e cebola.<br>
							-Marguerita:Mussarela, rodelas de tomate e manjericão.<br>
							-Napolitana:Mussarela, rodelas de tomate, queijo parmesão e orégano.<br>
							-Palmito:Mussarela, palmito e orégano.<br>
							-Quatro Queijos:Mussarela, provolone, parmesão e catupiry.<br>
							-Basca:Bacon fatiado, tomates picados e requeijão.<br>
							-Atum:Mussarela, atum, cebola e orégano.<br>
							-Milho e Bacon:Mussarela, milho e bacon fatiado.<br>
							-Alho e Óleo:Mussarela, alho e queijo parmesão.<br>
							-Toscana:Linguiça calabresa, bacon e catupiry.<br>
							-Frango:Mussarela e frango fatiado.<br>
							-Espanhola:Mussarela, presunto, calabresa e cebola.<br>
							-Havaiana:Mussarela, lombo e abacaxi.<br>
						Doces:<br>
							-Chocolate:Chocolate preto ou branco.<br>
							-Prestígio:Chocolate, coco ralado e leite condensado.<br>
							-Romeu e Julieta:Mussarela e goiabada.<br>			
							-Beijinho:Chocolate branco, coco e leite condensado.<br>
							-M&M:Chocolate e M&Ms.<br>
							-Banofe:Banana e doce de leite.<br>
							-Banana com Canela:Banana caramelizada, leite condensado e canela.<br>
				</p>
		</div>
		</div>
		<div>
			<select name="Sabores">
				<option>--Sabor 1: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>
		<div>
			<select name="Sabores">
				<option>--Sabor 2: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>
		<div>
			<select name="Sabores">
				<option>--Sabor 3: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Quatro Queijos</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>

		<div>
			<h2>Tamanho Família</h2>
			<img src="imagens/pizza_familia.png" alt="Desenho de pizza família">
		<div class="texto">
		
				<p>
					Sabores:<br>
						Salgados:<br>
							-Calabresa:Mussarela, linguiça calabresa e cebola.<br>
							-Mussarela:Mussarela, rodelas de tomate e orégano.<br>
							-Portuguesa:Mussarela, ovos, palmito, pimentão, ervilha, presunto e cebola.<br>
							-Marguerita:Mussarela, rodelas de tomate e manjericão.<br>
							-Napolitana:Mussarela, rodelas de tomate, queijo parmesão e orégano.<br>
							-Palmito:Mussarela, palmito e orégano.<br>
							-Quatro Queijos:Mussarela, provolone, parmesão e catupiry.<br>
							-Basca:Bacon fatiado, tomates picados e requeijão.<br>
							-Atum:Mussarela, atum, cebola e orégano.<br>
							-Milho e Bacon:Mussarela, milho e bacon fatiado.<br>
							-Alho e Óleo:Mussarela, alho e queijo parmesão.<br>
							-Toscana:Linguiça calabresa, bacon e catupiry.<br>
							-Frango:Mussarela e frango fatiado.<br>
							-Espanhola:Mussarela, presunto, calabresa e cebola.<br>
							-Havaiana:Mussarela, lombo e abacaxi.<br>
						Doces:<br>
							-Chocolate:Chocolate preto ou branco.<br>
							-Prestígio:Chocolate, coco ralado e leite condensado.<br>
							-Romeu e Julieta:Mussarela e goiabada.<br>			
							-Beijinho:Chocolate branco, coco e leite condensado.<br>
							-M&M:Chocolate e M&Ms.<br>
							-Banofe:Banana e doce de leite.<br>
							-Banana com Canela:Banana caramelizada, leite condensado e canela.<br>
				</p>
		</div>
		</div>
		<div>
			<select name="Sabores">
				<option>--Sabor 1: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Quatro Queijos</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>
		<div>
			<select name="Sabores">
				<option>--Sabor 2: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Quatro Queijos</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>
		<div>
			<select name="Sabores">
				<option>--Sabor 3: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Quatro Queijos</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>
		<div>
			<select name="Sabores">
				<option>--Sabor 4: Escolha aqui--</option>
				<option>Calabresa</option>
				<option>Mussarela</option>
				<option>Portuguesa</option>
				<option>Marguerita</option>
				<option>Napolitana</option>
				<option>Palmito</option>
				<option>Quatro Queijos</option>
				<option>Basca</option>
				<option>Atum</option>
				<option>Milho e Bacon</option>
				<option>Alho e Óleo</option>
				<option>Toscana</option>
				<option>Frango</option>
				<option>Espanhola</option>
				<option>Havaiana</option>
				<option>Chocolate</option>
				<option>Prestígio</option>
				<option>Romeu e Julieta</option>
				<option>Beijinho</option>
				<option>M&M</option>
				<option>Banofe</option>
				<option>Banana com Canela</option>
			</select>
		</div>
		<div>
			<h2>Bebidas</h2>
		</div>
		<div class="texto">
			<p>
				Refrigerantes:<br>
                    -Coca-Cola 1,5L (com ou sem açúcar)<br>
                    -Coca-Cola 1L (com ou sem açúcar).<br>
                    -Coca-Cola 600ml (com ou sem açúcar).<br>
                    -Coca-Cola 350ml (com ou sem açúcar).<br>
                    -Guaraná 1L.<br>
                    -Guaraná 1L Zero.<br>
                    -Guaraná 350ml.<br>
                    -Guaraná 350ml Zero.<br>
                    -Fanta Laranja 1,5L.<br>
                    -Fanta 350ml.<br>
                    -Fanta 350ml Zero.<br>
                Sucos:<br>
                    -Del Valle Uva 1L.<br>
                    -Del Valle Uva 350ml.<br>
                    -Del Valle Pêssego 1L.<br>
                    -Del Valle Pêssego 350ml.<br>
                    -Del Valle Maracujá 1L.<br>
                    -Del Valle Maracujá 350ml.<br>
                Cervejas:<br>
                    -Heineken 350ml.<br>
                    -Heineken 330ml.<br>
                    -Kaiser 600ml.<br>
                    -Kaiser 350ml.<br>
                    -Itaipava 600ml<br>
                    -Itaipava 350ml<br>
                    -Brahma 350ml<br>
                    -Skol 350ml<br>
                Vinhos:<br>
                    -Don Guerino Malbec Vintage 750ml.<br>
                    -Aurora Millésime 750ml.<br>
			</p>
		</div>
		<div>
			<h3>Refrigerantes</h3>
			<select>
				<option>--Selecione aqui</option>
				<option>Coca-Cola 1,5L (com ou sem açúcar)</option>
				<option>Coca-Cola 1L (com ou sem açúcar)</option>
				<option>Coca-Cola 600mL (com ou sem açúcar)</option>
				<option>Coca-Cola 350mL (com ou sem açúcar)</option>
				<option>Guaraná 1L</option>
				<option>Guaraná 1L Zero</option>
				<option>Guaraná 350mL</option>
				<option>Guaraná 350mL Zero</option>
				<option>Fanta Laranja 1,5L</option>
				<option>Fanta 350mL</option>
				<option>Fanta 350mL Zero</option>
			</select>
		</div>
		<div>
			<h3>Sucos</h3>
			<select>
				<option>Del Valle Uva 1L</option>
				<option>Del Valle Uva Lata</option>
				<option>Del Valle Pêssego 1L</option>
				<option>Del Valle Pêssego Lata</option>
				<option>Del Valle Maracujá 1L</option>
				<option>Del Valle Maracujá Lata</option>
			</select>
		</div>
		<div>
			<h3>Cervejas</h3>
			<select>
				<option>Heineken 350mL</option>
				<option>Heineken 330mL</option>
				<option>Kaiser 600mL</option>
				<option>Kaiser 350mL</option>
				<option>Itaipava 600mL</option>
				<option>Itaipava 350mL</option>
				<option>Brahma 350mL</option>
				<option>Skol 350mL</option>
			</select>
		</div>
		<div>
			<h3>Vinhos</h3>
			<select>
				<option>Don Guerino Malbec Vintage 750mL</option>
				<option>Aurora Millésime 750mL</option>
			</select>
		</div>
	
		<div>
			<input type="reset" name="limpar" value="Limpar">
			<button name="enviar">Enviar o Pedido</button>
		</div>		
	</form>
	
	<?php require "copiaecolafooter.php";?>

</body>
</html>