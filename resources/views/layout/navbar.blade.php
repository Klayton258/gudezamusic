<div class="main">
<nav class="nav">
    <!--Brand-->
    <div class="logo">
        <a href="{{route('home')}}"><img class="logo" src="{{asset('assets/components/brand.png')}}"></a>
    </div>
    <div id="menu">
        <!--Toggle button-->
        <button id="btn-menumobile" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="list"
            aria-expanded="false">
            <span id="hamburger"></span>
        </button>
        <!--Item List-->
        <ul id="list">
            <li><a href="{{ route('home')}}">Novidades</a></li>
            <li><a href="{{ route('artistas')}}">Artistas</a></li>
            {{-- <li><a href="{{ route('musicas')}}">Musicas</a></li> --}}
            {{-- <li><a href="{{ route('videos.all')}}">Videos</a></li> --}}
            <li><a href="{{ route('loja') }}">Loja</a></li>
            <li><a href="{{ route('home') }}">Eventos</a></li>
            <li><a href="{{ route('sobrenos')}}">Sobre Nos</a></li>

            @if (Auth::guard('clients')->check())
                <li><a href="{{ Url('/profile')}}">Perfil</a></li>
                <li><a href="{{ route('logout')}}">Logout</a></li>
            @else
                {{-- <li><a href="{{ route('login')}}">Login</a></li> --}}
            @endif
        </ul>
    </div>
</nav>
</div>
