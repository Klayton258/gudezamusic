@extends('layout.layout_main')
@section('content')
@include('layout.navbar')


<div class="container content-lead">
    <div class="header col-sm-12 col-md-8 col-lg-8">
    <h2>Formulario</h2>
    <p>Preencha o formulario a baixo para fazeer parte da grande familia e habilitate a vencer premios e ter descontos na nossa loja e nos nossos eventos</p>
    </div>
    <div class="col-lg-8 col-sm-12 col-md-8 col-lead">
        <form class="row g-3 needs-validation" method="POST">
            @csrf
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="validationCustom02" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Nacionalidade</label>
            <input type="text" class="form-control" id="validationCustom02" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Morada</label>
            <input type="text" class="form-control" id="validationCustom02" required>
          </div>
          <div class="col-md-4">
              <label for="validationCustom04" class="form-label">Estado Civil</label>
              <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Selecione...</option>
                  <option selected disabled value="solteiro">Solteiro/a</option>
                  <option selected disabled value="casado">Casado/a</option>
                </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Ocupa&ccedil;&atilde;o</label>
              <input type="text" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Genero Musical Favorito</label>
              <input type="text" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Rede Social Favorita</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Selecione...</option>
                    <option selected disabled value="tiktok">Tiktok</option>
                    <option selected disabled value="facebook">Facebook</option>
                    <option selected disabled value="instagram">Instagram</option>
                    <option selected disabled value="twitter">Twitter</option>
                    <option selected disabled value="outra">Outra</option>
                  </select>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Plataforma Digital Favorita</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected selected value="">Selecione...</option>
                    <option selected disabled value="YouTube">YouTube</option>
                    <option selected disabled value="spotify">Spotify</option>
                    <option selected disabled value="soundcloud">SoundCloud</option>
                    <option selected disabled value="audiomack">Audiomack</option>
                  </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Atividade Favorita</label>
              <input type="text" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Nivel Academico</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Selecione...</option>
                    <option selected disabled value="medio">Medio</option>
                    <option selected disabled value="superior">Superior</option>
                  </select>
            </div>
          <div class="col-12">
            <button class="btn btn-primary col-3" type="submit">Enviar</button>
          </div>
        </form>
    </div>
</div>


@endsection
