<?php
$email = $_POST ['email'];
$senha = $_POST ['senha'];

include 'conexao.php';

$select = "SELECT * FROM tb_user WHERE email = '$email'";


$query = $conexao->query($select);

$resultado = $query->fetch_assoc(); 


$email_banco = $resultado ['email'];
$senha_banco = $resultado ['senha'];

if ($email == $email_banco && $senha == $senha_banco) {
    header('location: ../home.html');
}else {
    echo "<script>alert('Usuário ou Senha incorreto'); history.back() </script>";
}
?>

