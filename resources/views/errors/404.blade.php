<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <style type="text/css">
        body{
          margin-top: 150px;
            background-color: #000000;
        }
        .error-main{
          background-color: rgb(0, 0, 0);
          box-shadow: 0px 10px 10px -10px #000000;
        }
        .error-main h1{
          font-weight: bold;
          color: #d6d6d6;
          font-size: 100px;
          text-shadow: 2px 4px 5px #4b4b4b;
        }
        .error-main h6{
          color: #e9e9e9;
        }
        .error-main p{
          font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
              <h1 class="m-0">404</h1>
              <h6>Pagina nao encontrada</h6>
              <p><a href="{{ URL::to('/') }}" class="btn btn-light">Clique aqui</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
