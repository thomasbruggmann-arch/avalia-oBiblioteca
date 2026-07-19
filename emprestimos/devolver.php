<?php

include("../conexao.php");

$id = $_GET['id'];

$buscar = mysqli_query($conexao,

"SELECT livro_id
FROM emprestimos
WHERE id=$id");

$dados = mysqli_fetch_assoc($buscar);

$livro = $dados['livro_id'];

mysqli_query($conexao,

"UPDATE livros
SET quantidade = quantidade + 1
WHERE id=$livro");

mysqli_query($conexao,

"DELETE FROM emprestimos
WHERE id=$id");

header("Location:listar.php");

?>