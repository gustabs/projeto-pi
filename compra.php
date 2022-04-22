<?php
include_once('connect.php');
$nome = $_POST ['nome'];
$numero = $_POST ['numero'];
$data = $_POST ['validade'];
$cvv = $_POST ['cvv'];

$sql= "INSERT INTO compras
(Nome, Numero, Data, CVV) VALUES
('$nome', '$numero', '$data', '$cvv')";
$query= mysqli_query($conexao, $sql);
?>

<!-- include_once('index.php');        ??index.php é onde fica o log para conexão com o banco
$(nome do type) = $_POST ['Type do input'];

$sql= "INSERT INTO (nome da tabela)
(Nome das colunas) VALUES
('$nome do type')";
$query= mysqli_query($conexao, $sql); -->