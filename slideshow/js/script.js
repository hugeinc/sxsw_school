$(window).load(function(){


	$('pre').each(function(key, value){
		if(!$(value).hasClass('structure')){
			$(this).text($(this).html());
		}

	});


	/* MAIN NAVIGATION */

	var titleAll = [];
	var count = 0;
	var menuContainer = $('.menu-container');
	var menu = $('.menu');
	var slide = $('.slide');

	//find all the titles and sections
	$('.slide').each(function(key, value){
		var title = $(this).find('h1:first').text();
		if (!title) {
			title = $(this).find('h4:first').text();
		}
		titleAll.push(title);
	});

	//populate menu
	for (var i=0; i < titleAll.length; i++) {
		var k = i + 1;
		menu.append("<li><a href='/slideshow/#"+k+"'>"+titleAll[i]+"</a></li>");
	}

	//change pages
	menu.on('click', 'a', function(event) {
		window.location.href = $(this).attr('href');
		window.location.reload();
	});

	//show/hide menu
	$(window).keypress(function(e) {
		if(e.keyCode == 109){
			menuContainer.toggle();
		}
		else if (e.keyCode == 98 ) {
			window.location.href = '/slideshow/#1';
			window.location.reload();
		}
		else if (e.keyCode == 101) {
			window.location.href = '/slideshow/#'+titleAll.length;
			window.location.reload();
		}
	});


});
