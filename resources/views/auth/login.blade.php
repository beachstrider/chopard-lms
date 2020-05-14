<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chopard Parfums Training :: Login</title>
<link rel="shortcut icon" href="https://cloud.chopardparfumstraining.com/index.php/apps/theming/favicon?v=27">
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/main.css?v=1802120800') }}" rel="stylesheet">
<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="login">
<div class="login-cabecera">
    <div class="container">
        <img src="{{ asset('assets/img/logo-full.jpg') }}" alt="Chopard" class="img-responsive login-logo">
        <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="clearfix">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="txt_login_email">Your e-mail:</label>
                    <input type="text" class="form-control" id="txt_login_email" name="email" value="{{ old('email') }}" autofocus>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="txt_login_password">Your password:</label>
                    <input type="password" class="form-control" id="txt_login_password" name="password">
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"{{ old('remember') ? ' checked' : '' }}> Remember Me
                </label>
            </div>         
            <div class="form-btn">
                <button type="submit" class="btn btn-default">ENTER</button>
            </div>
            <div class="form-forgot">
                <a href="{{ route('password.request') }}" class="login-forgot-password">Forgot your password?</a>
               
                @isset($url)
                @else
                    <a href="{{ url('signup') }}" class="login-forgot-password" style="display: none;">Create an account</a>
                @endisset
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience and security.</p>
<![endif]-->
</body>
</html>