<div class="container cont-mob">
    <nav class="navbar navbar-expand-lg navbar-dark navbarstyle ">
        <div class="container-fluid">
            <a class="navbar-brand" href="?a=inicial"><img src="assets/components/brand.png" class="brand-gm"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="?a=inicial">NOVIDADES</a>
                    <a class="nav-link" href="?a=artistas">ARTISTAS</a>
                    <a class="nav-link" href="?a=musicas">MUSICAS</a>
                    <a class="nav-link" href="?a=videos">VIDEOS</a>
                    <a class="nav-link" href="?a=loja">LOJA</a>
                    <a class="nav-link" href="?a=eventos">EVENTOS</a>
                    <a class="nav-link" href="?a=sobrenos">SOBRE NÓS</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="container">
    <div class="container novidades text-light">
        <h1></h1>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel" id="desc-activate">
        <div class="carousel-inner" id="desc-activate">
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="row d-block w-100">
                    <div class="container justify-content-center align-items-center">
                        <div class="col-lg-6 col-sm-2 col-md-4 justify-content-center containerr">
                            <img src="assets/imgs/slides/<?= $slide1[1]; ?>" alt="Avatar" class="image img-fluid">
                            <div class="overlay">
                                <div class="textt">
                                    <h3 class="text-light"><?= $slide1[2]; ?></h3>
                                    <?= $slide1[3]; ?>
                                </div>
                            </div>
                        </div>
                        <div class="container ">
                            <div class="row icons-row">
                                <a class="link-ii" href="?a=homemmau"><button class="btn btn-str">Ouvir</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row d-block w-100">
                    <div class="container justify-content-center align-items-center">
                        <div class="col-lg-6 col-sm-2 col-md-4 justify-content-center containerr">
                            <img src="assets/imgs/slides/<?= $slide2[1]; ?>" class="image img-fluid">
                            <div class="overlay">
                                <div class="textt">
                                    <h3 class="text-light"><?= $slide2[2]; ?></h3>
                                    <?= $slide2[3]; ?>
                                </div>
                            </div>
                        </div>
                        <div class="container ">
                            <div class="row icons-row">
                                <a class="link-ii" href="?a=homemmau"><button class="btn btn-str">Ouvir</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row d-block w-100">
                    <div class="container justify-content-center align-items-center">
                        <div class="col-lg-6 col-sm-2 col-md-4 justify-content-center containerr">
                            <img src="assets/imgs/slides/<?= $slide3[1]; ?>" alt="Avatar" class="image img-fluid">
                            <div class="overlay">
                                <div class="textt">
                                    <h3 class="text-light"><?= $slide3[2]; ?></h3>
                                    <?= $slide3[3]; ?>
                                </div>
                            </div>
                        </div>
                        <div class="container ">
                            <div class="row icons-row">
                                <a class="link-ii" href="?a=homemmau"><button class="btn btn-str">Ouvir</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------- -->


    <!-- <div class="titulo">
        <img src="assets/components/musicas-in.png" class="musicas-titulo" srcset="">
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> -->
    <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div> -->
    <!-- <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/imgs/Louco por ti.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Louco Por Ti</h5>
                    <p>Charles Caló</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/imgs/Prelúdio.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Prelúdio</h5>
                    <p>Charles Caló</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/imgs/Penso em ti.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Penso Em Ti</h5>
                    <p>Charles Caló</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <a href="?a=musicas" class="link-ouvirtodas">
        <h6 class="fontouvir">OUVIR TODAS</h6>
    </a> -->

    <!------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------- -->


    <!-- <div class="titulo">
        <img src="assets/components/videos.png" class="videos-titulo">
    </div>
    <div>
        <iframe class="video-in" src="https://www.youtube.com/embed/GGQAdgiJkd4" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div> -->



    <!-- <div class="titulo">
        <img src="assets/components/merch (2).png" class="videos-titulo">
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/produtos/camisete-hm.png" class="d-block w-100">
                <div class="container mt-2">
                    <a href="?a=loja" class="link-desc">
                        <h7 class="carousel-desc">Camisete Homem Mau</h7>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/produtos/bone.png" class="d-block w-100">
                <div class="container mt-2">
                    <a href="?a=loja" class="link-desc">
                        <h7 class="carousel-desc">Boné Homem Mau</h7>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/produtos/copo.png" class="d-block w-100">
                <div class="container mt-2">
                    <a href="?a=loja" class="link-desc">
                        <h7 class="carousel-desc">Copo Homem Mau</h7>
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->


    <!-- <div class="col-auto col-lg-6 bg-dark mt-5 p-5">
        <form method="POST" action="?a=fm_gm">
            <div class="mb-3">
                <label class="form-label text-light">Digite o seu Email para receber notificações</label>
                <input type="email" name="email_cliente" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">

                <div id="emailHelp" class="form-text text-light">Nós nunca pertilhamos o seu email com ninguém.</div>

                <div class="mb-3">
                    <input type="checkbox" class="form-check-input" name="checkbox_gm" value="1">
                    <label class="form-check-label text-light">Fazer parte da familia GM</label>
                </div>
                <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
    </div> -->

</div>