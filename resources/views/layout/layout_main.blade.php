<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Global site tag (gtag.js) - Google Analytics --}}
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P5QD9VRWRQ"></script>
    <script src={{asset('js/gtag.js')}}></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/components/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/components/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/components/favicon/favicon-16x16.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/components/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="manifest" href="{{asset('assets/components/favicon/site.webmanifest')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <link rel="stylesheet" href={{asset('css/styles.css')}}>
    <link rel="stylesheet" href={{asset('css/main.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <div class="loader">
        <img class="img-loader" src="{{asset('assets/components/712.gif')}}">
    </div>
    <div class="main" >
    @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
            integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src={{asset('js/app.js')}}></script>
    <script src={{asset('js/main.js')}}></script>
    <script src={{asset('js/lightbox-plus-jquery.js')}}></script>
    <script src={{asset('js/lightslider.js')}}></script>
</body>
</html>
