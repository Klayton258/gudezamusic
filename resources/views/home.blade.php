@extends('layout.layout_main')
@section('content')
    @include('layout.navbar')
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="gooey">
                <!-- in="sourceGraphic" -->
                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                    result="highContrastGraphic" />
                <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
            </filter>
        </defs>
    </svg>
    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @php
                    $count = 0;
                @endphp
                @foreach ($data as $slide)
                    @if ($count == 0)
                        <button type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="{{ $count }}" class="active" aria-current="true"
                            aria-label="Slide {{ $count }}"></button>
                    @else
                        <button type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="{{ $count }}" aria-label="Slide {{ $count }}"></button>
                    @endif

                    @php
                        $count += 1;
                    @endphp
                @endforeach
            </div>
            <div class="carousel-inner">
                @php $car=0; @endphp
                @foreach ($data as $slide)
                    @if ($car == 0)
                        <div class="carousel-item active"
                            style="background-image: url({{ asset('storage/images/slide_covers/' . $slide->slide_cover) }})">
                            <div class="carousel-caption">
                                @if ($slide->link_direct != '')
                                    <a href="{{ $slide->link_direct }}" target="_blank" id="gooey-button">
                                        saber mais
                                        <span class="bubbles">
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                        </span>
                                    </a>
                                @endif
                                <span>{{ $slide->description }}</span>
                            </div>
                        </div>
                        @php $car+=1; @endphp
                    @else
                        <div class="carousel-item"
                            style="background-image: url({{ asset('storage/images/slide_covers/' . $slide->slide_cover) }})">
                            <div class="carousel-caption">
                                @if ($slide->link_direct != '')
                                    <a href="{{ $slide->link_direct }}" target="_blank" id="gooey-button">
                                        saber mais
                                        <span class="bubbles">
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                            <span class="bubble"></span>
                                        </span>
                                    </a>
                                @endif
                                <span>{{ $slide->description }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @if (sizeOf($data) > 1)
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    @endif
</div>
    </header>
@endsection
