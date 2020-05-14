@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12">
                                <p>{{ $feedback->name }}</p>
                                <p>{{ $feedback->description }}</p>
                                {{--  <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{ $feedback->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <div>
                                        <textarea class="form-control" rows="5" readonly>{{ $feedback->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Rate1</label>
                                    <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="{{ $feedback->rate1 }}"/>
                                </div>
                                <div class="form-group">
                                    <label>Rate2</label>
                                    <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="{{ $feedback->rate2 }}"/>
                                </div>
                                <div class="form-group">
                                    <label>Rate3</label>
                                    <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="{{ $feedback->rate3 }}"/>
                                </div>
                                <div class="form-group">
                                    <label>Rate4</label>
                                    <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="{{ $feedback->rate4 }}"/>
                                </div>  --}}

                            </div>
                        
                            <div class="col-md-8">
                                
                            </div>
                        </div>
                            

                        <div class="form-group">
                            <div>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5" onclick="history.back(0);">
                                    Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->


</div>

@endsection

@push('css')
    <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/bootstrap-rating/bootstrap-rating.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('scripts')
    <script src="{{ asset('assets/admin/plugins/bootstrap-rating/bootstrap-rating.min.js') }}"></script>
    <script src="{{ asset('assets/admin/pages/rating-init.js') }}"></script>
@endpush