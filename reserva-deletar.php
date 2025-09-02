<?php
echo"reserva delete php";

// require quer dizer que sem o codigo da frente o site não pode trabalhar
require './config.php';

// variavel para entender o contexto do numero que geralmente chamam de magic numero
const RESERVA_DESATIVADA = 1;
const RESERVA_ATIVADA = 0;

$id = $_GET['id_deletar'];

// var_dump($id)


$script = 'UPDATE tb_reserva_sala SET deletado = :deletado WHERE id = :id';

// prepare esta preparando a conexao para executar execute a variavel $scprit
$resultado = $conn->prepare($script)->execute([
            ':deletado'=> RESERVA_DESATIVADA,
            ':id'=> $id
]);

header('location:./index.php')



?>