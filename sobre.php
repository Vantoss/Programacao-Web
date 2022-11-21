<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Porto Gioioso</title>
    <link rel="stylesheet" type="text/css" href="sobre.css">
    <!--<link rel="stylesheet" href="copiaecola.css">
    <link rel="stylesheet" href="copiaecolafooter.css">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>
<body>
    <header>
        <?php require "copiaecola.php"?>
        <!--<div id="menu">
            <nav>
                <img src="imagens/logopizza.png" alt="" id="logotipo">
                <ul  class="navlist">
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="cardapioler.php">Cardápio</a></li>
                    <li><a href="horario.php">Horário</a></li>
                    <li><a href="areadeentrega.php">Área de Entrega</a></li>
                    <li><a href="Form_Cardapio.php" class="pedido">Faça Seu Pedido</a></li>
                    <div id="sn">
                        <img class="rede" src="imagens/instalogo.png" alt="logotipo do instagram">
                        <img class="rede" src="imagens/facelogo.png" alt="logotipo do facebook">
                    </div>
                </ul>
            </nav>
        </div>-->
    </header>
    <main>
        <article>
            <h1>Pizzaria Porto Gioioso</h1>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non veniam, nesciunt incidunt voluptatibus sit enim possimus a labore eligendi laboriosam voluptatum eaque! Hic vitae laudantium, voluptates minima aliquid animi modi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem, eveniet voluptatum illum repudiandae deleniti nostrum quibusdam alias quasi velit dolore rem eius facilis numquam ab explicabo officiis consectetur vitae.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non veniam, nesciunt incidunt voluptatibus sit enim possimus a labore eligendi laboriosam voluptatum eaque! Hic vitae laudantium, voluptates minima aliquid animi modi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem, eveniet voluptatum.</p>
        </article>
        <aside>
            <div class="content">
                <div class="slides">
                    <input type="radio" name="slide" id="slide1" checked>
                    <input type="radio" name="slide" id="slide2">
                    <input type="radio" name="slide" id="slide3">
                    <input type="radio" name="slide" id="slide4">
                        <div class="slide s1">
                            <img src="Slideshow/food-photographer-phototastyfood-ru-Xt84tIHbjRY-unsplash.jpg" alt="">
                        </div>
                        <div class="slide s2">
                            <img src="Slideshow/hemant-latawa-IfQlwNqJqV8-unsplash.jpg" alt="">
                        </div>
                        <div class="slide s3">
                            <img src="Slideshow/nik-owens-40OJLYVWeeM-unsplash.jpg" alt="">
                        </div>
                        <div class="slide s4">
                            <img src="Slideshow/vitalii-chernopyskyi-Oxb84ENcFfU-unsplash.jpg" alt="">
                        </div>
                        <div class="navegar">
                            <label class="bar" for="slide1"></label>
                            <label class="bar" for="slide2"></label>
                            <label class="bar" for="slide3"></label>
                            <label class="bar" for="slide4"></label>
                        </div>
                </div>
            </div>
        </aside>
        <a href="Cad_Cliente.php">
            <h2>Cadastre-se</h2>
        </a>
        <a href="galeria.php">
            <h2>Galeria</h2>
        </a>
        <a href="avaliacoes.php">
            <h2>Deixe seu Depoimento aqui</h2>
        </a>
        <a href="Trab_Conosco.php">
            <h2>Trabalhe Conosco</h2>
        </a>
    </main>
    <img src="imagens/selos.png" alt="" class="selo">

    <?php require "copiaecolafooter.php"?>
    <!--<footer class="rodapé">
        <ul>
            <li class="mapimg">Rua Da Alegria, 1234</li>
            <li class="emailimg">pizzariaads@senac.com.br</li>
            <li class="teleimg">(51) 3221-1223</li>
        </ul>
        <a href="https://web.whatsapp.com/send?phone=555192985520" target="_blank"><img src='imagens/whatsapp.png' width="34px" alt="Link do WhatsApp"> Fale Conosco</a>

    </footer>-->
</body>
</html>