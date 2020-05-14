@extends('layouts.app', ['view_type' => 'chapter-activity'])



@section('content')

<div id="act11" class="banner-chapter">

	<div class="action-intro">

		<div class="container">

			<h3 class="action-title-chapter">3.2. @lang('The gardens of paradise')</h3>

			<h2 class="action-title">@lang('The offer')</h2>		

			<div class="action-txt">

				@lang('Look at the pictures and then select the correct key concepts to define<br> The Gardens of paradise’ offer from the list below')

			</div>

		</div>

	</div>



	<div class="action-animation">
	<img id="img8" src="{{ asset('assets/chapters/3.2/11/animation/07.jpg') }}" data-delay="2000" class="img-responsive item">
	<img id="img7" src="{{ asset('assets/chapters/3.2/11/animation/08.jpg') }}" data-delay="2000" class="img-responsive item">
		<img id="img6" src="{{ asset('assets/chapters/3.2/11/animation/06.jpg') }}" data-delay="2000" class="img-responsive item">

		<img id="img5" src="{{ asset('assets/chapters/3.2/11/animation/05.jpg') }}" data-delay="2000" class="img-responsive item">

		<img id="img4" src="{{ asset('assets/chapters/3.2/11/animation/04.jpg') }}" data-delay="2000" class="img-responsive item">

		<img id="img3" src="{{ asset('assets/chapters/3.2/11/animation/03.jpg') }}" data-delay="2000" class="img-responsive item">

		<img id="img2" src="{{ asset('assets/chapters/3.2/11/animation/02.jpg') }}" data-delay="2000" class="img-responsive item">

		<img id="img1" src="{{ asset('assets/chapters/3.2/11/animation/01.jpg') }}" data-delay="2000" class="img-responsive item">

		<img src="{{ asset('assets/chapters/3.2/11/animation/00.jpg') }}" class="img-responsive fondo">

	</div>



	<div class="action-body">

		<div class="container">

			<div class="action-activity-intro">

				<h3 class="action-title">The offer key concepts</h3>				

				<p>

					The Haute Parfumerie Collection Chopard's packaging is inspired<br> 

					from the Cannes festival offical Chopard Palm and pays tribute to the magnificent<br> 

					high jewellery Chopard creations crafted with the best quality of Emerald gems<br> 

					coming from sustainable sources. It also symbolizes the beauty of nature<br>

					and the quality of the natural ingredients that compose these fragrances creations.

				</p>

			</div>

			<div class="action-activity-action">

				<ul class="conceptos-lista">

					<li><a href="#" class="btn btn-concepto" data-result="ok">Emerald green</a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ko">Deep blue</a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok">The diamond shape &amp; the chopard palm</a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok">A uniquely sculptural gold cap</a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ko">Designed by Firmenich</a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok">Designed by Caroline Scheufele</a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok">Precious jeweller box (edp. 100ml)</a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok">Two Precious Gems in travel size (edp. 50ml)</a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ko">Gardens set (edp. 2x100 ml)</a></li>

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