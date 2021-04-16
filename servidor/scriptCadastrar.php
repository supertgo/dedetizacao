<?php

include('conexao.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
$detalhes = mysqli_real_escape_string($conexao, $_POST['detalhes']);

$query = "SELECT * FROM dedetizatable WHERE cpf = '$cpf'";
$resposta = mysqli_query($conexao, $query);
$linhas = mysqli_num_rows($resposta);

if($linhas == 1){
    $_SESSION['usuario_existe'] = true;
    header("Location: formularioCadastrar.php");
    exit();
}

$query_cadastra = "INSERT INTO dedetizatable (nome, cpf, telefone, email, valor, detalhes) 
VALUES ('$nome', '$cpf', '$telefone', '$email', '$valor', '$detalhes');";

if($conexao->query($query_cadastra) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
