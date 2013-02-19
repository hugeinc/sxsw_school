$(window).load(function(){
	

	$('pre').each(function(key, value){
		$(this).text($(this).html());
	});
});
