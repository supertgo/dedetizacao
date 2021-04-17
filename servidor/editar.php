<?php

include('conexao.php');
$identificador = $_GET['id'];
$query = "SELECT * FROM dedetizatable WHERE id = '$identificador'";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="../estilos/bulma.min.css" />
	<title>Editar tabela</title>
</head>
<body>
	<div class="container has-text-centered">
		<br></br>
	<h3 class="title has-text-grey">Edição de dados</h3>
	<h2><a href="admin.php">Voltar</a></h2>
<div class="content">	
		<table class="table">
			<thead>
				<tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>CPF</th>	
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Valor do orçamento</th>
                    <th>Detalhes</th>
                    <th>Salvar</th>
				</tr>
			</thead>
	<?php
	$resposta = mysqli_query($conexao, $query);
	while($dado = mysqli_fetch_assoc($resposta)){

		$id = $dado['id'];
		$nome = $dado['nome'];
		$cpf = $dado['cpf'];
		$telefone = $dado['telefone'];
        $email = $dado['email'];
        $valor = $dado['valor'];
		$detalhes = $dado['detalhes'];


		echo ("<br></br>
			<form action = 'salvar.php' method = 'POST'>
			<tr>
			<td>
			<input class='input is-medium' type='text' name='id' value='" . $id . "'>
			</td>
			<td>
			<input class='input is-medium' type='text' name='nome' value='" . $nome . "'>
			</td>
            <td>
			<input class='input is-medium' type='text' name='cpf' value='" . $cpf. "'>
			</td>
            <td>
			<input class='input is-medium' type='text' name='telefone' value='" . $telefone . "'>
			</td>
            <td>
			<input class='input is-medium' type='text' name='email' value='" . $email . "'>
			</td>
            <td>
			<input class='input is-medium' type='text' name='valor' value='" . $valor . "'>
			</td>
            <td>
			<input class='input is-medium' type='text' name='detalhes' value='" . $detalhes . "'>
			</td>
			<td>
			<input class='button is-link input is-medium' type='submit' value='Salvar Mudanças'>
			</td>
			</tr>
			</form>
			");
	}
	?>
	</table>
</div>
</body>
</html>