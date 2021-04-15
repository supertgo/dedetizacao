<?php
session_start();
include('./conexao.php');  

$senha = mysqli_real_escape_string(trim($conexao, $_POST['senha']));
$query = "SELECT * FROM dedetizatable WHERE senha = '$senha';'";

$resposta = mysqli_connect($conexao, $query);
$linhas = mysqli_num_rows($resposta);

if($linhas < 1){
    $_SESSION['nao_autenticado_admin'] = true;
    header("Location: admin.php");
    exit();
} else {
    $_SESSION['admin'] = $senha;
    header("Location: painel.php");
    exit();
}

