<?php 
include('conexao.php');

        $id = $_POST['id'];

$query = "DELETE FROM dedetizatable WHERE id = '$id'";
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
		echo "Algo deu errado. Tente novamente." . mysqli_error($conexao);
	} else {
		?>
		<div class="container has-text-centered">
			<br></br>
			<h2 class="title is-3" style="color: green;">Dados excluídos com sucesso!</h2>
			<h2><a href="painel.php">Voltar à zona do administrador</a></h2>
		</div>
		<?php
	}

	?>
</body>
</html>