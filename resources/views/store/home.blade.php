@extends('layout.layout_main')
@section('content')

@include('layout.navbar')

@include('dialogs.contactWhatsappDialog')

<link rel="stylesheet" href={{asset('css/store.css')}}>

<div class="container-fluid !direction !spacing">
    <div class="page-title">
        <img src="{{asset('assets/components/loja.png')}}">
    </div>
</div>


<div class="container">

    <ul class="cards">
        @foreach ($products as $product)
        @if($product->stock != 0)

        <li>
          <a href="{{ route('product.details', ['id'=>Crypt::encrypt($product->id)]) }}" class="card" id="whatsappStoreRedirec" data-prod="{{ $product->name }}">
            <img src="{{ asset('loja/products/'.$product->cover) }}" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                <div class="card__header-text">
                  <h2 class="card__title">{{$product->name}}</h2>

                  @if ($product->state == 'Novo')
                    <span class="badge rounded-pill bg-warning text-dark">{{$product->state}}</span>
                  @endif
                  @if ($product->state == 'Promoção')
                    <span class="badge rounded-pill bg-success text-dark">{{$product->state}}</span>
                  @endif
                  @if ($product->state == 'Grátis')
                    <span class="badge rounded-pill bg-secondary text-dark">{{$product->state}}</span>
                  @endif

                  <span class="card__status">{{$product->stock}} Artigos Disponiveis</span>

                  @if($product->state == 'Promoção')
                    <h1 class="card__title card_price mt-2">{{ number_format($product->price_promotional, 2) }} MZN</h1>
                    <h1 class="card__title card_price" style="font-size: 12px; text-decoration: line-through;">{{ number_format($product->price, 2) }} MZN</h1>
                  @else
                    @if($product->state == 'Grátis')
                    <h1 class="card__title card_price mt-2">Grátis</h1>
                    @else
                    <h1 class="card__title card_price mt-2">{{ number_format($product->price, 2) }} MZN</h1>
                    @endif
                  @endif
                </div>
              </div>
            </div>
          </a>
        </li>
        @endif
        @endforeach

      </ul>

</div>

@endsection
