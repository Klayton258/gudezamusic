@extends('layout.layout_main')
@section('content')
@extends('layout.navbar')

<link rel="stylesheet" href={{asset('css/artistas.css')}}>


<div class="mt-5">
    <div class="col container row-artist pt-5">
        <div class="row col-4">
            <img src="{{asset('assets/artists/cc.png')}}" class="cover-artistaa img-fluid">
        </div>
    </div>
    <div class="container content-atist">
        <div class="text-artist">
            <h1>
                {{$artist[0]->artist_name}}
            </h1>
            <div class="row justify-content-center">
                @if ($artist[0]->artist_facebook != '')
                <a class="icon-r" target="_blank" href="{{$artist[0]->artist_facebook}}">
                    <img src="assets/components/facebook-white.png" class="icon-r">
                </a>
                @endif
                @if ($artist[0]->artist_instagram != '')
                <a class="icon-r" target="_blank" href="{{$artist[0]->artist_instagram}}">
                    <img src="assets/components/instagram-white.png" class="icon-r">
                </a>
                @endif

                @if ($artist[0]->artist_twitter != '')
                <a class="icon-r" target="_blank" href="{{$artist[0]->artist_twitter}}">
                    <img src="assets/components/Twitter-white.png" class="icon-r">
                </a>
                @endif
            </div>

        </div>

    </div>
    <div class="container mb-5">
            <a class="btn btn-str" id="bio" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Biografia
            </a>

    </div>
    <div class="container">
        <div class="collapse col-lg-6 col-sm-12" id="collapseExample">
            <div class="card card-body text-center bio-content">
                <p>{{$artist[0]->artist_bio}}</p>
            </div>
        </div>
    </div>
    </div>
@endsection
