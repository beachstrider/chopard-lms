@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act10" class="banner-chapter">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">3.2. @lang('The gardens of paradise')</h3>
			<h2 class="action-title">@lang('Fragrances')</h2>		
			<div class="action-txt">
				@lang('Complete the activity below clicking on the image gallery icon<br> and find the correct main ingredients pictures for each fragrance.')
			</div>
		</div>
	</div>
	<div class="action-body">
		<div class="container">
			<div class="action-activity-intro">
				<div class="fragrances-intro">
					Four rich and sumptuous oriental fragrances<br>
					for women and men, crafted from the highest quality<br>
					and most treasured natural ingredients on earth,<br>
					issued from sustainable sources arounde the world.
				</div>
				<div class="fragrances-item">
					<h3>ORANGE MAURESQUE</h3>
					<p>Olfactive universe: Orange blossom-Amber</p> 
				</div>
				<div class="fragrances-item">
					<h3>ROSE SELJUKE</h3>
					<p>Olfactive universe: Rose Oriental Woods</p> 
				</div>
				<div class="fragrances-item">
					<h3>JASMIN MOGHOL</h3>
					<p>Olfactive universe: Jasmine Oriental Woods</p>
				</div>
				<div class="fragrances-item">
					<h3>MIEL D'ARABIE</h3>
					<p>Olfactive universe: Amber Oriental</p>
				</div>
			</div>
			<div id="act-galeria-1" class="galeria-container uno">
				<a class="galeria-action-btn" data-galeria="#galeria-1">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">ORANGE MAURESQUE</span>
					<span class="galeria-action-subtitle">Calabrian bergamot . Orange blossom absolute . Copaiba</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">ORANGE MAURESQUE</span>
							<span class="galeria-action-subtitle">Calabrian bergamot . Orange blossom absolute . Copaiba</span>
						</div> 
						<div class="row gutters-10">
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/bergamota.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/orange-blossom-absolute.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4 solucion-video" data-video="#video-galeria-1">
								<img src="{{ asset('assets/chapters/3.2/10/img/copaiba.jpg') }}" alt="Chopard" class="img-responsive">
							</div>														
						</div>
					</div>
				</div>
			</div>
			<div id="act-galeria-2" class="galeria-container dos">
				<a class="galeria-action-btn" data-galeria="#galeria-2">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">ROSE SELJUKE</span>
					<span class="galeria-action-subtitle">Damascena rose absolute . Patchouli . Vanilla absolute</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">ROSE SELJUKE</span>
							<span class="galeria-action-subtitle">Damascena rose absolute . Patchouli . Vanilla absolute</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/damascena_rose.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4 solucion-video" data-video="#video-galeria-2">
								<img src="{{ asset('assets/chapters/3.2/10/img/patchouli.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/vanilla2.jpg') }}" alt="Chopard" class="img-responsive">
							</div>							
						</div>
					</div>
				</div>			
			</div>
			<div id="act-galeria-3" class="galeria-container tres">
				<a class="galeria-action-btn" data-galeria="#galeria-3">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">JASMIN MOGHOL</span>
					<span class="galeria-action-subtitle">Indian jasmine sambac . Tuberose absolute . Sandalwood </span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">JASMIN MOGHOL</span>
							<span class="galeria-action-subtitle">Indian jasmine sambac . Tuberose absolute . Sandalwood </span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-4 solucion-video" data-video="#video-galeria-3">
								<img src="{{ asset('assets/chapters/3.2/10/img/indian_jasmine.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/tuberose.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/sandalwood2.jpg') }}" alt="Chopard" class="img-responsive">
							</div>							
						</div>
					</div>
				</div>			
			</div>
			<div id="act-galeria-4" class="galeria-container cuatro">
				<a class="galeria-action-btn" data-galeria="#galeria-4">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">MIEL D'ARABIE</span>
					<span class="galeria-action-subtitle">Pink pepper . Provence honey firabsolute . Incense</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">MIEL D'ARABIE</span>
							<span class="galeria-action-subtitle">Pink pepper . Provence honey firabsolute . Incense</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/pink_pepper.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/honey.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.2/10/img/incense.jpg') }}" alt="Chopard" class="img-responsive">
							</div>							
						</div>
					</div>
				</div>			
			</div>								
		</div>
	</div>
	<div id="galeria-1" class="galeria-splash" data-oks="3">
		<div class="container">
			<div class="galeria-splash-intro">
				<p class="galeria-splash-firstintro">
					Find the correct pictures for the Orange Mauresque main natural &amp; sustainable ingredients:<br>
					Calabrian bergamot . Orange blossom absolute . Copaiba
				</p>
				<p class="galeria-splash-secondintro">
					( use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/3.2/10/img/bergamota.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/orange-blossom-absolute.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/pimienta.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/rosas.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/vetiver.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/copaiba.jpg') }}" alt="Chopard" class="img-responsive">
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
	<div id="galeria-2" class="galeria-splash" data-oks="3">
		<div class="container">
			<div class="galeria-splash-intro">
				<p class="galeria-splash-firstintro">
					Find the correct pictures for the Rose Seljuke main natural &amp; sustainable ingredients:<br>
					Damascena rose absolute . Patchouli . Vanilla absolute
				</p>
				<p class="galeria-splash-secondintro">
					( use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/3.2/10/img/cardamomo.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/patchouli.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/magnolia.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/damascena_rose.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/absenta.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/vanilla2.jpg') }}" alt="Chopard" class="img-responsive">
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
	<div id="galeria-3" class="galeria-splash" data-oks="3">
		<div class="container">
			<div class="galeria-splash-intro">
				<p class="galeria-splash-firstintro">
					Find the correct pictures for the Jasmin Moghol main natural &amp; sustainable ingredients:<br> 
					Indian jasmine sambac . Tuberose absolute . Sandalwood
				</p>
				<p class="galeria-splash-secondintro">
					( use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/3.2/10/img/cardamomo.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/tuberose.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/greentea.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/indian_jasmine.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/cafe.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/sandalwood2.jpg') }}" alt="Chopard" class="img-responsive">
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
	<div id="galeria-4" class="galeria-splash" data-oks="3">
		<div class="container">
			<div class="galeria-splash-intro">
				<p class="galeria-splash-firstintro">
					Find the correct pictures for the Miel d'Arabie main natural & sustainable ingredients:<br> 
					Pink pepper . Provence honey firabsolute . Incense
				</p>
				<p class="galeria-splash-secondintro">
					( use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/3.2/10/img/honey.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/madera2.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/incense.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/pink_pepper.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/desconocido.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.2/10/img/vetiver.jpg') }}" alt="Chopard" class="img-responsive">
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
	<div id="video-galeria-1" class="splash no-scroll">
		<div class="container">
			<div class="splash-close"><span aria-hidden="true">×</span> @lang('Close')</div>
			<div class="splash-video">
				<div class="embed-responsive embed-responsive-16by9">
			    	<video id="video1" controls>
						<source src="{{ url('videochop/CHP-GardensOfParadise-Fragrances-Copaiba.mp4') }}" type="video/mp4">
					</video>
			    </div>
		    </div>
		</div>
	</div>
	<div id="video-galeria-2" class="splash no-scroll">
		<div class="container">
			<div class="splash-close"><span aria-hidden="true">×</span> @lang('Close')</div>
			<div class="splash-video">
				<div class="embed-responsive embed-responsive-16by9">
			    	<video id="video2" class="embed-responsive-item" controls>
						<source src="{{ url('videochop/CHP-GardensOfParadise-Fragrances-Patchouli.mp4') }}" type="video/mp4">
					</video>
			    </div>
		    </div>
		</div>
	</div>
	<div id="video-galeria-3" class="splash no-scroll">
		<div class="container">
			<div class="splash-close"><span aria-hidden="true">×</span> @lang('Close')</div>
			<div class="splash-video">
				<div class="embed-responsive embed-responsive-16by9">
					<video id="video3" class="embed-responsive-item" controls>
						<source src="{{ url('videochop/CHP-GardensOfParadise-Fragrances-Jasmine.mp4') }}" type="video/mp4">
					</video>
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