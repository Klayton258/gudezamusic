@extends('user.layout_main')
@section('content')
@include('layout.navbar')


<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>

<div class="container mt-5">
    <div class="row">
        @include('user.layout_profile_menu')
        <!-- Profile Settings-->
        <div class="col-lg-8 pb-5 pt-5">
            @if ($errors->any())
            <div class="alert alert-danger  d-flex align-items-center alert-dismissible fade show" role="alert">
                  <ul style="list-style-type: none;">
                    @foreach ($errors->all() as $error)
                      <li class="d-flex align-items-center mb-1">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                          <div>
                              {{ $error }}
                          </div>
                      </li>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </ul>
            </div>
            @endif

            @if (session()->get('success'))
            <div class="alert alert-success  d-flex align-items-center alert-dismissible fade show" role="alert">
                <ul style="list-style-type: none;">
                    <li class="d-flex align-items-center mb-1">
                        {{session()->get('success')}}
                    </li>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </ul>
            </div>
            @endif

            <form class="row" action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input hidden type="number" name="id" value="{{ Auth::guard('clients')->user()->id; }}" required>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Nome e Apelido</label>
                        <input class="form-control" type="text" id="account-fn" name="name"  value="{{ Auth::guard('clients')->user()->name; }}" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">E-mail</label>
                        <input class="form-control" type="email" id="account-email" name="email" value="{{ Auth::guard('clients')->user()->email; }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Nome de Usuario</label>
                        <input class="form-control" type="text" id="account-phone" name="username" value="{{ Auth::guard('clients')->user()->username; }}" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Data de Nascimento</label>
                        <input class="form-control" type="date" id="account-email" name="birthdate" value="{{ Auth::guard('clients')->user()->birthdate; }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Telefone</label>
                        <input class="form-control" type="text" id="account-phone" name="phone" value="{{ Auth::guard('clients')->user()->phone; }}" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Foto de Perfil</label>
                        <input class="form-control" type="file" name="avatar" accept="image/png, image/jpg, image/jpeg"  id="account-phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">Nova Senha</label>
                        <input class="form-control" minlength="6" type="password" id="account-pass">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Confirmar Senha</label>
                        <input class="form-control" type="password" minlength="6" name="password_confirmation" id="account-confirm-pass">
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        {{-- <div class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox" id="subscribe_me" checked="">
                            <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                        </div> --}}
                        <button class="btn btn-style-1 btn-dark" type="submit">Atualizar Perfil</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
