@extends('layout.layout_main')
@section('content')
@include('layout.navbar')


<style>

@import url('https://fonts.googleapis.com/css2? family = Nanum + Myeongjo & display = swap');
@import url('https://fonts.googleapis.com/css2? family = Kanit & display = swap');

body{
background-color: black;
}
.container{
    display: flex;
    flex-direction: column;
    align-items: center;
    /* margin: 0px; */
    /* padding: 0px; */
}
.logo{
    width: 50px;
    height: 50px;
}
.nav-hm{
    background-color: black;
}
.navbar-toggler-icon{
    color: white;
}
.nome{
    color: white;
    font-family: 'Nanum Myeongjo';
}
.titulo{
    color: white;
    font-family: 'Nanum Myeongjo';
}
.servico{
    margin-top: 25px;
    color: white;
    font-family: 'Nanum Myeongjo';
    font-size: 20px;
}
.btn-youtube{
    width: 180px;
    height: 30px;
}
.btn{
    font-family: 'Kanit', sans-serif;
    font-weight: bold;
    background-color: white;
}
.btn:hover{
    background-color: rgb(175, 175, 175);
}
.row{
    margin-top: 25px;
    margin-left: 0px;
    display: flex;
    justify-content: space-evenly;
}
.linka{
    margin-left: 50px;
    width: 100px;
}

.cprght{
    width: 350px;
    margin-top: 50px;
    margin-bottom: 10px;
    color: white;
    font-family: 'Kanit', sans-serif;
    font-size: 15px;
    text-align: center;
    font-weight: bold;
}
.hmau{
    margin-bottom: 100px;
}

@media (max-width: 798.98px) {
    body{
        background-color: black;
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            /* margin: 0px; */
            /* padding: 0px; */
        }
        .logo{
            width: 50px;
            height: 50px;
        }
        .nav-hm{
            background-color: black;
        }
        .navbar-toggler-icon{
            color: white;
        }
        .nome{
            color: white;
            font-family: 'Nanum Myeongjo';
        }
        .titulo{
            color: white;
            font-family: 'Nanum Myeongjo';
        }
        .servico{
            margin-top: 25px;
            color: white;
            font-family: 'Nanum Myeongjo';
            font-size: 20px;
        }
        .btn-youtube{
            width: 180px;
            height: 30px;
        }
        .btn{
            font-family: 'Kanit', sans-serif;
            font-weight: bold;
            background-color: white;
        }
        .btn:hover{
            background-color: rgb(175, 175, 175);
        }
        .row{
            margin-top: 25px;
            margin-left: 0px;
        }
        .linka{
            margin-left: 50px;
            width: 100px;
        }

        .cprght{
            width: 350px;
            margin-top: 50px;
            margin-bottom: 10px;
            color: white;
            font-family: 'Kanit', sans-serif;
            font-size: 15px;
            text-align: center;
            font-weight: bold;
        }
        .hmau{
            margin-bottom: 100px;
        }
}


</style>


<div class="container justify-content-center">
    <img src="{{ asset('images/music_covers/'.$musica[0]->m_cover) }}" class="col-lg-4 hmau img-fluid">
    <h3 class="nome">{{$musica[0]->m_artist}}</h3>
    <h2 class="titulo">{{$musica[0]->m_title}}</h2>
    <p class="servico" id="msg">Escolha o serviço de música</p>

    @if ($musica[0]->youtube != null)
    <div class="col col-lg-4 col-md-4">
        <div class="row">
            <img src="assets/components/youtube.png" class="btn-youtube">
            <a class="linka" target="_blank"
            href="{{$musica[0]->youtube}}">
            <button type="button" class="btn">TOCAR</button>
        </a>
    </div>
    </div>
    @endif

    @if ($musica[0]->soundcloud != null)
    <div class="col col-lg-4 col-md-4">
        <div class="row">
            <img src="assets/components/soundcloud (2).png" class="btn-youtube">
            <a class="linka" target="_blank" href="{{$musica[0]->soundcloud}}">
                <button type="button" class="btn">TOCAR</button>
            </a>
        </div>
    </div>
    @endif

    @if ($musica[0]->audiomack != null)
    <div class="col col-lg-4 col-md-4">
        <div class="row">
            <img src="assets/components/audiomack (2).png" class="btn-youtube">
            <a class="linka" target="_blank" href="{{$musica[0]->audiomack}}">
                <button type="button" class="btn">TOCAR</button>
            </a>
        </div>
    </div>
    @endif

    <h5 class="cprght">© 2021 GUDEZA MUSIC. TODOS DIREITOS RESERVADOS.</h5>
</div>



@endsection
