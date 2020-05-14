@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">
    <div class="container">
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
                                @foreach ($reports as $report)
                                <tr>
                                    <td>
                                        <div class="avatar-container">
                                            <img class="avatar" src="{{ asset('assets/img/img_avatar2.png') }}" alt="">
                                        </div>
                                        <div class="name-container">
                                            <div>{{ $report->updated_at }}</div>
                                            <a class="btn-show-report-model" href="#" data-toggle="modal" data-target="#userreport-modal" data-username="{{ $report->name }}" data-description="{{ $report->description }}">
                                                <div style="font-weight: bold;">{{ $report->name }}</div>
                                            </a>
                                            <a href="{{ url('admin/replyReport', $report->user_id) }}">
                                                <div>Contact</div>
                                            </a>
                                        </div>
                                        <div class="desc-container">
                                            <div>{{ $report->description }}</div>
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

<div id="reportdelete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top: 30%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Delete Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this report?</p>
            </div>
            <div class="modal-footer">
                <form action="/admin/reports/" method="post" data-model="reports">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                </form>
                <button type="button" class="btn btn-secondary waves-effect btn-cancel-delete" data-dismiss="modal">No</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="userreport-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">User Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h4>Monica Johndoe</h4>
                <p class="description" style="word-break: break-word;">Amazing!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
    <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
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

    <!-- Myscript -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

    <script>
        var table = $('#datatable').DataTable();
        table.order([ 0, 'desc' ]).draw();
    </script>
@endpush
