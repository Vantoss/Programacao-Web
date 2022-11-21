<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cardapioler.css">
	<title>Cardápio</title>
</head>
<body>
    <?php require "copiaecola.php";?>
    <main>
        <div class="cardup">
        	<h1 class="cardapio">Cardápio</h1>
        </div>
        <div class="cardown">
        	<div class="lista1">
	        	<ul class="salgado"> <div>Salgadas</div>
		        	<li id="divisor1">Tradicionais</li>
		        	<li>Calabresa <input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, linguiça calabresa e cebola</li>
                        </ul>
                    </li>
		        	<li>Mussarela<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, rodelas de tomate e orégano</li>
                        </ul>
                    </li>
		        	<li>Portuguesa<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, ovos, palmito, pimentão, ervilha, presunto e cebola</li>
                        </ul>
                    </li>
		        	<li>Marguerita<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, rodelas de tomate e manjericão</li>
                        </ul>
                    </li>
		        	<li>Napolitana<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, rodelas de tomate, queijo parmesão e orégano</li>
                        </ul>
                    </li>
		        	<li>Palmito<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, palmito e orégano</li>
                        </ul>
                    </li>
		        	<li>Quatro Queijos<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, provolone, parmesão e catupiry</li>
                        </ul>
                    </li>
		        	<li id="divisor2">Especiais</li>
		        	<li>Basca<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Bacon fatiado, tomates picados e requeijão</li>
                        </ul>
                    </li>
		        	<li>Atum<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, atum, cebola e orégano</li>
                        </ul>
                    </li>
		        	<li>Milho e Bacon<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, milho e bacon fatiado</li>
                        </ul>
                    </li>
		        	<li>Alho e Óleo<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, alho e queijo parmesão</li>
                        </ul>
                    </li>
                    <li>Toscana<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Linguiça calabresa, bacon e catupiry</li>
                        </ul>
                    </li>
                    <li>Frango<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela e frango fatiado</li>
                        </ul>
                    </li>
                    <li>Espanhola<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela, presunto, calabresa e cebola</li>
                        </ul>
                    </li>
                    <li>Havaiana<input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                             <li class="descrição">Mussarela, lombo e abacaxi</li>
                        </ul>
                    </li>
        		</ul>
        	</div>
            <div class="lista2">
                <ul class="doces"><div>Doces</div>
                    <li id="divisor3">Sabores</li>
                    <li>Chocolate <input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Chocolate preto ou branco</li>
                        </ul>
                    </li>
                    <li>Prestígio <input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Chocolate, coco ralado e leite condensado</li>
                        </ul>
                    </li>
                    <li>Romeu e Julieta <input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Mussarela e goiabada</li>
                        </ul>
                    </li>
                    <li>Beijinho <input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Chocolate branco, coco e leite condensado</li>
                        </ul>
                    </li>
                    <li>M&M <input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Chocolate e M&Ms</li>
                        </ul>
                    </li>
                    <li>Banofe <input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Banana e doce de leite</li>
                        </ul>
                    </li>
                    <li>Banana com Canela <input type="button" value="+" value="addItem" class="addButton">
                        <ul>
                            <li class="descrição">Banana caramelizada, leite condensado e canela</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="lista3">
                <ul class="bebidas"><div>Bebidas</div>
                    <li id="divisor4">Refrigerantes</li>
                    <li>Coca-Cola 1,5L (com ou sem açúcar) </li>
                    <li>Coca-Cola 1L (com ou sem açúcar)</li>
                    <li>Coca-Cola 600mL (com ou sem açúcar)</li>
                    <li>Coca-Cola 350mL (com ou sem açúcar)</li>
                    <li>Guaraná 1L</li>
                    <li>Guaraná 1L Zero</li>
                    <li>Guaraná 350mL</li>
                    <li>Guaraná 350mL Zero</li>
                    <li>Fanta Laranja 1,5L</li>
                    <li>Fanta 350mL</li>
                    <li>Fanta 350mL Zero</li>
                    <li id="divisor5">Sucos</li>
                    <li>Del Valle Uva 1L</li>
                    <li>Del Valle Uva Lata</li>
                    <li>Del Valle Pêssego 1L</li>
                    <li>Del Valle Pêssego Lata</li>
                    <li>Del Valle Maracujá 1L</li>
                    <li>Del Valle Maracujá Lata</li>
                    <li id="divisor6">Cervejas</li>
                    <li>Heineken 350mL</li>
                    <li>Heineken 330mL</li>
                    <li>Kaiser 600mL</li>
                    <li>Kaiser 350mL</li>
                    <li>Itaipava 600mL</li>
                    <li>Itaipava 350mL</li>
                    <li>Brahma 350mL</li>
                    <li>Skol 350mL</li>
                    <li id="divisor7">Vinhos</li>
                    <li>Don Guerino Malbec Vintage 750mL</li>
                    <li>Aurora Millésime 750mL</li>
                </ul>
            </div>
            <div class="botao2">
                <a href="Promocoes.php" class="promo">Ver promoções</a>
            </div>
        </div>
    </main>
    <?php require "copiaecolafooter.php";?>
</body>
</html>