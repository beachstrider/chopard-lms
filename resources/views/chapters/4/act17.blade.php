@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act17" class="banner-chapter">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">4. @lang('Happy chopard collection')</h3>
			<h2 class="action-title">@lang('Fragrances')</h2>		
			<div class="action-txt">
				@lang('Complete the activity below clicking on the image gallery icon<br> and find the correct main ingredients pictures for each fragrance')
			</div>
		</div>
	</div>
	<div class="action-body">
		<div class="container">
			<div class="action-activity-intro">
				<div class="fragrances-intro">
					Three luxury eaux de parfum signatures, created from the most<br> 
					uplifting natural ingredients, able to radiate happiness and joy of life.<br>
					Surprising accords &amp; combinations, color pairings &amp; contrasts,<br> 
					smell &amp; taste, to capture the Happy Chopard liveliness &amp; emotional energy.
				</div>
				<div class="fragrances-item">
					<h3>LEMON DULCI</h3>
					<p>
						An extraordinarily uplifting "shot" of overflowing zest and leaf energy<br>
						<span class="negro">Olfactive universe: Floral green citrus</span>
					</p>
				</div>
				<div class="fragrances-item">
					<h3>FELICIA ROSES</h3>
					<p>
						Exhilarating light-heartedness and optimism from roses &amp; berries<br>
						<span class="negro">Olfactive universe: Floral rose fruity</span>
					</p>
				</div>
				<div class="fragrances-item">
					<h3>BIGARADIA</h3>
					<p>
						SOOTHING AND ENVELOPING LUMINOUS ENERGY OF ORANGE BLOSSOM <br>
						<span class="negro">OLFACTIVE UNIVERSE: LUMINOUS ORANGE BLOSSOM</span>
					</p>
				</div>
			</div>
				<div id="act-galeria-1" class="galeria-container dee">
				<a class="galeria-action-btn" data-galeria="#galeria-1">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">LEMON DULCI</span>
					<span class="galeria-action-subtitle">Italian lemon Primofiore . Bergamot . Sweet apple . <br>Peppermint from Grasse . Cedar wood</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">LEMON DULCI</span>
							<span class="galeria-action-subtitle">Italian lemon Primofiore . Bergamot . Sweet apple . <br>Peppermint from Grasse . Cedar wood</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/limones.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/bergamot.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/manzanas.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/menta.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/madera.jpg') }}" alt="Chopard">
								</figure>
							</div>																					
						</div>
					</div>
				</div>
			</div>
			<div id="act-galeria-2" class="galeria-container dos">
				<a class="galeria-action-btn" data-galeria="#galeria-2">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">FELICIA ROSES</span>
					<span class="galeria-action-subtitle">Pink grapefruit . Natural raspberry . African geranium . Tonka bean absolute . <br>Rose buds &amp; Damascena rose absolute</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">FELICIA ROSES</span>
							<span class="galeria-action-subtitle">Pink grapefruit . Natural raspberry . African geranium . Tonka bean absolute . <br>Rose buds &amp; Damascena rose absolute</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/pomelos.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/frambuesas.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/magnolia.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/tonka.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/rosas.jpg') }}" alt="Chopard">
								</figure>
							</div>																					
						</div>
					</div>
				</div>			
			</div>		
		<div id="act-galeria-3" class="galeria-container uno">
				<a class="galeria-action-btn" data-galeria="#galeria-3">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">BIGARADIA</span>
					<span class="galeria-action-subtitle">Orange Blossom absolute, Neroli Bigarade Petals, Italian Bergamot Essential Oil. <br>Indonesian Patchouli Heart, Provence Honey</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">BIGARADIA</span>
							<span class="galeria-action-subtitle">Orange Blossom absolute, Neroli Bigarade Petals, Italian Bergamot Essential Oil. <br>Indonesian Patchouli Heart, Provence Honey</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/bigarade.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/bigarade2.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/magnolia2.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/patchouli.jpg') }}" alt="Chopard">
								</figure>
							</div>
							<div class="col-xs-15">
								<figure class="img-solucion">
									<img src="{{ asset('assets/chapters/4/15/img/ape.jpg') }}" alt="Chopard">
								</figure>
							</div>																					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="galeria-1" class="galeria-splash" data-oks="5">
		<div class="container">
			<div class="galeria-splash-intro">
				<p class="galeria-splash-firstintro">
					Find the correct pictures for the Lemon Dulci natural key ingredients:<br>
					Italian lemon Primofiore . Bergamot . Sweet apple . Peppermint from Grasse . Cedar wood
				</p>
				<p class="galeria-splash-secondintro">
					(use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span>  to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/limones.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/vetiver.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>														
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/indian-jasmine.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>							
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>														
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/pimienta.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>														
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/bergamot.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/manzanas.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/menta.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/cafe.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>														
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/madera.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>																																
			</div>
		</div>	
	</div>
	<div id="galeria-2" class="galeria-splash" data-oks="5">
		<div class="container">
			<div class="galeria-splash-intro">
				<p class="galeria-splash-firstintro">
					Find the correct pictures for the Felicia Roses natural key ingredients:<br>
					Pink grapefruit . Natural raspberry . African geranium . <br>
					Tonka bean absolute . Rose buds &amp; Damascena rose absolute<br> 
				</p>
				<p class="galeria-splash-secondintro">
					(use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/magnolia.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/pomelos.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/patchouli.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>							
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>														
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/indian-jasmine.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>														
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/magnolia2.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/rosas.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/tonka.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/frambuesas.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>				
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/vanilla.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>
					</div>
				</div>																																
			</div>
		</div>	
	</div>	
		<div id="galeria-3" class="galeria-splash" data-oks="5">
		<div class="container">
			<div class="galeria-splash-intro">
				<p class="galeria-splash-firstintro deepk">
					Find the correct pictures for the BIGARADIA natural key ingredients:<br>
					Orange Blossom Absolute. Neroli Bigarade Petals. Italian Bergamot Essential Oil.<br>
					Indonesian Patchouli Heart. Provence Honey.<br> 
				</p>
				<p class="galeria-splash-secondintro">
					(use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/bigarade.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/patchouli.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/vetiver.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>							
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>														
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/vanilla.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>														
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/shutter3.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/bigarade2.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/magnolia2.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/ape.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
					</div>
				</div>				
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/4/15/img/shutter4.jpg') }}" alt="Chopard" class="img-responsive">
						<div class="item-img-hover">
							<ul class="item-img-btn-lista">
								<li><button type="button" class="btn btn-action-palm">Select</button></li>
								<li><button type="button" class="btn btn-action-delete">Delete</button></li>
							</ul>								
						</div>
						<div class="item-img-tryagain">
							<button type="button" class="btn btn-blanco">TRY AGAIN</button>
						</div>
						<div class="item-img-msg"></div>
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