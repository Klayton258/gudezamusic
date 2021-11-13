<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

body {
    background-color: white;
}

.sidebar .nav-link {
    font-weight: 500;
    color: #333;
    font-size: 18px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.sidebar .nav-link .feather {
    margin-right: 4px;
    color: #727272;
}

.sidebar .nav-link.active {
    color: #007bff;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}
</style>

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">GUDEZA MUSIC</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
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
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Nome: <?php echo $_SESSION['nome_admin']; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModa2"
                                data-bs-whatever="@klayton">
                                <span data-feather="file"></span>
                                <i class="fa fa-music" aria-hidden="true"></i> Musicas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                <i class="fa fa-home" aria-hidden="true"></i> Novidades
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                <i class="fa fa-user" aria-hidden="true"></i> Clientes
                            </a>
                        </li>
                    </ul>

                    <!-- <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li> -->
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

                <div class="alert alert-sucess   alert-dismissible fade show col-6" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <span class="sr-only">Close</span>
                    </button>
                    <strong><?= $_SESSION['editada']; ?></strong>
                </div>
                <?php unset($_SESSION['editada']); ?>
                <?php endif; ?>

                <div class="table-responsive">
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
                </div>

                <!-- ====================================================================================================================================== -->

                <style>
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                    }
                }
                </style>

                <div class="container ">
                    <main class="form-signin mt-2 pt-5 col-8">
                        <form action="?a=upload" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="col-form-label">Artista:</label>
                                <input type="text" class="form-control" name="artista" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Capa da Musica:</label>
                                <input type="file" class="form-control" name="cover" accept="image/png, image/jpeg"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Titulo:</label>
                                <input type="text" class="form-control" name="titulo" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Tamanho:</label>
                                <input type="number" class="form-control" name="tamanho" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Musica:</label>
                                <input type="file" class="form-control" name="musica" accept="audio/mp3, audio/mp4"
                                    required>
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
                <div class="container ">
                    <main class="form-signin mt-2 pt-5 col-8">
                        <form action="?a=slide" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label class="col-form-label">Destaque:</label>
                                <input type="number" class="form-control" name="id" accept="image/png, image/jpeg"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Imagem:</label>
                                <input type="file" class="form-control" name="cover" accept="image/png, image/jpeg"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Titulo:</label>
                                <input type="text" class="form-control" name="titulo" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Descrição:</label>
                                <input type="textarea" class="form-control" name="descricao" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
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
            </main>
        </div>
    </div>