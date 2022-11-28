<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="horario.css">
    <title>Horário</title>
</head>
<body>
    <?php require "copiaecola.php";?>
    <main>
        <div class="horarioup">
            <h1 class="horario">Horários de Atendimento</h1>
        </div>
        <div class="horariodown">
            <div class="listas">
                <h1 class="titulos">Rodízio:</h1>
                <ul>
                    <li class="dias">Segunda a Sexta: 13h - 22h30</li>
                    <li class="dias">Sábado e Domingo: 14h - 22h</li>
                </ul>
                <h1 class="titulos">Entrega:</h1>
                <ul>
                    <li class="dias">Segunda a Sexta: 14h - 23h</li>
                    <li class="dias">Sábado e Domingo: 16h - 23h30</li>
                </ul>
            </div>
            <div class="imagem">
                <img class="imglado" src="imagens/pizzahorario.jpg" alt="Imagem de uma pizza">
            </div>
            <div class="botao">
                <a class="botaochamar" href="cardapioler.php">Chame agora</a>
            </div>
        </div>
    </main>
    <?php require "copiaecolafooter.php"; ?>
</body>
</html>