@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act8" class="banner-chapter">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">3.1. @lang('The gardens of the tropics')</h3>
			<h2 class="action-title">@lang('The offer')</h2>		
			<div class="action-txt">
				@lang('Look at the pictures and then select the correct key concepts to define<br> The Gardens of the Tropics’ offer from the list below')
			</div>
		</div>
	</div>
	<div class="action-animation">
		<img id="img6" src="{{ asset('assets/chapters/3.1/8/animation/08.jpg') }}" data-delay="600" class="img-responsive item">
		<img id="img6" src="{{ asset('assets/chapters/3.1/8/animation/07.jpg') }}" data-delay="600" class="img-responsive item">
		<img id="img6" src="{{ asset('assets/chapters/3.1/8/animation/06.jpg') }}" data-delay="600" class="img-responsive item">
		<img id="img5" src="{{ asset('assets/chapters/3.1/8/animation/05.jpg') }}" data-delay="600" class="img-responsive item">
		<img id="img4" src="{{ asset('assets/chapters/3.1/8/animation/04.jpg') }}" data-delay="600" class="img-responsive item">
		<img id="img3" src="{{ asset('assets/chapters/3.1/8/animation/03.jpg') }}" data-delay="600" class="img-responsive item">
		<img id="img2" src="{{ asset('assets/chapters/3.1/8/animation/02.jpg') }}" data-delay="600" class="img-responsive item">
		<img id="img1" src="{{ asset('assets/chapters/3.1/8/animation/01.jpg') }}" data-delay="600" class="img-responsive item">
		<img src="{{ asset('assets/chapters/3.1/8/animation/00.jpg') }}" class="img-responsive fondo">
	</div>
	<div class="action-body">
		<div class="container">
			<div class="action-activity-intro">
				<h3 class="action-title">The offer key concepts</h3>				
				<p>
					In 1998, when Chopard became the official sponsor of the Cannes Film Festival,<br> 
					Caroline Scheufele (Artistic Director and Co-President of Chopard)<br>
					designed its iconic gold Palme d’Or trophy. She has designed the Haute Parfumerie<br>
					Collection Chopard’s packaging, inspired from the Cannes festival offical Chopard Palm.<br>
					An emblematic of the green Chopard engagement in jewelery &amp; fragrances,<br>
					the passionate link with the glamour and the cinema.
				</p>
			</div>
			<div class="action-activity-action">
				<ul class="conceptos-lista">
					<li><a href="#" class="btn btn-concepto" data-result="ok">The diamond shape &amp; the chopard palm</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok">Deep blue</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ko">Rich-warm-sensual leather</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok">A uniquely sculptural gold cap</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok">Four fragrances</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok">Two precious gems in travel size, EDP 50ml</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok">Precious jeweller box (edp. 100ml)</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ko">Body lotion (200ml)</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ko">Gift set (edp. 2x100 ml)</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok">Discovery gift set (edp. 4x10 ml)</a></li>
				</ul>
			</div>
		</div>
	</div>
	@include('partials.confirmdialog')
</div>

@endsection

@push('scripts')

dlw.base();

dlw.activity({{ $current_activity->id }}, '{{ $next_route }}', false);

@endpush