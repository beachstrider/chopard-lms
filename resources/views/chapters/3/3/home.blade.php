@extends('layouts.app', ['view_type' => 'chapter-home'])



@section('content')
<div id="slide-container">
	<div id="reel" class="vegas oud" style="background-image:url({{ asset('assets/chapters/3.3/img/back_01.jpg') }});background-position:50% 50%;  position: relative;">
		<div class="banner-content-wrapper">
			<div class="container">
				<h2 class="banner-chapter-number">CHAPTER 3.3</h2>
				<h1 class="banner-title">@lang('GARDENS OF KINGS')</h1>
				<h3 class="banner-subtitle">@lang('A TRIBUTE TO THE WORLD FINEST<br /> QUALITY OF OUD')</h3>
				<p class="banner-txt">@lang('Chopard continues its journey to sustainable <br> Luxury with an exceptional collection of four sumptuous<br>fragrances inspired by the most noble and mythical<br> ingredient of perfumery, pure Oud Assafi™.')</p>
				<p class="banner-txt">@lang('Oud Assafi™ is ethically and sustainably sourced from<br>the sacred land of Sylhet at the foothills of Himalaya.')</p>
				<a href="#" role="button" class="btn btn-blanco modal-open pdf" data-modal="#modal-pdf">@lang("START THE JOURNEY")</a>
			</div>
		</div>
	</div>

	<div id="reel" class="vegas carossdiv" style="background-image:url({{ asset('assets/chapters/3.3/img/back_02.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper photo">
			<div class="container">
				<h2 class="banner-chapter-number" style="font-size: 18px;">3.3 GARDENS OF KINGS</h2>
				<br />
				<p class="banner-txt" style="
				font-family: AGaramondPro;
				font-style: italic;
				">
				@lang("\"We inherited this Earth and this Nature. We feel deeply <br />responsible for taking care of them for future generations. <br />\"Echoing Chopard's high-jewellery creations, this unique collections <br />celebrates the majestic beauty of nature and the endless emotions it <br />awakens in the hearts of human beings\"")
				</p>
				<p class="banner-txt">@lang("Caroline Scheufele <br />Artistic Director and Co-President of Chopard")</p>
				<div class="caross">
					<img src="{{ asset('assets/chapters/3.3/img/Caroline-Scheufele.jpg') }}" alt="Caroline Scheufele">
				</div>
			</div>
		</div>
		
		<a href="#" role="button" class="btn btn-blanco caross-continue-button" data-modal="#modal-pdf" onclick="tree_tree_slider();">@lang("CONTINUE THE JOURNEY")</a>
	</div>

	<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/img/back_03.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
				<h2 class="banner-chapter-number">3.3 GARDENS OF KINGS</h2>
				<h3 class="banner-subtitle">@lang("CHOPARD CHAMPIONS THE WORLD'S <br />FINEST QUALITY OF OUD AND LEADS <br />THE WAY TOWARDS ITS PRESERVATION")</h3>
				<p class="banner-txt">@lang("At the heart of this project is the commitment from Chopard <br />Parfums to create fragrances with the most precious natural <br />ingredients <strong>ethically and sustainably sourced.</strong>")</p>
				<p class="banner-txt">@lang("Jalali Agarwood, a family plantation in Sylhet, Bangladesh, <br />is the Guardian angel of a secular know-how devoted to <br />responsible arboriculture.")</p>
				<a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="tree_tree_slider();">@lang("CONTINUE THE JOURNEY")</a>
			</div>
		</div>
	</div>

	<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/img/back_04.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
				<h2 class="banner-chapter-number">3.3 GARDENS OF KINGS</h2>
				<h1 class="banner-title">@lang('CREATIVE INSPIRATION')</h1>
				<p class="banner-txt">@lang("Oud represents an inheritance and tradition that, for more <br />than four centuries, has stirred the hearts and hands of <br />family producer <strong>Jalali Agarwood</strong>, an icon of excellence in <br />the <strong>Naturals Together™</strong> program of Swiss fragrance house <br /><strong>Firmenich</strong>, precious partner of Chopard in its <strong>Journey to <br />Sustainable Luxury Perfumery.</strong>")</p>
				<p class="banner-txt">@lang("Interview Dominique Roques <br />Head of Naturals Purchasing - Firmenich")</p>
				<a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="play_vimeo('1');">@lang("ENTER")</a>
			</div>
		</div>
	</div>

	

	<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/img/back_05.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
				<h2 class="banner-chapter-number">3.3 GARDENS OF KINGS</h2>
				<h1 class="banner-title">@lang('CREATIVE INSPIRATION')</h1>
				<p class="banner-txt">@lang("A fragrant resin from a very rare species of Asian tropical <br />tree, Oud Assafi™ is the finest quality extract of Aquilaria <br />Malaccensis.")</p>
				<p class="banner-txt">@lang("A pure olfactory wonder, its incomparable natural properties <br />reveal a unique complexity a perfect balance between <br />smoky, woody and leathery notes, with accents of tobacco, <br />vanilla and honey. <br /><br />Enter in the world of the KING OF WOODS, WOOD OF KINGS.")</p>
				<a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="play_vimeo(2);">@lang("ENTER")</a>
			</div>
		</div>
	</div>
</div>

<div class="splash no-scroll vnum1">
	<div class="container">
		<div class="splash-close" onclick="justclose_splash(1)"><span aria-hidden="true">×</span> @lang('Close')</div>
		<div class="splash-video">
			<div class="embed-responsive embed-responsive-16by9">
				<video id="video1" class="embed-responsive-item" controls>
                    <source src="{{ url('videochop/2_Chopard_Interview2_dominique.mp4') }}" type="video/mp4">
                </video>    
			</div>
		</div>
	</div>
</div>

<div class="splash no-scroll vnum2">
	<div class="container">
		<div class="splash-close" onclick="window.location.href=window.location.origin+'/chapter/3.3/12';"><span aria-hidden="true">×</span> @lang('Close')</div>
		<div class="splash-video">
			<div class="embed-responsive embed-responsive-16by9">
				<video id="video2" class="embed-responsive-item" controls>
                    <source src="{{ url('videochop/3_Chopard_Firmenich.mp4') }}" type="video/mp4">
                </video> 
			</div>
		</div>
	</div>
</div>

@include('partials.pdfmodal')

@endsection



@push('scripts')

window.pdf_src = "{{ route('pdfviewer', ['chapter' => $current_activity->chapter, 'activity_id' => $current_activity->id]) }}";

window.first_activity = "{{ route('chapter', ['chapter' => $current_activity->chapter, 'activity' => $first_activity_chapter]) }}";

console.log("window pdf src: " + window.pdf_src);

dlw.base();

dlw.chapter_home();

$('.modal-content').addClass('justClose');

stop_vimeo(1);
stop_vimeo(2); 


@endpush