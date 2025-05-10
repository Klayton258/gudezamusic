<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="{{asset('assets/components/brand.png')}}" width="20%" height="20%" alt=""> BackOffice</h3>
            {{-- <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>BackOffice</h3> --}}
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                {{-- <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> --}}
                {{-- <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> --}}
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{$user['name']}}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dash') }}" class="nav-item nav-link {{ Route::currentRouteName()=='dash' ? 'active':"" }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            {{-- <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a> --}}
            {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ in_array(Route::currentRouteName(),['slideindex', 'uploadslide'])? 'active':"" }}" data-bs-toggle="dropdown"><i class="far fa-image me-2"></i>Novidades</a>
                <div class="dropdown-menu bg-transparent border-0 {{in_array(Route::currentRouteName(),['slideindex', 'uploadslide'])? 'show' : ''}}">
                    <a href="{{ route('slideindex') }}" class="dropdown-item {{ Route::currentRouteName()=='slideindex' ? 'active':"" }}">Lista</a>
                    <a href="{{ route('uploadslide') }}" class="dropdown-item {{ Route::currentRouteName()=='uploadslide' ? 'active':"" }}">Carregar</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ in_array(Route::currentRouteName(),['artistindex', 'uploadartist'])? 'active':"" }}" data-bs-toggle="dropdown"><i class="far fa-image me-2"></i>Artistas</a>
                <div class="dropdown-menu bg-transparent border-0 {{ in_array(Route::currentRouteName(),['artistindex', 'uploadartist'])? 'show':"" }}">
                    <a href="{{ route('artistindex') }}" class="dropdown-item {{ Route::currentRouteName()=='artistindex' ? 'active':"" }}">Lista</a>
                    <a href="{{ route('uploadartist') }}" class="dropdown-item {{ Route::currentRouteName()=='uploadartist' ? 'active':"" }}">Carregar</a>
                </div>
            </div>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-music me-2"></i>Musicas</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('musicindex') }}" class="dropdown-item">Lista</a>
                    <a href="{{ route('uploadmusic') }}" class="dropdown-item">Carregar</a>
                </div>
            </div> --}}

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ in_array(Route::currentRouteName(),['videos.list', 'video.new'])? 'active':"" }}" data-bs-toggle="dropdown"><i class="fa fa-music me-2"></i>Videos</a>
                <div class="dropdown-menu bg-transparent border-0 {{ in_array(Route::currentRouteName(),['videos.list', 'video.new'])? 'show':"" }}">
                    <a href="{{ route('videos.list') }}" class="dropdown-item {{ Route::currentRouteName()=='videos.list' ? 'active':"" }}">Todos Videos</a>
                    <a href="{{ route('video.new') }}" class="dropdown-item {{ Route::currentRouteName()=='video.new' ? 'active':"" }}">Novo Videos</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ in_array(Route::currentRouteName(),['store.product.list', 'store.product.store'])? 'active':"" }}" data-bs-toggle="dropdown"><i class="fa fa-music me-2"></i>Produtos</a>
                <div class="dropdown-menu bg-transparent border-0 {{ in_array(Route::currentRouteName(),['store.product.list', 'store.product.store'])? 'show':"" }}">
                    <a href="{{ route('store.product.list') }}" class="dropdown-item {{ Route::currentRouteName()=='store.product.list' ? 'active':"" }}">Todos Produtos</a>
                    <a href="{{ route('store.product.store') }}" class="dropdown-item {{ Route::currentRouteName()=='store.product.store' ? 'active':"" }}">Novo Produto</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ in_array(Route::currentRouteName(),['adminCreate', 'about.update'])? 'active':"" }}" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Outras Paginas</a>
                <div class="dropdown-menu bg-transparent border-0 {{ in_array(Route::currentRouteName(),['adminCreate', 'about.update'])? 'show':"" }}">
                    <a href="{{ route('adminCreate') }}" class="dropdown-item {{ Route::currentRouteName()=='adminCreate' ? 'active':"" }}">Registar Usuario</a>
                    <a href="{{ route('about.update') }}" class="dropdown-item {{ Route::currentRouteName()=='about.update' ? 'active':"" }}">Sobre Nos</a>
                </div>
            </div>
            <a href="{{ route('subscriber.list') }}" class="nav-item nav-link {{ Route::currentRouteName()=='subscriber.list' ? 'active':"" }}"><i class="fa fa-users me-2"></i>Inscritos</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
