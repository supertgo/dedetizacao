
<?php
session_start();
include('./conexao.php');  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/bulma.min.css">
    <title>Zona do administrador</title>
</head>
<body>

    <!-- menu temporário só pra eu linkar a parte do server -->
    
    <nav> 
        <ul>
        <a href="../index.html"><li>Home</li></a>
        <a href="./servidor/admin.php"><li>adm</li></a>
        </ul>
    </nav>

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Zona do administrador <i class="fas fa-user-shield"></i></h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado_admin'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Senha inválida.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado_admin']);
                    ?>
                    <div class="box">
                        <form action="./login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <h1>Senha</h1>
                                    <input name="senha" type="password" class="input is-large" placeholder="Senha" autofocus="">
                                </div>
                            </div>
                             <button type="submit" class="button is-block is-link is-large is-fullwidth">Consultar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/5055cfbe4f.js" crossorigin="anonymous"></script>
</body>
</html>