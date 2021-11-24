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
            <?php
            $activo = 2;
            foreach ($slides as $slide1) :
                if ($activo == 2) :
            ?>

            <div class="carousel-item active" data-bs-interval="2000">
                <div class="row d-block w-100">
                    <div class="container justify-content-center align-items-center">
                        <div class="col-lg-6 col-sm-2 col-md-4 justify-content-center containerr">
                            <img src="assets/imgs/slides/<?= $slide1->imagem ?>" alt="Avatar" class="image img-fluid">
                            <div class="overlay">
                                <div class="textt">
                                    <h3 class="text-light"><?= $slide1->titulo ?></h3>
                                    <?= $slide1->descricao ?>
                                </div>
                            </div>
                        </div>
                        <div class="container ">
                            <div class="row icons-row">
                                <!-- <a class="link-ii" href="?a=homemmau"><button class="btn btn-str">Ouvir</button></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                    $activo = 1;
                else : ?>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row d-block w-100">
                    <div class="container justify-content-center align-items-center">
                        <div class="col-lg-6 col-sm-2 col-md-4 justify-content-center containerr">
                            <img src="assets/imgs/slides/<?= $slide1->imagem ?>" alt="Avatar" class="image img-fluid">
                            <div class="overlay">
                                <div class="textt">
                                    <h3 class="text-light"><?= $slide1->titulo ?></h3>
                                    <?= $slide1->descricao ?>
                                </div>
                            </div>
                        </div>
                        <div class="container ">
                            <div class="row icons-row">
                                <!-- <a class="link-ii" href="?a=homemmau"><button class="btn btn-str">Ouvir</button></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endif;
            endforeach; ?>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- <div class="col-auto col-lg-6 bg-dark mt-5 p-5">
                <form method="POST" action="?a=fm_gm">
                    <div class="mb-3">
                        <label class="form-label text-light">Digite o seu Email para receber notificações</label>
                        <input type="email" name="email_cliente" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                        <div id="emailHelp" class="form-text text-light">Nós nunca pertilhamos o seu email com ninguém.
                        </div>

                        <div class="mb-3">
                            <input type="checkbox" class="form-check-input" name="checkbox_gm" value="1">
                            <label class="form-check-label text-light">Fazer parte da familia GM</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
            </div> -->