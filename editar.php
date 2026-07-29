<?php

include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];

$sql = "UPDATE clientes SET
        nome = '$nome',
        email = '$email',
        telefone = '$telefone',
        cidade = '$cidade'
        WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    echo "Cliente atualizado com sucesso!";
} else {
    echo "Erro ao atualizar cliente.";
}

?>