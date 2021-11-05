<?php

use core\classes\Database;

$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$quantidade_m = filter_input(INPUT_POST, 'quantidade_m', FILTER_SANITIZE_NUMBER_INT);

$inicio = ($pagina * $quantidade_m) - $quantidade_m;


$bd = new Database();
$musicas = $bd->select("
    SELECT * FROM musicas ORDER BY id DESC LIMIT $inicio,$quantidade_m
    ");
?>
<?php if ($musicas > 0) {
    foreach ($musicas as $musica) {
?>
<div class="col container col-lg-4 col-sm-2 md-4">
    <a href="?a=download&id=<?= $musica->id ?>" class="m-link">
        <img class="capa-mm" src="assets/musicas/<?= $musica->cover ?>"></a>
    <a class="titulo-ep" href="?a=download&id=<?= $musica->id ?>">
        <h5 class="titulo-ep"> <?= $musica->artista ?> <br> <?= $musica->titulo ?></h5>
    </a>
</div>

<?php
    }
    $result = $bd->select("
SELECT COUNT(id) AS num_result FROM musicas
");
    $linha_pg = $result;

    echo "<a href='#' onclick='listar_musicas(2,$quantidade_m)'>PRIMEIRA</a>";
} else {
    echo "<h1 class='text-light'>NENHUM RESULTADO</h1>";
} ?>