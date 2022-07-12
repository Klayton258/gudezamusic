@extends('layout.layout_main')
@section('content')
@extends('layout.navbar')

<div class="container-fluid !direction !spacing">

    <div class="page-title">
        <img src="{{asset('assets/components/videos-in.png')}}">
    </div>

    @foreach ($data as $video)

    <div class="container  mt-5">
        <div class="ratio ratio-16x9">
            <iframe src="{{$video->v_link}}" title="{{$video->v_title}}"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; rel; picture-in-picture; showinfo=0"></iframe>
        </div>
    </div>

    @endforeach

    <div class="container d-flex justify-content-center">
        <h5 class="cprght text-center">© 2021 GUDEZA MUSIC. TODOS DIREITOS RESERVADOS.</h5>
    </div>
</div>



@endsection
