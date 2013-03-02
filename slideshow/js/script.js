$(window).load(function(){
	

	$('pre').each(function(key, value){
		if(!$(value).hasClass('structure')){
			$(this).text($(this).html());	
		}
	});
});
