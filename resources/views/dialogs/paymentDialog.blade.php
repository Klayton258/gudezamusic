<div class="modal fade" id="Modalpayment" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel"><h4 class="text-center">Pagamento M-Pesa</h4> </h5>
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
            <img src="{{ asset('assets/components/mpesa.png') }}" width="40%" alt="">
          </div>
          <div class="col-12">
            <h3 class="text-center">Pode efectuar o pagamento no seguinte numero 84-88-88-888</h3>
            <p class="text-center">Em seguida va ate ao seu perfil selecione o evento no qual efetuou o pagamento e anexe o comprovativo, para a confirmacao e em seguida recebera o seu QR Code que servira como Ticket.</p>
          </div>
          {{-- <form id="formSubs" action="{{ url('payment') }}" method="post">
            @csrf
              <div class="col-md-12 mt-2">
                <div class="input-box">
                <span class="prefix">+258</span>
                <input type="tel" class="form-control" name="number" id="validationCustom02" maxlength="9" placeholder="84XXXXXXX" required>
                </div>
              </div>--}}
              <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-success mt-4 col-8 float-end d-flex align-items-center justify-content-center" id="paymentBtnpopup" type="submit">
                    <span id="normalText">continuar</span>
                </button>
              </div>
          {{-- </form>  --}}
        </div>
      </div>
    </div>
  </div>
