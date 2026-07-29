<?php

include("conexao.php");

$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
</head>
<body>

<h1>Clientes Cadastrados</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th>Ações</th>
    </tr>

<?php
while($cliente = mysqli_fetch_assoc($resultado)){
?>

<tr>
    <td><?php echo $cliente['id']; ?></td>
    <td><?php echo $cliente['nome']; ?></td>
    <td><?php echo $cliente['email']; ?></td>
    <td><?php echo $cliente['telefone']; ?></td>
    <td><?php echo $cliente['cidade']; ?></td>

    <td>
    <a href="editar.php?id=<?php echo $cliente['id']; ?>">
        Editar
    </a>

    |

    <a href="excluir.php?id=<?php echo $cliente['id']; ?>"
   onclick="return confirmarExclusao();">
    Excluir
</a>
</td>

<?php
}
?>

</table>
<script src="js/script.js"></script>
</body>
</html>