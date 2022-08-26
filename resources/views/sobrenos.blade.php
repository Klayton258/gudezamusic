@extends('layout.layout_main')
@section('content')
@include('layout.navbar')

<style>
    .principal{
        margin-top: 100px;
    }
    .container-fluid{
        display: flex;
        flex-direction: column
        justify-content: center
    }
    .icon-r{
    width: 40px;
    margin-right: 15px;
    margin-bottom: 20px;
}
.icon-r:hover{
transform: scale(1.2);
}
.email i{
    padding-right: 5px;
}
.powered-link a{
    text-decoration-line: none;
    color: rgb(0, 132, 255);
}
.contact-us{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
}
</style>
    <div class="principal">
        @include('layout.subscribe')
    <div class="container-fluid col-2 col-sm-2 cont-us">
        <img src="assets/components/brand.png" width="80px" height="80px" class=" justify-content-center">
    </div>
    <div class="container-fluid justify-content-center">
        <div class="col-lg-8 col-sm-12 short-story">

            <h1>Quem Somos?</h1>
            <p class="short-p"><strong>Gudeza, Lda</strong> &eacute; uma empresa de entretenimento de servi&ccedil;o completo,
                fundada por Carlos Chatuir Jr. A empresa opera como gravadora, produtora e Muito mais.</p>

            <h1>História</h1>
            <p class="short-p">A <strong>Gudeza Music</strong> foi fundada por Carlos <i>"Charles Caló"</i> Chatuir Jr. e
                Moisés Suto em 2017, em Maputo. 3 Anos depois o Co-fundador Moisés Suto
                deixou a gravadora e deu 50% das suas ações ao seu ex-sócio Carlos Chatuir Jr,
                tornando-o único proprietário da mesma até agora.</p>

        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <a class="icon-r" target="_blank" href="#">
                <img src="{{asset('assets/components/facebook-white.png')}}" class="icon-r">
            </a>
            <a class="icon-r" target="_blank" href="#">
                <img src="{{asset('assets/components/instagram-white.png')}}" class="icon-r">
            </a>
            <a class="icon-r" target="_blank" href="#">
                <img src="{{asset('assets/components/Twitter-white.png')}}" class="icon-r">
            </a>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <p class="short-p text-light">contacte-nos</p>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <div class="row">
                <p class="text-light email contact-us"><i class="fa-solid fa-envelope"></i>info@gudezamusic.com</p>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">

            {{-- <div class="row">
                <p class="text-light contact-us">
                    <i class="fa-brands fa-whatsapp email"></i> +(258) 848-293-580
                </p>
            </div> --}}
        </div>
    </div>

    <div class="footer d-flex justify-content-center text-light fixed-bottom pb-2 mt-5" style="margin-top: 100px;"><div class="powered-link align-bottom">&copy; 2021 Powered by <a href="https://mazedeve.com" target="_blank">Maze Dev</a></div></div>
</div>



@endsection
