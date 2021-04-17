<?php
 session_start();
 include('conexao.php');
 $query = "SELECT * FROM dedetizatable";
 $resposta = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/bulma.min.css">
    <link rel="stylesheet" href="../estilos/painel.css">
    <title>Painel de orçamentos</title>
</head>
<body>

<div class="container-titulos-painel">
    <h1>Olá Administrador!<h1>
    <h1>Orçamentos Dedetização Ltda<h1>
    <a href="./admin.php">sair</a>    
</div>

<a href="./formularioCadastrar.php"><button>Cadastrar novo orçamento</button></a>

<div class="container-table">
    <table>
        <tr>
            <th>Id</th>
	        <th>Nome</th>
	        <th>CPF</th>	
            <th>Email</th>
	        <th>Telefone</th>
	        <th>Valor do orçamento</th>
            <th>Detalhes</th>
            <th>Alterar tabela</th>
		</tr>
        <?php
			if($resposta === false) { 
				die(mysqli_error($conexao));
			}
			while($dado = mysqli_fetch_assoc($resposta)){ ?>
				<tbody>
					<tr>
                        <td><?php echo $dado['id'];?></td>
					    <td><?php echo $dado['nome'];?></td>
						<td><?php echo $dado['cpf'];?></td>
                        <td><?php echo $dado['telefone'];?></td>
                        <td><?php echo $dado['email'];?></td>
                        <td><?php echo $dado['valor'];?></td>
                        <td><?php echo $dado['detalhes'];?></td>
						<td style="max-width: 160px">
							<a href="edit.php?id=<?php echo $dado['id'];?>"><button class="button is-info" style="margin-bottom: 6px; width: 150px;">Alterar dados</button></a>
							<a href="remove.php?id=<?php echo $dado['id'];?>"><button class="button is-danger" style="width: 150px;">Excluír</button></a></td>
						</tr>
					<?php } ?>
					</tbody>
    </table>
</div>
</body>
</html>