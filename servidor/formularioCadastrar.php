<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro de processos - Resolve Antimultas</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/bulma.min.css" />
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de orçamentos/clientes</h3>
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                        ?>
                        <div class="notification is-success">
                          <p>Cadastro efetuado!</p>
                      </div>
                      <?php
                  endif;
                  unset($_SESSION['status_cadastro']);
                  ?>
                  <p style="color: black"><a href="painel.php" style= "text-decoration: underline;">Voltar à zona do Administrador</a></p>
              </div>

              <?php
              if(isset($_SESSION['usuario_existe'])):
                ?>

                <div class="notification is-info">
                    <p>O CPF cadastrado já existe, tente novamente.</p>
                </div>
                <?php
            endif;
            unset($_SESSION['usuario_existe']);
            ?>

            <div class="box" style="max-width: 350px; display: block; margin: auto">
                <form action="scriptCadastrar.php" method="POST">
                    <label>Nome do cliente</label>
                    <div class="field">
                        <div class="control"> <!-- nome do cliente -->
                            <input name="nome" type="text" class="input is-large" autofocus required>
                        </div>
                    </div>
                    <label>CPF</label>
                    <div class="field">
                        <div class="control"> <!-- CPF -->
                            <input name="cpf" type="text" class="input is-large" required> 
                        </div>
                    </div>
                    <label>Telefone</label>
                    <div class="field">
                        <div class="control"> <!-- Telefone -->
                            <input name="telefone" type="text" class="input is-large" required>
                        </div>
                    </div>
                    <label>Email</label> <!-- Email -->
                    <div class="field"> 
                        <div class="control">
                            <input name="email" type="text" class="input is-large" type="text">
                      </div>
                  </div>
                  <label>Valor do orçamento</label>
                  <div class="field"> 
                    <div class="control"> <!-- valor -->
                        <input name="valor" type="text" class="input is-large" required>
                    </div>
                </div>
                <label>Detalhes do orçamento</label>
                <div class="field">
                    <div class="control"> <!-- detalhes do orçamento -->
                        <textarea name="detalhes" type="text" class="input is-large" style="width: 350px; height: 150px;">
                        </textarea>
                    </div>
                </div>
                <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
<script src="https://kit.fontawesome.com/5055cfbe4f.js" crossorigin="anonymous"></script>
</body>
</html>