<?php
include_once('connect.php');
$nome = $_POST ['nome'];
$numero = $_POST ['numero'];
$data = $_POST ['validade'];
$cvv = $_POST ['cvv'];

$endereco = $_POST ['endereco'];
$casa = $_POST ['casa'];
$complemento = $_POST ['complemento'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];
$telefone = $_POST ['telefone'];
$estado = $_POST ['estado'];



$sql= "INSERT INTO compras
(Nome, Numero, Data, CVV, Endereço, Casa, Complemento, Bairro, Cidade, Telefone, Estado) VALUES
('$nome', '$numero', '$data', '$cvv', '$endereco', '$casa', '$complemento', '$bairro', '$cidade', '$telefone', '$estado')";
$query= mysqli_query($conexao, $sql);
?>

<script>
    alert('Sua compra foi efetuada com sucesso')
    window.location.href="index.html"
</script>

<!-- include_once('index.php');        ??index.php é onde fica o log para conexão com o banco
$(nome do type) = $_POST ['Type do input'];

$sql= "INSERT INTO (nome da tabela)
(Nome das colunas) VALUES
('$nome do type')";
$query= mysqli_query($conexao, $sql); -->