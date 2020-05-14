@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')

<div id="act2" class="banner-chapter background-center" style="background-image:url({{ asset('assets/chapters/1/2/fnd.jpg') }});">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">1. @lang('Chopard Maison')</h3>
			<h2 class="action-title">@lang('Chopard assets')</h2>			
			<div class="action-txt">
				@lang("Play the video and then edit the image gallery below<br> to create the Chopard's brand assets moodboard")
			</div>
		</div>
	</div>

	<div class="action-video">
	    <div class="embed-responsive embed-responsive-16by9">
			<video id="video" class="embed-responsive-item" controls>
				<source src="{{ url('videochop/CHOPARD_PARFUMS_VIDEO.mp4') }}" type="video/mp4">
			</video>
	    </div>
    </div>

	<div class="action-body">
		<div class="container">
			<div class="action-activity">
				<div class="action-activity-intro">
					<h3 class="action-title">CREATE THE CHOPARD'S BRAND ASSETS MOODBOARD</h3>
					<p class="centrar color-gris">
						Select the relevant pictures in the images gallery below<br>
						with the <span class="subraya"><img class="btn img-action-palm" src="{{ asset('assets/img/palm.png') }}"></span> to confirm them or delete the wrong images with the <span class="subraya"><img class="btn img-action-delete" src="{{ asset('assets/img/bin.png') }}"></span>
					</p>
				</div>

				<div class="row gutters-10 imgs">
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/1/2/img/01.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/02.jpg') }}" alt="Chopard" class="img-responsive">
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
									Haute joaillerie<br>
									<strong>savoir faire</strong><br>
									and a rich inspiring<br>
									<strong>creative universe</strong>
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/1/2/img/03.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/04.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/05.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/06.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/07.jpg') }}" alt="Chopard" class="img-responsive">
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
									The glamour<br>
									of a passionate<br>
									love story<br>
									with the 7th art:<br> 
									<strong>cannes festival</strong>
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/1/2/img/08.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/09.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/10.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/11.jpg') }}" alt="Chopard" class="img-responsive">
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
									Pioneer in<br>
									<strong>sustainable</strong><br>
									developments and<br> 
									<strong>ethical</strong><br>
									behaviours
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/1/2/img/12.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/13.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/14.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/15.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/16.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/17.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/18.jpg') }}" alt="Chopard" class="img-responsive">
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
									<strong>Owner of the</strong><br>
									<strong>diamond territory,</strong><br>
									from 'queen of<br>
									kalahari' to<br>
									'happy diamonds'
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/1/2/img/20.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/21.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/22.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/23.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/24.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/1/2/img/19.jpg') }}" alt="Chopard" class="img-responsive">
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
									Diamonds<br>
									quintessence of light,<br>
									<strong>happiness</strong><br>
									<strong>and femininity</strong>
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