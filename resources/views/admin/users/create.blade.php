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
            </div>
        </div>

    </div>


</div>

@endsection

