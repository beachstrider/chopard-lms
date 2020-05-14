@extends('layouts.account', ['tab_name'=>'password'])
@section('content')
<div class="col-md-9" style="padding-top: 20px;">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form id="form-profile" class="form-horizontal" role="form" method="POST" action="/account/changePassword">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
            <h3 class="col-md-8 col-md-offset-2">Password</h3>
            <label for="current_password" class="col-md-8 col-md-offset-2 control-label" style="text-align: left;">Current password:</label>
            <div class="col-md-8 col-md-offset-2">
                <input id="current_password" type="password" class="form-control" name="current_password" value="" autofocused required autocomplete="off">
                @if ($errors->has('current_password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('current_password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
            <label for="new_password" class="col-md-8 col-md-offset-2 control-label" style="text-align: left;">New password:</label>
            <div class="col-md-8 col-md-offset-2">
                <input id="new_password" type="password" class="form-control" name="new_password" value="" required autocomplete="off">
                @if ($errors->has('new_password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('new_password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('new_password_confirm') ? ' has-error' : '' }}">
            <label for="new_password_confirm" class="col-md-8 col-md-offset-2 control-label" style="text-align: left;">New password confirm:</label>
            <div class="col-md-8 col-md-offset-2">
                <input id="new_password_confirm" type="password" class="form-control" name="new_password_confirm" value="" required autocomplete="off">
                @if ($errors->has('new_password_confirm'))
                    <span class="help-block">
                        <strong>{{ $errors->first('new_password_confirm') }}</strong>
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
</div>
@endsection
                        
@push('scripts')
<script>
    
$('#btn-logout').click(function(){
    $('#logout-form').submit();
});
</script>
@endpush

















