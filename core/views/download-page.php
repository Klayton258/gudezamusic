<?php 
use core\classes\Store;

?>




<dv class="container mt-5">
    <div class="container">
        <?php foreach($resultados as $resultado): ?>
        <div class="col col-lg-4">
            <img src="assets/musicas/<?= $resultado->cover ?>" class=" cover-destaque img-fluid">
        </div>
        <div class="container col download-description mt-5 col-lg-4">

            <p class="descricao-download">
                Artista: <?= $resultado->artista ?> <br> Titulo: <?= $resultado->titulo ?> <br> Tamanho:
                <?= $resultado->tamanho ?> MB
            </p>

            <?php if (Store::venda()): ?>
            <button type="button" class="btn btn-warning btn-download">COMPRAR</button>
            <?php else: ?>

            <a href="?a=homemmau">
                <button type="button" class="btn btn-warning btn-download">Ouvir</button>
            </a>

            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</dv>