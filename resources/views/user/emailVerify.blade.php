@extends('user.layout_main')
@section('content')
@include('layout.navbar')


<style>
    body{margin-top:20px;
        color: white;
    }
.mail-seccess {
    margin-top: 50px;
    text-align: center;
	/* background: #fff; */
	border-top: 1px solid #000;
}
.mail-seccess .success-inner {
	display: inline-block;
}
.mail-seccess .success-inner h1 {
	font-size: 100px;
	text-shadow: 3px 5px 2px rgba(193, 193, 193, 0.2);
	color: #ffffff;
	font-weight: 700;
}
.mail-seccess .success-inner h1 span {
	display: block;
	font-size: 25px;
	color: rgb(255, 255, 255);
	font-weight: 600;
	text-shadow: none;
	margin-top: 20px;
}
.mail-seccess .success-inner p {
	padding: 20px 15px;
}
.mail-seccess .success-inner .btn{
	color:#fff;
}
.btn-lg{
    color: #000 !important;
}
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<section class="mail-seccess section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12">
				<!-- Error Inner -->
				<div class="success-inner">
					<h1><i class="fa fa-envelope"></i><span>Confirme o seu email.</span></h1>
					<p>Foi-lhe enviado um email, verifique a sua caixa postal para validar o seu email!</p>
					<a href="{{ route('login') }}" class="btn btn-light btn-lg">Login</a>
				</div>
				<!--/ End Error Inner -->
			</div>
		</div>
	</div>
</section>


@endsection
