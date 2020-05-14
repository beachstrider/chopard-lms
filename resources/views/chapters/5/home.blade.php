@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')

<div id="reel" class="vegas">

    <div class="banner-content-wrapper">

        <div class="container">

        	<h2 class="banner-chapter-number">@lang('Chapter') 5</h2>

			<h1 class="banner-title">@lang('Chopard signature fragrances')</h1>
			
			<h3 class="banner-subtitle">
				@lang('Love Chopard') <br>
				@lang('Malaki collection') <br>
				@lang('1000 Miglia collection') </h3>
		
			<p class="banner-txt">@lang('Chopard presents the Malaki signature fragrances<br> which pay homage to the emblematic ingredients<br> from the Orient: Oud, Rose and Amber.<br> Malaki means “Royal” in Arabic. The royal ingredient,<br> ambassador of a powerful message, carries a virile power.<br>
			<br>
			1000 Miglia collection takes its inspiration from the race<br> 
			and watch collection. A very modern olfactive interpretation<br> 
			of the masculine seduction and elegance.')</p>

			<a href="#" role="button" class="btn btn-blanco modal-open pdf" data-modal="#modal-pdf">@lang("Let's go!")</a>

        </div>

    </div>

</div>
<script type="text/javascript">
	window.next_chapter = '<?php echo $next_route; ?>';
</script>
@include('partials.pdfmodal')

@endsection



@push('scripts')

window.pdf_src = "{{ route('pdfviewer', ['chapter' => $current_activity->chapter, 'activity_id' => $current_activity->id]) }}";

window.first_activity = "{{ route('chapter', ['chapter' => $current_activity->chapter, 'activity' => $first_activity_chapter]) }}";

dlw.activity({{ $current_activity->id }}, '{{ $next_route }}', false);

var slides = [

	{ src: "{{ asset('assets/chapters/'.$current_activity->chapter.'/reel/01.jpg') }}" },

    { src: "{{ asset('assets/chapters/'.$current_activity->chapter.'/reel/02.jpg') }}" },

    { src: "{{ asset('assets/chapters/'.$current_activity->chapter.'/reel/03.jpg') }}" }

];

dlw.base();

dlw.chapter_home(slides);

@endpush