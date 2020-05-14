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
                            <div class="row">
                                <div class="col-md-12" style="display: flex; justify-content: center;">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary" style="margin-bottom: 0; cursor: pointer; height: 38px;">
                                            &nbsp;&nbsp;General&nbsp;&nbsp;
                                        </a>
                                        <a href="#" class="btn btn-primary active" style="margin-bottom: 0; cursor: pointer; height: 38px;">
                                            Validation
                                        </a>
                                        <a href="{{ route('newsletters.index') }}" class="btn btn-primary" style="margin-bottom: 0; cursor: pointer; height: 38px;">
                                            Newsletter
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </h4>

                        <table id="datatable" class="table table-bordered table-hover display" cellspacing="0">
                            <thead>
                                <tr>
                                    {{-- <th>Recipient</th> --}}
                                    <th>Email Address</th>
                                    <th>Status</th>
                                    <th>Opens / Clicks</th>
                                    <th>Sent Count</th>
                                    <th>Last Sent</th>
                                    <th style="min-width: 89px !important;">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($validationmails as $validationmail)
                            <tr data-id="{{ $validationmail->id }}">
                                {{-- <td>?</td> --}}
                                <td style="font-weight: bold;">{{ substr($validationmail->recipient, 2, -1) }}</td>
                                <td>
                                    @if($validationmail->open_counts > 0)
                                        <span class="badge badge-success badge-small">&nbsp;&nbsp;&nbsp;Read&nbsp;&nbsp;&nbsp;</span>
                                    @else
                                        <span class="badge badge-warning badge-small">&nbsp;Unread&nbsp;</span>
                                    @endif
                                </td>
                                <td>{{ $validationmail->open_counts." / ".$validationmail->click_counts }}</td>
                                <td class="sent_count_td">{{ $validationmail->sent_count }}</td>
                                <td>{{ $validationmail->updated_at }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm send-mail-btn" title="Send again" data-id="{{ $validationmail->id }}">Send again</button>
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
            var table = $('#datatable').DataTable();

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
                $('#datatable').on('click', '.send-mail-btn', function () {
                    var id = $(this).data('id');
                    var sent_count_ele = $(this).closest('tr').find('.sent_count_td');
                    var sent_count = parseInt(sent_count_ele.text());
                    var send_btn = $(this);

                    $('.send-mail-btn').attr('disabled', 'disabled');
                    send_btn.text('Sending');
                    send_btn.prepend("<i class='fa fa-circle-o-notch fa-spin' style='margin-right: 5px;'></i>");

                    $.ajax({
                        url: "/admin/validationMails/send/" + id,
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {
                                _method: 'post'
                            },
                        success: function (data) {
                            if (data['status']==true) {
                                swal(
                                    'Sent!',
                                    'New validation mail has been sent successfully.',
                                    'success'
                                );

                                sent_count_ele.text(++sent_count);
                            } else {
                                swal(
                                    'Faild!',
                                    'Whoops Something went wrong!',
                                    'error'
                                );
                            }

                            $('.send-mail-btn').removeAttr('disabled');
                            send_btn.find('i').remove();
                            send_btn.text('Send again');
                        },
                        error: function (data) {
                            swal(               
                                'Faild!',
                                'Whoops Something went wrong!',
                                'error'
                            );

                            $('.send-mail-btn').removeAttr('disabled');
                            send_btn.find('i').remove();
                            send_btn.text('Send again');
                        }
                    });
                });

                $('.btn-delete-record').on('click', function () {
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
                            url: "/admin/newsletters/" + id_del,
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
                                        'Your newsletter have been deleted.',
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