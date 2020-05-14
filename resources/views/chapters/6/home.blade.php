@extends('layouts.app', ['view_type' => 'chapter-home'])

@section('content')
<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/6/fnd-home.jpg') }});background-position:50% 50%;">
    <div class="banner-content-wrapper negro">
        <div class="container">
        	<h2 class="banner-chapter-number">@lang('Chapter') 6</h2>
			<h1 class="banner-title">@lang('Chopard legacy fragrances')</h1>
			<h3 class="banner-subtitle">@lang('When you wish upon a star!')</h3>
			<p class="banner-txt">@lang('The Greeks believed that diamonds were pieces of star<br> dust that had fallen onto earth. To perpetuate this legend,<br> Chopard has created magical fragrances: the legacy perfumes.<br> Born from the whimsical and enchanting universe<br> of Caroline Scheufele, they are fragrances for women<br> who surround themselves in romance and mystique.')</p>
			<a href="#" role="button" class="btn btn-default modal-open pdf" data-modal="#modal-pdf">@lang("Let's go!")</a>
        </div>
    </div>
</div>
@include('partials.pdfmodal')
@endsection

@push('scripts')
window.pdf_src = "{{ route('pdfviewer', ['chapter' => $current_activity->chapter, 'activity_id' => $current_activity->id]) }}";
window.first_activity = "{{ route('chapter', ['chapter' => $current_activity->chapter, 'activity' => $first_activity_chapter]) }}";
dlw.base();
dlw.chapter_home();
@endpush