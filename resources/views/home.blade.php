@extends('layout.layout_main')
@section('content')
    @extends('layout.navbar')

    <link rel="stylesheet" href={{asset('css/main.css')}}>

    <div class="untitled">
        <div class="untitled__slides">
            @foreach ($data as $slide)

            <div class="untitled__slide">
                <div class="untitled__slideBg" style="background-image: url({{asset('images/slide_covers/'.$slide->slide_cover)}})"></div>
                <div class="untitled__slideContent">
                    <span>{{$slide->slide_title}}</span>
                    <span>{{$slide->description}}</span>
                    @if ($slide->link_direct != '')
                    <a class="button" href="{{ $slide->link_direct }}" target="/black">Ver Mais</a>
                    @endif
                </div>
            </div>

            @endforeach
        </div>
        <div class="untitled__shutters"></div>
    </div>

@endsection
