<?php
include("../conexao.php");

$sql = "SELECT
e.id,
u.nome,
l.titulo,
e.data_emprestimo,
e.data_devolucao

FROM emprestimos e

INNER JOIN usuarios u
ON e.usuario_id = u.id

INNER JOIN livros l
ON e.livro_id = l.id";

$resultado = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Empréstimos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Empréstimos</h2>

<a href="emprestar.php" class="btn btn-success mb-3">
Novo Empréstimo
</a>

<a href="../index.php" class="btn btn-secondary mb-3">
Voltar
</a>

<table class="table table-bordered">

<tr>

<th>Usuário</th>

<th>Livro</th>

<th>Data Empréstimo</th>

<th>Data Devolução</th>

<th>Ação</th>

</tr>

<?php while($linha=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?= $linha['nome']; ?></td>

<td><?= $linha['titulo']; ?></td>

<td><?= $linha['data_emprestimo']; ?></td>

<td><?= $linha['data_devolucao']; ?></td>

<td>

<a class="btn btn-danger btn-sm"
href="devolver.php?id=<?= $linha['id']; ?>">
Devolver
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>