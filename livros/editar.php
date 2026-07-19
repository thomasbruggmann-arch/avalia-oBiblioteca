<?php

include("../conexao.php");

$id=$_GET['id'];

$buscar=mysqli_query($conexao,"SELECT * FROM livros WHERE id=$id");

$livro=mysqli_fetch_assoc($buscar);

if(isset($_POST['editar'])){

$titulo=$_POST['titulo'];

$autor=$_POST['autor'];

$quantidade=$_POST['quantidade'];

mysqli_query($conexao,

"UPDATE livros
SET
titulo='$titulo',
autor='$autor',
quantidade='$quantidade'
WHERE id=$id");

header("Location:listar.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Editar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Editar Livro</h2>

<form method="POST">

<label>Título</label>

<input
class="form-control"
name="titulo"
value="<?= $livro['titulo']; ?>">

<br>

<label>Autor</label>

<input
class="form-control"
name="autor"
value="<?= $livro['autor']; ?>">

<br>

<label>Quantidade</label>

<input
class="form-control"
type="number"
name="quantidade"
value="<?= $livro['quantidade']; ?>">

<br>

<button
class="btn btn-primary"
name="editar">

Atualizar

</button>

</form>

</div>

</body>

</html>