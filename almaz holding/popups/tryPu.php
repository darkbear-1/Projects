<div class="try-pu">
  <div class="try-pu__wrap">
    <div class="try-pu__column">
      <div id="try-pu__map"></div>
    </div>
    <div class="try-pu__column">
      <div class="try-pu__title">Выберите удобную дату, <br>время и место примерки</div>
      <form class="try-pu__form" action="#" method="post">
        <label class="try-pu__place" for="">Место примерки</label>
        <div class="try-pu__select-wrap">
          <select class="try-pu__place-select">
            <option place-index="0" value="Проспект Октября, 6">Проспект Октября, 6</option>
            <option place-index="7" value="ул. 50-летия Октября, 5">ул. 50-летия Октября, 5</option>
            <option place-index="8" value="ТК Центральный, павильон #5">ТК Центральный, павильон #5</option>
            <option place-index="6" value="Гостиный двор, бутик 117">Гостиный двор, бутик 117</option>
            <option place-index="9" value="ТРК Иремель. 1 этаж">ТРК Иремель. 1 этаж</option>
            <option place-index="10" value="ТЦ Шатлык Люкс, цокольный этаж">ТЦ Шатлык Люкс, цокольный этаж</option>
            <option place-index="11" value="ТЦ Башкирия, 1 этаж">ЛСЦ Башкирия, 1 этаж</option>
            <option place-index="1" value="ТСК Сипайловский, блок Б, бутик 1095">ТСК Сипайловский, блок Б, бутик 1095</option>
            <option place-index="2" value="ул. Первомайская, 25">ул. Первомайская, 25</option>
            <option place-index="3" value="ТЦ Меркурий, бутик 121">ТЦ Меркурий, бутик 121</option>
            <option place-index="4" value="ТЦ Акварин, 1 этаж">Мкр.Инорс, ТЦ Акварин, 1 этаж</option>
            <option place-index="5" value="Мкр. Дёма, Ухтомского, 16">Мкр. Дема, ул. Ухтомского, 16</option>
          </select>
          <div class="try-pu__select-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none"><path d="M1 1L7.5 8L14 1" stroke="#1084CD"/></svg></div>
        </div>
        <label class="try-pu__time" for="">Время примерки</label>
        <div class="try-pu__select-wrap">
          <select class="try-pu__time-select">
            <option value="Завтра">Завтра</option>
          </select>
          <div class="try-pu__select-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none"><path d="M1 1L7.5 8L14 1" stroke="#1084CD"/></svg></div>
        </div>
        <label class="try-pu__time" for="">Номер телефона</label>
        <input class="try-pu__phone" type="tel" name="phone" value="" placeholder="Введите номер">
        <label class="soglasie" for="soglasie-pu">
          <input id="soglasie-pu" type="checkbox" name="soglasie">
          <span>Даю согласие на обработку персональных данных<br> согласно действующей <a href="/privacy-policy/">Политике конфиденциальности</a></span>
        </label>
        <input class="try-pu__submit" type="submit" name="" value="Отправить">
      </form>
    </div>
    <button type="button" class="try-pu__close"></button>
  </div>
  <div class="try-pu__overlay"></div>
  <script type="text/javascript">
  	var map;

  	function initMap() {
  			map = new google.maps.Map(document.getElementById('try-pu__map'), {
  					center: {lat: 54.743120, lng: 55.989332},
  					zoom: 17
  			});
        setMarkers(map);
  				// var marker1 = new google.maps.Marker({
  				// 		position: {lat: 54.742900, lng: 55.989402},
  				// 		map: map,
  				// 		icon: image,
  				// 		title: 'г. Уфа, проспект Октября, д 6'
  				// });
          //
  				// var contentString = '<div id="content">'+
  				// 'г. Уфа, проспект Октября, д 6'+
  				// '</div>';
          //
  				// var infowindow = new google.maps.InfoWindow({
  				// 		 content: contentString,
  				// 		 maxWidth: 400
  				// });
          //
  				// marker1.addListener('click', function() {
  				// 		 infowindow.open(map, marker1);
  				// });
          //
          // var marker2 = new google.maps.Marker({
  				// 		position: {lat: 54.744900, lng: 55.989402},
  				// 		map: map,
  				// 		icon: image,
  				// 		title: 'ул. Первомайская, 25'
  				// });
          //
          // var contentString2 = '<div id="content">'+
          // 'ул. Первомайская, 25'+
          // '</div>';
          //
  				// var infowindow2 = new google.maps.InfoWindow({
  				// 		 content: contentString,
  				// 		 maxWidth: 400
  				// });
          //
  				// marker2.addListener('click', function() {
  				// 		 infowindow.open(map, marker2);
  				// });

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
jQuery(".try-pu__place-select").change(function(e) {
  map.panTo({ lat: beaches[e.target.selectedIndex][1], lng: beaches[e.target.selectedIndex][2] })

})
  </script>
  <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJIow6YKtyeVqWDKNrsJg-aqEnGFLCqHo&callback=initMap"></script>
</div>
