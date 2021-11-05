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

<div class="container text-center text-light">
    <main class="form-signin mt-5 pt-5 col-4">
        <form method="POST" action="?a=admin_submeter_login">
            <img class="mb-4" src="assets/componentes/brand.png" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Administrador</h1>

            <div class="mb-3">
                <label for="inputEmail" class="visually-hidden">Administrador</label>
                <input type="email" id="inputEmail" name="text_admin" class="form-control" placeholder="Administrador"
                    required autofocus>
            </div>
            <div class="mb-3">
                <label class="visually-hidden">Senha</label>
                <input type="password" name="text_senha" class="form-control" placeholder="Senha" required>
            </div>
            <button class="w-100 btn btn-lg btn-secondary" type="submit">Log in</button>
        </form>

        <?php if(isset($_SESSION['erro'])): ?>

        <div class="alert alert-danger mt-4">
            <?= $_SESSION['erro']; ?>
            <?php unset($_SESSION['erro']); ?>
        </div>

        <?php endif; ?>
    </main>
</div>