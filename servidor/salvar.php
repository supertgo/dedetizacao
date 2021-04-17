<?php 
include('conexao.php');

        $id = $_POST['id'];
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
        $valor = $_POST['valor'];
		$detalhes = $_POST['detalhes'];

$query = "UPDATE dedetizatable SET nome = '$nome', cpf = '$cpf', email = '$email',
telefone = '$telefone', detalhes = '$detalhes', valor = '$valor' where id = '$id'";
$resposta = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<link rel="stylesheet" href="../estilos/bulma.min.css" />
</head>
<body>
	<?php
	if(!$resposta){
		echo "Algo deu errado. Tente novamente." . mysqli_error($conection);
	} else {
		?>
		<div class="container has-text-centered">
			<br></br>
			<h2 class="title is-3" style="color: green;">Dados alterados com sucesso!</h2>
			<h2><a href="painel.php">Voltar à zona do administrador</a></h2>
		</div>
		<?php
	}

	?>
</body>
</html>