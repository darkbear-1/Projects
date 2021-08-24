<script type="text/javascript">
  var map;

  function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 54.743120, lng: 55.993332},
          zoom: 15
      });
      setMarkers(map);

        var styles = [
                      {
                          "featureType": "all",
                          "elementType": "all",
                          "stylers": [
                              {
                                  "hue": "#008eff"
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
                                  "saturation": "0"
                              },
                              {
                                  "lightness": "0"
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
                                  "visibility": "simplified"
                              },
                              {
                                  "saturation": "-60"
                              },
                              {
                                  "lightness": "-20"
                              }
                          ]
                      }
                  ];
      map.setOptions({styles: styles});
      // markersArr = [marker1.getPosition(),marker2.getPosition()]
  }

  const beaches = [
    ["Проспект Октября, 6", 54.742900, 55.989402],
    ["ул. 50-летия Октября, 5", 54.735832, 55.960969],
    ["ТК Центральный, павильон #5", 54.736617, 55.957443],
    ["Гостиный двор, бутик 117", 54.724813, 55.944059],
    ["ТРК Иремель. 1 этаж", 54.712725, 55.990770],
    ["ТЦ Шатлык Люкс, цокольный этаж", 54.707796, 55.999631],
    ["ЛСЦ Башкирия, 1 этаж", 54.741047, 56.026709],
    ["ТСК Сипайловский, блок Б, бутик 1095", 54.770077, 56.059353],
    ["ул. Первомайская, 25", 54.818239, 56.074622],
    ["ТЦ Меркурий, бутик 121", 54.822203, 56.083342],
    ["Мкр.Инорс, ТЦ Акварин, 1 этаж", 54.781445, 56.131824],
    ["Мкр. Дема, ул. Ухтомского, 16", 54.706111, 55.829375],
  ];
  var markers = [];
  var infowindows = [];
  function setMarkers(map) {
    // Adds markers to the map.
    // Marker sizes are expressed as a Size of X,Y where the origin of the image
    // (0,0) is located in the top left of the image.
    // Origins, anchor positions and coordinates of the marker increase in the X
    // direction to the right and in the Y direction down.
    const image = {
      url:
        "/wp-content/uploads/images/map-marker.svg"
    };
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
        icon: image,
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
