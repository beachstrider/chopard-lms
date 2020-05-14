@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <h4 class="mt-0 header-title">
                            <a href="{{ route('messages.create') }}">
                                <button class="btn btn-success waves-effect waves-light" style="margin-left: 15px;"><i class="mdi mdi-plus-circle-outline"></i>&nbsp;New&nbsp;&nbsp;</button>
                            </a>
                            <div style="float: right;">
                                <input id="select-all" type="checkbox" style="margin-left: 40px;"/>&nbsp;Select all
                                <input id="select-onpage" type="checkbox" style="margin-left: 40px;"/>&nbsp;Select on page
                                <button id="delete-all" class="btn btn-danger waves-effect waves-light" style="margin-left: 15px; margin-right: 17px;" >Bulk Delete</button>
                            </div>
                        </h4>

                        <table id="datatable" class="table table-bordered table-hover display select" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>List(s)</th>
                                    <th>Status</th>
                                    <th>Sender</th>
                                    <th>Date</th>
                                    <th>Attachments</th>
                                    
                                    <th style="min-width: 89px !important;">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($messagehistories as $messagehistory)
                            <tr data-id="{{ $messagehistory->id }}">
                                <td style="font-weight: bold;">{{ $messagehistory->title }}</td>
                                <td>{{ $messagehistory->list }}</td>
                                <td>Sent(1 times)</td>
                                <td>{{ $messagehistory->sender }}</td>
                                <td>{{ $messagehistory->updated_at }}</td>
                                <td>{{ $messagehistory->attachments }}</td>
                                <td>
                                    <a href="{{ route('messages.show',$messagehistory->id) }}" title="Show">
                                        <button class="btn-info"><i class="mdi mdi-eye "></i></button>
                                    </a>
                                    <button class="btn-danger btn-delete-record" title="Delete" data-id="{{ $messagehistory->id }}"><i class="mdi mdi-delete"></i></button>
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

@endsection

@push('css')
    <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" type="text/css" />
    <style>
        .filters-container{
            display: inline-block;
            width: calc( 100% - 66px );
            min-height: 38px;
            margin-left: 50px;
            border: 1px solid rgba(0,0,0,.15);
            border-radius: 6px;
            padding: 5px 6px 5px;
            color: #464a4c;
        }

        .filters-container li{
            list-style-type: none;
            float: left;
            padding: 1px 8px;
            border: solid 1px #b8cce6;
            border-radius: 6px;
            margin-right: 4px;
        }

        #btn-delete-filter{
            position: absolute;
            right: 38px;
            top: 7px;
        }

        #btn-delete-filter:hover{
            color: #70b3ec;
            cursor: pointer;
        }
    </style>
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

    <script src="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>

    <!-- Myscript -->
    <script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                'columnDefs': [
                    {
                        'targets': 0,
                        'checkboxes': {
                            'selectRow': true
                        }
                    }
                ],
                'select': {
                    'style': 'multi'
                },
                'order': [[1, 'asc']],
            });

            var SweetAlert = function () {
            };

            $('#select-all').on('click', function(){
                $('#select-onpage').prop('checked', false);
                if($(this).prop('checked') == true){
                    table.rows().select();
                }else{
                    table.rows().deselect();
                }
            });

            $('#select-onpage').on('click', function(){
                table.rows().deselect();
                $('#select-all').prop('checked', false);
                if($(this).prop('checked') == true){
                    table.rows({page: 'current'}).select();
                }else{
                    table.rows({page: 'current'}).deselect();
                }
            });

            table.on( 'click', 'tbody tr', function () {
                count_all = table.column(0).data().length;
                count_select = table.$('tr.selected').length + 1;
                if(count_select == count_all){
                    $('#select-all').prop('checked', true);
                }else{
                    $('#select-all').prop('checked', false);
                }
            } );

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
                                url: "{{ route('messages.multiple-delete') }}",
                                type: 'DELETE',
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                data: 'ids='+strIds,
                                success: function (data) {
                                    if (data['status']==true) {
                                        table.rows( '.selected' ).remove().draw();
                                        swal(
                                            'Deleted!',
                                            'Your messages have been deleted.',
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
                            url: "/admin/messages/" + id_del,
                            type: 'POST',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: {
                                _method: 'delete'
                            },
                            success: function (data) {
                                if (data['status']==true) {
                                    $this.remove();
                                    swal(
                                        'Deleted!',
                                        'Your message have been deleted.',
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
        });


    </script>
@endpush