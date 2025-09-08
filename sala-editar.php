<?php
echo"<h1>sala Editar php</h1>";

require './config.php';

var_dump($_POST);


$id_editar = $_POST['id_editar'];

$indentificacao = $_POST["txtIndentificacao"];
$tipoSala = $_POST ["tipo-sala"];
$qntdAluno = $_POST ["txtQntdSuporteAlunos"];


$scriptEditar = $conn->prepare("UPDATE tb_sala 
    SET indentificacao = :indentificacao, 
        quant_suporte_alunos = :quant_suporte_alunos, 
        tipo_sala = :tipo_sala 
    WHERE id = :id");

$resultado = $scriptEditar->execute([

    ':id' => $id_editar,
    ':indentificacao' => $indentificacao,
    ':quant_suporte_alunos' => $quant_alunos,
    ':tipo_sala' => $tipo_sala

]);