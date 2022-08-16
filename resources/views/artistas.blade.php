@extends('layout.layout_main')
@section('content')
@include('layout.navbar')

<link rel="stylesheet" href={{asset('css/artistas.css')}}>

<div class="container-fluid !direction !spacing">
    @include('layout.subscribe')
    <div class="page-title">
        <img src="{{asset('assets/components/artistas.png')}}">
    </div>
    @foreach ($artists as $artist)
    <div id="carouselExampleControlsNoTouching" class="carousel slide mt-5" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container cont-art mb-5 col-12">
                    <a href="{{ route('artisdetails',['id'=>$artist->id])}}" class="m-link">
                        <img src="{{ asset('images/artist_image/'.$artist->artist_image) }}" class="img-fluid cover-artista ">
                    </a>
                    <div class="col mt-5">
                        <a class="titulo-ep" href="{{ route('artisdetails', ['id'=>$artist->id]) }}">
                            <h2 class="nome-artista">{{$artist->artist_name}}</h2>
                            <p>click para saber mais!</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>



@endsection
