<div class="modal fade" id="ModalWhatsapp" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel"><h4 class="text-center">Encomendar <span id="product"></span></h4> </h5>
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
          <div class="col-12 d-flex justify-content-center mb-4">

          </div>
          <div class="col-12">
            <h3 class="text-center">Deseja Adquirir Este Produto?</h3>
            <p class="text-center">
                Para efeitos de encomenda clique no botao abaixo
            </p>
          </div>

              <div class="col-12 d-flex justify-content-center">
                <a target="_blank"
                class="btn btn-success mt-4 col-8 float-end d-flex align-items-center justify-content-center" id="buyOnWhatsapp" type="submit">
                    <span id="normalText">Whatsapp</span>
                </a>
              </div>

        </div>
      </div>
    </div>
  </div>
