<?php

include("../conexao.php");

if(isset($_POST['salvar'])){

$nome = $_POST['nome'];
$email = $_POST['email'];

if(empty($nome) || empty($email)){

echo "<script>alert('Preencha todos os campos');</script>";

}else{

mysqli_query($conexao,

"INSERT INTO usuarios(nome,email)
VALUES('$nome','$email')");

header("Location:listar.php");

}

}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Novo Usuário</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Novo Usuário</h2>

<form method="POST">

<label>Nome</label>

<input
type="text"
name="nome"
class="form-control">

<br>

<label>Email</label>

<input
type="email"
name="email"
class="form-control">

<br>

<button
class="btn btn-success"
name="salvar">

Salvar

</button>

<a href="listar.php"
class="btn btn-secondary">

Cancelar

</a>

</form>

</div>

</body>

</html>