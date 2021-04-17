<?php
 session_start();
 include('conexao.php');

 $cpf = $_POST['cpf'];
 $query = "SELECT * FROM dedetizatable WHERE cpf = '$cpf'";
 $resposta = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/bulma.min.css">
    <link rel="stylesheet" href="../estilos/modules/painel.css">
    <title>Dados filtrados</title>
</head>
<body>

<div class="container-titulos-painel">
    <h1>Olá Administrador!</h1>
    <h2>Esses dados foram encontrados:</h2>
    <a href="./painel.php">Voltar</a>    
</div>

<div class="container-tabela">
    <table class="tabela-painel">
        <tr>
            <th>Id</th>
	        <th>Nome</th>
	        <th>CPF</th>	
            <th>Telefone</th>
            <th>Email</th>
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
						</tr>
					<?php } ?>
					</tbody>
    </table>
</div>
<script src="https://kit.fontawesome.com/5055cfbe4f.js" crossorigin="anonymous"></script>
</body>
</html>