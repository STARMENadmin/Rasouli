
	
    
   <div class="mapWrapper">
	   
	   <p>Rasouli Spine Office<br/>50 N. ROXBURY DR., FIFTH FLOOR BEVERLY HILLS, CA 90210</p>
	   

		
	<div id="map"></div>
    <script>
      function initMap() {
	      
	      
	      var styledMapType = new google.maps.StyledMapType(
[
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#afafaf"
            },
            {
                "visibility": "on"
            }
        ]
    }
],
            {name: 'Styled Map'});
	      
	      
	      
        var uluru = {lat: 34.1015187, lng: -118.33006799999998};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
		  disableDefaultUI: true,
          center: uluru,
           mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
          }
        });
        
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');

        
          var image = '../img/mapPin.png';
		  var beachMarker = new google.maps.Marker({
		    position: {lat: 34.1015187, lng: -118.33006799999998},
		    map: map,
		    icon: image
		  });
		  
		  
		  
		  
		  
      }
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQjK_1RLEGb2XWahdWNivnV9AzYctZzMo&callback=initMap">
    </script>
   	
   </div>