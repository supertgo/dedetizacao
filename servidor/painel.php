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
    <link rel="stylesheet" href="../estilos/modules/painel.css">
    <title>Painel de orçamentos</title>
</head>
<body>

<div class="container-titulos-painel">
    <h1>Olá Administrador!</h1>
    <h2>Orçamentos Tecno Dedetização Ltda</h2>
    <a href="./admin.php">sair</a>    
</div>

<div class="container-cadastrar-btn">
    <a href="./formularioCadastrar.php"><button class="cadastrar-btn">Cadastrar novo orçamento</button></a>
    <input type="text" placeholder="filtre pelo CPF..."/>
    <a href="./formularioCadastrar.php"><button class="filtrar-btn"><i class="fas fa-search"></i></button></a>
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
						<td style="max-width: 160px">
							<a class="editar" href="editar.php?id=<?php echo $dado['id'];?>"><i class="fas fa-user-edit"></i></a>
							<a class="deletar" href="deletar.php?id=<?php echo $dado['id'];?>"><i class="fas fa-user-times"></i>
                        </td>
						</tr>
					<?php } ?>
					</tbody>
    </table>
</div>
<script src="https://kit.fontawesome.com/5055cfbe4f.js" crossorigin="anonymous"></script>
</body>
</html>