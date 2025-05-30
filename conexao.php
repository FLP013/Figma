<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = "db_sistema_chamado";


$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);

if ($conn->connect_error){
    die("Connection error:".$conexao->connect_error);
}

?> 