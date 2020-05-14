@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act5" class="banner-chapter" style="background-color:#031e2f;">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">3. @lang('Haute parfumerie collection Chopard')</h3>
			<h2 class="action-title">@lang('Values and codes')</h2>			
			<div class="action-txt">
				@lang('Edit the image gallery below to create the Chopard Collection values and codes moodboard')<br>
				  {{ trans("use the") }} 
					<span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span>
				 {{ trans("to delete the wrong pictures and the") }}  
				 <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span>
				 {{ trans("to confirm the correct ones") }} 
			</div>
		</div>
	</div>

	<div class="action-body">
		<div class="container">
			<div class="action-activity">
				<div class="row gutters-10 imgs">
					<div class="col-xs-4">
						<div class="item-img correct">
							<img src="{{ asset('assets/chapters/3/5/img/01.jpg') }}" alt="Chopard" class="img-responsive">
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
						<div class="item-img wrong">
							<img src="{{ asset('assets/chapters/3/5/img/02.jpg') }}" alt="Chopard" class="img-responsive">
							<div class="item-img-hover">
								<ul class="item-img-btn-lista">
									<li><button type="button" class="btn btn-action-palm">Select</button></li>
									<li><button type="button" class="btn btn-action-delete">Delete</button></li>
								</ul>								
							</div>
							<div class="item-img-tryagain">
								<button type="button" class="btn btn-blanco">TRY AGAIN</button>
							</div>
							<div class="item-img-msg">
								<p>
									<span class="titulo">BLUE AND GOLD</span>
									Colours of the brand.<br>
									Deep blue, as the colour<br>
									of timeless elegance,<br>
									wealth, majesty and<br> 
									mystery. Gold, as tribute<br> 
									to the jeweller watchmaker<br> 
									gold refined craftmanship.								
								</p>
							</div>														
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/3/5/img/03.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3/5/img/04.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3/5/img/05.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3/5/img/06.jpg') }}" alt="Chopard" class="img-responsive">
							<div class="item-img-hover">
								<ul class="item-img-btn-lista">
									<li><button type="button" class="btn btn-action-palm">Select</button></li>
									<li><button type="button" class="btn btn-action-delete">Delete</button></li>
								</ul>								
							</div>
							<div class="item-img-tryagain">
								<button type="button" class="btn btn-blanco">TRY AGAIN</button>
							</div>
							<div class="item-img-msg">
								<p>
									<span class="titulo">THE CHOPARD PALM</span>
									A signature of the brand<br>
									commitment in terms of ethics.<br> 
									Emblematic of the<br> 
									green Chopard engagement.<br> 
									The passionate link with<br>
									the glamour and the cinema.
								</p>
							</div>														
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img wrong" data-retry="0">
							<img src="{{ asset('assets/chapters/3/5/img/07.jpg') }}" alt="Chopard" class="img-responsive">
							<div class="item-img-hover">
								<ul class="item-img-btn-lista">
									<li><button type="button" class="btn btn-action-palm">Select</button></li>
									<li><button type="button" class="btn btn-action-delete">Delete</button></li>
								</ul>								
							</div>
							<div class="item-img-tryagain">
								<button type="button" class="btn btn-blanco">TRY AGAIN</button>
							</div>
							<div class="item-img-msg">
								<p>
									<span class="titulo">THE VALUES</span>
									Glamorous Green<br>
									High perfumery savoir-faire<br>
									Naturals<br>
									Ethics and aesthetics
								</p>
							</div>														
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img wrong" data-retry="0">
							<img src="{{ asset('assets/chapters/3/5/img/12.jpg') }}" alt="Chopard" class="img-responsive">
							<div class="item-img-hover">
								<ul class="item-img-btn-lista">
									<li><button type="button" class="btn btn-action-palm">Select</button></li>
									<li><button type="button" class="btn btn-action-delete">Delete</button></li>
								</ul>								
							</div>
							<div class="item-img-tryagain">
								<button type="button" class="btn btn-blanco">TRY AGAIN</button>
							</div>
							<div class="item-img-msg">
								<p>
									<span class="titulo">THE DIAMOND SHAPE</span>
									An iconic brand signature,<br> 
									also present on<br> 
									the Palm d'Or trophy of the<br> 
									Cannes Film Festival.<br>
								</p>
							</div>														
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/3/5/img/09.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3/5/img/10.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3/5/img/11.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3/5/img/08.jpg') }}" alt="Chopard" class="img-responsive">
							<div class="item-img-hover">
								<ul class="item-img-btn-lista">
									<li><button type="button" class="btn btn-action-palm">Select</button></li>
									<li><button type="button" class="btn btn-action-delete">Delete</button></li>
								</ul>								
							</div>
							<div class="item-img-tryagain">
								<button type="button" class="btn btn-blanco">TRY AGAIN</button>
							</div>
							<div class="item-img-msg">
								<p>
									<span class="titulo">GREEN CARPET</span>
									To express the encounter<br> 
									of glamour and<br>
									green consciousness.
								</p>
							</div>														
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