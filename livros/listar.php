<?php
include("../conexao.php");

$sql = "SELECT * FROM livros";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Livros</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Livros</h2>

<a href="cadastrar.php" class="btn btn-success mb-3">
Novo Livro
</a>

<a href="../index.php" class="btn btn-secondary mb-3">
Voltar
</a>

<table class="table table-bordered">

<tr>

<th>ID</th>

<th>Título</th>

<th>Autor</th>

<th>Quantidade</th>

<th>Ações</th>

</tr>

<?php while($livro=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?= $livro['id']; ?></td>

<td><?= $livro['titulo']; ?></td>

<td><?= $livro['autor']; ?></td>

<td><?= $livro['quantidade']; ?></td>

<td>

<a class="btn btn-warning btn-sm"
href="editar.php?id=<?= $livro['id']; ?>">
Editar
</a>

<a class="btn btn-danger btn-sm"
href="excluir.php?id=<?= $livro['id']; ?>">
Excluir
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>