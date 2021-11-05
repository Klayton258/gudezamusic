<!-- Nav tabs -->
<style>
body {
    background-color: white;
}

.nav-link {
    color: black;
}

.nav-link:hover {
    color: white;
    background-color: black;
}
</style>

<div class="fluid-conatiner">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button"
                role="tab" aria-controls="messages" aria-selected="false">Messages</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button"
                role="tab" aria-controls="settings" aria-selected="false">Settings</button>
        </li>
    </ul>

    <!-- parte 1 -->
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <div class="col-8 col-lg-6">
                    <div class="alert alert-danger mt-2">
                        ERRO PREENCHA TODOS OS CAMPOS
                    </div>
                    <form method="POST" action="?a=form_gm">

                        <div class="mb-3 mt-2">
                            <label class="form-label">Como te chamas?</label>
                            <input type="text" class="form-control" name="nome_cliente" placeholder="Nome Completo"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Qual é a tua data de nascimento?</label><br>
                            <input type="date" name="data_cliente" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Qual é a tua nacionalidade?</label>
                            <input type="text" class="form-control" name="nacionalidade_cliente"
                                placeholder="Nacionalidade" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Qual é o teu estado civil?</label>
                            <br>
                            <input type="radio" name="estado_civil" value="casado" checked> Solteiro
                            <input type="radio" name="estado_civil" value="solteiro"> Casado
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Qual é a tua profissão?</label>
                            <input type="text" class="form-control" name="profissao_cliente" placeholder="profissão"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Onde moras?</label>
                            <input type="text" class="form-control" name="morada_cliente" placeholder="Morada" required>
                        </div>
                </div>
            </div>
        </div>

        <!-- parte 2 -->
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
                <div class="col-8 col-lg-6">
                    <div class="mb-3 mt-5">
                        <label class="form-label">Qual é o teu gênero de musica favorito?</label>
                        <input type="text" class="form-control" name="genero_musica_cliente" placeholder="Genero"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Com que frequência escutas música?</label>
                        <br>
                        <input type="radio" name="frequencia" value="baixa"> Baixa
                        <input type="radio" name="frequencia" value="media"> Média
                        <input type="radio" name="frequencia" value="alta"> Alta
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Qual é a plataforma que usas para ouvir música?</label>
                        <input type="text" class="form-control" name="plataforma_cliente" placeholder="Plataforma"
                            required>
                    </div>
                    <div class="mb-3 col">
                        <label class="form-label">Qual é a rede social que mais usas?</label>
                        <input type="text" class="form-control" name="redesocial" placeholder="Plataforma" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- parte 3 -->
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="container">
                <div class="col-8 col-lg-6">
                    <div class="mb-3 mt-5">
                        <label class="form-label">Que tipo de evento frequentas?</label> <br>
                        <input type="radio" name="eventos" value="Concerto"> Concerto
                        <input type="radio" name="eventos" value="Show"> Show
                        <input type="radio" name="eventos" value="Festival"> Festival
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Qual foi o evento mais marcante da tua vida?</label>
                        <input type="text" class="form-control" name="evento_marcante" placeholder="Evento marcante"
                            required>
                    </div>
                    <div class="mb-3 mt-5">
                        <label class="form-label">Que tipo de evento frequentas?</label> <br>
                        <input type="radio" name="eventos" value="Concerto"> Internet
                        <input type="radio" name="eventos" value="Show"> TV
                        <input type="radio" name="eventos" value="Festival"> Radio
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Onde passas a maior parte do tempo?</label>
                        <input type="text" class="form-control" name="tempo_livre"
                            placeholder="Onde passa a maior parte do tempo" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Qual é o teu hobby?</label>
                        <input type="text" class="form-control" name="hobby" placeholder="Hobby" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">adipisicing elit. Veniam
            corrupti nesciunt architecto, id ipsam, quod quibusdam nisi reiciendis ullam ducimus esse nihil quo?
            Nostrum earum, enim ex veritatis delectus pariatur....</div>
    </div>
</div>