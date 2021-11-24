<div class="container mb-2">
    <img src="assets/components/videos-in.png" class="titulo-art">
</div>

<!-- <style>
.gal-cont {
    display: flex;
    width: 98vw;
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    padding: 60px 8%;
}

.galeria {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 50px;

}

.galeria img {
    width: 100%;
}

.btn-ver {
    background-color: grey;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 0px;
    padding-bottom: 2px;
    text-decoration-line: none;
    border-radius: 5px;
    color: white;
    justify-self: center;
}

.btn-ver:hover {
    background-color: rgb(218, 0, 0);
    color: white;
    font-weight: bold;
    border-color: none;
    border-radius: 5px;
}
</style>
<link rel="stylesheet" href="css/lightbox.css">
<div class="gal-cont">
    <div class="galeria">
        <?php foreach ($videos as $video) : ?>
        <div class="col">
            <a href="assets/imgs/videos/<?= $video->imagem ?>" data-lightbox="example-set"
                data-title="<?= $video->titulo ?>">
                <img src="assets/imgs/videos/<?= $video->imagem ?>">
            </a>
            <a class="btn-ver" target="_blank" href="<?= $video->link ?>">ver no YouTube</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="js/lightbox-plus-jquery.js"></script> -->

<div class="container">
    <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/sM_V0_7_rNw?rel=0&autoplay=1&showinfo=0" title="YouTube video"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; rel; picture-in-picture; showinfo=0"></iframe>
    </div>
</div>
<div class="container mt-5">
    <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/PUmAYF0agvQ?rel=0&showinfo=0" title="YouTube video"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; rel; picture-in-picture; showinfo=0"></iframe>
    </div>
</div>

<div class="container mt-5">
    <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/eCwMVfOxb_U?modestbranding=1&rel=0" title="YouTube video"
            allow="accelerometer; clipboard-write; encrypted-media; modestbranding; gyroscope; picture-in-picture"></iframe>
    </div>
</div>

<div class="container mt-5">
    <div class="ratio mt-5 ratio-16x9">
        <iframe src="https://www.youtube.com/embed/AwC0VnlC32g?modestbranding=1&rel=0" title="YouTube video"
            allowfullscreen
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; modestbranding; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    <hr>
</div>