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
                                    <input name="country" class="form-control" type="text" value="{{ $user->country }}" id="example-text-input">
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

