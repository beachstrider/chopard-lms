@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')

<div id="reel" class="vegas">

    <div class="banner-content-wrapper">

        <div class="container">

        	<h2 class="banner-chapter-number">@lang('Chapter') 5.2</h2>

			<h1 class="banner-title">@lang('Chopard Signature Fragrances')</h1>

			<h3 class="banner-subtitle">@lang('Malaki Collection')</h3>

			<p class="banner-txt">@lang("Malaki Collection pays homage to the emblematic<br>ingredients from the Orient: Oud, Rose and Amber. Malaki<br>means \"Royal\" in Arabic. The royal ingredient, ambassador of<br>a powerful message, carries a viril power.")</p>

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

];

dlw.base();

dlw.chapter_home(slides);

@endpush