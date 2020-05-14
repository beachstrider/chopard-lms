@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act6" class="banner-chapter" style="background-color:#09132f;">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">3.1. @lang('The gardens of the tropics')</h3>
			<h2 class="action-title">@lang('Creative inspiration')</h2>		
			<div class="action-txt">
				@lang("Select the correct titles and pictures to complete the information<br> about The Gardens of the Tropics' creative inspiration")
			</div>
		</div>
	</div>

	<div class="action-body">
		<div class="container">
			<div class="action-activity">
				<div class="action-activity-intro">
					"The Gardens of the Tropics" pays tribute to the most<br> noble natural ingredients from the Firmenich Naturals Together&trade; program<br> for responsible natural ingredient sourcing, composing four<br> unique fragrances created by this two world-class master perfumers:
				</div>
				<div class="row perfumistas">
					<div class="col-xs-6">
						<div id="p1" class="item-perfumista">
							<div class="item-txt-titulo" data-splash="#nombres-p1"></div>
							<figure class="item-perfumista-figure">
								<button type="button" class="btn btn-action-gallery" data-splash="#galeria-p1">Gallery</button>
								<img src="{{ asset('assets/chapters/3.1/6/perfumista1.jpg') }}" alt="Alberto Morillas" class="img-responsive">
							</figure>
							<div class="item-perfumista-desc">
								"The extraordinary Chopard universe drew 
								me into the enchanted world of natural gems. Like perfumers, jewelers are looking for 
								the most precious elements that nature offers.
								They trace the best quality ingredients 
								to responsible sources that bring to life the 
								creation of their imagination. I mirrored the way 
								a jewelry craftsman selects his stones, 
								observing them carefully before cutting them 
								to reveal their most dazzling light"
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div id="p2" class="item-perfumista">
							<div class="item-txt-titulo" data-splash="#nombres-p2"></div>
							<figure class="item-perfumista-figure">
								<button type="button" class="btn btn-action-gallery" data-splash="#galeria-p2">Gallery</button>
								<img src="{{ asset('assets/chapters/3.1/6/perfumista2.jpg') }}" alt="Nathalie Lorson" class="img-responsive">
							</figure>
							<div class="item-perfumista-desc">
								"Extraordinary timepieces from Chopard high 
								jewelry collections inspired me to use only  
								the most exquisite ingredients, emblematic 
								of high perfumery values. Responsibly sourced 
								vetiver from Haïti, vanilla from Madagascar 
								and cardamom from Guatemala come together 
								in my creations bringing both aesthetics 
								and ethics, a testament to Chopard’s 
								engagement in excellence and passion. 
								Chopard Haute Collection transcends treasures 
								that nature offers in meaningful luxury"
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
				He is the very first perfumer in history to receive the Fragrance<br>
				Foundation’s esteemed Lifetime Achievement Award. After decades<br>
				of unwavering passion for the craft of perfumery, his ideas continue<br> 
				to stand out. His extraordinary journey is alive in his intricately designed,<br> 
				legendary body of creations. His life-long partnership with research<br>
				and development chemists and encyclopedic knowledge of<br>
				perfume history allows him to fuse innovative natural techniques.
			</div>
			<ul class="splash-nombre-lista" data-retry="0">
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-result="ko">Alberto Firmenich</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-result="ko">Karl Scheufele</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p1" data-value="Alberto Morillas" data-result="ok">Alberto Morillas</a></li>
			</ul>	
		</div>
	</div>
	<div id="nombres-p2" class="splash">
		<div class="container">
			<div class="splash-txt">
				She works for others. For this generous woman, creation is based<br>
				on exchange. It is about expressing and sharing emotions.<br>
				She seeks, tries, associates, builds, stacks, juxtaposes, until it works.<br>
				Prolific Master Perfumer "I create for someone specific with the<br>
				wish that others can take over the result”. Sensibility and perseverance<br>
				are the basis of her work. "I'm a gold digger seeking<br>
				the nugget. There is a lot of gold dust but few nuggets!"
			</div>
			<ul class="splash-nombre-lista" data-retry="0">
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-result="ko">Caroline Scheufele</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-value="Nathalie Lorson" data-result="ok">Nathalie Lorson</a></li>
				<li><a href="#" class="btn item-nombre-btn" data-ref="#p2" data-result="ko">Caroline Firmenich</a></li>
			</ul>	
		</div>
	</div>	
	<div id="galeria-p1" class="splash">
		<div class="container">
			<div class="splash-txt">Select the correct picture clicking on the palm icon</div>
			<div class="row splash-galeria" data-retry="0">
				<div class="col-xs-4">
					<div class="splash-galeria-item">
						<img src="{{ asset('assets/chapters/3.1/6/galerias/p1/01.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="splash-galeria-pie">
							<button type="button" class="btn btn-action-palm" data-ref="#p1" data-result="ok">Select</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="splash-galeria-item">
						<img src="{{ asset('assets/chapters/3.1/6/galerias/p1/02.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/6/galerias/p1/03.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/6/galerias/p2/01.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/6/galerias/p2/02.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/6/galerias/p2/03.jpg') }}" alt="Chopard" class="img-responsive">
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