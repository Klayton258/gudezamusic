@extends('layout.layout_main')
@section('content')
@include('layout.navbar')

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

<div class="container content-lead">
    <div class="header col-sm-12 col-md-8 col-lg-8">
    <h2>Formulario</h2>
    <p>Preencha o formulario a baixo para fazer parte da grande familia e habilitate a vencer premios e ter descontos na nossa loja e nos nossos eventos</p>
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
    </div>
    <div class="col-lg-8 col-sm-12 col-md-8 col-lead">
        <form class="row g-3 needs-validation" action="{{ route('lead') }}" method="POST">
            @csrf
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nome Completo</label>
            <input type="text" name="name" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Data de Nascimento</label>
            <input type="date" name="birthday" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Sexo</label>
            <select class="form-select" name="gener" id="validationCustom04" required>
                <option selected  value="">Selecione...</option>
                <option  value="masculino">Masculino</option>
                <option  value="femenino">Femenino</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Telefone</label>
            <input type="text" name="phone" class="form-control" id="validationCustom02" max="9" min="9" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Nacionalidade</label>
            <input type="text" name="nacionality" class="form-control" id="validationCustom02" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Morada</label>
            <input type="text" name="residence" class="form-control" id="validationCustom02" required>
          </div>
          <div class="col-md-4">
              <label for="validationCustom04" class="form-label">Estado Civil</label>
              <select class="form-select" name="civilstate" id="validationCustom04" required>
                  <option selected  value="">Selecione...</option>
                  <option  value="solteiro">Solteiro/a</option>
                  <option  value="casado">Casado/a</option>
                </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Ocupa&ccedil;&atilde;o</label>
              <input type="text" name="ocupation" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Genero Musical Favorito</label>
              <input type="text" name="favorite_music_gener" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Rede Social Favorita</label>
                <select class="form-select" name="favorite_social_media" id="validationCustom04" required>
                    <option selected value="">Selecione...</option>
                    <option value="tiktok">Tiktok</option>
                    <option value="facebook">Facebook</option>
                    <option value="instagram">Instagram</option>
                    <option value="twitter">Twitter</option>
                    <option value="outra">Outra</option>
                  </select>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Plataforma Digital Favorita</label>
                <select class="form-select" name="favorite_digital_portal" id="validationCustom04" required>
                    <option selected value="">Selecione...</option>
                    <option value="YouTube">YouTube</option>
                    <option value="spotify">Spotify</option>
                    <option value="soundcloud">SoundCloud</option>
                    <option value="audiomack">Audiomack</option>
                  </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Atividade Favorita</label>
              <input type="text" name="favorite_activity" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Nivel Academico</label>
                <select class="form-select" name="degree_level" id="validationCustom04" required>
                    <option selected value="">Selecione...</option>
                    <option value="medio">Medio</option>
                    <option value="superior">Superior</option>
                  </select>
            </div>
          <div class="col-12">
            <button class="btn btn-dark col-3" type="submit">Enviar</button>
          </div>
        </form>
    </div>
</div>


@endsection
