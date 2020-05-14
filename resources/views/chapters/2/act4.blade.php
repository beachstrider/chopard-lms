@extends('layouts.app', ['view_type' => 'chapter-activity'])



@section('content')
<script>

function allowDrop(ev) {
	ev.preventDefault();
}
            
function drag(ev) {
	ev.dataTransfer.setData("Text", ev.target.id);
}
            
function drop(ev) {
	var data = ev.dataTransfer.getData("Text");
	var id = "#"+data;
	
	ev.target.appendChild(document.getElementById(data));
	window.a = ev.target;

	var myStr = $(id).text();
	var character = $.trim(myStr);

	if(data == 'drag1'){
		if(( character == "EXCELLENCE") && (jQuery(ev.target).attr('id') == 'txt_excellence')){
			$(id).css("color", "green");
		}else{
			$(id).css("color", "red");
			var item = $('.activity-concepts-text');
			item.data('retry', item.data('retry') + 1);
		}
	}else if(data == 'drag3'){
		if(( character == "ETHICAL") && (jQuery(ev.target).attr('id') == 'txt_ethical')){
			$(id).css("color", "green");
		}else{
			$(id).css("color", "red");
			var item = $('.activity-concepts-text');
			item.data('retry', item.data('retry') + 1);
		}
	}else if(data == 'drag4'){
		if((character == "HIGHEST QUALITY") &&  (jQuery(ev.target).attr('id') == 'txt_highest_quality')){
			$(id).css("color", "green");
		}else{
			$(id).css("color", "red");
			var item = $('.activity-concepts-text');
			item.data('retry', item.data('retry') + 1);
		}
	}else if(data == 'drag6'){
		if((character == "RESPONSIBLY") &&  (jQuery(ev.target).attr('id') == 'txt_responsibly')){
			$(id).css("color", "green");
		}else{
			$(id).css("color", "red");
			var item = $('.activity-concepts-text');
			item.data('retry', item.data('retry') + 1);
		}
	}else if(data == 'drag5'){
		if((character == "SUSTAINABLE LUXURY") &&  (jQuery(ev.target).attr('id') == 'txt_sustainable_luxury')){
			$(id).css("color", "green");
		}else{
			$(id).css("color", "red");
			var item = $('.activity-concepts-text');
			item.data('retry', item.data('retry') + 1);
		}
	}else if(data == 'drag2'){
		if((character == "NATURE AND POSITIVITY") &&  (jQuery(ev.target).attr('id') == 'txt_nature_and_positivity')){
			$(id).css("color", "green");
		}else{
			$(id).css("color", "red");
			var item = $('.activity-concepts-text');
			item.data('retry', item.data('retry') + 1);
		}
	}
	ev.preventDefault();
}

</script>
<div id="act4" class="banner-chapter background-center" style="background-image:url({{ asset('assets/chapters/2/4/fnd.jpg') }});">
	<div class="action-intro">
		<div class="container">
			<h3 class="action-title-chapter">2. @lang('Universe of Chopard parfums')</h3>
			<h2 class="action-title">@lang('Creative philosophy')</h2>		
			<div class="action-txt">
				@lang('Watch the video and then complete the text about Chopard Parfums<br> creative philosophy filling the gaps with the correct key concept.')
			</div>
		</div>
	</div>
	<div class="action-video">
	    <div class="embed-responsive embed-responsive-16by9">
	    	<video id="video" class="embed-responsive-item" controls>
				<source src="{{ url('videochop/CHP-CHAPTER2-ACT4-COLLECTIONCONCEPT.mp4') }}" type="video/mp4">
			</video>	
	    </div>
    </div>
	<div class="action-body">
		<div class="container">
			<div class="action-activity">
				<div class="action-activity-intro">
					<h3 class="action-title">Chopard Parfums is the expression of<br> the world of chopard jeweller and watchmaker<br> within perfumery</h3>
				</div>
				<div class="key-concepts" style="display: none;">
					<strong>KEY CONCEPTS:</strong> [EXCELLENCE] [NATURE AND POSITIVITY] [ETHICAL] [HIGHEST QUALITY] [SUSTAINABLE LUXURY] [RESPONSIBLY]
				</div>
				<div class="key-concepts" >
					<strong>KEY CONCEPTS:</strong> <span>[ </span><span id="drag1" draggable="true" ondragstart="drag(event)" style="cursor: pointer;"> EXCELLENCE </span>] <span ondrop="drop(event)" ondragover="allowDrop(event)">[ </span><span id="drag2" draggable="true" ondragstart="drag(event)" style="cursor: pointer;">NATURE AND POSITIVITY </span>] <span ondrop="drop(event)" ondragover="allowDrop(event)">[ </span><span id="drag3" draggable="true" ondragstart="drag(event)" style="cursor: pointer;">ETHICAL</span>] <span ondrop="drop(event)" ondragover="allowDrop(event)">[ </span><span id="drag4" draggable="true" ondragstart="drag(event)" style="cursor: pointer;">HIGHEST QUALITY</span>] <span ondrop="drop(event)" ondragover="allowDrop(event)">[ </span><span id="drag5" draggable="true" ondragstart="drag(event)" style="cursor: pointer;">SUSTAINABLE LUXURY</span>] <span ondrop="drop(event)" ondragover="allowDrop(event)">[ </span><span id="drag6" draggable="true" ondragstart="drag(event)" style="cursor: pointer;">RESPONSIBLY</span>]
				</div>
				<div class="activity-concepts-text" data-retry="0">
					A forward-thinking philosophy, unique in the fragrance market, inspired by Chopard's totally new idea of luxury: 
					a unique alliance of beauty, [<div id="txt_excellence" class="dragfield" ondrop="drop(event)" ondragover="allowDrop(event)"></div>],
					pleasure and [<div id="txt_ethical" class="dragfield" ondrop="drop(event)" ondragover="allowDrop(event)"></div>] values.<br>
					Created by world-class perfumers and crafted from the [<div id="txt_highest_quality" class="dragfield" ondrop="drop(event)" ondragover="allowDrop(event)"></div>]
					ingredients and the most treasured naturals, [<div id="txt_responsibly" ondrop="drop(event)" ondragover="allowDrop(event)" class="dragfield"></div>]
					sourced from across the world, Chopard fragrances join the brand's journey towards [<div id="txt_sustainable_luxury" class="dragfield" ondrop="drop(event)" ondragover="allowDrop(event)"></div>].
					They aspire to offer memorable perfume experiences which are mindful of our planet and people, protecting the best that nature 
					can offer. "Chopard Parfums' olfactive and social philosophy are united. The brand aims to follow the highest standards and 
					champions excellence, individuality, [<div id="txt_nature_and_positivity" ondrop="drop(event)" class="dragfield" ondragover="allowDrop(event)"></div>] - the core values at the very heart of its fragrance universe.
				</div>
				<div class="action-close">
					<button id="btn-check" type="button" class="btn btn-default">@lang('Check')</button>
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