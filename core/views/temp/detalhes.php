<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/components/favicon.ico" type="image/x-icon">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/css-hm.css">
    <title>Homem Mau Ep</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg nav-hm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/components/gm.jpg" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                </div>
            </div>
        </div>
    </nav>
    <?php foreach ($detalhes as $detalhe) : ?>
    <div class="container justify-content-center">
        <img src="assets/components/hmau.jpg" class="col-lg-4 hmau img-fluid">
        <h3 class="nome"><?= $detalhe->artista; ?></h3>
        <h2 class="titulo"><?= $detalhe->titulo; ?></h2>
        <p class="servico" id="msg">Escolha o serviço de música</p>

        <?php if (!empty($detalhe->youtube)) : ?>
        <div class="col col-lg-4 col-md-4">
            <div class="row">
                <img src="assets/components/youtube.png" class="btn-youtube">
                <a class="linka" href="<?= $detalhe->youtube; ?>">
                    <button type="button" class="btn">TOCAR</button>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <?php if (!empty($detalhe->soundcloud)) : ?>
        <div class="col col-lg-4 col-md-4">
            <div class="row">
                <img src="assets/components/soundcloud (2).png" class="btn-youtube">
                <a class="linka" href="<?= $detalhe->soundcloud; ?>">
                    <button type="button" class="btn">TOCAR</button>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <?php if (!empty($detalhe->audiomack)) : ?>
        <div class="col col-lg-4 col-md-4">
            <div class="row">
                <img src="assets/components/audiomack (2).png" class="btn-youtube">
                <a class="linka" href="<?= $detalhe->audiomack; ?>">
                    <button type="button" class="btn">TOCAR</button>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <?php if (!empty($detalhe->spotfy)) : ?>
        <div class="col col-lg-4 col-md-4">
            <div class="row">
                <img src="assets/components/audiomack (2).png" class="btn-youtube">
                <a class="linka" href="<?= $detalhe->spotfy; ?>">
                    <button type="button" class="btn">TOCAR</button>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>

        <h5 class="cprght">© 2021 GUDEZA MUSIC. TODOS DIREITOS RESERVADOS.</h5>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/scriptt.js"></script>

</html>