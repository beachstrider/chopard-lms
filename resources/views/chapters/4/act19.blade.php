@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act19" class="banner-chapter">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">4. @lang('Happy chopard collection')</h3>
			<h2 class="action-title">@lang('Advertising campaign')</h2>
			<div class="action-txt">
				@lang("Select the concepts that best define the Happy Chopard collection's<br> advertising campaign to tag each picture of this moodboard")
			</div>
		</div>
	</div>
	<div class="action-body">
		<div class="container">
			<div class="action-activity-intro">
				<strong>NATURE THROUGH THE LENS OF A NEW GENERATION</strong><br>
				The print campaign and the film bring<br>
				a dreamlike and modern interpretation of a radiant femininity,<br>
				boosted by the secret powers of nature.<br>
				A pure exploration of absolute emotions, the movie<br>
				echoes the "bohemians", "gypsetters" natural and positive<br>
				lifestyle and their connections to the natural elements.
			</div>
			<div class="row img-tags gutters-10">
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#FilmedInNewYork" data-result="ko">Filmed in New York</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#FilmedInCannes" data-result="ko">Filmed in Cannes</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#FilmedInCostaRica" data-result="ok">Filmed in Costa Rica</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/01.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#JoyousNature" data-result="ok">Joyous Nature</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Butterflys" data-result="ko">Butterflys</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#NaturalBeauty" data-result="ko">Natural beauty</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/02.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#CarolineScheufele" data-result="ko">Caroline Scheufele</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#AndreeaDiaconu" data-result="ok">Andreea Diaconu</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#DoraBaghriche" data-result="ko">Dora Baghriche</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/03.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#CelebrateYouth" data-result="ko">Celebrate Youth</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#CelebrateLife&Nature" data-result="ok">Celebrate life &amp; nature</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#CelebrateFreedom" data-result="ko">Celebrate Freedom</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/04.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#NaturalyTrendy" data-result="ko">Naturaly Trendy</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#TwoNaturalColours" data-result="ko">Two natural colours</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Natural&Colourful" data-result="ok">Natural &amp; Colourful</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/05.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#FeliciaRoses" data-result="ko">Felicia roses</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#LemonDulci" data-result="ko">Lemon dulci</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Bigaradia" data-result="ok">Bigaradia</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/06.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Luscious" data-result="ko">Luscious</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#LusciousSunray" data-result="ok">Luscious sunray</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Sunray" data-result="ko">Sunray</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/07.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista big-size-btns">
								<li><a href="#" class="btn item-img-btn" data-value="#RedKaleidoscope" data-result="ko">Red kaleidoscope</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#FlirtatiousKaleidoscopeOfRose" data-result="ok">Flirtatious kaleidoscope of rose</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Sunray" data-result="ko">Sunray</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/08.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#LemonDulci" data-result="ko">Lemon Dulci</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#RedRoses" data-result="ko">Red roses</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#FeliciaRoses" data-result="ok">Felicia roses</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/17/tags/09.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>												
			</div>
		</div>
	</div>
	@include('partials.confirmdialog')
	<div class="splash no-scroll">
		<div class="container">
			<div class="splash-close"><span aria-hidden="true">×</span> @lang('Close')</div>
			<div class="splash-video">
				<div class="embed-responsive embed-responsive-16by9">
			    	<video id="video" class="embed-responsive-item" >
						<source src="{{ url( '/videochop/45_CHOPARD_PARFUM_BIGARADIA.mp4' ) }}" type="video/mp4">
					</video>
			    </div>
		    </div>
		</div>
	</div>	
</div>

@endsection

@push('scripts')

dlw.base();

dlw.activity({{ $current_activity->id }}, '{{ $next_route }}', false);

@endpush