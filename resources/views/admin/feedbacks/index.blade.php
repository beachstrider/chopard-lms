@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-group" style="margin-bottom: 20px;">
                    <div class="card upper-side" style="padding: 30px;">
                        <div>
                            <div class="col-md-3" style="width: 210px; float: left; text-align: center;">
                                <h1 style="text-align: center; font-size: 60px;">{{ round($averages->average, 2) }}</h1>
                                <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="{{ round($averages->average, 2) }}"/>
                                <p style="text-align: center;">Average Rating</p>
                            </div>
                        
                            <div class="" style="float: right;">
                                <div style="float: left; padding: 0 30px 0 0;">
                                    <p style="margin-bottom: 11px;">Improved knowledge Rate</p>
                                    <p style="margin-bottom: 13px;">Answering Rate</p>
                                    <p style="margin-bottom: 15px;">Enjoying Rate</p>
                                    <p>Quality Rate</p>
                                </div>
                                <div class="" style="width: 480px; ">
                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" style="width: {{ round($averages->knowledge, 3)*20 }}%" aria-valuenow="{{ round($averages->knowledge, 3)*20 }}" aria-valuemin="0" aria-valuemax="100">{{ round($averages->knowledge, 3)*20 }}%</div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" style="width: {{ round($averages->answering, 3)*20 }}%" aria-valuenow="{{ round($averages->answering, 3)*20 }}" aria-valuemin="0" aria-valuemax="100">{{ round($averages->answering, 3)*20 }}%</div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" style="width: {{ round($averages->enjoying, 3)*20 }}%" aria-valuenow="{{ round($averages->enjoying, 3)*20 }}" aria-valuemin="0" aria-valuemax="100">{{ round($averages->enjoying, 3)*20 }}%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ round($averages->quality, 3)*20 }}%" aria-valuenow="{{ round($averages->quality, 3)*20 }}" aria-valuemin="0" aria-valuemax="100">{{ round($averages->quality, 3)*20 }}%</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <h4 class="mt-0 header-title"></h4>
                        <table id="datatable" class="table table-bordered table-hover feedback">
                            <thead style="display: none;">
                                <tr>
                                    <th>Avatar</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php

                                @endphp

                                @foreach ($feedbacks as $feedback)
                                    @php
                                        $feedback->average = ($feedback->knowledge + $feedback->answering + $feedback->enjoying + $feedback->quality)/4;

                                        $time_difference = time() - strtotime($feedback->created_at);

                                        if( $time_difference < 1 ) { $created_at_string = 'less than 1 second ago'; }
                                        $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                                                    30 * 24 * 60 * 60       =>  'month',
                                                    24 * 60 * 60            =>  'day',
                                                    60 * 60                 =>  'hour',
                                                    60                      =>  'minute',
                                                    1                       =>  'second'
                                        );

                                        foreach( $condition as $secs => $str )
                                        {
                                            $d = $time_difference / $secs;

                                            if( $d >= 1 )
                                            {
                                                $t = round( $d );
                                                $created_at_string = $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
                                                break;
                                            }
                                        }
                                    @endphp
                                    <tr>
                                        <td>
                                            <img class="d-flex mr-3 rounded-circle" src="/storage/{{ $feedback->avatar }}" alt="" height="64">
                                            <div class="name-container">
                                                <a class="btn-show-feedback-model" href="#" data-toggle="modal" data-target="#userfeedback-modal" data-username="{{ $feedback->name }}" data-avatar="/storage/{{ $feedback->avatar }}" data-description="{{ $feedback->description }}" data-rate1="{{ $feedback->knowledge }}" data-rate2="{{ $feedback->answering }}" data-rate3="{{ $feedback->enjoying }}" data-rate4="{{ $feedback->quality }}">
                                                    <div style="font-weight: bold;">{{ $feedback->name }}</div>
                                                </a>
                                                <div title="{{ $feedback->created_at }}">{{ $created_at_string }}</div>
                                                <a class="delete-rec-a btn-delete-record" title="Delete" data-id="{{ $feedback->id }}">Delete</a>
                                            </div>
                                            <div class="desc-container">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="{{ $feedback->average }}"/>
                                                <div>{{ $feedback->description }}</div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="feedbackdelete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top: 30%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Delete Feedback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this feedback?</p>
            </div>
            <div class="modal-footer">
                <form action="/admin/feedbacks/" method="post" data-model="feedbacks">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                </form>
                <button type="button" class="btn btn-secondary waves-effect btn-cancel-delete" data-dismiss="modal">No</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="userfeedback-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">User Feedback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="modal-avatar-container"><img src=""></div>
                <h4 class="feedback-modal-name">Monica Johndoe</h4>
                <div class="feed-rate-container">
                    <div class="div-m-f-name">Improved knowledge Rate</div>
                    <div class="div-modal-rate1">
                        <div class="feedback-rate-name" style="float: left; padding: 5px 20px 5px 0;"></div>
                    </div>
                </div>
                <div class="feed-rate-container">
                    <div class="div-m-f-name">Answering Rate</div>
                    <div class="div-modal-rate2">
                        <div class="feedback-rate-name" style="float: left; padding: 5px 20px 5px 0;"></div>
                    </div>
                </div>
                <div class="feed-rate-container">
                    <div class="div-m-f-name">Enjoying Rate</div>
                    <div class="div-modal-rate3">
                        <div class="feedback-rate-name" style="float: left; padding: 5px 20px 5px 0;"></div>
                    </div>
                </div>
                <div class="feed-rate-container">
                    <div class="div-m-f-name">Quality Rate</div>
                    <div class="div-modal-rate4">
                        <div class="feedback-rate-name" style="float: left; padding: 5px 20px 5px 0;"></div>
                    </div>
                </div>
                <br>
                <p class="description" style="word-break: break-word;">Amazing!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="star-lib" style="display: none;">
    <div>
        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="0"/>
    </div>
    <div>
        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="1"/>
    </div>
    <div>
        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="2"/>
    </div>
    <div>
        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="3"/>
    </div>
    <div>
        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="4"/>
    </div>
    <div>
        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="5"/>
    </div>
</div>

@endsection

@push('css')
    <link href="{{ asset('assets/admin/plugins/bootstrap-rating/bootstrap-rating.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/main.css') }}" rel="stylesheet" type="text/css" />
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

    <!-- Bootstrap rating js -->
    <script src="{{ asset('assets/admin/plugins/bootstrap-rating/bootstrap-rating.min.js') }}"></script>
    <script src="{{ asset('assets/admin/pages/rating-init.js') }}"></script>

    <script src="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

    <!-- Myscript -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

    <script>
        var table = $('#datatable').DataTable();
        table.draw();

        var SweetAlert = function () {
        };
        //examples
        SweetAlert.prototype.init = function () {
            //Warning Message
            $('#delete-all').click(function () {
                var flag = true;

                if((table.$('tr.selected').length) == 0){
                    flag = false;
                    swal(
                        'No selected rows',
                        'Please select one or more records you want to delete.',
                        'warning'
                    );
                }

                if(flag){
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonClass: 'btn btn-success',
                        cancelButtonClass: 'btn btn-danger m-l-10',
                        confirmButtonText: 'Yes, delete them!'
                    }).then(function () {
                        var idsArr = [];  
                        
                        table.$('tr.selected').each(function() {  
                            idsArr.push($(this).attr('data-id'));
                        }); 

                        var strIds = idsArr.join(",");

                        $.ajax({
                            url: "{{ route('users.multiple-delete') }}",
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids='+strIds,
                            success: function (data) {
                                if (data['status']==true) {
                                    table.rows( '.selected' ).remove().draw();
                                    swal(
                                        'Deleted!',
                                        'Your users have been deleted.',
                                        'success'
                                    );
                                } else {
                                    alert('Whoops Something went wrong!!');
                                }
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                        });
                    });
                }
            });

            $('.btn-delete-record').click(function () {
                var $this = $(this).parents('tr');
                var id_del = $(this).data('id');
                var _method = 'delete';
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger m-l-10',
                    confirmButtonText: 'Yes, delete it!'
                }).then(function () {
                    $.ajax({
                        url: "/admin/feedbacks/" + id_del,
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {
                            _method: 'delete'
                        },
                        success: function (data) {
                            if (data['status']==true) {
                                $this.remove();
                                table.row($this).remove().draw(false);
                                swal(
                                    'Deleted!',
                                    'Your user have been deleted.',
                                    'success'
                                );
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                })
            });
        },

        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert;
        $.SweetAlert.init();
    </script>
@endpush
