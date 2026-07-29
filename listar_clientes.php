<?php

include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

$cliente = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>

<h1>Editar Cliente</h1>

<form action="atualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">

    Nome:<br>
    <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>"><br><br>

    Email:<br>
    <input type="email" name="email" value="<?php echo $cliente['email']; ?>"><br><br>

    Telefone:<br>
    <input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>"><br><br>

    Cidade:<br>
    <input type="text" name="cidade" value="<?php echo $cliente['cidade']; ?>"><br><br>

    <button type="submit">Atualizar</button>

</form>

</body>
</html>