<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chopard Parfums :: Training Journey</title>
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<header class="login-cabecera" style="padding:20px 0;margin-bottom:35px">
    <div class="container">
        <img src="{{ asset('assets/img/logo-min.jpg') }}" alt="Chopard" class="img-responsive" style="margin:auto;width:190px;">
    </div>
</header>
@yield('content')
@if (Auth::guest())
<div style="text-align: center;padding: 20px 0;">
    <a href="{{ route('login') }}">&laquo; Login</a>
</div>
@endif
</body>
</html>