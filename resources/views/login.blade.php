@extends('layout.layout_main')
@section('content')
@include('layout.navbar')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div id="main-wrapper" class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                </div>

                                <h6 class="h5 mb-0">Bem Vindo de Volta!</h6>
                                <p class="text-muted mt-2 mb-5">Entre usando o seu email.</p>

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Senha</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-dark">Entrar</button>
                                    {{-- <a href="#l" class="forgot-link float-right text-primary">Forgot password?</a> --}}
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right" style="
                            padding: 0;
  background-image: url({{asset('assets/components/login.webp')}});
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  position: relative;
                            ">
                                <div class="overlay rounded-right"></div>
                                {{-- <div class="account-testimonial">
                                    <h4 class="text-white mb-4">This  beautiful theme yours!</h4>
                                    <p class="lead text-white">"Best investment i made for a long time. Can only recommend it for other users."</p>
                                    <p>- Admin User</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <p class="text-muted text-center mt-3 mb-0">Nao tem uma conta? <a href="{{ route('signup') }}" class="text-primary ml-1">registar</a></p>

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>


@endsection
