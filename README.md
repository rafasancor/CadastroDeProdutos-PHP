# CadastroDeProdutos-PHP

Sistema simples em PHP para **cadastro e exibição de produtos**, utilizando **MySQLi procedural**. Este projeto foi desenvolvido com o objetivo de treinar conceitos básicos de desenvolvimento web com PHP e banco de dados MySQL.

## Funcionalidades

- Cadastro de produtos com os campos:
  - Nome do produto
  - Preço
  - Quantidade em estoque
- Exibição de todos os produtos cadastrados em formato de tabela.

## Tecnologias Utilizadas

- PHP (com MySQLi procedural)
- MySQL (phpMyAdmin)
- HTML
- CSS

## Estrutura do Projeto

- `index.php`: Página com o formulário de cadastro dos produtos.
- `salvar.php`: Script responsável por processar os dados do formulário e inserir no banco de dados.
- `listar.php`: Página que exibe os produtos cadastrados em uma tabela.
- `conexao.php`: Responsável por estabelecer a conexão com o banco de dados.
- `style.css`: Arquivo contendo a estilização de todas as páginas do projeto.
- `estoque.sql`: Arquivo contendo o script de criação do banco de dados e tabela (exportado do phpMyAdmin).


## Requisitos do Banco de Dados

O banco de dados se chama `estoque` e contém a tabela `produtos` com os seguintes campos:

```sql
CREATE DATABASE estoque;

USE estoque;

CREATE TABLE produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  quantidade INT NOT NULL
);
