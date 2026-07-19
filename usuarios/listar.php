<?php
include("../conexao.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Usuários</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Usuários</h2>

<a href="cadastrar.php" class="btn btn-success mb-3">
Novo Usuário
</a>

<a href="../index.php" class="btn btn-secondary mb-3">
Voltar
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Ações</th>
</tr>

<?php while($usuario = mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?= $usuario['id']; ?></td>

<td><?= $usuario['nome']; ?></td>

<td><?= $usuario['email']; ?></td>

<td>

<a class="btn btn-warning btn-sm"
href="editar.php?id=<?= $usuario['id']; ?>">
Editar
</a>

<a class="btn btn-danger btn-sm"
href="excluir.php?id=<?= $usuario['id']; ?>">
Excluir
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>