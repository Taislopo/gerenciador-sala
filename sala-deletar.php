<?php
echo"<h1>sala delete php</h1>";

require './config.php';

const SALA_DESATIVADA = 1;
const SALA_ATIVADA = 0;
var_dump($_GET);



$id = $_GET["id_deletar"];

$scriptDeletar = 'UPDATE tb_sala SET Deletado = :Deletado WHERE id = :id';

$resultado = $conn->prepare($scriptDeletar)->execute([
    ':Deletado'=> SALA_DESATIVADA,
    ':id'=> $id
]);


//  header('location:./cad-sala.php');

