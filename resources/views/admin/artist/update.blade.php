@extends('admin.layout.admin_layout')
@section('content')

@include('admin.layout.sidebar')
<!-- Sign Up Start -->

<div class="content">
    @include('admin.layout.navbar')
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-6">
                <div class="rounded d-flex justify-content-center p-4 p-sm-5 my-4 mx-3">
                    <img id="blah" src="{{ asset('storage/images/artist_image/'.$artist->artist_image) }}" width="300px" height="250px" alt="">
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

            @if (session()->get('erro'))
            <div class="alert alert-danger  d-flex align-items-center alert-dismissible fade show mb-2 p-1 p-sm-2 my-2 mt-5 mx-0" role="alert">
                <ul style="list-style-type: none;">
                    <li class="d-flex align-items-center mb-0">
                       {{session()->get('erro')}}
                    </li>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </ul>
            </div>
        @endif

                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>BackOffice</h3>
                        </a>
                        <h3>Artist</h3>
                    </div>
                    {{-- content here --}}
                    <form method="post" enctype="multipart/form-data" action="{{ route('updateartist') }}">
                        @csrf
                        <input type="hidden" name="id" >
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="artist_image" onchange="readURL(this);" id="floatingText" placeholder="image" accept="image/jpg, image/png, image/jpeg">
                            <label for="floatingText">Imagem</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="artist_name" id="floatingText" placeholder="nome do artista"  value="{{ $artist->artist_name }}"required>
                            <label for="floatingText">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="artist_facebook" id="floatingText" placeholder="https://facebook" value="{{ $artist->artist_facebook }}">
                            <label for="floatingText">Facebook</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="artist_instagram" id="floatingText" placeholder="https://instagram" value="{{ $artist->artist_instagram }}">
                            <label for="floatingText">Instagram</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="artist_twitter" id="floatingText" placeholder="https://twitter" value="{{ $artist->artist_twitter }}">
                            <label for="floatingText">Twitter</label>
                        </div>
                        <label for="myeditorinstance" class="pb-2">Biografia</label>
                        <textarea id="myeditorinstance" name="artist_bio">{{ $artist->artist_bio }}</textarea>
                        <div class="col-4 pt-2">
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->
<x-head.tinymce-config/>

@endsection
