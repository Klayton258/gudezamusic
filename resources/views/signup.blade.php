@extends('layout.layout_main')
@section('content')
@include('layout.navbar')

<link rel="stylesheet" href="{{asset('css/signup.css')}}">
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

<div class="container">
<div class="col-lg-6 signup-contain">
    <h2>Registar</h2>
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

    <form action="{{ route('regist') }}" method="POST" class="row g-2 col-12 needs-validation">
        @csrf
      <div class="col-md-12 mb-2">
        <label for="name" >Nome Completo</label>
        <input type="text" class="form-control" name="name" placeholder="Nome e Apelido" required>
      </div>
      <div class="col-md-12 mb-2">
        <label for="birthdate" >Data de Nascimento</label>
        <input type="date" class="form-control" name="birthdate" placeholder="Data de Nascimento" required>
      </div>
      <div class="col-md-12 mb-2">
        <label for="username" >Nome de Usuario</label>
        <input type="text" class="form-control" name="username" placeholder="Nome de Usuario" required>
      </div>
      <div class="col-md-12 mb-2">
        <label for="email" >Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="col-md-12 mb-2">
        <label for="phone" >Telefone</label>
        <input type="number" class="form-control" name="phone" minlength="9" maxlength="9" placeholder="Telefone" required>
      </div>
      <div class="col-md-12 mb-2">
        <label for="password" >Senha</label>
        <input type="password" class="form-control" name="password" minlength="9" maxlength="9" placeholder="Senha" required>
      </div>
      <div class="col-md-12 mb-2">
        <label for="password_confirmation" >Confirmar Senha</label>
        <input type="password" class="form-control" name="password_confirmation" minlength="9" maxlength="9" placeholder="Confirma&ccedil;&atilde;o da Senha" required>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="terms" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Concorda com os termos e condicoes
          </label>
          <div class="invalid-feedback">
            Voce precisa concordar com os <a href="#">termos</a> e <a href="#">condicoes</a> antes de submeter.
          </div>
        </div>
      </div>
      <div class="col-12 float-end">
        <button class="btn btn-dark " type="submit">Registar</button>
      </div>
    </form>
</div>
</div>


@endsection
