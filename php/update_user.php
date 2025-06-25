<?php

$id = $_GET ['codigo'];

include 'conexao.php';

$select = "SELECT * FROM tb_user WHERE id_user = '$id'";


$query = $conexao->query($select);

$resultado = $query->fetch_assoc(); 
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="../">
</head>
<body>
    <form action="insert_user.php" method="post">
    <div class="form-container">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value=""<?php echo $resultado ['nm_user'] 

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <label for="setor">Setor</label>
        <input type="number" name="numero" id="setor">

        <a href="Home.html" class="botao">Cadastrar-se</a>
    </div>
  </form>
</body>
</html> 