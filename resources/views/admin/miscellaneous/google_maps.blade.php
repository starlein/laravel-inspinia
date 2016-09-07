@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Google Maps</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Miscellaneous</a></li>
			<li class="active"><strong>Google Maps</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
<!-- You need to include this script on any page that has a Google Map.
When using Google Maps on your own site you MUST signup for your own API key at:
https://developers.google.com/maps/documentation/javascript/tutorial#api_key
After your sign up replace the key in the URL below.. -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70"></script>
	<div class="row">
		<div class="col-md-6">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Google Maps Basic example</h5>
				</div>
				<div class="ibox-content">
					<p>
						With google maps <a href="https://developers.google.com/maps/documentation/javascript/reference#MapOptions">API</a> You can easy customize your map.
					</p>
					<div class="google-map" id="map1"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Custom theme 1</h5>
				</div>
				<div class="ibox-content">
					<p>
						This is a custom theme for Google map.
					</p>
					<div class="google-map" id="map2"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Map Type</h5>
				</div>
				<div class="ibox-content">
					<p>
						You can also change a map type.
					</p>
					<div class="google-map" id="map3"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Custom theme 2</h5>
				</div>
				<div class="ibox-content">
					<p>
						This is a custom theme for Google map.
					</p>
					<div class="google-map" id="map4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Street View</h5>
				</div>
				<div class="ibox-content">
					<p>
						You can also initial turn on Street View in Google maps.
					</p>
					<div class="google-map" id="pano" style="height: 500px"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript">
	// When the window has finished loading google map
	google.maps.event.addDomListener(window, 'load', init);
	function init() {
		// Options for Google map
		// More info see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions1 = {
			zoom: 11,
			center: new google.maps.LatLng(40.6700, -73.9400),
			// Style for Google Maps
			styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]
		};
		var mapOptions2 = {
			zoom: 11,
			center: new google.maps.LatLng(40.6700, -73.9400),
			// Style for Google Maps
			styles: [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"saturation":10},{"lightness":30},{"gamma":0.5},{"hue":"#435158"}]}]
		};
		var mapOptions3 = {
			center: new google.maps.LatLng(36.964645, -122.01523),
			zoom: 18,
			mapTypeId: google.maps.MapTypeId.SATELLITE,
			// Style for Google Maps
			styles: [{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#fffffa"}]},{"featureType":"water","stylers":[{"lightness":50}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"lightness":40}]}]
		};
		var mapOptions4 = {
			zoom: 11,
			center: new google.maps.LatLng(40.6700, -73.9400),
			// Style for Google Maps
			styles: [{"stylers":[{"hue":"#18a689"},{"visibility":"on"},{"invert_lightness":true},{"saturation":40},{"lightness":10}]}]
		};
		var fenway = new google.maps.LatLng(42.345573, -71.098326);
		var mapOptions5 = {
			zoom: 14,
			center: fenway,
			// Style for Google Maps
			styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
		};
		var panoramaOptions = {
			position: fenway,
			pov: {
				heading: 10,
				pitch: 10
			}
		};
		var panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'), panoramaOptions);
		// Get all html elements for map
		var mapElement1 = document.getElementById('map1');
		var mapElement2 = document.getElementById('map2');
		var mapElement3 = document.getElementById('map3');
		var mapElement4 = document.getElementById('map4');
		// Create the Google Map using elements
		var map1 = new google.maps.Map(mapElement1, mapOptions1);
		var map2 = new google.maps.Map(mapElement2, mapOptions2);
		var map3 = new google.maps.Map(mapElement3, mapOptions3);
		var map4 = new google.maps.Map(mapElement4, mapOptions4);
	}
</script>
@stop