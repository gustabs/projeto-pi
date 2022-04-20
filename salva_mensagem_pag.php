<?php
include_once('index.php');
$nome = $_POST ['lNome'];
$email = $_POST ['lEmail'];
$senha = $_POST ['lSenha'];

$sql= "INSERT INTO form
(nome, email, senha) VALUES
('$nome', '$email', '$senha')";
$query= mysqli_query($conexao, $sql);
?>
