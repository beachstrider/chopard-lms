@extends('layouts.account', ['tab_name'=>'basic'])
@section('content')

<div class="col-md-9">
    <div class="col-md-3">
        <div style="width: 120px;">
            <form method="POST" action="/account/changeAvatar" enctype="multipart/form-data">
            {{ csrf_field() }}
                <img class="avatar" src="
                    @if(!isset($myinfo->avatar))
                    {{ asset('assets/img/img_avatar2.png') }}
                    @else
                    /storage/{{ $myinfo->avatar }}
                    @endif
                " alt="">
                <input id="input-avatar" type="file" name="avatar" style="
                position: absolute;
                width: 120px;
                height: 120px;
                left: 10px;
                top: 0;
                opacity: 0;
                cursor: pointer;
                " required>
                @if ($errors->has('avatar'))
                    <span class="help-block">
                        <strong style="color: #f22020;">{{ $errors->first('avatar') }}</strong>
                    </span>
                @endif
                <button id="btn-avatar-change" class="btn btn-primary" type="submit" style="width: 100%; margin-top: 10px;" disabled="true">Save</button>
            </form>
        </div>
    </div>
    <div class="col-md-9">
        <h3 style="margin-bottom: 20px;">{{ $myinfo->name." ".$myinfo->fname }}</h3>
        <p style="margin-bottom: 10px;"><b>E-mail</b>: {{ $myinfo->email }}</p>
        <p style="font-family: arial;"><b>Phone</b>: {{ $myinfo->phone }}</p>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</div>
@endsection
                        
@push('scripts')
<script>
    $(document).ready(function(){
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                document.querySelector(".avatar").src = e.target.result;
            }
            reader.readAsDataURL(event.files[0]);
        }

        $("#input-avatar").change(function() {
            previewImage(this);
            $('#btn-avatar-change').prop('disabled', false);
        });

        $('#btn-logout').click(function(){
            $('#logout-form').submit();
        });

    });

</script>
@endpush

</html>
