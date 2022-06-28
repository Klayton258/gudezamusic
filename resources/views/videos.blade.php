@extends('layout.layout_main')
@section('content')
@extends('layout.navbar')

<div class="container-fluid !direction !spacing">

    <div class="page-title">
        <img src="{{asset('assets/components/videos-in.png')}}">
    </div>

    <div class="container">
        <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/sM_V0_7_rNw?rel=0&autoplay=1&showinfo=0" title="YouTube video"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; rel; picture-in-picture; showinfo=0"></iframe>
        </div>
    </div>
    <div class="container mt-5">
        <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/PUmAYF0agvQ?rel=0&showinfo=0" title="YouTube video"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; rel; picture-in-picture; showinfo=0"></iframe>
        </div>
    </div>

    <div class="container mt-5">
        <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/eCwMVfOxb_U?modestbranding=1&rel=0" title="YouTube video"
                allow="accelerometer; clipboard-write; encrypted-media; modestbranding; gyroscope; picture-in-picture"></iframe>
        </div>
    </div>

    <div class="container mt-5">
        <div class="ratio mt-5 ratio-16x9">
            <iframe src="https://www.youtube.com/embed/AwC0VnlC32g?modestbranding=1&rel=0" title="YouTube video"
                allowfullscreen
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; modestbranding; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <hr>
    </div>
    <div class="container d-flex justify-content-center">
        <h5 class="cprght text-center">© 2021 GUDEZA MUSIC. TODOS DIREITOS RESERVADOS.</h5>
    </div>
</div>



@endsection
