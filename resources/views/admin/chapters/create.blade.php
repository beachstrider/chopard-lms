@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <form method="post" action="{{ route('users.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group row
                            @if($errors->has('name'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="name" class="form-control" type="text" value="{{ old('name') }}" id="example-text-input" autofocus>
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
                                    <input name="email" class="form-control" type="email" id="example-email-input" value="{{ old('email') }}">
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
                                    <input name="phone" class="form-control" type="tel" value="{{ old('phone') }}" id="example-tel-input">
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
                                    <input name="password" class="form-control" type="password" value="{{ old('password') }}" id="example-text-input">
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
                                    <input name="birth" class="form-control" type="date" value="{{ old('birth') }}" id="example-date-input">
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
                                    <input name="country" class="form-control" type="text" value="{{ old('country') }}" id="example-text-input">
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
                                    <input name="city" class="form-control" type="text" value="{{ old('city') }}" id="example-text-input">
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
                                        @if (old('saleschannel')=='boutiques chopard')
                                            {{ 'selected' }}
                                        @endif
                                        >Boutique Chopard</option>
                                        <option value="tr" 
                                        @if (old('saleschannel')=='tr')
                                            {{ 'selected' }}
                                        @endif
                                        >TR</option>
                                        <option value="domestic" 
                                        @if (old('saleschannel')=='domestic')
                                            {{ 'selected' }}
                                        @endif
                                        >DOMESTIC</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="button-items">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Save</button>
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

