<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">GUDEZA MUSIC</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="?a=admin_logout">Sign out</a>
        </li>
    </ul>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-ite">
                        <a class="nav-link" style="color: teal;" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            user: <?php echo $_SESSION['nome_admin']; ?>
                        </a>
                    </li>
                    <li class="nav-itemm">
                        <label for="rd_music">
                            <span data-feather="file"></span>
                            <i class="fa fa-music" aria-hidden="true"></i> Musicas
                        </label>
                    </li>
                    <li class="nav-itemm">
                        <label for="rd_destaque">
                            <span data-feather="file"></span>
                            <i class="fa fa-music" aria-hidden="true"></i> Destaque
                        </label>
                    </li>
                    <li class="nav-itemm">
                        <label for="rd_video">
                            <span data-feather="file"></span>
                            <i class="fa fa-music" aria-hidden="true"></i> Video
                        </label>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">BackOffice</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button> -->
                </div>
            </div>
            <div class="scroll">
                <input type="radio" name="grupo" id="rd_music">
                <input type="radio" name="grupo" id="rd_destaque">
                <input type="radio" name="grupo" id="rd_video">

                <section class="sections">
                    <section class="divider" id="music">
                        <h2>Tabela de Musicas</h2>

                        <?php if (isset($_SESSION['apagada'])) : ?>

                        <div class="alert alert-danger   alert-dismissible fade show col-6" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <span class="sr-only">Close</span>
                            </button>
                            <strong><?= $_SESSION['apagada']; ?></strong>
                        </div>
                        <?php unset($_SESSION['apagada']); ?>
                        <?php endif; ?>
                        <?php if (isset($_SESSION['editada'])) : ?>

                        <div class="alert alert-success   alert-dismissible fade show col-6" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <span class="sr-only">Close</span>
                            </button>
                            <strong><?= $_SESSION['editada']; ?></strong>
                        </div>
                        <?php unset($_SESSION['editada']); ?>
                        <?php endif; ?>

                        <!-- <div class="table-responsive"> -->
                        <table class="table table-hover table-dark table-striped table-sm" id="tabela-musicas">
                            <thead>
                                <tr>
                                    <th>Nr</th>
                                    <th>Capa</th>
                                    <th>Artista</th>
                                    <th>Titulo</th>
                                    <th>Tamanho</th>
                                    <th>Musica</th>
                                    <!-- <th>Editar</th> -->
                                    <th>Apagar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($musicas as $musica) : ?>
                                <tr>
                                    <td><?= $musica->id ?></td>
                                    <td><?= $musica->cover ?></td>
                                    <td><?= $musica->artista ?></td>
                                    <td><?= $musica->titulo ?></td>
                                    <td><?= $musica->tamanho ?></td>
                                    <td><?= $musica->arquivo ?></td>
                                    <!-- <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModa1" data-bs-whatever="@mdo">Editar</button></td> -->

                                    <td><a href="?a=upload_musica&apagar=<?= $musica->id ?>"
                                            class="btn btn-danger">Apagar</a></td>
                                </tr>
                                <?php endforeach;    ?>
                            </tbody>
                        </table>
                        <!-- </div> -->

                        <!-- ====================================================================================================================================== -->

                        <div class="container ">
                            <main class="form-signin mt-2 pt-5 col-8">
                                <form action="?a=upload" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label class="col-form-label">Artista:</label>
                                        <input type="text" class="form-control" placeholder="Nome do Artista"
                                            name="artista" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Capa da Musica:</label>
                                        <input type="file" class="form-control" name="cover"
                                            accept="image/png, image/jpeg" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Titulo:</label>
                                        <input type="text" class="form-control" placeholder="Nome da Musica"
                                            name="titulo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Tamanho:</label>
                                        <input type="text" class="form-control" placeholder="ex: 2.5" name="tamanho"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Musica:</label>
                                        <input type="file" class="form-control" name="musica"
                                            accept="audio/mp3, audio/mp4" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>

                                <?php if (isset($_SESSION['erro'])) : ?>

                                <div class="alert alert-danger mt-4">
                                    <?= $_SESSION['erro']; ?>
                                    <?php unset($_SESSION['erro']); ?>
                                </div>

                                <?php endif; ?>

                            </main>
                        </div>
                    </section>

                    <section class="divider" id="slide">

                        <h2>Gestão de Destaques</h2>
                        <div class="container ">
                            <?php if (isset($_SESSION['destaque'])) : ?>
                            <div class="alert alert-success   alert-dismissible fade show col-6" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <span class="sr-only">Close</span>
                                </button>
                                <strong><?= $_SESSION['destaque']; ?></strong>
                            </div>
                            <?php unset($_SESSION['destaque']); ?>
                            <?php endif; ?>
                            <table class="table table-hover table-dark table-striped table-sm" id="tabela-musicas">
                                <thead>
                                    <tr>
                                        <th>Posicao</th>
                                        <th>Capa</th>
                                        <th>Titulo</th>
                                        <th>Descricao</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($slides as $slide) : ?>
                                    <tr>
                                        <td><?= $slide->id ?></td>
                                        <td><?= $slide->imagem ?></td>
                                        <td><?= $slide->titulo ?></td>
                                        <td><?= $slide->descricao ?></td>
                                    </tr>
                                    <?php endforeach;    ?>
                                </tbody>
                            </table>

                            <main class="form-signin mt-2 pt-5 col-8">
                                <form action="?a=slide" method="POST" id="slideform" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label class=" mend-2">Destaque</label>
                                        <input class="form-check-input" type="radio" name="id" id="flexRadioDefault1"
                                            value="1" checked>
                                        <label class="form-check-label" id="radio-1">
                                            1
                                        </label>
                                        <input class="form-check-input" type="radio" name="id" id="flexRadioDefault1"
                                            value="2">
                                        <label class="form-check-label" id="radio-2">
                                            2
                                        </label>
                                        <input class="form-check-input" type="radio" name="id" id="flexRadioDefault1"
                                            value="3">
                                        <label class="form-check-label" id="radio-3">
                                            3
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Imagem</label>
                                        <input type="file" class="form-control" id="imagem" name="cover"
                                            accept="image/png, image/jpeg" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Titulo</label>
                                        <input type="text" class="form-control" id="titulo"
                                            placeholder="Titulo do Destaque" name="titulo" maxlength="20">
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Descrição</label>
                                        <textarea class="form-control" name="descricao" placeholder="Breve descrição"
                                            id="floatingTextarea2" maxlength="200" style="height: 100px"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            onclick="validarform()">Atualizar</button>
                                    </div>
                                </form>

                            </main>
                        </div>
                    </section>

                    <section class="divider" id="video">
                        <h2>Gestao de Videos</h2>
                        <div class="container ">
                            <?php if (isset($_SESSION['video'])) : ?>
                            <div class="alert alert-success   alert-dismissible fade show col-6" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <span class="sr-only">Close</span>
                                </button>
                                <strong><?= $_SESSION['video']; ?></strong>
                            </div>
                            <?php unset($_SESSION['video']); ?>
                            <?php endif; ?>

                            <main class="form-signin mt-2 pt-5 col-8">
                                <form action="?a=upload_video" method="POST" id="videoform"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label class="col-form-label">Imagem</label>
                                        <input type="file" class="form-control" id="imagem" name="cover"
                                            accept="image/png, image/jpeg" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Titulo</label>
                                        <input type="text" class="form-control"
                                            placeholder="Nome do Artista - Titulo da Musica" id="titulo" name="titulo"
                                            maxlength="50">
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">link</label>
                                        <input type="text" class="form-control" placeholder="https://exemplo.url"
                                            id="titulo" name="link" maxlength="300">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="upload_video"
                                            class="btn btn-primary">Adicionar</button>
                                    </div>
                                </form>

                            </main>
                        </div>
                    </section>
                </section>
            </div>
        </main>
    </div>
</div>

<script src="assets/js/appscriptadmin.js">
</script>