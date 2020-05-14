@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act7" class="banner-chapter">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">3.1. @lang('The gardens of the tropics')</h3>
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
					Four exceptional fragrances, each constructed around a<br> 
					natural and noble ingredient of enduring personality, sustainably<br>
					sourced and crafted: the Vetiver from Haïti, the<br> 
					Vanilla from Madagascar and the Cardamom from Guatemala
				</div>
				<div class="fragrances-item">
					<h3>VÉTIVER D'HAÏTI AU THÉ VERT</h3>
					<p>MASTER PERFUMER: ALBERTO MORILLAS</p> 
				</div>
				<div class="fragrances-item">
					<h3>MAGNOLIA AU VÉTIVER D'HAÏTI</h3>
					<p>MASTER PERFUMER: NATHALIE LORSON</p> 
				</div>
				<div class="fragrances-item">
					<h3>VANILLE DE MADAGASCAR</h3>
					<p>MASTER PERFUMER: NATHALIE LORSON</p> 
				</div>
				<div class="fragrances-item">
					<h3>NÉROLI À LA CARDAMOME DU GUATEMALA</h3>
					<p>MASTER PERFUMER: NATHALIE LORSON</p>
				</div>
			</div>
			<div id="act-galeria-1" class="galeria-container uno">
				<a class="galeria-action-btn" data-galeria="#galeria-1">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">VÉTIVER D'HAÏTI AU THÉ VERT MAIN INGREDIENTS</span>
					<span class="galeria-action-subtitle">Cedar wood . Vetiver from Haïti . Green tea NP</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">VÉTIVER D'HAÏTI AU THÉ VERT MAIN INGREDIENTS</span>
							<span class="galeria-action-subtitle">Cedar wood . Vetiver from Haïti . Green tea NP</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/madera2.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4 solucion-video" data-video="#video-galeria-1">
								<img src="{{ asset('assets/chapters/3.1/7/img/vetiver.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/greentea.jpg') }}" alt="Chopard" class="img-responsive">
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div id="act-galeria-2" class="galeria-container dos">
				<a class="galeria-action-btn" data-galeria="#galeria-2">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">MAGNOLIA AU VÉTIVER D'HAÏTI MAIN INGREDIENTS</span>
					<span class="galeria-action-subtitle">Vetiver from Haïti . Magnolia . Sandalwood</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">MAGNOLIA AU VÉTIVER D'HAÏTI MAIN INGREDIENTS</span>
							<span class="galeria-action-subtitle">Vetiver from Haïti . Magnolia . Sandalwood</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/vetiver.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/magnolia.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/sandalwood.jpg') }}" alt="Chopard" class="img-responsive">
							</div>							
						</div>
					</div>
				</div>			
			</div>
			<div id="act-galeria-3" class="galeria-container tres">
				<a class="galeria-action-btn" data-galeria="#galeria-3">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">VANILLE DE MADAGASCAR MAIN INGREDIENTS</span>
					<span class="galeria-action-subtitle">Vanilla madagascar . Orange flower petals . Vetiver from Haïti</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">VANILLE DE MADAGASCAR MAIN INGREDIENTS</span>
							<span class="galeria-action-subtitle">Vanilla madagascar . Orange flower petals . Vetiver from Haïti</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-4 solucion-video" data-video="#video-galeria-3">
								<img src="{{ asset('assets/chapters/3.1/7/img/vanilla2.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/neroli3.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/vetiver.jpg') }}" alt="Chopard" class="img-responsive">
							</div>							
						</div>
					</div>
				</div>			
			</div>
			<div id="act-galeria-4" class="galeria-container cuatro">
				<a class="galeria-action-btn" data-galeria="#galeria-4">
					<span class="btn btn-action-gallery">Gallery</span>
					<span class="galeria-action-title">NÉROLI À LA CARDAMOME DU GUATEMALA MAIN INGREDIENTS</span>
					<span class="galeria-action-subtitle">Neroli bigarade . Orange flower absolute . Cardamom from Guatemala</span>
				</a>
				<div class="container solucion">
					<div class="solucion-wrapper">
						<div class="solucion-bloque-titulo">
							<span class="galeria-action-title">NÉROLI À LA CARDAMOME DU GUATEMALA MAIN INGREDIENTS</span>
							<span class="galeria-action-subtitle">Neroli bigarade . Orange flower absolute . Cardamom from Guatemala</span>
						</div>
						<div class="row gutters-10">
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/neroli.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/neroli2.jpg') }}" alt="Chopard" class="img-responsive">
							</div>
							<div class="col-xs-4">
								<img src="{{ asset('assets/chapters/3.1/7/img/cardamomo.jpg') }}" alt="Chopard" class="img-responsive">
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
					Find the correct pictures for the Vétiver d'Haïti au Thé Vert main ingredients:<br>
					Cedar wood . Vetiver from Haïti . Green tea NP
				</p>
				<p class="galeria-splash-secondintro">
					( use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/3.1/7/img/madera2.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/pimienta.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/cafe.jpg') }}" alt="Chopard" class="img-responsive">
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
					<div class="item-img correct" data-retry="0">
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
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/3.1/7/img/greentea.jpg') }}" alt="Chopard" class="img-responsive">
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
					Find the correct pictures for the Magnolia au Vétiver d'Haïti main ingredients:<br>
					Vetiver from Haïti . Magnolia . Sandalwood
				</p>
				<p class="galeria-splash-secondintro">
					( use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/3.1/7/img/cardamomo.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/absenta.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/magnolia.jpg') }}" alt="Chopard" class="img-responsive">
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
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/3.1/7/img/sandalwood.jpg') }}" alt="Chopard" class="img-responsive">
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
					Find the correct pictures for the Vanille de Madagascar main ingredients:<br>
					Vanilla from Madagascar . Orange flower petals . Vetiver from Haïti 
				</p>
				<p class="galeria-splash-secondintro">
					( use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/3.1/7/img/greentea.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/vanilla2.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/neroli3.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/madera2.jpg') }}" alt="Chopard" class="img-responsive">
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
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item-img wrong" data-retry="0">
						<img src="{{ asset('assets/chapters/3.1/7/img/almendras.jpg') }}" alt="Chopard" class="img-responsive">
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
	<div id="galeria-4" class="galeria-splash" data-oks="3">
		<div class="container">
			<div class="galeria-splash-intro">
				<p class="galeria-splash-firstintro">
					Find the correct pictures for the Nèroli à la Cardamome du Guatemala main ingredients:<br> 
					Neroli bigarade . Orange flower absolute . Cardamom from Guatemala 
				</p>
				<p class="galeria-splash-secondintro">
					( use the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span> to delete<br> and the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm the correct images)
				</p>
			</div>
			<div class="row gutters-10 imgs">
				<div class="col-xs-4">
					<div class="item-img correct" data-retry="0">
						<img src="{{ asset('assets/chapters/3.1/7/img/neroli.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/lavanda.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/cardamomo.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/sandalwood.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/cuero.jpg') }}" alt="Chopard" class="img-responsive">
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
						<img src="{{ asset('assets/chapters/3.1/7/img/neroli2.jpg') }}" alt="Chopard" class="img-responsive">
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
	<div id="video-galeria-1" class="splash no-scroll">
		<div class="container">
			<div class="splash-close"><span aria-hidden="true">×</span> @lang('Close')</div>
			<div class="splash-video">
				<div class="embed-responsive embed-responsive-16by9">
			    	<video id="video1" class="embed-responsive-item" controls>
						<source src="{{ url('videochop/CHP-CHAPTER3-ACT8-VETIVER.mp4') }}" type="video/mp4">
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
			    	<video id="video2" class="embed-responsive-item" controls>
						<source src="{{ url('videochop/CHP-CHAPTER3-ACT8-VANILLA.mp4') }}" type="video/mp4">
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