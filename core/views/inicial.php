<div class="container">
    <div class="container novidades text-light">
        <h1></h1>
    </div>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
        $activo = 2;
        foreach ($slides as $slide1) :
            if ($activo == 2) :
        ?>

        <div class="carousel-item active">
            <img src="assets/imgs/slides/<?= $slide1->imagem ?>" class="d-block w-100 carouselimg">
            <div class="carousel-caption d-none d-md-block">
                <h5><?= $slide1->titulo ?></h5>
                <p><?= $slide1->descricao ?></p>
                <?php if (!empty($slide1->link)) : ?>
                <div class="container ">
                    <div class="row icons-row">
                        <a class="link-ii" target="_blank" href="<?= $slide1->link ?>"><button
                                class="btn btn-str">Ver</button></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
                $activo = 1;
            else : ?>
        <div class="carousel-item">
            <img src="assets/imgs/slides/<?= $slide1->imagem ?>" class="d-block w-100 carouselimg">
            <div class="carousel-caption d-none d-md-block">
                <h5><?= $slide1->titulo ?></h5>
                <p><?= $slide1->descricao ?></p>
                <?php if (!empty($slide1->link)) : ?>
                <div class="container ">
                    <div class="row icons-row">
                        <a class="link-ii" target="_blank" href="<?= $slide1->link ?>"><button
                                class="btn btn-str">Ver</button></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
            endif;
        endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



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