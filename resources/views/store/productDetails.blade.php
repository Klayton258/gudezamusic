
@extends('layout.layout_main')
@section('content')

@include('layout.navbar')

@include('dialogs.contactWhatsappDialog')

<link rel="stylesheet" href={{asset('css/detailsProduct.css')}}>

<div class="container-fluid !direction !spacing">
    <div class="page-title">
        <img src="{{asset('assets/components/loja.png')}}">
    </div>
</div>

<div class="container">
    <section class="product-item">
        <div class="product-gallery">
          <img src="{{ asset('loja/products/'.$product->cover) }}" alt="" id="slider">
        </div>
        <div class="product-data">
            @if ($product->state == 'Novo')
            <span class="badge rounded-pill bg-warning text-dark product-firm">{{$product->state}}</span>
          @endif
          @if ($product->state == 'Promoção')
            <span class="badge rounded-pill bg-success text-dark product-firm">{{$product->state}}</span>
          @endif
          @if ($product->state == 'Grátis')
            <span class="badge rounded-pill bg-secondary text-dark product-firm">{{$product->state}}</span>
          @endif

          <h2 class="product-name">AIR MAX TAVAS SD</h2>
          @if ($product->state == 'Promoção')
            <p class="product-price">{{ number_format($product->price_promotional, 2) }}</p>
            <p class="product-promotion">{{ number_format($product->price, 2) }}</p>
          @else
            @if($product->state == 'Grátis')
            <p class="product-price">Grátis</p>
            @else
            <p class="product-price">{{ number_format($product->price, 2) }}</p>
            @endif
          @endif

          <!--<p class="product-colors">Black/Pink Pow/Tour Yellow/White</p>-->
          <p class="product-size">{{$product->stock}}</p>
           <button class="buy-btn" id="whatsappStoreRedirect" data-prod="{{$product->name}}">Encomendar</button>

          <div class="product-info">
            <p class="product-description">

            </p>

          </div>
        </div>
      </section>
</div>



@endsection
