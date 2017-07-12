(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

	


		function initialize () {

			var mapOptions = {
				zoom: 16,
				center: new google.maps.LatLng(lat, lang),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: false,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: false,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [/*insert your map styles*/]
			};

			var
		mapObject,
		markers = [],
		markersData = kertas;
			// 'Showplace': [
			// 	{
			// 		location_latitude: -6.296027, 
			// 		location_longitude: 106.6402846,
			// 		map_image_url: 'img/img.png',
			// 		name_point: 'Foresta Print',
			// 		description_point: 'Jl. BSD Raya Utama No.22',
			// 		url_point: '/jasaprint'
			// 	}

			// 	,
			// 	{
			// 		location_latitude: -6.386929, 
			// 		location_longitude: 106.7460836,
			// 		map_image_url: 'img/img.png',
			// 		name_point: 'Bojongsari Print',
			// 		description_point: 'Jl. Raya Bojongsari No.8, Bojongsari Baru, Bojongsari, Kota Depok, Jawa Barat 16516',
			// 		url_point: '/jasaprint'	
			// 	}

			// ],
			
			// "Park": [
			// 	{
			// 		location_latitude: -6.3002359,
			// 		location_longitude: 106.6405518,
			// 		map_image_url: 'img/img.png',
			// 		name_point: 'Prasetiya Print',
			// 		description_point: 'Edu Town Kavling Edu I No. 1, Jalan BSD Raya Barat 1, Serpong, Pagedangan, Tangerang, Banten 15339',
			// 		url_point: '/jasaprint'
			// 	},
			// 	{	
			// 		location_latitude: -6.3890951,
			// 		location_longitude: 106.7453653,
			// 		map_image_url: 'img/img.png',
			// 		name_point: 'Berkah Print',
			// 		description_point: 'Jl. Raya Bojongsari No.49, Bojongsari Baru, Bojongsari, Kota Depok, Jawa Barat 16516',
			// 		url_point: '/jasaprint'
			// 	}

			// ]
		

			var
			marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'img/icon/' + key + '.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
      closeInfoBox();
      getInfoBox(item).open(mapObject, this);
      mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
     }));

					
				});
		};

		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};

		function toggleMarkers (category) {
			hideAllMarkers();
			closeInfoBox();

			if ('undefined' === typeof markers[category])
				return false;
			markers[category].forEach(function (marker) {
				marker.setMap(mapObject);
				marker.setAnimation(google.maps.Animation.DROP);

			});
		};
		
		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info none" id="marker_info">' +
				'<div class="info" id="info">'+
				'<img src="' + item.map_image_url + '" class="logotype" alt=""/>' +
				'<h2>'+ item.name_point +'<span></span></h2>' +
				'<span>'+ item.description_point +'</span>' +
				'<a href="'+ item.url_point + '" class="green_btn">Detail</a>' +
				'<span class="arrow"></span>' +
				'</div>' +
				'</div>',
				disableAutoPan: true,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(40, -210),
				closeBoxMargin: '50px 200px',
				closeBoxURL: '',
				isHidden: false,
				pane: 'floatPane',
				enableEventPropagation: true
			});


		};




