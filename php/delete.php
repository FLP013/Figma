
<?php
if (isset ($_POST['confirmar']))  {

    include 'conexao.php';

    $id = $_GET ['codigo'];

    $deletar = "DELETE FROM tb_user WHERE id_user = $id";

    $query = $conexao->query($select);

    if ($query ) {
        echo "<p>". "Usuário deletado com sucesso!" ."</p>";
        echo "<p>". "Para voltar a lista de usuários" ."</p>" ."<a href='Lista_usuario.php'>". "Clique Aqui!" ."</a>";
        die() ;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
</head>
<body>
    <h1>Deseja realmente excluir este usuário?</h1>
    <form action="#" method="post">
        <div class="escolha">
            <button type="submit" name="confirmar" value="1">Sim</button>
            <a href="Lista_usuario.php">Não</a>
        </div>
    </form>
</body>
</html> 