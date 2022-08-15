@extends('user.layout_main')
@section('content')
@include('layout.navbar')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mb-4 main-container">
    <div class="row">
        @include('user.layout_profile_menu')
        <!-- Orders Table-->
        <div class="col-lg-8 pb-5 pt-5">
            {{-- <div class="d-flex justify-content-end pb-3">
                <div class="form-inline">
                    <label class="text-muted mr-3" for="order-sort">Sort Orders</label>
                    <select class="form-control" id="order-sort">
                        <option>All</option>
                        <option>Delivered</option>
                        <option>In Progress</option>
                        <option>Delayed</option>
                        <option>Canceled</option>
                    </select>
                </div>
            </div> --}}
            <div class="table-responsive">
                <h5 class="text-center author-card-name author-card-details">Sem eventos disponiveis</h5>
                {{-- <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Evento</th>
                            <th>Data</th>
                            <th>Estado</th>
                            <th>Preco</th>
                            <th>Validar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a class="navi-link" href="{{ route('eventDetail') }}" data-toggle="modal">Kiss You Stream</a></td>
                            <td>August 08, 2017</td>
                            <td><span class="badge bg-danger m-0">Canceled</span></td>
                            <td><span>300 Mzn</span></td>
                            <td><button class="btn btn-danger" disabled>cancelado</button></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" href="#order-details" data-toggle="modal">34VB5540K83</a></td>
                            <td>July 21, 2017</td>
                            <td><span class="badge bg-info m-0">In Progress</span></td>
                            <td>$315.20</td>
                            <td><button class="btn btn-secundary" disabled>Aguarde...</button></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" href="#order-details" data-toggle="modal">112P45A90V2</a></td>
                            <td>June 15, 2017</td>
                            <td><span class="badge bg-warning m-0">Delayed</span></td>
                            <td>$1,264.00</td>
                            <td><button class="btn btn-info">ver ticket</button></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" href="#order-details" data-toggle="modal">28BA67U0981</a></td>
                            <td>May 19, 2017</td>
                            <td><span class="badge bg-success m-0">Delivered</span></td>
                            <td>$198.35</td>
                            <td><button class="btn btn-info">ver ticket</button></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" href="#order-details" data-toggle="modal">502TR872W2</a></td>
                            <td>April 04, 2017</td>
                            <td><span class="badge bg-success m-0">Delivered</span></td>
                            <td>$2,133.90</td>
                            <td><button class="btn btn-info">ver ticket</button></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" href="#order-details" data-toggle="modal">47H76G09F33</a></td>
                            <td>March 30, 2017</td>
                            <td><span class="badge bg-success m-0">Delivered</span></td>
                            <td>$86.40</td>
                            <td><button class="btn btn-info">ver ticket</button></td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
</div>

@endsection
