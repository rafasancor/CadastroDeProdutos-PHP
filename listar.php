<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - Produtos Cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Estoque - Produtos Cadastrados</h1>
    <p><a href="index.php">Voltar à Home</a></p>
    <?php
        require_once 'conexao.php';
        $conn = conectar_banco();
        $query = "SELECT * FROM produtos";
        $resultado = mysqli_query($conn, $query);
        if (!mysqli_num_rows($resultado) > 0) {
            exit("<p>Não há produtos cadastrados</p>");
        }
        echo "<h2>Lista de Produtos Cadastrados</h2>";
        echo '<table border="1">';
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome</th>";
        echo "<th>Preço (R$)</th>";
        echo "<th>Quantidade</th>";
        echo "</tr>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . number_format($linha['preco'], 2, ',', '.') . "</td>";
            echo "<td>" . $linha['quantidade'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conn);
    ?>
</body>
</html>