<?php
    
    include'./config.php';

    echo'<h1>Sala Cadastro</h1>';
    
    var_dump($_POST);

    $identificacao = $_POST["txtIdentificacao"];
    $tipoSala = $_POST ["tipo-sala"];
    $qntdAluno = $_POST ["txtQntdSuporteAlunos"];


    $scriptCadastro = "INSERT INTO
    
        tb_sala(
            identificacao,
            tipo_sala,
            quant_suporte_alunos

        )
        VALUES(
            :identicacao,
            :tipo_sala, 
            :quant_suporte_alunos     
        )";  ;  
    

    $scriptPreparo = $conn->prepare($scriptCadastro)->execute([

        ':identicacao'=> $identificacao,
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