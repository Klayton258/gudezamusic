<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/errors.css') }}">
    <style type="text/css">

    </style>
</head>

<body class="e404">
    <h1>404</h1>
    <div class="cloak__wrapper">
      <div class="cloak__container">
        <div class="cloak"></div>
      </div>
    </div>
    <div class="info">
      <h2>N&atilde;o conseguimos encontrar a pagina {{Request::url();}}</h2>
      <p>Temos quase certeza de que a página costumava estar aqui, mas parece ter desaparecido. Pedimos desculpas em seu nome.</p><a href="{{ route('home') }}" rel="noreferrer noopener">Inicio</a>
    </div>
</body>
</html>
