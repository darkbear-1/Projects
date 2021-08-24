<script type="text/javascript">
  var map;

  function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 54.805036, lng: 56.070091},
          zoom: 15
      });
      setMarkers(map);

        var styles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#865959"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#865959"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": "1"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": "-2"
            },
            {
                "saturation": "73"
            },
            {
                "gamma": "1.00"
            },
            {
                "weight": "1.00"
            },
            {
                "visibility": "on"
            },
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#f8d1d1"
            }
        ]
    },
    {
        "featureType": "landscape.natural.terrain",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#b14040"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#f8d1d1"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#464646"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#9a5959"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#7a4040"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [
            {
                "saturation": "98"
            },
            {
                "lightness": "-9"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#f6c2c2"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "color": "#edb4b4"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#894c4c"
            }
        ]
    }
];
      map.setOptions({styles: styles});
      // markersArr = [marker1.getPosition(),marker2.getPosition()]
  }

  const beaches = [
    ["г. Уфа, Цветочная, 38 А", 54.805036, 56.075591],
    ["г. Уфа, проспект Октября 71 к.1.", 54.767084, 56.013757]
  ];
  var markers = [];
  var infowindows = [];
  function setMarkers(map) {
    // Adds markers to the map.
    // Marker sizes are expressed as a Size of X,Y where the origin of the image
    // (0,0) is located in the top left of the image.
    // Origins, anchor positions and coordinates of the marker increase in the X
    // direction to the right and in the Y direction down.
    // const image = {
    //   url:
    //     "/wp-content/uploads/images/map-marker.svg"
    // };
    // Shapes define the clickable region of the icon. The type defines an HTML
    // <area> element 'poly' which traces out a polygon as a series of X,Y points.
    // The final coordinate closes the poly by connecting to the first coordinate.
    const shape = {
      coords: [1, 1, 1, 20, 18, 20, 18, 1],
      type: "poly",
    };
    for (let i = 0; i < beaches.length; i++) {
      const beach = beaches[i];
      markers[i] = new google.maps.Marker({
        position: { lat: beach[1], lng: beach[2] },
        map,
        // icon: image,
        title: beach[0],
        zIndex: beach[3],
      });
      infowindows[i] = new google.maps.InfoWindow({
         content: '<div id="content">'+beach[0]+'</div>',
         maxWidth: 400
      });
      markers[i].addListener('click', function() {
        infowindows[i].open(map, markers[i]);
        map.setZoom(17)
        map.setCenter({lat: beach[1], lng: beach[2]});
      });
    }
    }
    jQuery(".map__place-select").change(function(e) {
      map.panTo({ lat: beaches[e.target.selectedIndex][1], lng: beaches[e.target.selectedIndex][2] })
    })
</script>
<script defer src="https://maps.googleapis.com/maps/api/js?key=Конфидицеальность&callback=initMap"></script>
