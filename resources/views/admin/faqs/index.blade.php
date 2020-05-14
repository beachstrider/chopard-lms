@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-block">
                        <h4 class="mt-0 header-title"><a href="{{ route('faqs.create') }}"><button class="btn btn-success waves-effect waves-light" style="margin-left: 15px;">Add new</button></a></h4>
                        <table class="table table-hover m-b-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Question</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>

                            </thead>
                            <tbody>
                                @foreach ($faqs as $key => $faq)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ $faq->category }}</td>
                                    <td>
                                        <a href="{{ route('faqs.edit',$faq->id) }}">
                                            <button class="btn-primary">Edit</button>
                                        </a>
                                        <button class="btn-danger btn-delete-record" data-id="{{ $faq->id }}" data-toggle="modal" data-target="#faqdelete-modal">Delete</button>
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

<div id="faqdelete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top: 30%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Delete Faq</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this faq?</p>
            </div>
            <div class="modal-footer">
                <form action="/admin/faqs/" method="post" data-model="faqs">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                </form>
                <button type="button" class="btn btn-secondary waves-effect btn-cancel-delete" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
@endpush

