@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <div class="modal-avatar-container">
                            <img src="@if($user->avatar == null)
                            /assets/img/no-image.png
                            @else
                            /storage/{{ $user->avatar }}
                            @endif">
                        </div>
                        <h4 class="mt-0 header-title" style="text-align: center;">{{ $user->name }}&nbsp;{{ $user->fname }}</h4>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                            
                            </div>
                            <div class="col-md-8">
                                <div style="width: 300px; float: left;">
                                    @foreach ($activities as $activity)
                                        <p style="margin: 0; height: 36px;"><b>Chapter{{ $activity->chapter }}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $activity->name }}</p>
                                    @endforeach
                                </div>
                                <div style="width: calc( 90% - 300px ); padding-top: 4px; float: left;">
                                    @foreach ($activities as $activity)
                                    @php
                                        $score_p = 0;
                                        $score_pp = "";
                                    @endphp
                                        <div class="progress m-b-20">
                                            @foreach ( $user_scores as $score )
                                                @if ( $score->activity_id == $activity->id )
                                                    @php
                                                        $score_p = floatval($score->score)*20;
                                                        $score_pp = $score_p."%";
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <div class="progress-bar" role="progressbar" style="width: {{ $score_p }}%" aria-valuenow="{{ $score_p }}" aria-valuemin="0" aria-valuemax="100">
                                                    {{ $score_pp }}
                                            </div>
                                        </div>
                                    @endforeach
                                    <button class="btn btn-secondary waves-effect" onclick="history.back(0);">Back</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    </div>
</div>

@endsection

@push('css')
    <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script src="{{ asset('assets/admin/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/admin/pages/datatables.init.js') }}"></script>

    <!-- Myscript -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
@endpush