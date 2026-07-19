# Sistema de Biblioteca

## Objetivo

Sistema para gerenciamento de livros e empréstimos de uma biblioteca.

## Tecnologias

- PHP
- MySQL
- Bootstrap
- XAMPP

## Regras de Negócio

- Não permite emprestar um livro sem estoque.
- Ao realizar um empréstimo o estoque diminui automaticamente.
- Ao devolver um livro o estoque aumenta.
- Campos obrigatórios são validados.

## Como executar

1. Copie a pasta para o htdocs.
2. Abra o phpMyAdmin.
3. Execute o arquivo database/biblioteca.sql.
4. Inicie Apache e MySQL no XAMPP.
5. Abra:

http://localhost/biblioteca
