<div class="modal fade" id="subscribeModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Subscreva-se </h5>
          <button type="button" class="btn-close" id="close-popup" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="modal-body">
            @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif

          subscreva-se para receber as ultimas atualizacoes em primeira mao!
          <form action="{{ url('subscribe') }}" method="post">
            @csrf
              <div class="col-md-12 mt-2">
                <input type="text" class="form-control" name="name" id="validationCustom02" placeholder="introduza o seu nome">
              </div>
              <div class="col-md-12 mt-4">
                <input type="email" class="form-control" name="email" id="validationCustom01" placeholder="introduza o seu email">
              </div>
              <div class="col-12 mt-2 mb-5">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="checkbox" id="invalidCheck">
                  <label class="form-check-label" for="invalidCheck">
                    Quer Fazer Parte da Familia GM?
                  </label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-dark float-end" id="subscribepopup" type="submit">Enviar</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
