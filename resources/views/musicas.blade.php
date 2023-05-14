@extends('layout.layout_main')
@section('content')
@include('layout.navbar')
@include('layout.subscribe')

<link rel="stylesheet" href={{asset('css/musicas.css')}}>

<div class="container-fluid !direction !spacing">
    <div class="page-title">
        <img src="{{asset('assets/components/MUSICAS.png')}}">
    </div>
</div>


{{--
<div class="musics">
    @if ($albums->total() < 1 && $musics->total() < 1)
        <h2 class="titulo-grupo text-secondary justify-content-center mx-0"> Musics not avaliable</h2>
    @endif
    @if ($albums->total() > 0)
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
                                <a class="titulo-ep" href="{{ route('moredetails', ['id'=> $album->id]) }}">
                                    <h5 class="titulo-ep">{{$album->m_artist}}<br>{{$album->m_title}}</h5>
                                </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif --}}

<div class="container titulo-grupo text-light">
    @if ($musics->total() > 0)
    <h4>MUSICAS</h4>
    @endif

</div>
<div class="container cont-grid">
    @foreach ($musics as $music)
    <div class="col">
        <a href="{{ route('moredetails', ['id'=> $music->id]) }}">
        <img class="capa-m" src="{{ asset('storage/images/music_covers/'.$music->m_cover) }}">
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
