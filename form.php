<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="js/formv.js"></script>
</head>
 
<body>

<header class="navbar">
        <h1>Go.Jordan</h1>
        <div class="botoes-nav">
            <a href="index.html"><button type="button" class="btn">INÍCIO</button></a>
        </div>
    </header>

<section class="container">
        <h1>Faça seu login</h1>
        <p>É necessario fazer login para comprar</p>
        <br>
        <form action="login.php" method="post" onsubmit="return formv()" name="dados">
            <input type="email" name="usuario" placeholder="Email:"><br><br>
            <input type="password" name="senha" placeholder="Senha"><br>
            <button id="btnform" type="submit" value="cadastrar">Enviar formulario</button><br>
        </form>
        <br>
        <p onclick="togglepopup()" class="first-button">Não possui uma conta?<a href="formulario.html">Clique Aqui</a></p>
    </section>
</body>
 
</html>