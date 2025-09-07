<?php

// Lê o conteúdo do arquivo .env
$_ENV = parse_ini_file('.env');
// A função parse_ini_file() transforma esse conteúdo em um array associativo e o armazena em $_ENV.

// var_dump($_ENV);

echo '<hr>';
// Imprime uma linha horizontal na página, apenas para separar visualmente o conteúdo exibido.

// Monta a string de conexão (DSN) com base nas variáveis lidas.
$dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";

// Armazena o nome de usuário e a senha do banco em variáveis separadas.
$usuario = $_ENV['USUARIO'];
$senha = $_ENV['SENHA'];

$conn = new PDO($dsn, $usuario, $senha);

const RESERVA_DESATIVADA = 1;
const RESERVA_ATIVADA = 0;