<?php

$id = $_GET['codigo'];
 
include 'conexao.php';
 
$select = "SELECT * FROM tb_user WHERE id_user = '$id'";
 
$query = $conexao->query($select);
 
$resultado = $query->fetch_assoc();
?>
 
<!DOCTYPE html>
<html lang="pr-BR">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
 
<body>
    <div class="container">
        <aside>
            <img src="images/Img_Cadastro.png" alt="">
        </aside>
        <form action="#" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $resultado['nm_user']; ?>" id="nome">
 
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $resultado['email']; ?>" id="email">
 
            <label for="setor">Setor</label>
            <input type="text" name="setor" value="<?php echo $resultado['setor']; ?>" id="setor">
 
            <div class="botao">
                <button type="submit">Editar</button>
                <a href="">Voltar</a>
            </div>
        </form>
    </div>
 
</body>
 
</html>
 