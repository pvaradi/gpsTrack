
function initMAP(){
	var centerLat;
	var centerLng;
	var mapOfSalons;
	var path = [];
	var marker;
	
	function ajax1() {
	$.ajax({
			url: 'gpsReadAllData.php',
			dataType: 'JSON',	
			success:  function(response_get) {
				console.log(response_get);
				drwaUserRoad(polly, response_get, '#000000');		
				mapOfSalons.setCenter(new google.maps.LatLng(response_get[response_get.length-1].lat, response_get[response_get.length-1].lng));				
				initialize();
			},
		});
	}
	
	function ajax2() {
	$.ajax({
			url: 'gpsReadData.php',
			dataType: 'JSON',	
			success:  function(response_get) {
				console.log(response_get);
				drwaUserRoad(polly, response_get, '#000000');
			},
		});
	}

	$(document).ready(function () {
		onStart();
	});

	function onStart() {
		centerLat = 46.82;
		centerLng = 17.82;
		var mapProp = {
			center: new google.maps.LatLng(centerLat, centerLng),
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		mapOfSalons = new google.maps.Map(document.getElementById("map"), mapProp);
		ajax1();
	}

	var polly  = new google.maps.Polyline({
				strokeColor: '#000000',
				strokeOpacity: 1.0,
				strokeWeight: 3
	});

	var image = 'http://icons.iconarchive.com/icons/icons-land/vista-map-markers/48/Map-Marker-Marker-Outside-Chartreuse-icon.png';
    var marker = new google.maps.Marker({
            map: mapOfSalons,
			icon: image
	});
    	
	

	function drwaUserRoad(poly, data, color) {
		if (poly && poly.setMap) {
			console.log(data);
			
			for (i = 0; i < data.length; ++i) {
				path.push(new google.maps.LatLng(data[i].lat, data[i].lng));
			}
			    // Testing the addMarker function
			marker.setPosition(new google.maps.LatLng(data[data.length-1].lat, data[data.length-1].lng))
			//var markerLocation = new google.maps.LatLng(data[data.length-1].lat, data[data.length-1].lng);
			//addMarker(markerLocation);
			
			poly.setPath(path);
			poly.setMap(mapOfSalons);
		} 
		else {
			poly = new google.maps.Polyline({
				strokeColor: color,
				strokeOpacity: 1.0,
				strokeWeight: 3
			});
			
		}
	}

	function initialize() {
		ajax2();
		setTimeout(initialize, 10000);
	}
	  
}  