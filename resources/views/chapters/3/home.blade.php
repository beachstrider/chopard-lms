@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')

<div id="reel" class="vegas">

    <div class="banner-content-wrapper">

        <div class="container">

        	<h2 class="banner-chapter-number">@lang('Chapter') 3</h2>

			<h1 class="banner-title">@lang('Haute parfumerie<br> collection Chopard')</h1>

			<h3 class="banner-subtitle">@lang('Gardens of tropics,<br> Gardens of paradise,<br> Gardens of kings,<br> Rose de caroline,<br> Avant premiere exclusive editions')</h3>

			<p class="banner-txt">@lang("A new chapter in the Chopard's journey to<br> sustainable luxury. A unique Collection of fragrances<br> creations inspired by most emblematic gardens<br> across the world. An ode to Glamorous Green.")</p>

			<a href="#" role="button" class="btn btn-blanco modal-open pdf" data-modal="#modal-pdf">@lang("Let's go!")</a>

        </div>

    </div>

</div>

@include('partials.pdfmodal')

@endsection



@push('scripts')

window.pdf_src = "{{ route('pdfviewer', ['chapter' => $current_activity->chapter, 'activity_id' => $current_activity->id]) }}";

window.first_activity = "{{ route('chapter', ['chapter' => $current_activity->chapter, 'activity' => $first_activity_chapter]) }}";

var slides = [
	{ src: "{{ asset('assets/chapters/'.$current_activity->chapter.'/reel/01.jpg') }}" },
    { src: "{{ asset('assets/chapters/'.$current_activity->chapter.'/reel/02.jpg') }}" },
    { src: "{{ asset('assets/chapters/'.$current_activity->chapter.'/reel/03.jpg') }}" },
    { src: "{{ asset('assets/chapters/'.$current_activity->chapter.'/reel/04.jpg') }}" },
    { src: "{{ asset('assets/chapters/'.$current_activity->chapter.'/reel/05.jpg') }}" },

];

dlw.base();

dlw.chapter_home(slides);

@endpush