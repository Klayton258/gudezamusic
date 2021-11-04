<?php
$preco = 100000;
$numero = 848293580;
?>
<div class="flex-container">
    <div class="col-lg-12 col-sm-12">
        <h1 class="text-light">DESCRICAO <br>
            <p><?= $preco ?></p>
        </h1>
        <a href="?a=descricao&v=<?= $preco ?>&c=<?= $numero ?>">
            <div class="btn btn-primary">Pagar</div>
        </a>

    </div>
</div>