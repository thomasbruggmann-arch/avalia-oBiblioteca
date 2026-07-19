<?php

include("../conexao.php");

if(isset($_POST['salvar'])){

$titulo=$_POST['titulo'];

$autor=$_POST['autor'];

$quantidade=$_POST['quantidade'];

if(empty($titulo) || empty($quantidade)){

echo "<script>alert('Preencha todos os campos');</script>";

}else{

$sql="INSERT INTO livros(titulo,autor,quantidade)
VALUES('$titulo','$autor','$quantidade')";

mysqli_query($conexao,$sql);

header("Location:listar.php");

}

}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Cadastrar Livro</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Novo Livro</h2>

<form method="POST">

<label>Título</label>

<input
type="text"
name="titulo"
class="form-control">

<br>

<label>Autor</label>

<input
type="text"
name="autor"
class="form-control">

<br>

<label>Quantidade</label>

<input
type="number"
name="quantidade"
class="form-control">

<br>

<button
name="salvar"
class="btn btn-success">

Salvar

</button>

<a href="listar.php" class="btn btn-secondary">

Cancelar

</a>

</form>

</div>

</body>

</html>