@extends('layouts.account', ['tab_name'=>'email-notification'])
@section('content')
<div class="col-md-9" style="padding-top: 20px;">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @elseif (session('notify'))
        <div class="alert alert-info">
            {{ session('notify') }}
        </div>
    @endif
    <form id="form-profile" class="form-horizontal" role="form" method="POST" action="/account/changeEmail">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <h3 class="col-md-8 col-md-offset-2">Email</h3>
            <label for="email" class="col-md-8 col-md-offset-2 control-label" style="text-align: left;">E-mail address:</label>
            <div class="col-md-8 col-md-offset-2">
                <input id="name" type="text" class="form-control" name="email" value="{{ $myinfo->email }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-2">
                <button type="submit" class="btn btn-primary">Change</button>
            </div>
        </div>
    </form>
        
    <form class="form-horizontal" role="form">    
        <div class="form-group">
            <h3 class="col-md-8 col-md-offset-2">Messenger</h3>
            <label for="app" class="col-md-8 col-md-offset-2 control-label" style="text-align: left;">App you use: {{ strtoupper($myinfo->appname) }}</label>
            <div class="col-md-8 col-md-offset-2">
                <input class="form-control" type="text" value="{{ $myinfo->appcode }}" disabled="true">
            </div>

            <label for="app" class="col-md-8 col-md-offset-2 control-label" style="text-align: left; margin-top: 20px;">Change app setting:</label>
            <div class="col-md-8 col-md-offset-2" style="margin-top: 10px;">
                <div class="col-xs-4" style="padding-left: 0;">
                    <a href="#" class="btn btn-success btn-whatsapp"><i class="fa fa-whatsapp" style="font-size: 18px;"></i> Whatsapp</a>
                </div>
                <div class="col-xs-4">
                    <a href="#" class="btn btn-info btn-wechat"><i class="fa fa-wechat" style="font-size: 18px;"></i> Wechat</a>
                </div>
                <div class="col-xs-4">
                    <a href="#" class="btn btn-primary"><i class="fa fa-facebook" style="font-size: 18px;"></i> Facebook</a>
                </div>
            </div>
        </div>
    </form>

    <div class="app-div whatsapp col-md-8 col-md-offset-2" style="margin-top: 10px; padding-left: 3px; display: none;">
        <form method="POST" action="/account/appToWhatsapp">
        {{ csrf_field() }}
            <label for="app" class="control-label" style="text-align: left; margin-top: 20px;">WHATSAPP phone number:</label>
            <div class="col-md-10" style="padding-left: 0;">
                <input name="appcode" class="form-control col-md-10" type="text" placeholder="Enter your whatsapp phone number to change." required>
            </div>
            <button type="submit" class="btn btn-primary col-md-2">Save</button>
        </form>
    </div>

    <div class="app-div wechat col-md-8 col-md-offset-2" style="margin-top: 10px; padding-left: 3px; display: none;">
        <form method="POST" action="/account/appToWechat">
        {{ csrf_field() }}
            <label for="app" class="control-label" style="text-align: left; margin-top: 20px;">WECHAT phone number:</label>
            <div class="col-md-10" style="padding-left: 0;">
                <input name="appcode" class="form-control col-md-10" type="text" placeholder="Enter your wechat phone number to change." required>
            </div>
            <button type="submit" class="btn btn-primary col-md-2">Save</button>
        </form>
    </div>
</div>
@endsection
                        
@push('scripts')
<script>

$('#btn-logout').click(function(){
    $('#logout-form').submit();
});

$('.btn-whatsapp').click(function(){
    $('.app-div').hide();
    $('.whatsapp').show();
    $('.whatsapp').find('input[type=text]').focus();
    $('.whatsapp').find('input[type=text]').val('');

});

$('.btn-wechat').click(function(){
    $('.app-div').hide();
    $('.wechat').show();
    $('.wechat').find('input[type=text]').focus();
    $('.wechat').find('input[type=text]').val('');
});
</script>
@endpush


















