<?php
include('../includes/conexao.php');


$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$calorias = $_POST['calorias'];
$destaque = $_POST['destaque'];

$sql = "INSERT INTO tb_pratos (codigo,nome,categoria,descricao,preco,calorias,destaque) VALUE ('$codigo','$nome','$categoria,'$descricao','$preco','$calorias','$destaque')";

$conexao->query($sql);

$conexao->close();

header('Location: listar-pratos.php');

?>