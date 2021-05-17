<?php
session_start();
include('conexao.php');  

if(empty($_POST['senha'])){
    header('Location: admin.php');
    exit();
}

$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$query = "SELECT * FROM dedetizatable WHERE senha = md5('{$senha}')";

$resposta = mysqli_query($conexao, $query);
$linhas = mysqli_num_rows($resposta);

if($linhas == 1){
    $_SESSION['admin'] = $senha;
    header("Location: painel.php");
    exit();
} else {
    $_SESSION['nao_autenticado_admin'] = true;
    header("Location: admin.php");
    exit();
}

