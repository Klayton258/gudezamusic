@extends('layout.layout_main')
@section('content')
<link type="text/css" rel="stylesheet" href="css/lightslider.css" />
@include('layout.navbar')

<style>
    body{
        background-color: blue;
    }
   .cS-hidden {
    height: 1px;
    opacity: 0;
    filter: alpha(opacity=0);
    overflow: hidden;
}
.item-a { width:200px; }
.item-b { width:340px; }
.item-c { width:290px; }
.item-d { width:220px; }
.item-e { width:350px; }
@media (max-width: 768px) {
    .item-a { width:100px; }
    .item-b { width:240px; }
    .item-c { width:190px; }
    .item-d { width:120px; }
    .item-e { width:250px; }
}
.card-slide{
    min-width: 200px;
    max-width: 300px;
    min-height: 200px;
    max-height: 200px;
    transition: 0.5s ease-in-out;
}
</style>

<div class="container" style="margin-top: 100px;">
    <ul id="autoWidth" class="cs-hidden mt-5 ms-lg-2 ms-sm-2 me-sm-2">
        <li class="item-a" alt="1">
            <div class="card card-slide">
                <img src="{{ asset('images/music_covers/1657281336.jpg') }}" class="card-image" width="100%" alt="">
            </div>
        </li>
        <li class="item-b">
            <img src="{{ asset('images/music_covers/1651518503.jpg') }}" width="100%" alt="">
        </li>
        <li class="item-c">
            <img src="{{ asset('images/music_covers/1651518503.jpg') }}" width="100%" alt="">
        </li>
        <li class="item-d">
            <img src="{{ asset('images/music_covers/1651518503.jpg') }}" width="100%" alt="">
        </li>
        <li class="item-e">
            <img src="{{ asset('images/music_covers/1651518503.jpg') }}" width="100%" alt="">
        </li>
      </ul>
</div>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
{{-- <script src="js/lightslider.js"></script> --}}

<script type="text/javascript">
$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cs-hidden');
        }
    });
    var autoplaySlider = $('#autoplay').lightSlider({
        auto:true,
        loop:true,
        pauseOnHover: true,
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        }
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());
});
    </script>


@endsection
