@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <p class="card-text" style="margin-left: 15px;">First trying for each item: 5 point.&nbsp;&nbsp;Second: 3 point.&nbsp;&nbsp;Third: 0 point.</p>
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Total score</th>
                                    <th>Average score</th>
                                    <th>Completion progress</th>
                                    <th>Journey status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($scores as $no => $score)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td style="padding: 0;">
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 0; display: flex; align-items: center;">
                                                    <img src="
                                                    @if($score->avatar == null)
                                                    /assets/img/no-image.png
                                                    @else
                                                    /storage/{{ $score->avatar }}
                                                    @endif
                                                    " style="width: 54px; height: 54px; border-radius: 27px;"/>
                                                </div>
                                                <div class="col-md-6" style="padding: 15px 10px; display: flex; align-items: center;"> 
                                                    <a href="{{ route('scores.show', $score->user_id) }}">{{ $score->name }} {{ $score->fname }}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $score->sum_score }}</td>
                                        <td>{{ round($score->avg_score, 2) }}</td>
                                        <td>{{ round($score->cnts/$counts_activities*100, 2) }}%</td>
                                        <td>
                                            @if($score->cnts==$counts_activities)
                                                <span class="badge badge-success">Completed</span>
                                            @else
                                                <span class="badge badge-warning">Incompleted</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('scores.show', $score->user_id) }}" title="View">
                                                <button class="btn-info"><i class="mdi mdi-eye"></i></button>
                                            </a>
                                            <button class="btn-danger btn-delete-record" title="Delete" data-id="{{ $score->user_id }}"><i class="mdi mdi-delete"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->
</div>

@endsection

@push('css')
    <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
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
    <script src="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

    <!-- Myscript -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

    <script>
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
                        url: "/admin/users/" + id_del,
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