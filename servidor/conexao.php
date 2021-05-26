<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'u787054276_root');
define('SENHA', 'Tecnodedetizadora2021');
define('DB', 'u787054276_tecnodb');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Me desculpe, não foi possível conectar ao banco.');