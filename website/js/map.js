function initialize() {

	var mapOptions = {
			zoom: 15,
			disableDefaultUI: true,
			scrollwheel: false,
			mapMaker: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
	
	var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	var geocoder = new google.maps.Geocoder();
	
	var latlng = geocoder.geocode({
		address: '50 E Cesar Chavez St, Austin, TX'
	}, function (results, status) {

		var myLatLng = results[0].geometry.location;

		map.setCenter(myLatLng);

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title:"Hello World!"
		});

	});
}

initialize();