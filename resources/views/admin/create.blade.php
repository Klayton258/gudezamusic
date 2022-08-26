@extends('admin.layout.admin_layout')
@section('content')

@include('admin.layout.sidebar')
<!-- Sign Up Start -->

<div class="content">
    @include('admin.layout.navbar')
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="rounded d-flex justify-content-center p-4 p-sm-5 my-4 mx-3">
                    <img id="blah" src="#" alt="">
                </div>
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary"><i class="fa fa-music me-2"></i>BackOffice</h3>
                        </a>
                        <h3>Nova Musica</h3>
                    </div>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="file" onchange="readURL(this);" id="floatingText" placeholder="image" accept="image/jpg, image/png, image/jpeg" required>
                            <label for="floatingText">Imagem</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="m_title" id="floatingText" placeholder="titulo" required>
                            <label for="floatingText">Titulo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="m_artist" id="floatingInput" placeholder="artista" required>
                            <label for="floatingInput">Artista</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="youtube" id="floatingPassword" placeholder="https://" required>
                            <label for="floatingPassword">Youtube</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="audiomack" id="floatingPassword" placeholder="https://" required>
                            <label for="floatingPassword">Audiomack</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="soundcloud" id="floatingPassword" placeholder="https://" required>
                            <label for="floatingPassword">SoundCloud</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="spotify" id="floatingPassword" placeholder="https://" required>
                            <label for="floatingPassword">Spotfy</label>
                        </div>
                        {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div> --}}
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Upload</button>
                        {{-- <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->


@endsection
