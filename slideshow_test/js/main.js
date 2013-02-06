$(document).ready(function(){
	
	/**
		set all <pre> tags to work with their respective 
	*/
	$('pre.html').snippet('html', {style: 'whitengrey'});
	$('pre.js').snippet('javascript', {style: 'whitengrey'});
	$('pre.css').snippet('css', {style: 'whitengrey'});
	
	
	$("#carousel").carouFredSel({
		items				: 1,
		auto				: false,
		responsive			: true,
		circular			: false,
		infinite			: false,
		next : {
			key		: 'right'
		},
		prev : {
			key		: 'left'
		},
		scroll : {
			fx				: 'crossfade',
			items			: 1,
			easing			: "linear",
			duration		: 200
		},
		pagination : {
			container 		: $('#nav'),
			anchorBuilder	: function(nr, item){
				return '<li><a href="#'+nr+'">*</a></li>';
			}
		}
	});
	
});

