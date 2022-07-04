<?php
include('verifica_login.php');
?>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================================================BOOTSTRAP-LINKS==================================================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


    <!--==================================================CSS_PRINCIPAL==================================================-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="css/carrosel.css">

    <title>Go.Jordan</title>
</head>

<body>



    <!--==================================================NAV-BAR==================================================-->
    <header class="navbar">
        <h1>Go.Jordan</h1>
        <div class="botoes-nav">
        <h2><?php echo $_SESSION['usuario'];?></h2>
        <h2><a href="logout.php">Sair</a></h2>

        </div>
    </header>


    <!--==================================================CARROSEL==================================================-->

    <br><br><br>
    <center>
        <div class="carrosel">
            <div id="carouselExampleIndicators" class="carousel slide" ta-bs-ride="carousel" da>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imagem nike2.webp" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagem nike1.webp" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagem nike3.webp" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
            </div>
        </div>
    </center>

    <!--==================================================SUB-TITULO==================================================-->
    <br>
    <br>
    <center>
        <h1 class="titleprincipal">O que Gostaria de usar Hoje?</h1>
    </center>
    <!--==================================================CONTEUDO-SITE==================================================-->

    <section class="list-banner">

        <div class="container">

            <a href="compra.html" class="comprano" style="text-decoration: none; color: black;">
                <figure class="wrapper-banner">
                    <img class="banner" src="img/Tenis Air Jordan 1 Mid Masc.webp" alt="">
                    <figcaption class="caption">Nome do produtos</figcaption>
                    <br>
                    <center>O tênis Air Jordan 1 Mid é inspirado no primeiro modelo AJ1, oferecendo aos fãs dos Jordan retrôs a oportunidade de seguir os passos da grandeza. A cor nova dá acabamento aos materiais limpos e clássicos, adicionando uma novidade nodesign
                        familiar.
                    </center>
                </figure>
                <center>
                    <br>
                    <h1 class="preco">1.000,00</h1>
                </center>
        </div>
        </a>

        <a href="compra.html" class="comprano" style="text-decoration: none; color: black;">
            <div class="container">
                <figure class="wrapper-banner">
                    <img class="banner" src="img/tenis-air-jordan-1-mid-se-craft.webp" alt="">
                    <figcaption class="caption">Nome do produtos</figcaption>
                    <br>
                    <center>Sempre fresco e pronto para jogar, o AJ1 é um dos tênis mais icônicos de todos os tempos. Esta versão usa tons naturais e detalhes de suede para uma renovação marcante para uma lenda.</center>
                </figure>
                <center>
                    <br><br><br><br>
                    <h1 class="preco">1.000,00</h1>
                </center>
            </div>
        </a>

        <a href="compra.html" class="comprano" style="text-decoration: none; color: black;">
            <div class="container">
                <figure class="wrapper-banner">
                    <img class="banner" src="img/tenis-air-jordan-1-mid-se-masculino-DM.webp" alt="">
                    <figcaption class="caption">Nome do produtos</figcaption>
                    <br>
                    <center>Decole com o logotipo Jumpman com o Air Jordan 1 Mid SE, feito com pelo menos 20% de materiais reciclados por peso. Estes tênis de edição especial foram inspirados em vestuário de trabalho robusto.</center>
                </figure>
                <center>
                    <br><br><br>
                    <h1 class="preco">1.000,00</h1>
                </center>
            </div>
        </a>

        <a href="compra.html" class="comprano" style="text-decoration: none; color: black;">
            <div class="container">
                <figure class="wrapper-banner">
                    <img class="banner" src="img/Tênis Air Jordan 1 Low SE amarelo.webp" alt="">
                    <figcaption class="caption">Nome do produtos</figcaption>
                    <br>
                    <center>Sempre renovado e nunca fora de moda, o Air Jordan 1 Low SE é um dos sneakers mais icônicos de todos os tempos. Ele busca inspiração nas paisagens naturais com tons terrosos e detalhes em lona para uma atualização sólida de uma lenda
                        em ascensão.</center>
                </figure>
                <center>
                    <h1 class="preco">1.000,00</h1>
                </center>
            </div>
        </a>

        <a href="compra.html" class="comprano" style="text-decoration: none; color: black;">
            <div class="container">
                <figure class="wrapper-banner">
                    <img class="banner" src="img/Tênis Air Jordan 1 Low SE preto.webp" alt="">
                    <br>
                    <center>Sempre novo e nunca fora de moda, o Air Jordan 1 Low SE é um dos sneakers mais icônicos de todos os tempos. Ele busca inspiração nas paisagens naturais com tons terrosos e detalhes em lona para renovar uma lenda dos ares.</center>
                </figure>
                <center>
                    <br>
                    <h1 class="preco">1.000,00</h1>
                </center>
            </div>
        </a>

        <a href="compra.html" class="comprano" style="text-decoration: none; color: black;">
            <div class="container">
                <figure class="wrapper-banner">
                    <img class="banner" src="img/Tênis Air Jordan 1 MID SE black.webp" alt="">
                    <figcaption class="caption">Nome do produtos</figcaption>
                    <br>
                    <center>Um dos sneakers mais icônicos da história ganha um novo brilho para celebrar os 75 anos da NBA. Uma borda de diamante na etiqueta da língua homenageia as bodas de diamante da NBA para atualizar um dos grandes favoritos.</center>
                </figure>
                <center>
                    <br><br>
                    <h1 class="preco">1.000,00</h1>
                </center>
            </div>
        </a>

        <a href="compra.html" class="comprano" style="text-decoration: none; color: black;">
            <div class="container">
                <figure class="wrapper-banner">
                    <img class="banner" src="img/Tênis Air Jordan 1 MID SE verde.webp" alt="">
                    <figcaption class="caption">Nome do produtos</figcaption>
                    <center>Faça seu estilo decolar com o Air Jordan 1 Mid, o sneaker das infinitas possibilidades. Essa nova edição especial do famoso tênis de cano médio oferece conforto ininterrupto para quem não se cansa do clássico de herança.</center>
                </figure>
                <center>
                    <br><br><br>
                    <h1 class="preco">1.000,00</h1>
                </center>
            </div>
        </a>

        <a href="compra.html" class="comprano" style="text-decoration: none; color: black;">
            <div class="container">
                <figure class="wrapper-banner">
                    <img class="banner" src="img/Tênis Air Jordan 1 MID SE vermelho.webp" alt="">
                    <figcaption class="caption">Nome do produtos</figcaption>
                    <br>
                    <center>Com denim e suede lavados, este Air Jordan 1 Mid SE clássico se torna imbatível. Os materiais são inspirados no look e na textura da roupa social.</center>
                </figure>
                <center>
                    <br><br><br><br><br>
                    <h1 class="preco">1.000,00</h1>
                </center>
            </div>
        </a>

    </section>

    <!--==================================================FOOTER==================================================-->
    <div class="footer-basic">
        <footer>
            <br><br><br><br><br><br><br>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a> </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Inicio</a></li>
                <li class="list-inline-item"><a href="service.html">Serviços</a></li>
                <li class="list-inline-item"><a href="#">Termos</a></li>
                <li class="list-inline-item"><a href="#">Politica e privacidade</a></li>
            </ul>
            <p class="copyright">Go.Jordan© 2022</p>
        </footer>
    </div>


    <!--==================================================FOOTER-JS==================================================-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>



</body>

</html>