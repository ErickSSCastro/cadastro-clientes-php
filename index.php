<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Cadastro de Clientes</h1>

    <form action="salvar.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade"><br><br>

        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="listar_clientes.php">Ver Clientes Cadastrados</a>
    <script src="js/script.js"></script>

</body>
</html>