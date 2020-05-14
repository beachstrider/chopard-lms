@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <form method="post" action="{{ route('faqs.update', $faq->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            @if($errors->any())
                                @php
                                    $faq->question=old('question');
                                    $faq->category=old('category');
                                    $faq->answer=old('answer');
                                @endphp
                            @endif
                            
                            <div class="form-group row
                            @if($errors->has('question'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Question</label>
                                <div class="col-sm-10">
                                    <input name="question" class="form-control" type="text" value="{{ $faq->question }}" id="example-text-input" autofocus>
                                    @if ($errors->has('question'))
                                        <div class="form-control-feedback" >{{ $errors->first('question') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row
                            @if($errors->has('category'))
                                has-danger
                            @endif">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="category" class="custom-select">
                                        <option value="category1" 
                                        @if ($faq->category=='category1')
                                            {{ 'selected' }}
                                        @endif
                                        >Category 1</option>
                                        <option value="category2" 
                                        @if ($faq->category=='category2')
                                            {{ 'selected' }}
                                        @endif
                                        >Category 2</option>
                                        <option value="category3" 
                                        @if ($faq->category=='category3')
                                            {{ 'selected' }}
                                        @endif
                                        >Category 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                            @if($errors->has('answer'))
                                has-danger
                            @endif
                                <label class="col-sm-2 col-form-label">Answer</label>
                                <div class="col-sm-8">
                                    <textarea name="answer" class="form-control" rows="16" required>{{ $faq->answer }}</textarea>
                                    @if ($errors->has('answer'))
                                        <div class="form-control-feedback" >{{ $errors->first('answer') }}</div>
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
            </div>
        </div>

    </div>


</div>

@endsection

