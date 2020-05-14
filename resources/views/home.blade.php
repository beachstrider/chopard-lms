@extends('layouts.app', ['view_type' => 'home'])
@section('content')
<div id="reel-home" class="vegas deepak">
    <div class="banner-content-wrapper">
        <div class="container">
			<h1 class="banner-title">@lang("WELCOME TO<br>THE CHOPARD PARFUMS<br>TRAINING JOURNEY")</h1>
			<p class="banner-txt">@lang("Enter the universe of Chopard Parfums and its<br> prestigious fragrance collections.<br> Discover the way to excellence. Enjoy the journey!")</p>
			<a href="#how_does_it_work" role="button" class="btn btn-blanco ancla" data-margin-top="60">@lang("How does it work")</a>
			<a href="{{ $next_route }}" role="button" class="btn btn-blanco">@lang("Let's go!")</a>
        </div>
    </div>
</div>
<div id="how_does_it_work" class="intro-home">
	<h2 class="action-title">@lang("How does it work")</h2>
	<p>@lang("”The Chopard Parfums training journey” is an interactive tool to discover and learn about Chopard Parfums and its fabulous fragrance collections and universes. This training journey is organized in different thematic blocks or chapters. In each of them you will find a Reference Material document and several related activities. Please read the “Reference Material” before going forward with the corresponding activities.")</p>
	<p>@lang("CONTENT NAVIGATION:<br> The navigation of the contents and activities can only be done following the numerical order established for chapters and activities. You must complete each of the activities in order to access the followings. This way, each time you enter this training tool you will be directed automatically to the first activity that you have pending to do.")</p>
	<p>@lang("HEADER DROPDOWN MENU:<br> At the header of this online training tool you have a dropdown menu where you can find: The index of chapters and activities and their status (the ones you have already done with their score and the “reset” option and the ones you still have to do).<br>- The library: with a compilation of all the downloadable Reference Materials.<br>- The “change your password” option.")</p>
	<p>@lang("ACTIVITIES: SAVE AND RESET:<br> Every activity you have saved will be marked as done in the Index (on the header drop-down menu) and you will be able to do it again at any time by clicking on the “reset” button.")</p>
	<p>@lang("For any doubt or problem here a contact e-mail: info@chopardparfumstraining.com<br> Discover the way to excellence, enjoy the Journey!")</p>
	<div class="btn-center-container">
		<a href="{{ $next_route }}" role="button" class="btn btn-default">@lang("Let's go!")</a>
	</div>
</div>
@include('partials.pdfmodal')
@endsection
@push('scripts')
window.pdf_src = "{{ route('pdfviewer', ['chapter' => 1, 'activity_id' => 1]) }}";
dlw.base();
dlw.home();
@endpush
