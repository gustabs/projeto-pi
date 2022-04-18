<?php
    include_once('index.php');
    $email = $_POST['lEmail'];
    $senha = $_POST['lSenha'];

    $sql= "INSERT INTO cadastro
    (Email, Senha) VALUES
    ('$email', '$senha')";
    $query= mysqli_query($conexao, $sql);
?>

<h1>Sucesso ao enviar as informações!</h1>