<?php
echo"SALA DELETAR php";


require './config.php';


const SALA_DESATIVADA = 1;
const SALA_ATIVADA = 0;

$id = $_GET['id_deletar'];

var_dump($id);


$scriptDeletar = 'UPDATE tb_sala SET status = :status WHERE id = :id';


$resultado = $conn->prepare($scriptDeletar)->execute([
            ':status'=> SALA_DESATIVADA,
            ':id'=> $id
]);

 header('location:./cad-sala.php')



?>
