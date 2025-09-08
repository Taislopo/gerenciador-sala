<div class="modal fade" id="modalSala" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Cadastro Sala</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="./sala-cadastro.php" method="POST" id="form-sala-cadastro">

                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="indentificacao" class="fw-semibold my-auto">Identificação:</label>
                        <input for="text" class="form-control" placeholder="informe o nome da sala" name="txtIndentificacao" id="indentificacao"></input>
                    </div>

                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="qntd-aluno" class="fw-semibold my-auto">Quant, de alunos:</label>
                        <input type="number" class="form-control" placeholder="Qual a quantidade de alunos suportados" name="txtQntdSuporteAlunos" id="qntd-aluno"></input>
                    </div>

                    <div class="campo-docente d-flex gap-2 mt-2">
                    <label style="width: 20%;" for="tipo-sala" class="fw-semibold my-auto">Tipo de Sala:</label>
                        <select id="tipo-sala" name="tipo-sala" class="form-select">
                            <option selected>Selecione o tipo de Sala</option>
                            <option value="1">Convencional</option>
                            <option value="2">Laboratorio</option>
                            <option value="3">Laboratorio Hardware</option>
                            <option value="4">Laboratorio de Enfermagem</option>
                            <option value="5">Atelie de Moda</option>
                            <option value="6">Atelie de Design</option>
                        </select>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Fechar
                </button>
                <button type="submit" class="btn btn-primary" form="form-sala-cadastro">
                    Cadastrar
                </button>
            </div>
        </div>
    </div>
</div>