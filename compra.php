<?php
include_once('connect.php');
$nome = $_POST ['nome'];
$numero = $_POST ['numero'];
$data = $_POST ['validade'];
$cvv = $_POST ['cvv'];

$endereco = $_POST ['endereco'];
$numero = $_POST ['numero'];
$complemento = $_POST ['complemento'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];
$telefone = $_POST ['telefone'];
$estado = $_POST ['estado'];



$sql= "INSERT INTO compras
(Nome, Numero, Data, CVV, Endereço, Numero, Complemento, Bairro, Cidade, Telefone, Estado) VALUES
('$nome', '$numero', '$data', '$cvv', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$telefone', '$estado')";
$query= mysqli_query($conexao, $sql);
?>

<!-- include_once('index.php');        ??index.php é onde fica o log para conexão com o banco
$(nome do type) = $_POST ['Type do input'];

$sql= "INSERT INTO (nome da tabela)
(Nome das colunas) VALUES
('$nome do type')";
$query= mysqli_query($conexao, $sql); -->