@extends('layouts.app', ['view_type' => 'chapter-home'])

@section('content')
<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.4/fnd-home.jpg') }});background-position:50% 50%;">
    <div class="banner-content-wrapper">
        <div class="container">
        	<h2 class="banner-chapter-number">@lang('Chapter') 3.4</h2>
			<h1 class="banner-title">@lang('The jewel<br> of perfumery')</h1>
			<h3 class="banner-subtitle">@lang('Rose de caroline as a name evokes<br> that of a woman and the roses')</h3>
			<p class="banner-txt">@lang('Chopard presents an exceptional fragrance that<br> is both unique and precious. A free-spirited creation<br> by Alberto Morillas for his friend Caroline.')</p>
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