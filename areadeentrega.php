<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="avaliacoesEarea.css">
    <title>Área de Entrega</title>
</head>

<body>

    <?php require "copiaecola.php";?>
   
    <section>
        <div class=titulobord><h1>Áreas de Entrega</h1></div>
        <p>Entregamos nos seguintes bairros de Porto Alegre:</p>
        <ul class="bairros1">
            <li>Agronomia</li>
            <li>Auxiliadora</li>
            <li>Azenha</li>
            <li>Bela Vista</li>
            <li>Boa Vista</li>
            <li>Bom Fim</li>
        </ul>
        <ul class="bairros2">
            <li>Cidade Baixa</li>
            <li>Cristal</li>
            <li>Floresta</li>
            <li>Glória</li>
            <li>Hípica</li>
            <li>Ipanema</li>
        </ul>
        <ul class="bairros3">
            <li>Jardim Carvalho</li>
            <li>Lomba do Pinheiro</li>
            <li>Mont Serrat</li>
            <li>Navegantes</li>
            <li>Partenon</li>
            <li>Petrópolis</li>
        </ul>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220896.0095890394!2d-51.31722849506481!3d-30.108498709160145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95199cd2566acb1d%3A0x603111a89f87e91f!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1657127640994!5m2!1spt-BR!2sbr" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="botao">
            <a class="botaochamar" href="cardapioler.php">Chame agora</a>
        </div>
    </section>
    <?php require "copiaecolafooter.php";?>
</body>

</html>