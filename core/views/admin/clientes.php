<?php 

$guardardados = filter_input(INPUT_POST,'upload',FILTER_SANITIZE_STRING);
echo 'sads';
if(isset($_POST['upload'])){
    $titulo= $_POST['titulo'];
    $artista=filter_input(INPUT_POST,'artista',FILTER_SANITIZE_STRING);
    $tamanho= filter_input(INPUT_POST,'tamanho',FILTER_SANITIZE_NUMBER_INT);
    $imagem= $_FILES['cover']['name'];
    $musica= $_FILES['musica']['name'];

  var_dump($_FILES['musica']);
  echo $titulo - $artista;
   var_dump($_FILES['cover']);
   
   echo ' sdsd';

}
echo '<hr> sads';
 // $parametro=[
 //     ':a'=>  $artista,
 //     ':t'=> $titulo,
 //     ':ta'=>$tamanho,
 //     ':img'=>$imagem,
 //     ':mus'=>$musica
 // ];

?>



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

<div class="container text-light">
    <main class=" mt-2 pt-5 col-8">
        <form method="POST" action="?a=upload" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="col-form-label">Artista:</label>
                <input type="text" class="form-control" name="artista">
            </div>
            <div class="mb-3">
                <label class="col-form-label">Capa da Musica:</label>
                <input type="file" class="form-control" name="cover">
            </div>
            <div class="mb-3">
                <label class="col-form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo">
            </div>
            <div class="mb-3">
                <label class="col-form-label">Tamanho:</label>
                <input type="number" class="form-control" name="tamanho">
            </div>
            <div class="mb-3">
                <label class="col-form-label">Musica:</label>
                <input type="file" class="form-control" name="musica">
            </div>
            <div class="modal-footer">

            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

    </main>
</div>