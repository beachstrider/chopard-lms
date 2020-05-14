@extends('layouts.app', ['view_type' => 'chapter-activity'])

@section('content')
<div id="act12" class="banner-chapter" style="background-color:#031e2f;">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">3.3. @lang('GARDENS OF KINGS')</h3>
			<h2 class="action-title">@lang('CREATIVE INSPIRATION')</h2>			
			<div class="action-txt">
				@lang('Select the relevant pictures in the image gallery below with the Palm icon to confirm <br /> or delete them with the trash icon.')<br>
			</div>
		</div>
	</div>
    <div class="action-body">
		<div class="container">
			<div class="action-activity">
				<div class="row gutters-10 imgs">
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/3.3/12/img/01.jpg') }}" alt="Chopard" class="img-responsive">
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
                                <div class="black-mask"></div>
								<p>
									Buddha said: "the scent <br />of burning oud is the <br />scent of Nirvana"							
								</p>
                            </div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img wrong" data-retry="0">
                            <div class="wrong-black-mask"></div>
							<img src="{{ asset('assets/chapters/3.3/12/img/02.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3.3/12/img/03.jpg') }}" alt="Chopard" class="img-responsive">
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
                                <div class="black-mask"></div>
								<p>
									Oud Assafi is more <br />precious than gold. It's the <br />world's most precious <br />essence, produced in very <br />small quantity each year.							
								</p>
                            </div>
						</div>					
					</div>
					<div class="col-xs-4">
						<div class="item-img wrong" data-retry="0">
                            <div class="wrong-black-mask"></div>
							<img src="{{ asset('assets/chapters/3.3/12/img/04.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3.3/12/img/05.jpg') }}" alt="Chopard" class="img-responsive">
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
                                <div class="black-mask"></div>
								<p>
									Syhlet is the cradle of Oud, <br />in the foothills of Himalaya							
								</p>
                            </div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img wrong" data-retry="0">
                            <div class="wrong-black-mask"></div>
							<img src="{{ asset('assets/chapters/3.3/12/img/06.jpg') }}" alt="Chopard" class="img-responsive">
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
                            <div class="wrong-black-mask"></div>
							<img src="{{ asset('assets/chapters/3.3/12/img/07.jpg') }}" alt="Chopard" class="img-responsive">
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
							<img src="{{ asset('assets/chapters/3.3/12/img/08.jpg') }}" alt="Chopard" class="img-responsive">
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
                                <div class="black-mask"></div>
								<p>
									When the Aquilaria tree is <br />sick it defends itself by <br />producing a fragrant resin <br />called AGAR
								</p>
                            </div>											
						</div>
					</div>
					<div class="col-xs-4">
						<div class="item-img correct" data-retry="0">
							<img src="{{ asset('assets/chapters/3.3/12/img/09.jpg') }}" alt="Chopard" class="img-responsive">
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
                                <div class="black-mask"></div>
                                <p>
									Oud is the most ancient <br />scent that ever existed. The <br />earliest reference to Oud <br />come from sylhet region in <br />the Sanskrit texts <br />published 1500 B.C
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