@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')

<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/5.1/fnd-home.jpg') }});background-position:50% 50%;">

    <div class="banner-content-wrapper">

        <div class="container">

        	<h2 class="banner-chapter-number">@lang('Chapter') 5.1</h2>

			<h1 class="banner-title">@lang('Chopard Signature Fragrances')</h1>

			<h3 class="banner-subtitle">@lang('LOVE Chopard')</h3>

			<p class="banner-txt">@lang('LOVE Chopard is a contemporary interpretation of roses, a glossy<br>whirl of six superb rose essences - the world\'s most precious - <br>which spread their aura like a red carpet and lead the dance from<br>Top to Trail.')</p>

			<p class="banner-txt-italic">@lang('"Crafted with the most precious rose essences and responsibly<br>sourced natural ingredients, may this unique Eau de Parfum<br>signature warm your heart and fill it with love."')</p>
            
			<p class="banner-txt">@lang('Caroline Scheufele, Co-President Chopard')</p>

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