<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO clientes (nome, email, telefone, cidade)
        VALUES ('$nome', '$email', '$telefone', '$cidade')";

if (mysqli_query($conexao, $sql)) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

?>