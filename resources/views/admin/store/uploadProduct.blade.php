@extends('admin.layout.admin_layout')
@section('content')

@include('admin.layout.sidebar')
<!-- Sign Up Start -->

<div class="content">
    @include('admin.layout.navbar')
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6">
                <div class="rounded d-flex justify-content-center p-4 p-sm-5 my-4 mx-3">
                    <img id="blah" src="#" alt="">
                </div>

                @if (session()->get('success'))
            <div class="alert alert-success  d-flex align-items-center alert-dismissible fade show p-4 p-sm-5 my-4 mx-3" role="alert">
                <ul style="list-style-type: none;">
                    <li class="d-flex align-items-center mb-1">
                        {{session()->get('success')}}
                    </li>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </ul>
            </div>
            @endif

                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary"><i class="fa fa-music me-2"></i>Music</h3>
                        </a>
                        <h3>Nova Musica</h3>
                    </div>
                    <form action="{{ route('store.product.create') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="cover" onchange="readURL(this);" id="floatingText" placeholder="image" accept="image/jpg, image/png, image/jpeg" required>
                            <label for="floatingText">Imagem</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" id="floatingText" placeholder="titulo" required>
                            <label for="floatingText">Titulo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="price" id="floatingInput" placeholder="preço" required>
                            <label for="floatingInput">Preço</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="price_promotional" id="floatingInput" placeholder="preço promocional">
                            <label for="floatingInput">Preço Promocional</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="description" id="floatingPassword" placeholder="breve descricao">
                            <label for="floatingPassword">Descricao</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="stock" id="floatingPassword" placeholder="Quantidade disponivel">
                            <label for="floatingPassword">Quantidade</label>
                        </div>
                        <select class="form-select form-select-lg mb-3" name="state" aria-label=".form-select-lg example" required>
                            <option value="Novo">New</option>
                            <option value="Promoção">Em Promoção</option>
                            <option value="Antigo">Antigo</option>
                            <option value="Grátis">Grátis</option>
                        </select>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Salvar</button>
                        {{-- <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->


@endsection
