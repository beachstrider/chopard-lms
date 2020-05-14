@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')

<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.1/fnd-home.jpg') }});background-position:50% 50%;">

    <div class="banner-content-wrapper">

        <div class="container">

        	<h2 class="banner-chapter-number">@lang('Chapter') 3.1</h2>

			<h1 class="banner-title">@lang('Gardens<br> of tropics')</h1>

			<h3 class="banner-subtitle">@lang('An ode to glamorous green')</h3>

			<p class="banner-txt">@lang('Chopard presents a precious Haute Parfumerie<br> Collection of four exceptional fragrances,<br> for men and women, inspired by the gardens of<br> the tropics. The first step of a journey towards<br> a more and more  natural & sustainable perfumery.')</p>

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