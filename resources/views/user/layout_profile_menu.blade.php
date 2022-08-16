<div class="col-lg-4 pb-5">
    <!-- Account Sidebar-->
    <div class="author-card pb-3">
        <div class="author-card-cover" style="background-image: url({{asset('assets/components/login.webp')}});"><a class="btn btn-style-1 btn-white btn-sm" href="#" data-toggle="tooltip" title="" data-original-title="You currently have 290 Reward points to spend"><i class="fa fa-award text-md"></i>&nbsp;0 pontos</a></div>
        <div class="author-card-profile">
            <div class="author-card-avatar">
                @if (Auth::guard('clients')->user()->avatar != null)
                    <img src="{{asset('images/users/profiles/'.Auth::guard('clients')->user()->id.'/'.Auth::guard('clients')->user()->avatar)}}" alt="{{Auth::guard('clients')->user()->name;}}">
                    @else
                    <img src="{{asset('assets/components/avatar.png')}}" alt="{{Auth::guard('clients')->user()->name;}}">
                @endif
            </div>
            <div class="author-card-details">
                <h5 class="author-card-name text-lg">{{ Auth::guard('clients')->user()->name; }}</h5><span class="author-card-position">Desde {{\Carbon\Carbon::parse(Auth::guard('clients')->user()->created_at)->format('d/m/Y')}}</span>
            </div>
        </div>
    </div>
    <div class="wizard mb-5 pb-5">
        <nav class="list-group list-group-flush">
            <a class="list-group-item" href="{{ route('profile') }}">
                <div class="d-flex justify-content-between align-items-center">
                    <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                        <div class="d-inline-block font-weight-medium text-uppercase">Lista de Eventos</div>
                    </div><span class="badge bg-secondary">0</span>
                </div>
            </a>

            <a class="list-group-item" href="{{ route('profileConfig') }}">
                <i class="fa fa-user text-muted"></i>Configuracoes do Perfil
            </a>

            {{-- <a class="list-group-item" href="#">
                <i class="fa fa-map-marker text-muted"></i>Addresses
            </a>

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
            </a> --}}
        </nav>
    </div>
</div>
