<?php
include("conexao.php");
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Biblioteca</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1 class="text-center mb-5">

Sistema de Biblioteca

</h1>

<div class="row">

<div class="col-md-4">

<div class="card">

<h3>Livros</h3>

<a href="livros/listar.php" class="btn btn-primary mt-3">

Gerenciar Livros

</a>

</div>

</div>

<div class="col-md-4">

<div class="card">

<h3>Usuários</h3>

<a href="usuarios/listar.php" class="btn btn-success mt-3">

Gerenciar Usuários

</a>

</div>

</div>

<div class="col-md-4">

<div class="card">

<h3>Empréstimos</h3>

<a href="emprestimos/listar.php" class="btn btn-warning mt-3">

Gerenciar Empréstimos

</a>

</div>

</div>

</div>

</div>

</body>

</html>