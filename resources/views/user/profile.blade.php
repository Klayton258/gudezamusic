@extends('user.layout_main')
@section('content')
@include('layout.navbar')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mb-4 main-container">
    <div class="row">
        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-cover" style="background-image: url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);"><a class="btn btn-style-1 btn-white btn-sm" href="#" data-toggle="tooltip" title="" data-original-title="You currently have 290 Reward points to spend"><i class="fa fa-award text-md"></i>&nbsp;290 points</a></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Daniel Adams">
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg">Daniel Adams</h5><span class="author-card-position">Joined February 06, 2017</span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">
                    <a class="list-group-item active" href="#">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Orders List</div>
                            </div><span class="badge badge-secondary">6</span>
                        </div>
                    </a><a class="list-group-item" href="https://www.bootdey.com/snippets/view/bs4-profile-settings-page" target="__blank"><i class="fa fa-user text-muted"></i>Profile Settings</a><a class="list-group-item" href="#"><i class="fa fa-map-marker text-muted"></i>Addresses</a>
                    <a class="list-group-item" href="https://www.bootdey.com/snippets/view/bs4-wishlist-profile-page" tagert="__blank">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-heart mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">My Wishlist</div>
                            </div><span class="badge badge-secondary">3</span>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">My Tickets</div>
                            </div><span class="badge badge-secondary">4</span>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <!-- Orders Table-->
        <div class="col-lg-8 pb-5">
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
                <table class="table table-hover mb-0">
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
            </div>
        </div>
    </div>
</div>

@endsection
