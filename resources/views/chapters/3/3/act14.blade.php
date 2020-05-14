@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act14" class="banner-chapter">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">3.3. @lang('GARDENS OF KINGS')</h3>
			<h2 class="action-title">@lang('The offer')</h2>		
			<div class="action-txt">
				@lang("Look at the pictures and then select the correct key concepts to define<br> Gardens of Kings offer from the list below.")
			</div>
		</div>
	</div>

	<div class="action-animation">
		{{--  <img id="img6" src="{{ asset('assets/chapters/3.3/14/animation/06.jpg') }}" data-delay="900" class="img-responsive item">
		<img id="img5" src="{{ asset('assets/chapters/3.3/14/animation/05.jpg') }}" data-delay="900" class="img-responsive item">
		<img id="img4" src="{{ asset('assets/chapters/3.3/14/animation/04.jpg') }}" data-delay="900" class="img-responsive item">
		<img id="img3" src="{{ asset('assets/chapters/3.3/14/animation/03.jpg') }}" data-delay="900" class="img-responsive item">
		<img id="img2" src="{{ asset('assets/chapters/3.3/14/animation/02.jpg') }}" data-delay="900" class="img-responsive item">
		<img id="img1" src="{{ asset('assets/chapters/3.3/14/animation/01.jpg') }}" data-delay="900" class="img-responsive item">  --}}
		<img src="{{ asset('assets/chapters/3.3/14/animation/00.jpg') }}" class="img-responsive fondo">
	</div>

	<div class="action-body b1">
		<div class="container">
			<div class="action-activity-intro">
				<h3 class="action-title">The offer key concepts</h3>				
				<p>
                    A striking diamond-cut shape designed by Caroline Scheufele, Artistic Director and Co-President <br />of Chopard. Crowned with an exceptional glass cabochon, this majestic collection perfectly <br /> echoes the high-jewellry creations.
				</p>
			</div>

			<div class="action-activity-action">
				<ul class="conceptos-lista">
					<li><a href="#" class="btn btn-concepto" data-result="ko"><span>4 EAU DE TOILETTE FRAGRANCES 100ML</span></a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>DESIGNED BY CAROLINE SCHEUFELE</span></a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ko"><span>TRAVEL SIZE 50ML</span></a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok"><span>MAJESTIC JEWELLER BOX EDP 100ML</span></a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok">
						<span class="over-text">4 SUMPTUOUS EAU DE PARFUMS FRAGRANCES INSPIRED BY OUD ASSAFI</span>
						<span class="over-text clip">4 SUMPTUOUS EAU DE PARFUMS ...</span>
					</a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ko"><span>DISCOVERY GIFT SET </span></a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ko"><span>CROWNED WITH A SURLYN CAP</span></a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ko"><span>DEODORANT SPRAY 100ML</span></a></li>
					<li><a href="#" class="btn btn-concepto" data-result="ok">
						<span class="over-text">CROWNED WITH A MAJESTUOUS GLASS CABOCHON</span>
						<span class="over-text clip">CROWNED WITH A MAJESTUOUS ...</span>
					</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="act14" class="banner-chapter" style="display: none;">
	<div class="action-intro">
		<div class="container" style="background: #fff;">
			<br>
			<div class="action-txt" style="color: #000; font-size: 18px;">
				<p>
					Drag & Drop the fragrance and adjectives that fit with each universe of the below picture.<br><br>
				</p>
			</div>
		</div>
	</div>
	
	<div class="action-body b2">
		<div class="container">
			<div class="action-activity">
				<div class="row gutters-10 imgs">
					<div class="col-xs-12 col-md-6 sample-container">
						<div class="sample-item drag" data-retry="0" draggable="true" data-number="1">
							<div class="context">
								OR DE CALAMBAC<br>Irresistible, colorful and playful
							</div>
							<div class="chopard-bottle"></div>
						</div>
						<div class="sample-item empty"></div>
					</div>
					<div class="col-xs-12 col-md-6 sample-container">
						<div class="sample-item drag" data-retry="0" draggable="true" data-number="2">
							<div class="context">
								NUIT DES ROIS<br>Rich, opulent and glamorous
							</div>
							<div class="chopard-bottle"></div>
						</div>
						<div class="sample-item empty"></div>
					</div>
					<div class="col-xs-12 col-md-6 sample-container">
						<div class="sample-item drag" data-retry="0" draggable="true" data-number="3">
							<div class="context">
								AGAR ROYAL<br>Noble, charismatic and intoxicating sensuality
							</div>
							<div class="chopard-bottle"></div>
						</div>
						<div class="sample-item empty"></div>
					</div>
					<div class="col-xs-12 col-md-6 sample-container">
						<div class="sample-item drag" data-retry="0" draggable="true" data-number="4">
							<div class="context">AIGLE IMPERIAL<br>Refinement, harmony and energy</div>
							<div class="chopard-bottle"></div>
						</div>
						<div class="sample-item empty"></div>
					</div>










					
					<div class="col-xs-12 col-md-6">
						<div class="item-img" data-solution="3">
							<div class="item-img-mask">
								<img src="{{ asset('assets/chapters/3.3/14/img/01.jpg') }}" alt="Chopard" class="img-responsive">
								<div>THE RADIANT SPLENDOR OF<br>INDIA’S MAHARAJAHS</div>
							</div>
							
							<div class="item-bottom-btn-container"></div>
							
						</div>
					</div>

					<div class="col-xs-12 col-md-6">
						<div class="item-img" data-solution="2">
							<div class="item-img-mask">
								<img src="{{ asset('assets/chapters/3.3/14/img/02.jpg') }}" alt="Chopard" class="img-responsive">
								<div>THE MAGNIFICENCE OF<br>THE PRINCES OF THE ORIENT</div>
							</div>

							<div class="item-bottom-btn-container"></div>

						</div>
					</div>

					<div class="col-xs-12 col-md-6">
						<div class="item-img" data-solution="1">
							<div class="item-img-mask">
								<img src="{{ asset('assets/chapters/3.3/14/img/03.jpg') }}" alt="Chopard" class="img-responsive">
								<div>THE RICHNESS OF AN EPICUREAN OUD SOAKED<br>WITH THE COLORS OF LATIN AMERICA</div>
							</div>
							<div class="item-bottom-btn-container"></div>
							
						</div>					
					</div>

					<div class="col-xs-12 col-md-6">
						<div class="item-img" data-solution="4">
							<div class="item-img-mask">
								<img src="{{ asset('assets/chapters/3.3/14/img/04.jpg') }}" alt="Chopard" class="img-responsive">
								<div>LEGENDARY SOPHISTICATION AND<br>MYSTERY OF THE FAR EAST</div>
							</div>
							<div class="item-bottom-btn-container"></div>
							
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