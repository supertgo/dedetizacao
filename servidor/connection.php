<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'supertgo2021');
define('DB', 'dedetizacao');

$conection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Me desculpe, não foi possível conectar ao banco.');