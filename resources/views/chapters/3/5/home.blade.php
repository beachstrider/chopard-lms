@extends('layouts.app', ['view_type' => 'chapter-home'])

@section('content')
<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.5/fnd-home.jpg') }});background-position:50% 50%;">
    <div class="banner-content-wrapper">
        <div class="container">
        	<h2 class="banner-chapter-number">@lang('Chapter') 3.5</h2>
			<h1 class="banner-title">@lang('Avant première<br> exclusive editions')</h1>
			<h3 class="banner-subtitle">@lang('Chopard welcomes you to cannes')</h3>
			<p class="banner-txt">@lang('Chopard celebrates its 20-years partnership with<br> the Cannes Film Festival and reaffirms its commitment<br> to sustainable luxury with Exclusive Avant Première<br> Editions from the Hute Parfumerie Collection Chopard.')</p>
			<a href="#" role="button" class="btn btn-blanco modal-open pdf" data-modal="#modal-pdf">@lang("Let's go!")</a>
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