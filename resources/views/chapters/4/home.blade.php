@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')

<div id="reel" class="vegas">

    <div class="banner-content-wrapper negro">

        <div class="container">

        	<h2 class="banner-chapter-number">@lang('Chapter') 4</h2>

			<h1 class="banner-title">@lang('Happy chopard collection')</h1>

			<h3 class="banner-subtitle">@lang('A joyous, colorful, feminine,<br> luxury fragrances collection')</h3>

			<p class="banner-txt">@lang('Chopard Parfums presents a new feminine collection<br> of fragrances conveying a universal expression<br> of freedom and joy of life, the continuation<br> of the Happy Diamond rich Chopard iconic heritage.')</p>

			<a href="#" role="button" class="btn btn-default modal-open pdf" data-modal="#modal-pdf">@lang("Let's go!")</a>

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

];

dlw.base();

dlw.chapter_home(slides);

@endpush