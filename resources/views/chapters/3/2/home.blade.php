@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')

<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.2/fnd-home.jpg') }});background-position:50% 50%;">

    <div class="banner-content-wrapper">

        <div class="container">

        	<h2 class="banner-chapter-number">@lang('Chapter') 3.2</h2>

			<h1 class="banner-title">@lang('Gardens of paradise')</h1>

			<h3 class="banner-subtitle">@lang('Evocation of paradise on earth')</h3>

			<p class="banner-txt">@lang('Inspired by the Arabian gardens of paradise, this new<br> Haute Parfumerie Collection Chopard for men and women<br> is an emblematic of Chopard’s long-term commitment<br> towards a natural, positive and responsible perfumery...<br> Heavenly fragances made on earth.')</p>

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