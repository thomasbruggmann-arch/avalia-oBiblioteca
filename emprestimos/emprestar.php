<?php

include("../conexao.php");

if(isset($_POST['emprestar'])){

$usuario = $_POST['usuario'];
$livro = $_POST['livro'];
$dataEmp = $_POST['emprestimo'];
$dataDev = $_POST['devolucao'];

$consulta = mysqli_query($conexao,
"SELECT quantidade FROM livros WHERE id=$livro");

$dados = mysqli_fetch_assoc($consulta);

if($dados['quantidade'] <= 0){

echo "<script>alert('Livro indisponível!');</script>";

}else{

mysqli_query($conexao,

"INSERT INTO emprestimos(usuario_id,livro_id,data_emprestimo,data_devolucao)

VALUES($usuario,$livro,'$dataEmp','$dataDev')");

mysqli_query($conexao,

"UPDATE livros
SET quantidade = quantidade - 1
WHERE id = $livro");

header("Location:listar.php");

}

}

$usuarios = mysqli_query($conexao,"SELECT * FROM usuarios");

$livros = mysqli_query($conexao,"SELECT * FROM livros");

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Emprestar Livro</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Novo Empréstimo</h2>

<form method="POST">

<label>Usuário</label>

<select class="form-control" name="usuario">

<?php while($u=mysqli_fetch_assoc($usuarios)){ ?>

<option value="<?= $u['id'] ?>">

<?= $u['nome'] ?>

</option>

<?php } ?>

</select>

<br>

<label>Livro</label>

<select class="form-control" name="livro">

<?php while($l=mysqli_fetch_assoc($livros)){ ?>

<option value="<?= $l['id'] ?>">

<?= $l['titulo'] ?>

</option>

<?php } ?>

</select>

<br>

<label>Data Empréstimo</label>

<input
type="date"
name="emprestimo"
class="form-control">

<br>

<label>Data Devolução</label>

<input
type="date"
name="devolucao"
class="form-control">

<br>

<button
name="emprestar"
class="btn btn-success">

Emprestar

</button>

</form>

</div>

</body>

</html>