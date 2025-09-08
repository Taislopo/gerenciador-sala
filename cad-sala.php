<?php
include './template/header.php';
include'./config.php';
include'./template/modal-cadastro-sala.php';

    $script = 'SELECT * FROM tb_sala WHERE status = 0';                  

    $resultadoPesquisa = $conn->query($script)->fetchAll();



?>
<section class="container mt-5">

    <table class="table table-striped table-hover text-center">
        <div class="text-end">
            <button type="button" class="btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#modalSala">
            <i class="bi bi-plus-circle"></i> sala
            </button>
        </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sala</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach($resultadoPesquisa as $linha) {?>

            <tr>
                <th scope="row"><?= $linha['id'] ?></th>
                <td><?= $linha['indentificacao'] ?></td>
                <td>
                    <a type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="exampleModal" data-bs-info1="salinhatop" data-bs-info2="90" data-bs-info3="lablab">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="./sala-deletar.php?id_deletar=<?= $linha['id'] ?>" class="btn btn-danger">
                        <i class="bi bi-trash3-fill"></i>
                    </a>
                </td>
                
            
       



            <?php } ?>
        </tbody>
        </div>
    </table>

</section>