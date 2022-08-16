@extends('layout.layout_main')
@section('content')
@include('layout.navbar')
@include('dialogs.paymentDialog')

<link rel="stylesheet" href="{{ asset('css/events.css') }}">

<section class="detailsEvent bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0 d-flex justify-content-center">
                                <img src="{{ asset('images/music_covers/1652163422.jpg') }}" width="60%" alt="...">
                            </div>
                            <div class="col-lg-6 col-sm-8 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h4 class="h2 text-white text-center mb-0">Kiss You Stream</h4>
                                    <span class="text-primary">Free</span>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Inicio:</span> 10hrs</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Fim:</span> 22hrs</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Ticket:</span> 300 Mzn</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Localiza&ccedil;&atilde;o:</span> Kwetu Maputo, Rua da Argelia</li>
                                    <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> eventos@gudezamusic.com</li>
                                </ul>
                                {{-- <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                    <li><a href="#!"><i class="fa-brands fa-twitter" style="width: 20% !important;"></i></a></li>
                                    <li><a href="#!"><i class="fa-brands fa-facebook" style="width: 20% !important;"></i></li>
                                    <li><a href="#!"><i class="fa-brands fa-instagram" style="width: 20% !important;"></i></a></li>
                                </ul> --}}
                                <div class="col-4 mb-2 mt-2">
                                    <a href="#" id="paybutton" class="btn btn-warning text-secondary font-weight-600">Comprar Ticket</a>
                                </div>
                            </div>
                        </div>
                        <span class="section-title text-primary mb-3 mb-sm-4">Detalhes</span>
                        <div class="progress-text">
                            <div class="row">
                                <div class="col-6">Lotacao</div>
                                <div class="col-6 text-end">80%</div>
                            </div>
                        </div>
                        <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
