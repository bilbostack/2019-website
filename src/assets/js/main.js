import $ from 'jquery';
import bootstrap from 'bootstrap-sass';
import 'stacktable.js/stacktable';


let mapStyle = [
  {
    "featureType": "all",
    "stylers": [
      {
        "saturation": 0
      },
      {
        "hue": "#e7ecf0"
      }
    ]
  },
  {
    "featureType": "road",
    "stylers": [
      {
        "saturation": -70
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "stylers": [
      {
        "visibility": "simplified"
      },
      {
        "saturation": -60
      }
    ]
  }
];

let map_element = null;
if(map_element = document.getElementById('map'))
{
  let initMap = function()
  {
    let map = new google.maps.Map(map_element, {
      center: {lat: 43.2674228, lng: -2.9445425 },
      zoom: 15,
      styles: mapStyle,
      disableDefaultUI: true
    });

    let marker_venue = new google.maps.Marker({
      map: map,
      position: new google.maps.LatLng(43.2674228, -2.9445425),
      icon: '/assets/img/marker.png'
    });
  };

  $(document).ready(function() {
    $('#agenda table.table').stacktable();

    if(initMap)
      initMap();
  });

}


