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
                            <a href="{{ route('users.create') }}">
                                <button class="btn btn-success waves-effect waves-light" style="margin-left: 15px;"><i class="mdi mdi-plus-circle-outline"></i>&nbsp;New&nbsp;&nbsp;</button>
                            </a>
                            <div style="float: right;">
                                <input id="select-all" type="checkbox" style="margin-left: 40px;"/>&nbsp;Select all
                                <input id="select-onpage" type="checkbox" style="margin-left: 40px;"/>&nbsp;Select on page
                                <button id="mail-all" class="btn btn-info waves-effect waves-light" style="margin-left: 15px;" >Bulk Mail</button>
                                <button id="delete-all" class="btn btn-danger waves-effect waves-light" style="margin-left: 15px; margin-right: 17px;" >Bulk Delete</button>
                            </div>
                        </h4>
                        <div class="filter-bar-container">
                            <div class="filter-box-container">
                                <div class="filter-box"></div>
                                <div class="filter-box-temp">
                                    <div class="filter-item" data-name="name" data-col="0">
                                        <div class="field-name">Name</div>
                                        <input id="name" name="name" type="text" class="">
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="email" data-col="1">
                                        <div class="field-name">Email</div>
                                        <input id="email" name="email" type="text" class="">
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="phone" data-col="2">
                                        <div class="field-name">Phone</div>
                                        <input id="phone" name="phone" type="text" class="">
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="birth" data-col="3">
                                        <div class="field-name">Birthday</div>
                                        <input id="birth" name="birth" type="date" class="">
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="country" data-col="4">
                                        <div class="field-name">Country</div>
                                        <select id="country" name="country" class="">
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}" 
                                                >{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="city" data-col="5">
                                        <div class="field-name">City</div>
                                        <input id="city" name="city" type="text" class="">
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="saleschannel" data-col="6">
                                        <div class="field-name">Sales Channel</div>
                                        <select id="saleschannel" name="saleschannel" class="">
                                            <option value="boutiques chopard">Boutiques Chopard</option>
                                            <option value="domestic">Domestic</option>
                                            <option value="tr">TR</option>
                                        </select>
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="position" data-col="7">
                                        <div class="field-name">Position</div>
                                        <input id="position" name="position" type="text" class="">
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="others" data-col="8">
                                        <div class="field-name">Others</div>
                                        <input id="others" name="others" type="text" class="">
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="filter-item" data-name="apptype" data-col="9">
                                        <div class="field-name">App Type</div>
                                        <select id="apptype" name="apptype" class="">
                                            <option value="whatsapp">Whatsapp</option>
                                            <option value="wechat">Wechat</option>
                                            <option value="facebook">Facebook Messenger</option>
                                        </select>
                                        <button class="btn btn-sm btn-success filter-confirm"><i class="mdi mdi-check"></i></button>
                                        <button class="btn btn-sm btn-danger filter-cancel"><i class="mdi mdi-close"></i></button>
                                    </div>
                                </div>
                                <div class="filter-control-container">
                                    <div><a class="btn-delete-filters"><i class="mdi mdi-broom "></i></a></div>
                                    <div>
                                        <a id="add-filter-dropdown-btn" class="btn-add-filter dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Filter</a>
                                        <div class="dropdown-menu" aria-labelledby="add-filter-dropdown-btn">
                                            <a class="dropdown-item add-filter-item" data-name="name" href="#">Name</a>
                                            <a class="dropdown-item add-filter-item" data-name="email" href="#">E-mail</a>
                                            <a class="dropdown-item add-filter-item" data-name="phone" href="#">Phone</a>
                                            <a class="dropdown-item add-filter-item" data-name="birth" href="#">Birthday</a>
                                            <a class="dropdown-item add-filter-item" data-name="country" href="#">Country</a>
                                            <a class="dropdown-item add-filter-item" data-name="city" href="#">City</a>
                                            <a class="dropdown-item add-filter-item" data-name="saleschannel" href="#">Sales Channel</a>
                                            <a class="dropdown-item add-filter-item" data-name="position" href="#">Position</a>
                                            <a class="dropdown-item add-filter-item" data-name="others" href="#">Others/Place</a>
                                            <a class="dropdown-item add-filter-item" data-name="apptype" href="#">App Type</a>
                                            <a class="dropdown-item add-filter-item" data-name="appcode" href="#">App Code</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table id="datatable" class="table table-bordered table-hover display select" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 200px;">Name</th>
                                    <th style="width: 50px;">E-mail</th>
                                    <th>Phone</th>
                                    <th>Birth</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Sales channel</th>
                                    <th>Position</th>
                                    <th>Others</th>
                                    <th>App</th>
                                    <th>Created at</th>
                                    <th>Last login</th>
                                    <th style="min-width: 89px !important;">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($users as $user)
                            <tr data-id="{{ $user->id }}">
                                <td style="padding: 0; overflow: hidden; display: flex;">
                                    
                                        <div class="" style="width: 54px; padding-right: 0; display: flex; align-items: center;">
                                            <img src="
                                            @if($user->avatar == null)
                                            /assets/img/no-image.png
                                            @else
                                            /storage/{{ $user->avatar }}
                                            @endif
                                            " style="width: 54px; height: 54px; border-radius: 27px;"/>
                                        </div>
                                        <div class="" style="width: calc( 100% - 54px ); padding: 15px 10px; display: flex; align-items: center;"> 
                                            {{ $user->name }} {{ $user->fname }}
                                        </div>
                                    
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->birth }}</td>
                                <td>{{ $user->country }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->saleschannel }}</td>
                                <td>{{ $user->position }}</td>
                                <td>{{ $user->others }}</td>
                                <td>{{ $user->appname.": ".$user->appcode }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->last_login }}</td>
                                <td>
                                    <a href="{{ route('users.edit',$user->id) }}" title="Edit">
                                        <button class="btn-primary"><i class="mdi mdi-lead-pencil"></i></button>
                                    </a>
                                    <a href="{{ route('users.mailform',$user->id) }}" title="Mail to">
                                        <button class="btn-info btn-mail-record"><i class="mdi mdi-email"></i></button>
                                    </a>
                                    <button class="btn-danger btn-delete-record" title="Delete" data-id="{{ $user->id }}"><i class="mdi mdi-delete"></i></button>
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

            $(".dataTables_filter").hide();

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
            
            $(".add-filter-item").click(function(){
                $('.filter-box').find('.filter-item').not('.filtered').remove();
                var old_item = $('.filter-box').find('#'+$(this).data('name')).closest('.filter-item');
                var old_col = old_item.data('col');
                if(old_item.length != 0){
                    table.columns(old_col).search('').draw();
                }
                $('.filter-box').find('#'+$(this).data('name')).closest('.filter-item').remove();
                var item = $('.filter-box-temp').children('.filter-item[data-name='+$(this).data('name')+']').clone(true, true);
                item.appendTo('.filter-box');
                item.find('input').focus();
            });
            
            $('.filter-confirm').click(function(){
                var item = $(this).closest('.filter-item');
                var f_col = item.data('col');
                var f_val = '';
                var f_input = $(this).siblings('#'+$(this).closest('.filter-item').data('name'));
                f_val = f_input.val();
                if((f_val != null)&&(f_val != "")){
                    f_input.readonly();
                    $(this).remove();
                    table.columns(f_col).search(f_val).draw();
                    item.addClass('filtered');
                }else{
                    item.remove();
                }
            });

            $('.filter-item input').keypress(function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                    var item = $(this).closest('.filter-item');
                    var f_col = item.data('col');
                    var f_val = '';
                    f_val = $(this).val();
                    if((f_val != null)&&(f_val != "")){
                        $(this).readonly();
                        $(this).siblings('.btn.filter-confirm').remove();
                        table.columns(f_col).search(f_val).draw();
                        item.addClass('filtered');
                    }else{
                        item.remove();
                    }
                }
            });

            $('.filter-cancel').click(function(){
                var item = $(this).closest('.filter-item');
                var f_col = item.data('col');
                table.columns(f_col).search('').draw();
                $(this).closest('.filter-item').remove();
            });

            $('.btn-delete-filters').on('click', function(){
                $('.filter-box').find('.filter-item').remove();
                table.search('').columns().search('').draw();
            });

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
                        }).catch(swal.noop);
                    }
                });

                $('#datatable').on('click', '.btn-delete-record', function () {
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
                    }).catch(swal.noop);
                });
            },

            //init
            $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert;
            $.SweetAlert.init();
        });


    </script>
@endpush