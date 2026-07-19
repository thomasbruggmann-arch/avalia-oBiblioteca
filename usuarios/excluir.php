<?php

include("../conexao.php");

$id = $_GET['id'];

mysqli_query($conexao,

"DELETE FROM usuarios WHERE id=$id");

header("Location:listar.php");

?>