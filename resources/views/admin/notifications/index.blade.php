@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20" style="padding-bottom: 20px;">
                    <div class="card-block">
                        <h4 class="mt-0 header-title">
                            <span>
                                <div class="dropdown mo-mb-2" style="display: inline-block;">
                                    <a class="dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px; font-weight: normal; margin-left: 25px;">
                                        Sort by
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('notifications.index', ['field_name'=>'user_name', 'direction'=>$user_name_direction]) }}">User name</a>
                                        <a class="dropdown-item" href="{{ route('notifications.index', ['field_name'=>'created_at', 'direction'=>$created_at_direction]) }}">Received time</a>
                                    </div>
                                </div>
                            </span>
                            <button id="clear-all" class="btn btn-outline-danger waves-effect waves-light pull-right">Clear all</button>
                        </h4>
                    </div>
                    <div class="card-line"></div>
                    @foreach ($notifications_history as $notification_item)
                        @php
                            $time_difference = time() - strtotime($notification_item->created_at);

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
                        <div class="card m-b-20 card-block noti-history-item">
                            <div class="noti-title-cont">
                                <div class="notify-icon bg-primary"><i class="{{ $notification_item->icon }}"></i></div>
                                <h4 class="card-title font-20 mt-0 noti-title-text">
                                    {{ $notification_item->title }}
                                </h4>
                            </div>
                            <p class="card-text top-cc">{!! $notification_item->message !!}</p>
                            <p class="card-text time-ago-cont">
                                <small class="text-muted">{{ $created_at_string }}</small>
                                <span class="badge badge-danger btn-clear-record" data-id="{{ $notification_item->id }}" style="cursor: pointer;">Delete</span>
                            </p>
                        </div>
                    @endforeach
                    <div class="pagination-container" style="margin-top: 10px;">{{ $notifications_history->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
    <link href="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script src="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

    <script>
        var SweetAlert = function () {
        };


        //examples
        SweetAlert.prototype.init = function () {
            //Warning Message
            $('#clear-all').click(function () {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger m-l-10',
                    confirmButtonText: 'Yes, delete all!'
                }).then(function () {
                    $.ajax({
                        url: "/admin/notifications/clearAllItemsHistory",
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        success: function (data) {
                            if (data['status']==true) {
                                $('.noti-history-item').remove();
                                swal(
                                    'Deleted!',
                                    'All notification history have been deleted.',
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
                }).catch(swal.noop);
            });

            $('.btn-clear-record').click(function (event) {
                event.preventDefault();

                var $this = $(this).closest('.noti-history-item');
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
                        url: "/admin/notifications/clearItemHistory/" + id_del,
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
                                    'A notification history has been deleted.',
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
                }).catch(swal.noop);
            });
        },

        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert;
        $.SweetAlert.init();
    </script>
@endpush

