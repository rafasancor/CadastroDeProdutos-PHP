<?php require_once 'validacoes.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - Salvar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Estoque - Salvar Produto</h1>
    <p><a href="index.php">Voltar à home</a></p>
    <?php
        if (form_nao_enviado()) {
            exit("<h3>Por favor, retorne à home e preencha o formulário.</h3>");
        }
        if (ha_campos_em_branco($_POST)) {
            exit("<h3>Por favor, preencha todos os campos do formulário.</h3>");
        }
        require_once 'conexao.php';
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $conn = conectar_banco();
        $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if (!$stmt) {
            exit("Erro na preparação da consulta.");
        }
        mysqli_stmt_bind_param($stmt, "sdi", $nome, $preco, $quantidade);
        if (mysqli_stmt_execute($stmt)) {
            echo "<h3>Produto cadastrado com sucesso!</h3>";
        } else {
            echo "<h3>Erro ao salvar: " . mysqli_stmt_error($stmt) . "</h3>";
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    ?>
</body>
</html>