
@extends('layouts.account', ['tab_name'=>'profile'])
@section('content')
<div class="col-md-9" style="padding-top: 20px;">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form id="form-profile" class="form-horizontal" role="form" method="POST" action="/account/updateProfile" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        @if($errors->any())
            @php
                $myinfo->name=old('name');
                $myinfo->name=old('fname');
                $myinfo->birth=old('birth');
                $myinfo->city=old('city');
                $myinfo->country=old('country');
                $myinfo->saleschannel=old('saleschannel');
            @endphp
        @endif

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name:</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $myinfo->name }}" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Family name:</label>
            <div class="col-md-6">
                <input id="fname" type="text" class="form-control" name="fname" value="{{ $myinfo->fname }}" required>
                @if ($errors->has('fname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Phone:</label>
            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ $myinfo->phone }}" required>
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
            <label for="birth" class="col-md-4 control-label">Date of birth:</label>
            <div class="col-md-6">
                <input id="birth" type="text" class="form-control datepicker" name="birth" value="{{ $myinfo->birth }}"  required>
                @if ($errors->has('birth'))
                    <span class="help-block">
                        <strong>{{ $errors->first('birth') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label for="country" class="col-md-4 control-label">Country:</label>
            <div class="col-md-6">
                <select id="country" type="country" class="form-control" name="country" style="padding: 0 8px;" value="{{ $myinfo->country }}" required>
                    @foreach ($countries as $country)
                        <option value="{{ $country->name }}" 
                            @if($myinfo->country == $country->name)
                                {{ "selected" }}
                            @endif
                        >{{ $country->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('country'))
                    <span class="help-block">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-md-4 control-label">City:</label>
            <div class="col-md-6">
                <input id="city" type="city" class="form-control" name="city" value="{{ $myinfo->city }}" required>
                @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('saleschannel') ? ' has-error' : '' }}">
            <label for="saleschannel" class="col-md-4 control-label">Type of sales channel:</label>
            <div class="col-md-6">
                <select class="form-control" name="saleschannel" style="padding: 0 8px;">
                    <option value="Boutiques Chopard" 
                    @if ($myinfo->saleschannel=="Boutiques Chopard")
                        {{ 'selected' }}
                    @endif>Boutiques Chopard</option>

                    <option value="TR" 
                    @if ($myinfo->saleschannel=="TR")
                            {{ 'selected' }}
                    @endif>TR</option>

                    <option value="Domestic"
                    @if ($myinfo->saleschannel=="Domestic")
                            {{ 'selected' }}
                    @endif>Domestic</option>

                    <option value="Other"
                    @if ($myinfo->saleschannel=="Other")
                            {{ 'selected' }}
                    @endif>Other</option>
                </select>
                @if ($errors->has('saleschannel'))
                    <span class="help-block">
                        <strong>{{ $errors->first('saleschannel') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
            <label for="position" class="col-md-4 control-label">Job position:</label>
            <div class="col-md-6">
                <select class="form-control" name="position" style="padding: 0 8px;">
                    <option value="Beauty Adviser" 
                    @if ($myinfo->position=="Beauty Adviser")
                        {{ 'selected' }}
                    @endif>Beauty Adviser</option>

                    <option value="Brand Manager" 
                    @if ($myinfo->position=="Brand Manager")
                            {{ 'selected' }}
                    @endif>Brand Manager</option>

                    <option value="Marketing Manager"
                    @if ($myinfo->position=="Marketing Manager")
                            {{ 'selected' }}
                    @endif>Marketing Manager</option>

                    <option value="Sales Manager"
                    @if ($myinfo->position=="Sales Manager")
                            {{ 'selected' }}
                    @endif>Sales Manager</option>

                    <option value="Training Manager"
                    @if ($myinfo->position=="Training Manager")
                            {{ 'selected' }}
                    @endif>Training Manager</option>

                    <option value="Other"
                    @if ($myinfo->position=="Other")
                            {{ 'selected' }}
                    @endif>Other</option>
                </select>
                @if ($errors->has('position'))
                    <span class="help-block">
                        <strong>{{ $errors->first('position') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')                     
<script>
    $(document).ready(function(){
        $('body').click(function(){
            $('#pos-val-tooltip').hide();
        });

        $('#btn-logout').click(function(){
            $('#logout-form').submit();
        });
    });

</script>
@endpush















