<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Chopard Admin Panel :: Login</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="https://cloud.chopardparfumstraining.com/index.php/apps/theming/favicon?v=27">
        <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-block">
                    <h3 class="text-center mt-0 m-b-15">
                        <a href="#" class="logo logo-admin"><img src="{{ asset('assets/img/logo-min.jpg') }}" height="54" alt="logo"></a>
                    </h3>
                    <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>
                    <div class="p-3">
                        <form class="form-horizontal m-t-20" role="form" method="POST" action="{{ url('admin/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-12">
                                    <input type="text" class="form-control" id="txt_login_email" name="email" value="{{ old('email') }}" placeholder="Username" autofocus>
                                    @if($errors->has('email'))
                                        <div class="form-control-feedback" style="color: #d9534f;">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-12">
                                    <input type="password" class="form-control" id="txt_login_password" name="password" placeholder="Password">
                                    @if($errors->has('password'))
                                        <div class="form-control-feedback" style="color: #d9534f;">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input" name="remember"{{ old('remember') ? ' checked' : '' }}>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Remember me</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <p class="text-muted text-center font-18" style="position: fixed; width: 100%; bottom: 0; font-size: 15px;">Powered by Johndoe</p>

        <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/tether.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/detect.js') }}"></script>
        <script src="{{ asset('assets/admin/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/admin/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/admin/js/waves.js') }}"></script>
        <script src="{{ asset('assets/admin/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/admin/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    </body>
</html>