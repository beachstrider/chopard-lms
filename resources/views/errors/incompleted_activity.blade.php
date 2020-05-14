<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chopard Parfums Training - 404 Not Found</title>
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
<header style="padding:20px 0;">
    <div class="container">
        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-min.jpg') }}" alt="Chopard" class="img-responsive" style="margin:auto;width:200px;"></a>
    </div>
</header>
<div class="container" style="text-align: center;">
    <h1>No access permission</h1>
    <p>You can not access this activity now. Please complete previous activities first.</p>
    <button type="submit" class="btn btn-default" onclick="history.back(1);">Back</button>
</div>
</body>
</html>