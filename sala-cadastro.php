<?php
    
    include'./config.php';

    echo'<h1>Sala Cadastro</h1>';
    
    // var_dump($_POST);

    $indentificacao = $_POST["txtIndentificacao"];
    $tipoSala = $_POST ["tipo-sala"];
    $qntdAluno = $_POST ["txtQntdSuporteAlunos"];


    $scriptCadastro = "INSERT INTO
    
        tb_sala(
            indentificacao,
            tipo_sala,
            quant_suporte_alunos

        )
        VALUES(
            :indentificacao,
            :tipo_sala, 
            :quant_suporte_alunos     
        )";    
    

    $scriptPreparo = $conn->prepare($scriptCadastro)->execute([

        ':indentificacao'=> $indentificacao,
        ':tipo_sala' => $tipoSala,
        ':quant_suporte_alunos' => $qntdAluno

    ]);

    if ($scriptPreparo == true){
        $ultimoid = $conn->lastInsertid();
        header("location:cad-sala.php?lastid=($ultimoid)");
        
    }
    else{
        echo"erro!!";
    }





    ?>