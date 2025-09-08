<button
    type="button"
    class="btn btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal"
    data-bs-info1="salinhatop"
    data-bs-info2="90"
    data-bs-info3="lablab">
    Clica pra tu ve
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="campinhoInput">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="campaoInput">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="campoInput">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>

<script>
    const exampleModal = document.getElementById('exampleModal')
    if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget

            const toSemCriatividade = button.getAttribute('data-bs-info1')
            const numSeiIrmao = button.getAttribute('data-bs-info2')
            const jaToDandoAResposta = button.getAttribute('data-bs-info3')


            const cansei1 = exampleModal.querySelector('.modal-body #campinhoInput')
            const cansei2 = exampleModal.querySelector('.modal-body #campaoInput')
            const olhaOmodalCarai = exampleModal.querySelector('.modal-body #campoInput')

            cansei1.value = toSemCriatividade
            cansei2.value = numSeiIrmao
            olhaOmodalCarai.value = jaToDandoAResposta
        })
    }
</script>