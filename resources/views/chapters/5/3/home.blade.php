@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')

<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/5.3/fnd-home.jpg') }});background-position:50% 50%;">

    <div class="banner-content-wrapper">

        <div class="container">

        	<h2 class="banner-chapter-number">@lang('Chapter') 5.3</h2>

			<h1 class="banner-title">@lang('Chopard signature fragrances')</h1>
			
			<h3 class="banner-subtitle">
				@lang('1000 Miglia Collection') 
            </h3>
		
			<p class="banner-txt">@lang('1000 Miglia takes its inspiration from the race and watch<br>collections. A very modern olfactive interpretation of the<br>masculine seduction and elegance.')</p>

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