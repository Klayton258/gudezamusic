<div class="container">
    <h2>Musicas</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Artista</th>
                    <th>Titulo</th>
                    <th>Cover</th>
                    <th>venda</th>
                    <th>Tamanho</th>
                    <th>arquivo</th>
                    <th>Alteracões</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($musicas as $musica): ?>
                <tr>
                    <td><?= $musica->id ?></td>
                    <td><?= $musica->artista ?></td>
                    <td><?= $musica->titulo ?></td>
                    <td><?= $musica->cover ?></td>
                    <td><?= $musica->venda ?></td>
                    <td><?= $musica->tamanho ?></td>
                    <td><?= $musica->arquivo ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="<?= $musica->id ?>">
                            Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@fat">Apagar</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
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