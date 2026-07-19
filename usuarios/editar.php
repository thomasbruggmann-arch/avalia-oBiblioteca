<?php

include("../conexao.php");

$id = $_GET['id'];

$buscar = mysqli_query($conexao,

"SELECT * FROM usuarios WHERE id=$id");

$usuario = mysqli_fetch_assoc($buscar);

if(isset($_POST['editar'])){

$nome = $_POST['nome'];

$email = $_POST['email'];

mysqli_query($conexao,

"UPDATE usuarios
SET
nome='$nome',
email='$email'
WHERE id=$id");

header("Location:listar.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Editar Usuário</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Editar Usuário</h2>

<form method="POST">

<label>Nome</label>

<input
class="form-control"
name="nome"
value="<?= $usuario['nome']; ?>">

<br>

<label>Email</label>

<input
class="form-control"
name="email"
value="<?= $usuario['email']; ?>">

<br>

<button
name="editar"
class="btn btn-primary">

Atualizar

</button>

</form>

</div>

</body>

</html>