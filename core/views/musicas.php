<div class="container mb-5">
    <img src="assets/components/MUSICAS.png" class="titulo-art">
</div>
<div class="container titulo-grupo text-light">
    <h4>ALBUMS | EP</h4>
</div>
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <?php foreach ($albums as $album) { ?>
                    <!-- <div class="container col">
                        <a href="?a=homemmau&id=<?= $album->id ?>" class="m-link"> <img class="capa-m"
                                src="assets/musicas/<?= $album->cover ?>"></a>
                        <a class="titulo-ep" href="?a=homemmau">
                            <h5 class="titulo-ep"><?= $album->artista ?><br> <?= $album->titulo ?></h5>
                        </a>
                    </div> -->
                    <?php } ?>
                    <div class="container col">
                        <a href="?a=homemmau" class="m-link"> <img class="capa-m" src="assets/imgs/hmau.jpg"></a>
                        <a class="titulo-ep" href="?a=homemmau">
                            <h5 class="titulo-ep">Charles Caló<br> Homem Mau (EP)</h5>
                        </a>
                    </div>
                    <div class="container col">
                        <a href="?a=novos_desafios" class="m-link"> <img class="capa-m" src="assets/imgs/Calo1.jpg"></a>
                        <a class="titulo-ep" href="?a=novos_desafios">
                            <h5 class="titulo-ep">Charles Caló<br>Novos Desafios</h5>
                        </a>
                    </div>
                    <div class="container col">
                        <a href="?a=o_encantador_delas" class="m-link"> <img class="capa-m"
                                src="assets/imgs/capa3.jpg"></a>
                        <a class="titulo-ep" href="?a=o_encantador_delas">
                            <h5 class="titulo-ep">Charles Caló<br>O Encantador Delas</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" carousel-item">
            <div class="container">
                <div class="row">
                    <div class="container col">
                        <a href="?a=sentimentos_nao_tem_idade" class="m-link"> <img class="capa-m"
                                src="assets/imgs/Capa.jpg"></a>
                        <a class="titulo-ep" href="?a=sentimentos_nao_tem_idade">
                            <h5 class="titulo-ep">Charles Caló<br> Sentimentos Não Tem Idade</h5>
                        </a>
                    </div>
                    <div class="container col">
                        <a href="?a=quem_ama_sofre" class="m-link"> <img class="capa-m" src="assets/imgs/capa4.jpg"></a>
                        <a class="titulo-ep" href="?a=quem_ama_sofre">
                            <h5 class="titulo-ep">Charles Caló<br>Quem Ama Sofre</h5>
                        </a>
                        <!-- </div>
                    <div class="container col">
                        <a href="#" class="m-link"> <img class="capa-m" src="assets/imgs/capa3.jpg"></a>
                        <a class="titulo-ep" href="#">
                            <h5 class="titulo-ep">Charles Caló<br>O Encantador Delas</h5>
                        </a>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- <div class="container titulo-grupo text-light">
    <h4>MUSICAS</h4>
</div> -->

<div class="container col">
    <div class="row row-all">
        <?php foreach ($musicas as $musica) { ?>
        <!-- <div class="col container col-lg-4 col-sm-2 md-4">
            <a href="?a=download&id=<?= $musica->id ?>" class="m-link">
                <img class="capa-mm" src="assets/musicas/<?= $musica->cover ?>"></a>
            <a class="titulo-ep" href="?a=download&id=" <?= $musica->id ?>>
                <h5 class="titulo-ep"><?= $musica->artista ?><br> <?= $musica->titulo ?></h5>
            </a>
        </div> -->
        <?php } ?>

    </div>
</div>