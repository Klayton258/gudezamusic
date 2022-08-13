@extends('layout.layout_main')
@section('content')
@include('layout.navbar')

<link rel="stylesheet" href="{{asset('css/signup.css')}}">


<div class="container">
<div class="col-lg-6 signup-contain">
    <h2>Registar</h2>
    <form action="{{ route('regist') }}" method="POST" class="row g-2 col-12 needs-validation">
      <div class="col-md-12 mb-2">
        <label for="name" >Nome Completo</label>
        <input type="text" class="form-control" name="name" placeholder="Nome Completo" required>
      </div>
      <div class="col-md-12 mb-2">
        <label for="birthdate" >Data de Nascimento</label>
        <input type="text" class="form-control" name="birthdate" placeholder="Data de Nascimento" required>
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
