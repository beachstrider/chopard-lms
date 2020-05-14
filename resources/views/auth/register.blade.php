<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chopard Parfums :: Signup</title>

<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/main.css?v=1901091045') }}" rel="stylesheet">
<style>
.menu-offcanvas-item-title a {
    color: #000;
}
</style>
</head>

<body class="body" style="padding-top: 0;">
    <header class="login-cabecera">
        <div class="container">
            <img src="{{ asset('assets/img/logo-min.jpg') }}" alt="Chopard" class="img-responsive" style="margin:auto;width:190px;">
        </div>
    </header>


    <div class="container register">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create your account</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name:</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-mail:</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
 
                            {{-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password:</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" value="" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
 
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password Conformation:</label>
                                <div class="col-md-6">
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}
 
                            <div class="form-group">
                                <div style="
                                    display: table;
                                    margin: auto;
                                ">
                                    <button type="submit" class="btn btn-default">Create</button>
                                    <button type="button" class="btn btn-default" onclick="history.back(1);">Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="pie">
        <img src="{{ asset('assets/img/footer-claim.gif') }}" alt="The Chopard parfums training journey" class="img-responsive pie-claim">
    </footer>

</body>

</html>

















