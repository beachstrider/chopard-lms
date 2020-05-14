@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act16" class="banner-chapter">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">4. @lang('Happy chopard collection')</h3>
			<h2 class="action-title">@lang('Creative inspiration')</h2>		
			<div class="action-txt">
				@lang("Select the correct titles and pictures to complete the information<br> about the Happy Chopard collection's creative inspiration")
			</div>
		</div>
	</div>
	<div class="action-body">
		<div class="container">
			<div class="action-activity">
				<div class="action-activity-intro">
					The Happy Chopard collection is a statement of creative perfumery<br> 
					fully inspired by the positive emotional values of nature:<br>
					beauty and feel-good from the plants and ingredients of joy and euphoria.<br>
					Luxury fragrances created by Happy Chopard's inspirational<br>
					happy-chic women: the perfumer from Firmenich:
				</div>
				<div class="row perfumistas">
					<div class="col-xs-6">
						<div id="p2" class="item-perfumista">
							<div class="item-txt-titulo" data-splash="#nombres-p2"></div>
							<figure class="item-perfumista-figure">
								<button type="button" class="btn btn-action-gallery" data-splash="#galeria-p2">Gallery</button>
								<img src="{{ asset('assets/chapters/4/14/perfumista2.jpg') }}" alt="Caroline Scheufele" class="img-responsive">
							</figure>
							<div class="item-perfumista-desc">
								<p>"Always give our best and be kind, generous<br> and open to others. Love nature and be Happy!"</p>
								<p>"It is this positivity that carries us forward"</p>
								<p>The inspirational muse cheerful testimonial<br> of the unique "happy chic" Chopard art de vivre.<br>
								Where passion, beauty, glamour and love for nature meet<br>
								in a joyful life celebration. Following the maison<br>
								philosophy, the "Happy Chopard" fragrance collection<br>
								expresses the most natural, free-spirited and joyous<br>
								"Happy Chic" Chopard lifestyle.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div id="p1" class="item-perfumista">
							<div class="item-txt-titulo" data-splash="#nombres-p1"></div>
							<figure class="item-perfumista-figure">
								<button type="button" class="btn btn-action-gallery" data-splash="#galeria-p1">Gallery</button>
								<img src="{{ asset('assets/chapters/4/14/perfumista1.jpg') }}" alt="Dora Baghriche" class="img-responsive">
							</figure>
							<div class="item-perfumista-desc">
								"The Happy Chopard collection is all about immediate<br> 
								pleasure, addiction, color and joy of life. In creating these perfumes,<br> 
								I wanted to play, have fun and be happy myself... I was<br> 
								instinctively drawn towards naturals as a starting point, because<br>
								they bring a lot of energy, spontaneity, and an immediate<br> 
								sense of being somewhere else. So, I infused the fragrances with<br> 
								their "superpowers" and  explored unusual pairings, playing<br> 
								with colors and a lot with smell and taste. It allowed me to sublimate<br> 
								the energy of naturals and to experiment new and unusual<br> 
								forms of freshness and addiction"
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="nombres-p1" class="splash">
		<div class="container">
			<div class="splash-txt">
				Forever curious, creative and explorative, this perfumer took<br>
				the challenge of bringing to life the olfactive universe<br> 
				of Happy Chopard, by looking at fragrance creation in a new way.<br> 
				She picked exquisite natural raw materials and blended them not only<br> 
				according to her own inspiration for joy or to the beauty<br> 
				of their smell, but also guided by the emotional impact of their scent.<br>
			</div>
			<ul class="splash-nombre-lista" data-retry="0">
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-result="ko">Nathalie Lorson</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-result="ko">Rose Morillas</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-value="Dora Baghriche" data-result="ok">Dora Baghriche</a></li>
			</ul>	
		</div>
	</div>
	<div id="nombres-p2" class="splash">
		<div class="container">
			<div class="splash-txt">
				Co-president, Artistic Director and<br> 
				the creative and emotional pulse of Chopard.
			</div>
			<ul class="splash-nombre-lista" data-retry="0">
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-result="ko">Caroline Chopard</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-result="ko">Andreea Diaconu</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-value="Caroline Scheufele" data-result="ok">Caroline Scheufele</a></li>
			</ul>	
		</div>
	</div>	
	<div id="galeria-p1" class="splash">
		<div class="container">
			<div class="splash-txt">Select the correct picture clicking on the palm icon</div>
			<div class="row splash-galeria" data-retry="0">
				<div class="col-xs-4">
					<div class="splash-galeria-item">
						<img src="{{ asset('assets/chapters/4/14/galerias/p1/01.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="splash-galeria-pie">
							<button type="button" class="btn btn-action-palm">Select</button>
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-default">TRY AGAIN</button>
						</div>						
					</div>
				</div>
				<div class="col-xs-4">
					<div class="splash-galeria-item">
						<img src="{{ asset('assets/chapters/4/14/galerias/p1/02.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="splash-galeria-pie">
							<button type="button" class="btn btn-action-palm" data-ref="#p1" data-result="ok">Select</button>
						</div>						
					</div>
				</div>
				<div class="col-xs-4">
					<div class="splash-galeria-item">
						<img src="{{ asset('assets/chapters/4/14/galerias/p1/03.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="splash-galeria-pie">
							<button type="button" class="btn btn-action-palm">Select</button>
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-default">TRY AGAIN</button>
						</div>						
					</div>
				</div>				
			</div>	
		</div>
	</div>
	<div id="galeria-p2" class="splash">
		<div class="container">
			<div class="splash-txt">Select the correct picture clicking on the palm icon</div>
			<div class="row splash-galeria" data-retry="0">
				<div class="col-xs-4">
					<div class="splash-galeria-item">
						<img src="{{ asset('assets/chapters/4/14/galerias/p2/01.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="splash-galeria-pie">
							<button type="button" class="btn btn-action-palm">Select</button>
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-default">TRY AGAIN</button>
						</div>						
					</div>
				</div>
				<div class="col-xs-4">
					<div class="splash-galeria-item">
						<img src="{{ asset('assets/chapters/4/14/galerias/p2/02.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="splash-galeria-pie">
							<button type="button" class="btn btn-action-palm">Select</button>
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-default">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="splash-galeria-item">
						<img src="{{ asset('assets/chapters/4/14/galerias/p2/03.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="splash-galeria-pie">
							<button type="button" class="btn btn-action-palm" data-ref="#p2" data-result="ok">Select</button>
						</div>						
					</div>
				</div>								
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