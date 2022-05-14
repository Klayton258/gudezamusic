@extends('layout.layout_main')
@section('content')
@extends('layout.navbar')

<link rel="stylesheet" href={{asset('css/musicas.css')}}>

<div class="container-fluid !direction !spacing">

    <div class="page-title">
        <img src="{{asset('assets/components/MUSICAS.png')}}">
    </div>


</div>



<div class="musics">
    @if (sizeOf($albums) < 1 && $musics->total() < 1)
        <h2 class="titulo-grupo text-secondary justify-content-center mx-0"> Musics not avaliable</h2>
    @endif
    @if (sizeOf($albums) > 0)
    <div class="container titulo-grupo text-light">
        <h4>ALBUMS | EP</h4>
    </div>

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row row-all row-grid">
                        @foreach ($albums as $album)

                        <div class="container col">
                            <a href="{{ route('moredetails', ['id'=> $album->id]) }}" class="m-link"> <img class="capa-m"
                                src="{{ asset('images/music_covers/'.$album->m_cover) }}"></a>
                                <a class="titulo-ep" href="#">
                                    <h5 class="titulo-ep">{{$album->m_artist}}<br>{{$album->m_title}}</h5>
                                </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class=" carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="container col">
                            <a href="?a=novosdesafios-II" class="m-link"> <img class="capa-m"
                                    src="{{ asset('assets/components/hmau.jpg') }}"></a>
                            <a class="titulo-ep" href="?a=novosdesafios-II">
                                <h5 class="titulo-ep">Charles Caló<br> Novos Desafios II</h5>
                            </a>
                        </div>
                        <div class="container col">
                            <a href="?a=homemmau" class="m-link"> <img class="capa-m"src="{{ asset('assets/components/hmau.jpg') }}"></a>
                            <a class="titulo-ep" href="?a=homemmau">
                                <h5 class="titulo-ep">Charles Caló<br> Homem Mau (EP)</h5>
                            </a>
                        </div>
                        <div class="container col">
                            <a href="?a=novos_desafios" class="m-link"> <img class="capa-m" src="{{ asset('assets/components/hmau.jpg') }}"></a>
                            <a class="titulo-ep" href="?a=novos_desafios">
                                <h5 class="titulo-ep">Charles Caló<br>Novos Desafios</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if (sizeOf($albums) > 3)
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            @endif
        </div>
    </div>
</div>
@endif

<div class="container titulo-grupo text-light">
    @if ($musics->total() > 0)
    <h4>MUSICAS</h4>
    @endif

</div>
<div class="container cont-grid">
    @foreach ($musics as $music)
    <div class="col">
        <a href="{{ route('moredetails', ['id'=> $music->id]) }}">
        <img class="capa-m" src="{{ asset('images/music_covers/'.$music->m_cover) }}">
        </a>
        <a class="titulo-ep" href="{{ route('moredetails', ['id'=> $music->id]) }}">
            <h5 class="titulo-ep">{{$music->m_artist}}<br>{{$music->m_title}}</h5>
        </a>
    </div>
    @endforeach

</div>

@if ($musics->total() > 8)
<div aria-label="Page navigation example col-12 container-paginate">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{$musics->previousPageUrl()}}">Previous</a></li>
        @for ($page=1; $page <= $musics->total(); $page++)
        <li class="page-item"><a class="page-link" href="{{$musics->url($page)}}">{{$page}}</a></li>
        @endfor
        <li class="page-item"><a class="page-link" href="{{$musics->nextPageUrl()}}">Next</a></li>
    </ul>
</div>
@endif


@endsection
