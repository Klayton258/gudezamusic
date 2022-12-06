@extends('admin.layout.admin_layout')
@section('content')
@include('admin.layout.sidebar')


<!-- Content Start -->
<div class="content">
    @include('admin.layout.navbar')
            <!-- Table Start -->
            <div class="container-fluid d-flex justify-content-center pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                    @if (session()->get('success'))
                        <div class="alert alert-success  d-flex align-items-center alert-dismissible fade show mb-2 p-1 p-sm-2 my-2 mt-5 mx-0" role="alert">
                            <ul style="list-style-type: none;">
                                <li class="d-flex align-items-center mb-0">
                                   {{session()->get('success')}}
                                </li>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </ul>
                        </div>
                    @endif
                    @if (session()->get('deleted'))
                        <div class="alert alert-warning  d-flex align-items-center alert-dismissible fade show mb-2 p-1 p-sm-2 my-2 mt-5 mx-0" role="alert">
                            <ul style="list-style-type: none;">
                                <li class="d-flex align-items-center mb-0">
                                   {{session()->get('deleted')}}
                                </li>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </ul>
                        </div>
                    @endif
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Produtos</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Preco</th>
                                        <th scope="col">Promocao</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Atualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{$product->id}}</th>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->promotional_price}}</td>
                                        <td>{{$product->state}}</td>
                                        <td><a class="btn btn-sm btn-primary" href="{{ route('store.product.edit', ['id'=>Crypt::encrypt($product->id)]) }}">Atualizar</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
        </div>
        @include('admin.layout.footer')

@endsection
