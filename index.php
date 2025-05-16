<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Estoque - Cadastro de Produtos</h1>
    <p><a href="listar.php">Ver produtos cadastrados</a></p>
    <h2>Cadastro de Produtos</h2>
    <form action="salvar.php" method="post">
        <label for="nome">Nome do Produto: </label><br>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="preco">Preço: </label><br>
        <input type="number" name="preco" id="preco" step="0.01"><br><br>
        <label for="quantidade">Quantidade em Estoque: </label><br>
        <input type="number" name="quantidade" id="quantidade"><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>