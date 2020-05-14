@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <form method="post" action="{{ route('newsletters.store') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group row
                            @if($errors->has('title'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input name="title" class="form-control" type="text" value="{{ old('title') }}" id="example-text-input" autofocus required>
                                    @if ($errors->has('title'))
                                        <div class="form-control-feedback" >{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row
                            @if($errors->has('content'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="content" class="form-control" rows="16" required>{{ old('content') }}</textarea>
                                    @if ($errors->has('content'))
                                        <div class="form-control-feedback" >{{ $errors->first('content') }}</div>
                                    @endif
                                </div>
                            </div>

                        
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="button-items">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Send</button>
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