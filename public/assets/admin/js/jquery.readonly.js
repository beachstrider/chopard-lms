/**
 * jquery-plugin Readonly
 *
 * Version 2.0.1
 * 
 * http://dev.powelltechs.com/jquery.readonly
 * http://plugins.jquery.com/project/readonly
 * 
 * Known good compatibility with jQuery 1.6.2
 * 
 * This plugin has been completely rewritten to be optimized for jquery 1.6 +.
 * 
 *
 * @todo Finish the documentation for this plugin.
 * @todo Do some half-decent comments in this javascript.
 * @todo Figure out how to do automated javascript UI testing.
 * @todo Write example docs
 *
 *
 * @copyright Copyright (c) 2009 Charlie Powell <powellc@powelltechs.com>
 * @copyright Copyright (c) 2011 Charlie Powell <cpowell@blindacre.com>
 * 
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 * 
 * @license http://www.opensource.org/licenses/mit-license.php
 * @license http://www.gnu.org/licenses/gpl.html
 * 
 * @changelog http://plugins.jquery.com/node/7426/release
 */

(function( $ ){
	var settings, methods, _init, _updateposition;
	
	
	settings = {
		intervaltime: 250, // milliseconds between each "tick".  If your application never moves elements, feel free to set this to really high.
		//keypress: function(e){if(e.keyCode == 9) return true; else return false;},
		overlayClass: 'readonly_overlay',
		title: '',
		zindex: 'auto', // Set this to a number to force a specific z-index.
		formtargets: 'input,select,textarea,button,a', // Any element which can be targetted.
		show: function(overlay){
			overlay.show();
		},
		hide: function(overlay){
			overlay.hide();
		},
		tick: function(overlay){
			// Function that is fired on every "tick" of the window to ensure accurate position.
			return;
		},
		
		_dummy: false
	};
	
	// Methods are all public methods for this object, accessable via calling $('my-element').readonly('methodname');
	// or by the several shortcuts, like $('my-element').readonly(true);
	methods = {
		// Activate the overlay on the given target(s).
		activate: function(target){
			
			return target.each(function(){
				var $target, data;
					
				$target = $(this);
				data = $target.data('readonly');
				if(!data){
					data = _init($target);
				}
				
				// Show the overlay.
				data.options.show(data.overlay);
				//console.log($target.find(data.options.formtargets));
				// Do the necessary actions to ignore the element being hidden.
				$target.find(data.options.formtargets)
					.attr('tabindex', -1)
					.attr('readonly', 'readonly')
					.bind('click.readonly', function(){return false;})
					.bind('focus.readonly', function(){return false;})
					.bind('keydown.readonly', function(){return false;});
				
				// Remember this value.
				data.isenabled = true;
			});
		},
		deactivate: function(target){
			
			return target.each(function(){
				var $target, data;
					
				$target = $(this);
				data = $target.data('readonly');
				if(!data){
					data = _init($target);
				}
				
				// Show the overlay.
				data.options.hide(data.overlay);
				
				// Do the necessary actions to unignore the element from being hidden.
				$target.find(data.options.formtargets)
					.unbind('.readonly')
					.removeAttr('tabindex')
					.removeAttr('readonly');
				
				// Remember this value.
				data.isenabled = false;
			});
		},
		setOpts: function(target, options){
			return target.each(function(){
				_init($(this), options);
			});
		},
		destroy : function(target) {
			return target.each(function(){
				var $target, data;
				
				$target = $(this);
				data = $target.data('readonly');
				if(data){
					if(data.isenabled) methods.deactivate($target);
					data.overlay.remove();
					clearInterval(data.timer);
					$target.removeData('readonly');
				}
			})
		}
	};
	
	// This is the actual instance of the unique object.
	_init = function($target, opts){
		var data, z, _el;
		
		if(opts == undefined) opts = {};
		
		// This is the actual object that will be persistent.
		$target.data('readonly', {
			options: $.extend(opts, settings),
			target: $target,
			overlay: null,
			isenabled: false,
			timer: false,
			overlaydimensions: false,
			originaltabindex: null
		});
		
		data = $target.data('readonly');
		
		// Create the initial overlay and set it up as required.
		data.overlay = $('<div class="' + data.options.overlayClass + '" title="' + data.options.title + '"></div>');
		data.overlay.appendTo('body');
		
		// Assign the z-index appropriately.
		// If auto, it will sift through each parent until it finds an element with a zindex.
		if(data.options.zindex == 'auto'){
			z = false;
			_el = $target;
			do{
				z = _el.css('z-index');
				_el = _el.parent();
			} while(z == 'auto' && !_el.is('body'));
			
			if(z == 'auto') z = 100;
			else z = parseInt(z) + 1; // Increase it by 1 from the parent.
		}
		else{
			z = data.options.zindex;
		}
		data.overlay.css('position', 'absolute').css('z-index', z);
		
		
		// Attach the interval timer to "tick" and keep the overlay in sync with the element.
		data.timer = setInterval(function(){
			// Don't do anything if the overlay is disabled.
			if(!data.isenabled) return;
			
			_updateposition(data);
		}, data.options.intervaltime);
		
		_updateposition(data);
		
		return data;
	};
	
	_updateposition = function(data){
		// Update the dimensions of the overlay.  This function is called every half-second, so it must execute QUICKLY!
		var d, i;
		
		if(!data.overlaydimensions){
			// Defaults
			data.overlaydimensions = {width:0, height:0, left:0, top:0};
		}
		
		d = data.target.offset();
		d.width = data.target.outerWidth();
		d.height = data.target.outerHeight();
		
		// Only set the dimensions on the overlay if it's not already the same.
		for(i in d){
			if(data.overlaydimensions[i] != d[i]){
				data.overlay.css(i, parseInt(d[i]) + 'px');
				data.overlaydimensions[i] = d[i];
			}
		}
		
		data.options.tick(data.overlay);
	};
	
	$.fn.readonly = function( action ) {
		
		// If no status was given, set it to true.
		if (action == undefined) action = true;

		if(action == true){
			return methods.activate(this);
		}
		else if(action == false){
			return methods.deactivate(this);
		}
		else if(typeof action == 'object'){
			return methods.setOpts(this, action);
		}
		else if(action == 'destroy'){
			return methods.destroy(this);
		}
		else {
			$.error( action + ' is an unknown option for readonly.' );
		}
		
		return this;
	};

})(jQuery);
