
<?php

if(isset($_POST['name']) && $_POST['email']){

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$tel =  addslashes($_POST['tel']);
$subject = addslashes($_POST['subject']);
$mesage =  addslashes($_POST['msg']);;

$to =  "sandresandro@ymail.com";
$subject = "Contato - Site Tecno Dedetização Ltda";
$body = "Nome do cliente: " . $name . "\r\n" .
"E-mail do cliente: " . $email . "\r\n" .
"Telefone do cliente: " . $tel . "\r\n" .
"Assunto: " . $subject . "\r\n";

$header = "From: contato@tecnodedetizadora.com" . "\r\n" .
"Respondendo para: ".$email."\r\n".
"X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){
    ?>
        <!DOCTYPE html>
		<html>
		<head>
			<title>Mensagem enviada</title>
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
			<link rel="stylesheet" href="../estilos/bulma.min.css"/>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta charset="utf-8">
		</head>
		<body>
			<br><br><br><br>
			<div class="container has-text-centered">
				<div class="notification is-success">
					Mensagem enviada com sucesso! Responderemos você em breve!
				</div>
				<a href="../index.html">Volte ao início</a>
			</div>
		</body>
		</html>

    <?php
} else {
    ?>
        <!DOCTYPE html>
		<html>
		<head>
			<title>Mensagem não enviada</title>
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
			<link rel="stylesheet" href="../estilos/bulma.min.css"/>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta charset="utf-8">
		</head>
		<body>
			<br><br><br><br>
			<div class="container has-text-centered">
				<div class="notification is-danger">
					Algo deu errado. Tente novamente mais tarde ou entre em contato através do nosso Whatsapp.
				</div>
				<a href="../index.html">Volte ao início</a>
			</div>
		</body>
		</html>
    <?php
}
}