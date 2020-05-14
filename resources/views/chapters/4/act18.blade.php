@extends('layouts.app', ['view_type' => 'chapter-activity'])



@section('content')

<div id="act18" class="banner-chapter">

	<div class="action-intro">

		<div class="container">

			<h3 class="action-title-chapter">4. @lang('Happy chopard collection')</h3>

			<h2 class="action-title">@lang('The offer')</h2>		

			<div class="action-txt">

				@lang("Look at the pictures and then select the correct key concepts to define<br> the Happy Chopard collection's offer from the list below.")

			</div>

		</div>

	</div>



	<div class="action-animation">
	
		<img id="img6" src="{{ asset('assets/chapters/4/16/animation/06.jpg') }}" data-delay="900" class="img-responsive item">
		
		<img id="img5" src="{{ asset('assets/chapters/4/16/animation/05.jpg') }}" data-delay="900" class="img-responsive item">

		<img id="img4" src="{{ asset('assets/chapters/4/16/animation/04.jpg') }}" data-delay="900" class="img-responsive item">

		<img id="img3" src="{{ asset('assets/chapters/4/16/animation/03.jpg') }}" data-delay="900" class="img-responsive item">

		<img id="img2" src="{{ asset('assets/chapters/4/16/animation/02.jpg') }}" data-delay="900" class="img-responsive item">
		
		<img id="img1" src="{{ asset('assets/chapters/4/16/animation/01.jpg') }}" data-delay="900" class="img-responsive item">
		
		<img src="{{ asset('assets/chapters/4/16/animation/00.jpg') }}" class="img-responsive fondo">
		

	</div>



	<div class="action-body">

		<div class="container">

			<div class="action-activity-intro">

				<h3 class="action-title">The offer key concepts</h3>				

				<p>

					A flacon design inspired by the gem and diamond cuts,<br> 

					colorful as the Jewellery of Chopard and evoking the emotions of<br> 

					the natural joyful fragrances, Lemon Dulci, Felicia Roses and Bigaradia.<br>

				</p>

			</div>

			<div class="action-activity-action">

				<ul class="conceptos-lista">

					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>Luxury fragrances</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ko"><span>Four ultra feminine signatures</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>Three ultra feminine fragances</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>100 ml eaux de parfum</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ko"><span>50 ml eaux de parfum</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>Floral rose fruity</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>Floral green citrus</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>LUMINOUS ORANGE BLOSSOM</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ko"><span>Happy gift set (edp. 2x100 ml)</span></a></li>

					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>40 ml eaux de parfum</span></a></li>

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