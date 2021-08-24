<script type="text/javascript">
  var map;

  function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 54.72228858762841, lng: 55.98571418503974},
          zoom: 15
      });
      setMarkers(map);
      // markersArr = [marker1.getPosition(),marker2.getPosition()]
  }

  const beaches = [
    ["ул. Губайдулина 8", 54.72228858762841, 55.99671418503974],
    ["ул. Свободы 33", 54.8214178509353, 56.10920605603909]
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
