@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <form method="post" action="{{ route('users.update',$user->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            @if($errors->any())
                                @php
                                    $user->name=old('name');
                                    $user->email=old('email');
                                    $user->phone=old('phone');
                                    $user->birth=old('birth');
                                    $user->country=old('country');
                                    $user->city=old('city');
                                    $user->saleschannel=old('saleschannel');
                                @endphp
                            @endif
                            
                            <div class="form-group row
                            @if($errors->has('name'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="name" class="form-control" type="text" value="{{ $user->name }}" id="example-text-input" autofocus>
                                    @if ($errors->has('name'))
                                        <div class="form-control-feedback" >{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row
                            @if($errors->has('fname'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Family name</label>
                                <div class="col-sm-10">
                                    <input name="fname" class="form-control" type="text" value="{{ $user->fname }}" id="example-text-input">
                                    @if ($errors->has('fname'))
                                        <div class="form-control-feedback" >{{ $errors->first('fname') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row
                            @if($errors->has('email'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" class="form-control" type="email" id="example-email-input" value="{{ $user->email }}">
                                    @if ($errors->has('email'))
                                        <div class="form-control-feedback" >{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row
                            @if($errors->has('phone'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Telephone</label>
                                <div class="col-sm-10">
                                    <input name="phone" class="form-control" type="tel" value="{{ $user->phone }}" id="example-tel-input">
                                    @if ($errors->has('phone'))
                                        <div class="form-control-feedback" >{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row
                            @if($errors->has('password'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" class="form-control" type="password" value="" id="example-text-input">
                                    @if ($errors->has('password'))
                                        <div class="form-control-feedback" >{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row
                            @if($errors->has('birth'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Date of birth</label>
                                <div class="col-sm-10">
                                    <input name="birth" class="form-control" type="date" value="{{ $user->birth }}" id="example-date-input">
                                    @if ($errors->has('birth'))
                                        <div class="form-control-feedback" >{{ $errors->first('birth') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row
                            @if($errors->has('country'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <select id="country" type="country" class="form-control" name="country" style="padding: 0 8px;" value="{{ $user->country }}" required>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" 
                                                @if($user->country == $country->name)
                                                    {{ "selected" }}
                                                @endif
                                            >{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                        <div class="form-control-feedback" >{{ $errors->first('country') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row
                            @if($errors->has('city'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input name="city" class="form-control" type="text" value="{{ $user->city }}" id="example-text-input">
                                    @if ($errors->has('city'))
                                        <div class="form-control-feedback" >{{ $errors->first('city') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row
                            @if($errors->has('saleschannel'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Type of sales channel</label>
                                <div class="col-sm-10">
                                    <select name="saleschannel" class="custom-select">
                                        <option value="boutiques chopard" 
                                        @if ($user->saleschannel=="boutiques chopard")
                                            {{ 'selected' }}
                                        @endif
                                        >Boutiques Chopard</option>
                                        <option value="tr" 
                                        @if ($user->saleschannel=="tr")
                                            {{ 'selected' }}
                                        @endif
                                        >TR</option>
                                        <option value="domestic" 
                                        @if ($user->saleschannel=="domestic")
                                            {{ 'selected' }}
                                        @endif
                                        >DOMESTIC</option>
                                    </select>
                                    @if ($errors->has('saleschannel'))
                                        <div class="form-control-feedback" >{{ $errors->first('saleschannel') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row
                            @if($errors->has('position'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Position</label>
                                <div class="col-sm-10">
                                    <input name="position" class="form-control" type="text" value="{{ $user->position }}" id="example-text-input">
                                    @if ($errors->has('position'))
                                        <div class="form-control-feedback" >{{ $errors->first('position') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row
                            @if($errors->has('others'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Others</label>
                                <div class="col-sm-10">
                                    <input name="others" class="form-control" type="text" value="{{ $user->others }}" id="example-text-input">
                                    @if ($errors->has('others'))
                                        <div class="form-control-feedback" >{{ $errors->first('others') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row
                            @if($errors->has('appname'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">App user use</label>
                                <div class="col-sm-10">
                                    <input name="appname" type="radio" value="wechat" id="example-radio-input"
                                    @if( $user->appname == 'wechat' )
                                        {{ 'checked' }}
                                    @endif
                                    > Wechat &nbsp;&nbsp;
                                    <input name="appname" type="radio" value="whatsapp" id="example-radio-input"
                                    @if( $user->appname == 'whatsapp' )
                                        {{ 'checked' }}
                                    @endif                                    
                                    > Whatsapp &nbsp;&nbsp;
                                    <input name="appname" type="radio" value="facebook" id="example-radio-input"
                                    @if( $user->appname == 'facebook' )
                                        {{ 'checked' }}
                                    @endif                                    
                                    > Facebook messenger
                                    @if ($errors->has('appname'))
                                        <div class="form-control-feedback" >{{ $errors->first('appname') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row
                            @if($errors->has('appcode'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">App code</label>
                                <div class="col-sm-10">
                                    <input name="appcode" class="form-control" type="text" value="{{ $user->appcode }}" id="example-text-input">
                                    @if ($errors->has('appcode'))
                                        <div class="form-control-feedback" >{{ $errors->first('appcode') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="button-items">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Save changes</button>
                                        <button class="btn btn-secondary waves-effect" type="button" onclick="history.back(1);">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->


</div>

@endsection
