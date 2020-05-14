@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act1" class="banner-chapter background-center" style="background-image:url({{ asset('assets/chapters/1/1/fnd.jpg') }});">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">1. @lang('Chopard Maison')</h3>
			<h2 class="action-title">@lang('Chopard core values')</h2>			
			<div class="action-txt">
				@lang("Select the correct title for each brand core value description<br> to see the Chopard's journey to sustainable luxury video")
			</div>
		</div>
	</div>

	<div class="action-body">
		<div class="container">
			<div class="row txt-tags gutters-10">
				<div class="col-xs-4">
					<div class="item-txt-tag" data-retry="0">
						<div class="item-txt-titulo"></div>
						<div class="item-txt-info">
							<strong>PASSION FOR EXCELLENCE SINCE 1860</strong><br>
							A quest for excellence is revealed in each field of activity, ranging from 
							R&amp;D to sophisticated design 
							and modern production methods, 
							as well as encompassing customer relations 
							and the brand’s global communication.
						</div>
						<div class="item-txt-tag-hover">
							<ul class="item-txt-tag-lista">
								<li><a href="#" class="btn item-txt-btn" data-value="Fashion" data-result="ko">Fashion</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Value" data-result="ko">Value</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Quality" data-result="ok">Quality</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-txt-tag" data-retry="0">
						<div class="item-txt-titulo" data-default-value="HERITAGE &amp; ...">HERITAGE &amp; ...</div>
						<div class="item-txt-info">
							<strong>THE RESPECT FOR TRADITION</strong><br>
							Chopard has given top priority to 
							training its artisans and involving 
							new generations in the art of 
							crafting fine watch and jewellery creations 
							to perpetuate the watchmaking 
							and jewellery-making professions.
						</div>
						<div class="item-txt-tag-hover">
							<ul class="item-txt-tag-lista">
								<li><a href="#" class="btn item-txt-btn" data-value="Heritage &amp; Industry" data-result="ko">... Industry</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Heritage & Craftmanship" data-result="ok">... Craftmanship</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Ancient Art" data-result="ko">... Ancient Art</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-txt-tag" data-retry="0">
						<div class="item-txt-titulo"></div>
						<div class="item-txt-info">
							<strong>THE PASSION OF A FAMILY</strong><br>
							Each main product line is based on 
							a family member's passion, such as 
							fabulous stones, vintage racing cars, the 
							7th Art world, unique jewellery pieces 
							or the highest levels of precision 
							and finishing details in Haute Horlogerie. 
						</div>
						<div class="item-txt-tag-hover">
							<ul class="item-txt-tag-lista">
								<li><a href="#" class="btn item-txt-btn" data-value="Chopard Family" data-result="ko">Chopard Family</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Scheufele Family" data-result="ok">Scheufele Family</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Firmenich Family" data-result="ko">Firmenich Family</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-txt-tag" data-retry="0">
						<div class="item-txt-titulo"></div>
						<div class="item-txt-info">
							<strong>THE AUDACITY TO BE CREATIVE</strong><br>
							Success is the child of audacity, it requires a fine balance between the determination to promote company growth. Each Chopard creation has its own story, creativity is both encouraged and supported in each field of activity.
						</div>
						<div class="item-txt-tag-hover">
							<ul class="item-txt-tag-lista">
								<li><a href="#" class="btn item-txt-btn" data-value="Audacious Creation" data-result="ok">Audacious Creativity</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Knowledge" data-result="ko">Knowledge</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Wild Imagination" data-result="ko">Wild Imagination</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-txt-tag" data-retry="0">
						<div class="item-txt-titulo"></div>
						<div class="item-txt-info">
							<strong>A DEFINING VALUE OF THE CHOPARD HOUSE</strong><br>
							Independence is the primary value of this House. It explains why production has reached such a high degree of vertical integration. A guarantee for Chopard to maintain a permanent level of quality and innovation.
						</div>
						<div class="item-txt-tag-hover">
							<ul class="item-txt-tag-lista">
								<li><a href="#" class="btn item-txt-btn" data-value="Mille Miglia" data-result="ko">Mille Miglia</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Independence" data-result="ok">Independence</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Cannes Film Festival" data-result="ko">Cannes Film Festival</a></li>
							</ul>
						</div>												
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-txt-tag" data-retry="0">
						<div class="item-txt-titulo"></div>
						<div class="item-txt-info">
							<strong>"THE JOURNEY" TO SUSTAINABLE LUXURY</strong><br>
							Chopard is paving the way towards 
							sustainable luxury through “The Journey”, 
							a multi-year and ambitious program 
							of sustainable change that will set 
							new environmental and social standards 
							for jewellery and watchmaking. 
						</div>
						<div class="item-txt-tag-hover">
							<ul class="item-txt-tag-lista">
								<li><a href="#" class="btn item-txt-btn" data-value="Glamorous Gold" data-result="ko">Glamorous Gold</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Glamorous Blue" data-result="ko">Glamorous Blue</a></li>
								<li><a href="#" class="btn item-txt-btn" data-value="Glamorous Green" data-result="ok">Glamorous Green</a></li>
							</ul>
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
					<video id="video" class="embed-responsive-item" controls>
						<source src="{{ url('videochop/CHP-CHAPTER1-ACT1-VIDEO-THEJOURNEY2.mp4') }}" type="video/mp4">
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