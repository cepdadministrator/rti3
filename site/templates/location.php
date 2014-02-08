<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>
		function initialize() {
		var tbot = new google.maps.LatLng(43.649343,-79.382466);
		var sheraton = new google.maps.LatLng(43.651496,-79.383050);
		var royal = new google.maps.LatLng(43.645546,-79.381735);
		
		
	  var tbotContent = '<div id="content">'+
	      '<div id="siteNotice"></div>'+
	      '<h5 id="firstHeading" class="firstHeading">Toronto Board of Trade</h5>'+
	      '<div id="bodyContent">'+
	      '77 Adelaide St W,<br>Toronto, ON M5X 1C1, Canada'+
	      '</div>'+
	      '</div>';

	  var tbotInfo = new google.maps.InfoWindow({
	      content: tbotContent
	  });
		
		var mapOptions = {
			zoom: 14,
			center: tbot,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById('location-map-canvas'), mapOptions);

		var blueIcon = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|0068B3';
		var orangeIcon = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|DA6427';
		var tealIcon = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|0CBEE1';

		var tbotmarker = new google.maps.Marker({
		 position: tbot,
		 map: map,
		 title: 'Toronto Board of Trade',
		});
		// var sheratonmarker = new google.maps.Marker({
		//  position: sheraton,
		//  map: map,
		//  icon: orangeIcon
		// });
		// var royalmarker = new google.maps.Marker({
		//  position: royal,
		//  map: map,
		//  icon: orangeIcon
		// });
		
		
		google.maps.event.addListener(tbotmarker, 'click', function() {
	    	tbotInfo.open(map,tbotmarker);
	  	});
		}

		google.maps.event.addDomListener(window, 'load', initialize);

	</script>
	<div id="location-map-canvas"></div>
  </article>

</section>

<?php snippet('footer') ?>