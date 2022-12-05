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
        

        <form method="post" action="">
            <div class="escolhaTamanho">
                <p>Escolha o tamanho:</p>
                <input type="radio" id="pizzaPequena" name="tamanhoPizza" value="pequena">
                <label for="pizzaPequena">PEQUENA</label> <span>2 sabores | R$ 34 </span> <br>

                <input type="radio" id="pizzaMedia" name="tamanhoPizza" value="media">
                <label for="pizzaMedia">MÉDIA</label> <span>⠀⠀⠀3 sabores | R$ 42 </span> <br>

                <input type="radio" id="pizzaGrande" name="tamanhoPizza" value="grande">
                <label for="pizzaGrande">GRANDE</label> <span>4 sabores | R$ 52 </span> <br>   

                <input id="botao" type="submit" name="enviarTamanho">
            </div>
        </form>
        <?php
            $conteudo = " ";
            if(isset($_POST['enviarTamanho'])){
                //if ($tamanhoPizza=="pequena"){          ARRUMAR AQUI 
                //    include "cardapio.php";}      if submit == pequena ?
            }     
        ?>        


    </main>
    <?php require "copiaecolafooter.php";?>
</body>
</html>