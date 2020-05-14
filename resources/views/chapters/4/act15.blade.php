@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act15" class="banner-chapter">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">4. @lang('Happy chopard collection')</h3>
			<h2 class="action-title">@lang('The values')</h2>			
			<div class="action-txt">
				@lang("Select the concepts that best define the Happy Chopard collection's<br> spirit and values to tag each picture of this moodboard")
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
								<li><a href="#" class="btn item-img-btn" data-value="#CircleOfLife" data-result="ko">Circle of life</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#JoyOfLife" data-result="ok">Joy of life</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#EverydayLife" data-result="ko">Everyday life</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/01.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#HappyCoincidences" data-result="ko">Happy coincidences</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#HappyFew" data-result="ko">Happy few</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#HappyDiamondsSpirit" data-result="ok">Happy diamond's spirit</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/02.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Freedom" data-result="ok">Freedom</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#ButterflyEffect" data-result="ko">Butterfly effect</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Evanescent" data-result="ko">Evanescent</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/03.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#RareIngredients" data-result="ko">Rare Ingredients</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Juicy" data-result="ko">Juicy</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#NaturalIngredients" data-result="ok">Natural Ingredients</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/04.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Red" data-result="ko">Red</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#HappyChicLifestyle" data-result="ok">Happy chic lifestyle</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Yellow" data-result="ko">Yellow</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/05.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#PositiveEmotions" data-result="ok">Positive emotions</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Experience" data-result="ko">Experience</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#PositiveTrend" data-result="ko">Positive trend</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/06.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#FeelGood" data-result="ko">Feel good</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#DoGoodFeelGood" data-result="ok">Do good, feel good</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#DoGood" data-result="ko">Do good</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/07.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Beautiful&Famous" data-result="ko">Beautiful &amp; famous</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Experience" data-result="ko">Classic</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#FeelGoodScents" data-result="ok">Feel good scents</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/08.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Luxury" data-result="ok">Luxury</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Simplicity" data-result="ko">Simplicity</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Riches" data-result="ko">Riches</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/09.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Serious" data-result="ko">Serious</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Delirious" data-result="ko">Delirious</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Joyous" data-result="ok">Joyous</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/10.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Hearts" data-result="ko">Hearts</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Playful&Iconic" data-result="ok">Playful &amp; Iconic</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Fashionable" data-result="ko">Fashionable</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/11.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-tag-solution">
							<div class="tag-ok">#</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img-tag" data-retry="0">
						<div class="item-img-tag-hover">
							<ul class="item-img-tag-lista">
								<li><a href="#" class="btn item-img-btn" data-value="#Unisex" data-result="ko">Unisex</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Male" data-result="ko">Male</a></li>
								<li><a href="#" class="btn item-img-btn" data-value="#Feminine" data-result="ok">Feminine</a></li>
							</ul>
						</div>
						<img src="{{ asset('assets/chapters/4/13/tags/12.jpg') }}" alt="Chopard" class="img-responsive">
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