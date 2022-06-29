<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Credentials</title>
</head>
<style>
    body{
        color: white;
    }
</style>
<body class="text-light" style="background-color: black">
    <div class="container" style="height: 100vh; padding: 80px">
        <div class="col-12 d-flex align-items-center mb-5">
            <img src="https://gudezamusic.com/assets/components/brand.png" alt="Logo" width="40px" height="40%">
            <div style="margin-left: 10px; font-size: 20px">Gudeza Music, LDA</div>
        </div>

        <h1>A sua conta foi criada na Gudeza Music</h1>
        <h5>Dados de Acesso: </h5>
        <p>Username: {{$username}}</p>
        <p>Password: {{$password}}</p>

        <p style=" font-size: 12px; color: rgb(182, 182, 182)">
            <a href={{"$url"}} style="text-decoration-line: none;">clique aqui para verificar a sua conta.</a>
        </p>
        <div class="col-12 d-flex justify-content-start align-items-end" style="margin-top: 100px">&copy; 2022 Gudeza Music. <br> Todos Direitos Reservados.</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
