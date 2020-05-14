@extends('layouts.app', ['view_type' => 'chapter-activity'])



@section('content')

<div id="act3" class="banner-chapter background-center" style="background-image:url({{ asset('assets/chapters/2/3/fnd.jpg') }});">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">2. @lang('Universe of Chopard parfums')</h3>
			<h2 class="action-title">@lang('Mission and values')</h2>			
			<div class="action-txt">
				@lang("Select the tags that best define each picture to complete<br> the Chopard Parfums' mission and values board")
			</div>
		</div>
	</div>
	<div class="action-body">
		<div class="container">
			<div class="row img-tags gutters-10">
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#GlamourAura" data-result="ko">Glamour Aura</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#GreenAura" data-result="ko">Green Aura</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#GreenGlamourAura" data-result="ok">Green Glamour Aura</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/01.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Passion" data-result="ko">Passion</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#PassionForExcellence" data-result="ok">Passion For Excellence</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Excellence" data-result="ko">Excellence</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/02.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Glamour&Luxury" data-result="ok">Glamour &amp; Luxury</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#ExultantLuxury" data-result="ko">Exultant Luxury</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#ExtravagantGlamour" data-result="ko">Extravagant Glamour</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/03.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#DoGood" data-result="ko">Do Good</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#DoGoodFeelGood" data-result="ok">Do Good Feel Good</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#FeelFree" data-result="ko">Feel Free</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/04.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Sustainable" data-result="ko">Sustainable</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#SustainableLuxury" data-result="ok">Sustainable Luxury</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Brigthness" data-result="ko">Brigthness</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/05.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#PositivePerfumery" data-result="ok">Positive Perfumery</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#PetraNemcova" data-result="ko">Petra Nemcova</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#PositiveModels" data-result="ko">Positive Models</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/06.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#JenifferLawrence" data-result="ko">Jeniffer Lawrence</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Glamour&Luxury" data-result="ok">Glamour &amp; Luxury</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#VanityFair" data-result="ko">Vanity Fair</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/07.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#FloralPerfumes" data-result="ko">Floral Perfumes</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Red" data-result="ko">Red</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#NaturalPerfumery" data-result="ok">Natural Perfumery</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/08.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#ResponsiblePerfumery" data-result="ok">Responsible Perfumery</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Untenable" data-result="ko">Untenable</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#ExoticPerfumery" data-result="ko">Exotic Perfumery</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/09.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#WhiteFlowers" data-result="ko">White Flowers</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#NaturalIngredients" data-result="ok">Natural Ingredients</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#NaturalLifestyle" data-result="ko">Natural Lifestyle</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/10.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#DoGoodFeelGood" data-result="ok">Do Good Feel Good</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Feminity" data-result="ko">Feminity</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#LoveWhatYouDo" data-result="ko">Love What You Do</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/11.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#LuxuryBrand" data-result="ko">Luxury Brand</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#FirstGreenLuxuryPerfumeBrand" data-result="ok">First Green Luxury<br> Perfume Brand</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#PerfumeBrand" data-result="ko">Perfume Brand</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/2/3/tags/12.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
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