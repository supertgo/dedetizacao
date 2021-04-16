<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$valor = mysqli_real_escape_string($conexao, trim($_POST['valor']));
$detalhes = mysqli_real_escape_string($conexao, trim($_POST['detalhes']));
$senhaCriptografada = md5(time());

$query = "select count(*) as total from dedetizatable where cpf = '$cpf'";

$resposta = mysqli_query($conexao, $query);
$linhas = mysqli_fetch_assoc($resposta);

if($linhas['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header("Location: formularioCadastrar.php");
    exit;
}

$query_cadastra = "INSERT INTO dedetizatable (nome, cpf, telefone, email, valor, detalhes, senha) 
VALUES ('$nome', '$cpf', '$telefone', '$email', '$valor', '$detalhes', '$senhaCriptografada')";

if($conexao->query($query_cadastra) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: formularioCadastrar.php');
exit;
?>

