@extends('layouts.app', ['view_type' => 'chapter-activity'])
@section('content')
<div id="act9" class="banner-chapter" style="background-color:#193927;">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">3.2. @lang('The gardens of paradise')</h3>
			<h2 class="action-title">@lang('Creative inspiration')</h2>		
			<div class="action-txt">
				@lang("Select the correct titles and statements to complete the information<br> about The Gardens of Paradise' creative inspiration")
			</div>
		</div>
	</div>

	<div class="action-body">
		<div class="container">
			<div id="p1" class="action-activity">
				<div class="action-activity-intro">
					Created by  Master Perfumer <strong>Alberto Morillas</strong>, these<br>
					rich fragrances, are crafted from the highest quality ingredients<br>
					in perfumery, and built upon the extraordinary presence<br>
					of the most treasured ingredients that our earth can offer,<br>
					issued from sustainable sources around the world.
				</div>
				<div class="item-txt-titulo" data-splash="#action-p1"></div>
			</div>

			<div class="action-slider">
				<img src="{{ asset('assets/chapters/3.2/9/slider/01.jpg') }}" data-delay="1500" class="img-responsive item">
				<img src="{{ asset('assets/chapters/3.2/9/slider/02.jpg') }}" data-delay="1500" class="img-responsive item">
				<img src="{{ asset('assets/chapters/3.2/9/slider/03.jpg') }}" data-delay="1500" class="img-responsive item">
				<img src="{{ asset('assets/chapters/3.2/9/slider/04.jpg') }}" data-delay="1500" class="img-responsive item">
				<img src="{{ asset('assets/chapters/3.2/9/slider/05.jpg') }}" data-delay="1500" class="img-responsive item">
				<img src="{{ asset('assets/chapters/3.2/9/slider/06.jpg') }}" data-delay="1500" class="img-responsive item">
				<img src="{{ asset('assets/chapters/3.2/9/slider/07.jpg') }}" data-delay="1500" class="img-responsive item">
			</div>

			<div id="p2" class="action-activity">
				<div class="action-activity-intro">
					Evocations of paradise on earth, Arabian gardens were<br>
					landscaped in accordance with precise rules. They influenced<br>
					and fertilized the imagination of the entire region, and of the West.<br>
					Mythical and mystical dream gardens, peaceful and secret,<br>
					traversed by rivers of water, milk and honey, they were filled<br>
					with the most beautiful, sweet-smelling and colourful flowers,<br>
					the most beautiful plants and the most delicious fruits.<br>
					And cooled and refreshed by the generous shade of majestic trees.<br>
					Four fragranced inspired by <strong>four gardens of paradise</strong>:
				</div>

				<div class="item-txt-titulo big" data-splash="#action-p2"></div>
			</div>		
		</div>
	</div>

	<div id="action-p1" class="splash">
		<div class="container">
			<div class="splash-txt">
				From Syria and Egypt to Spain and the Maghreb,<br>
				these legendary gardens are the expression of the golden age<br> 
				of the Arabian civilization. At its zenith, this civilization<br>
				was enriched by encounters and convergences<br>
				with other great cultures, and the influence of these gardens was felt<br>
				as far away as Greece, Roman Italy and India.
			</div>

			<ul class="splash-nombre-lista" data-retry="0">
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-result="ko">Urban heavenly fragances</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-result="ok" data-value="Heavenly fragances made on earth">Heavenly fragances made on earth</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-result="ko">Colorful fragances</a></li>
			</ul>	
		</div>
	</div>

	<div id="action-p2" class="splash">
		<div class="container">
			<div class="splash-txt">
				Inspired by the Arabian gardens of paradise,<br>
				The Gardens of Paradise  is a tribute to the most mythical<br>
				and mystical gardens of the Orient, dream gardens adorned<br>
				with the most fragrant and colorful flowers and fruits.
			</div>

			<ul class="splash-nombre-lista" data-retry="0">
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-result="ko">The garden of caribbean freshness<br> the royal gardens of europe<br> the divine garden of the sahara<br> the moghol garden at nights</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-value="The garden of moorish freshness the royal garden of babylone the divine garden of the arabic oasis the moghol garden at nights" data-result="ok">The garden of moorish freshness<br> the royal garden of babylone<br> the divine garden of the arabic oasis<br> the moghol garden at nights</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-result="ko">The freshness of sea gardens<br> the hanging gardens of babylone<br> the garden of the amazone<br> the moghol garden at morning</a></li>
			</ul>	
		</div>
	</div>

	@include('partials.confirmdialog')		
</div>

@endsection

@push('scripts')

dlw.base();

dlw.activity({{ $current_activity->id }}, '{{ $next_route }}', false);

@endpush