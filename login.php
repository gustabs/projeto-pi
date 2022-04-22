<?php
include_once('connect.php');
$nome = $_POST ['lNome'];
$email = $_POST ['lEmail'];
$senha = $_POST ['lSenha'];

$sql= "INSERT INTO cadastro
(nome, email, senha) VALUES
('$nome', '$email', '$senha')";
$query= mysqli_query($conexao, $sql);
?>
